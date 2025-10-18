<!DOCTYPE html>
<html lang="no">
    <head>
        <meta charset="utf-8">
        <title>Ny henvendelse</title>
        <style>
            body { font-family: Arial, sans-serif; color: #1f2937; margin: 0; padding: 0; background: #f9fafb; }
            .wrapper { max-width: 640px; margin: 0 auto; padding: 24px; }
            .header { background: linear-gradient(135deg, #1f3c88, #284e9b); color: #fff; padding: 32px; border-radius: 18px 18px 0 0; text-align: center; }
            .content { background: #ffffff; padding: 32px; border-radius: 0 0 18px 18px; box-shadow: 0 12px 34px rgba(15, 23, 42, 0.12); }
            .field { margin-bottom: 20px; border-left: 4px solid #1f3c88; padding-left: 18px; }
            .field.message { border-left-color: #f97316; }
            .label { text-transform: uppercase; font-size: 12px; letter-spacing: 0.08em; font-weight: 700; color: #1f3c88; margin-bottom: 6px; }
            .field.message .label { color: #f97316; }
            .value { font-size: 16px; line-height: 1.6; }
            .meta { margin-top: 32px; padding: 20px; background: #eef2ff; border-radius: 12px; text-align: center; font-size: 14px; color: #1f3c88; }
            .footer { margin-top: 20px; font-size: 13px; color: #6b7280; text-align: center; }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <div class="header">
                <h1>Ny henvendelse</h1>
                <p>Det Tyrkiske Trossamfunnet i Drammen og Omegn</p>
            </div>
            <div class="content">
                <div class="field">
                    <div class="label">Navn</div>
                    <div class="value">{{ $data['name'] }}</div>
                </div>
                <div class="field">
                    <div class="label">E-post</div>
                    <div class="value">{{ $data['email'] }}</div>
                </div>
                @if(! empty($data['phone']))
                    <div class="field">
                        <div class="label">Telefon</div>
                        <div class="value">{{ $data['phone'] }}</div>
                    </div>
                @endif
                <div class="field">
                    <div class="label">Emne</div>
                    <div class="value">{{ $data['subject'] }}</div>
                </div>
                <div class="field message">
                    <div class="label">Melding</div>
                    <div class="value">{!! nl2br(e($data['message'])) !!}</div>
                </div>
                <div class="meta">
                    Sendt fra: diyanetdrammen.no<br>
                    Tidspunkt: {{ now('Europe/Oslo')->format('d.m.Y H:i') }}
                </div>
            </div>
            <div class="footer">
                Denne meldingen ble sendt via kontaktskjemaet.
            </div>
        </div>
    </body>
</html>
