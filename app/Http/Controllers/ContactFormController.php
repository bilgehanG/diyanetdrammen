<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ContactFormController extends Controller
{
    /**
     * Handle contact form submissions and dispatch via Resend.
     */
    public function __invoke(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:32'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'min:10'],
            'g-recaptcha-response' => ['required', 'string'],
        ]);

        $recaptchaSecret = config('services.recaptcha.secret_key');
        $minimumScore = (float) config('services.recaptcha.minimum_score', 0.5);

        if (empty($recaptchaSecret)) {
            Log::error('reCAPTCHA configuration missing');

            return back()
                ->withInput()
                ->withErrors(['message' => 'Noe gikk galt. Vennligst prøv igjen senere.']);
        }

        try {
            $captchaResponse = Http::asForm()->post(
                'https://www.google.com/recaptcha/api/siteverify',
                [
                    'secret' => $recaptchaSecret,
                    'response' => $validated['g-recaptcha-response'],
                    'remoteip' => $request->ip(),
                ]
            );
        } catch (\Throwable $exception) {
            Log::error('reCAPTCHA verification error', ['exception' => $exception]);

            return back()
                ->withInput()
                ->withErrors(['message' => 'Noe gikk galt. Vennligst prøv igjen senere.']);
        }

        $captchaPayload = $captchaResponse->json();

        if (! $captchaResponse->successful() || ! Arr::get($captchaPayload, 'success')) {
            Log::warning('reCAPTCHA verification failed', [
                'status' => $captchaResponse->status(),
                'body' => $captchaResponse->body(),
            ]);

            return back()
                ->withInput()
                ->withErrors(['g-recaptcha-response' => 'Vennligst bekreft at du ikke er en robot.']);
        }

        if (Arr::get($captchaPayload, 'action') !== 'contact') {
            Log::warning('reCAPTCHA action mismatch', ['payload' => $captchaPayload]);

            return back()
                ->withInput()
                ->withErrors(['g-recaptcha-response' => 'Vennligst bekreft at du ikke er en robot.']);
        }

        if (Arr::get($captchaPayload, 'score', 0) < $minimumScore) {
            Log::warning('reCAPTCHA score below threshold', [
                'score' => Arr::get($captchaPayload, 'score'),
                'threshold' => $minimumScore,
            ]);

            return back()
                ->withInput()
                ->withErrors(['g-recaptcha-response' => 'Vennligst bekreft at du ikke er en robot.']);
        }

        $data = Arr::except($validated, 'g-recaptcha-response');

        $resendKey = config('services.resend.api_key');
        $toAddress = config('services.resend.to');
        $fromAddress = config('services.resend.from', 'Kontakt Skjema <onboarding@resend.dev>');

        if (empty($resendKey) || empty($toAddress)) {
            return back()
                ->withInput()
                ->withErrors([
                    'message' => 'Noe gikk galt. Vennligst prøv igjen senere.',
                ]);
        }

        $html = view('mail.contact', ['data' => $data])->render();
        $text = view('mail.contact-text', ['data' => $data])->render();

        try {
            $response = Http::withToken($resendKey)
                ->acceptJson()
                ->post('https://api.resend.com/emails', [
                    'from' => $fromAddress,
                    'to' => [$toAddress],
                    'reply_to' => [$data['email']],
                    'subject' => "Ny henvendelse: {$data['subject']}",
                    'html' => $html,
                    'text' => $text,
                ]);

            if (! $response->successful()) {
                Log::error('Resend contact form failed', [
                    'status' => $response->status(),
                    'body' => $response->body(),
                ]);

                return back()
                    ->withInput()
                    ->withErrors(['message' => 'Noe gikk galt. Vennligst prøv igjen senere.']);
            }
        } catch (\Throwable $exception) {
            Log::error('Contact form error', ['exception' => $exception]);

            return back()
                ->withInput()
                ->withErrors(['message' => 'Noe gikk galt. Vennligst prøv igjen senere.']);
        }

        return back()->with('status', 'Takk for din melding! Vi kommer tilbake til deg snart.');
    }
}
