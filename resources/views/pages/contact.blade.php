@extends('layouts.app')

@section('title', 'Kontakt Oss | Det Tyrkiske Trossamfunnet i Drammen og Omegn')

@section('content')
    @php($recaptchaSiteKey = config('services.recaptcha.site_key'))
    <section class="page-hero">
        <div class="container">
            <p class="page-eyebrow">Kontakt Oss</p>
            <h1>Kontakt Oss</h1>
            <p class="page-lead">
                Vi vil gjerne høre fra deg. Send oss en melding så svarer vi så snart som mulig.
            </p>
            <p class="page-lead">Kontakt oss på e-post eller telefon, eller ved å fylle ut skjemaet nedenfor:</p>
        </div>
    </section>

    <section class="contact-section">
        <div class="container contact-layout">
            <div class="contact-info-block">
                <div class="info-card">
                    <h2>Kontakt</h2>
                    <ul>
                        <li>
                            <span>Adresse</span>
                            <a href="{{ $contact['map'] }}" target="_blank" rel="noopener">{{ $contact['address'] }}</a>
                        </li>
                        <li>
                            <span>Telefon</span>
                            <a href="tel:+47{{ preg_replace('/\D+/', '', $contact['phone']) }}">+47 {{ $contact['phone'] }}</a>
                        </li>
                        <li>
                            <span>E-post</span>
                            <a href="mailto:{{ $contact['email'] }}">{{ $contact['email'] }}</a>
                        </li>
                    </ul>
                </div>

                <div class="info-card">
                    <h2>Vipps</h2>
                    <div class="vipps-banner">
                        <span>Vipps</span>
                        <strong>{{ $contact['vipps'] }}</strong>
                    </div>
                </div>

                @if (! empty($socialLinks))
                    <div class="info-card">
                        <h2>Sosiale Medier</h2>
                        <div class="social-links">
                            @foreach ($socialLinks as $social)
                                <a
                                    href="{{ $social['url'] }}"
                                    target="_blank"
                                    rel="noopener"
                                    aria-label="{{ $social['label'] ?? 'Sosial lenke' }}"
                                >
                                    @if (! empty($social['icon']))
                                        <i class="{{ $social['icon'] }}"></i>
                                    @endif
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>

            <div class="contact-form-block">
                @if (session('status'))
                    <div class="alert success">{{ session('status') }}</div>
                @endif

                @if ($errors->any())
                    <div class="alert error">
                        {{ $errors->first('message', 'Noe gikk galt. Vennligst prøv igjen senere.') }}
                    </div>
                @endif

                <form action="{{ route('contact.submit') }}" method="post" class="contact-form">
                    @csrf
                    <div class="form-grid">
                        <div class="form-field">
                            <label for="name">Navn</label>
                            <input id="name" name="name" type="text" placeholder="Ola Nordmann" value="{{ old('name') }}" required>
                            @error('name')
                                <p class="field-error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-field">
                            <label for="email">E-post</label>
                            <input id="email" name="email" type="email" placeholder="ola@eksempel.no" value="{{ old('email') }}" required>
                            @error('email')
                                <p class="field-error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-grid">
                        <div class="form-field">
                            <label for="phone">Telefonnummer (Valgfritt)</label>
                            <input id="phone" name="phone" type="text" placeholder="912 34 567" value="{{ old('phone') }}">
                            <p class="field-helper">Norsk nummer (8 siffer)</p>
                            @error('phone')
                                <p class="field-error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-field">
                            <label for="subject">Emne</label>
                            <input id="subject" name="subject" type="text" placeholder="Hvordan kan vi hjelpe?" value="{{ old('subject') }}" required>
                            @error('subject')
                                <p class="field-error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-field">
                        <label for="message">Melding</label>
                        <textarea id="message" name="message" rows="6" placeholder="Fortell oss mer om din forespørsel..." required>{{ old('message') }}</textarea>
                        @error('message')
                            <p class="field-error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-field">
                        @if ($recaptchaSiteKey)
                            <input type="hidden" name="g-recaptcha-response" id="recaptchaResponse" value="">
                        @else
                            <p class="field-error">reCAPTCHA er ikke konfigurert.</p>
                        @endif
                        @error('g-recaptcha-response')
                            <p class="field-error">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="cta-button filled full-width">
                        Send Melding
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    @if ($recaptchaSiteKey)
        <script src="https://www.google.com/recaptcha/api.js?render={{ $recaptchaSiteKey }}"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const form = document.querySelector('.contact-form');
                const tokenField = document.getElementById('recaptchaResponse');
                if (!form || !tokenField) {
                    return;
                }

                const siteKey = @json($recaptchaSiteKey);

                const refreshToken = function (callback) {
                    grecaptcha.ready(function () {
                        grecaptcha.execute(siteKey, { action: 'contact' })
                            .then(function (token) {
                                tokenField.value = token;

                                if (typeof callback === 'function') {
                                    callback();
                                }
                            })
                            .catch(function () {
                                tokenField.value = '';
                            });
                    });
                };

                refreshToken();
                setInterval(refreshToken, 110000);

                form.addEventListener('submit', function handleSubmit(event) {
                    if (tokenField.value) {
                        return;
                    }

                    event.preventDefault();

                    refreshToken(function () {
                        if (tokenField.value) {
                            form.submit();
                        }
                    });
                });
            });
        </script>
    @endif
@endsection
