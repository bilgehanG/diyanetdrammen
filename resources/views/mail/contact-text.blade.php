Navn: {{ $data['name'] }}
E-post: {{ $data['email'] }}
@if(! empty($data['phone']))Telefon: {{ $data['phone'] }}
@endif
Emne: {{ $data['subject'] }}

Melding:
{{ $data['message'] }}

---
Sendt fra diyanetdrammen.no
Tidspunkt: {{ now('Europe/Oslo')->format('d.m.Y H:i') }}
