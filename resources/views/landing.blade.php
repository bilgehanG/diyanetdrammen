@extends('layouts.app')

@section('title', 'Det tyrkiske trossamfunnet i Drammen')

@section('content')
    <section class="hero" id="home">
        <div class="container hero-content">
            <div class="hero-text">
                <div class="eyebrow">{{ $hero['eyebrow'] }}</div>
                <h1>{{ $hero['headline'] }}</h1>
                <p>{{ $hero['description'] }}</p>
                <div class="hero-actions">
                    @foreach ($hero['actions'] as $action)
                        @php
                            $href = $action['is_anchor'] ? $action['href'] : asset($action['href']);
                        @endphp
                        <a
                            class="cta-button {{ $action['style'] === 'filled' ? 'filled' : 'outline' }}"
                            href="{{ $href }}"
                            @if (! $action['is_anchor'])
                                target="_blank" rel="noopener"
                            @endif
                        >
                            {{ $action['label'] }}
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="hero-card community-card">
                <div class="card-body">
                    <h3>Våre verdier</h3>
                    <ul class="value-list">
                        @foreach ($mission['values'] as $value)
                            <li>
                                <span class="value-name">{{ $value['label'] }}</span>
                                <span class="value-description">{{ $value['description'] }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="floating-orb orb-one"></div>
        <div class="floating-orb orb-two"></div>
    </section>

    <section class="mission" id="about">
        <div class="container mission-content">
            <div class="mission-text">
                <div class="eyebrow">Om foreningen</div>
                <h2>{{ $mission['title'] }}</h2>
                <p>{{ $mission['body'] }}</p>
                <p>Vi samarbeider med dedikerte frivillige, religiøse ledere og samarbeidspartnere slik at alle medlemmer og
                    besøkende blir sett, støttet og inkludert.</p>
            </div>
            <div class="mission-highlights">
                <h3>Slik hjelper vi</h3>
                <ul>
                    <li>Sjelesorg, familieoppfølging og hjemmebesøk ved behov.</li>
                    <li>Koran-, arabisk- og norskkurs for barn, ungdom og voksne.</li>
                    <li>Kulturelle og sosiale tiltak som bevarer vår felles arv.</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="activities-section" id="activities">
        <div class="container">
            <div class="section-heading">
                <div>
                    <div class="eyebrow">Fellesskapsliv</div>
                    <h2>Aktiviteter</h2>
                </div>
                <p>Utforsk mangfoldet av aktiviteter som samler fellesskapet.</p>
            </div>
            <div class="activity-list">
                @foreach ($activities as $activity)
                    <article class="activity-entry">
                        <h3>{{ $activity['title'] }}</h3>
                        <p>{{ $activity['description'] }}</p>
                        <ul class="activity-highlights">
                            @foreach ($activity['highlights'] as $highlight)
                                <li>{{ $highlight }}</li>
                            @endforeach
                        </ul>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="services-section" id="services">
        <div class="container">
            <div class="section-heading">
                <div>
                    <div class="eyebrow">Religiøse tjenester</div>
                    <h2>Støtte i alle livsfaser</h2>
                </div>
                <p>Fra gudstjenester til veldedige tiltak tilbyr vi veiledning og programmer for hele fellesskapet.</p>
            </div>
            <div class="service-grid">
                @foreach ($services as $service)
                    <article class="service-item">
                        <h3>{{ $service['name'] }}</h3>
                        <p>{{ $service['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="documents-section" id="documents">
        <div class="container">
            <div class="section-heading">
                <div>
                    <div class="eyebrow">Dokumenter</div>
                    <h2>Skjemaer og ressurser</h2>
                </div>
                <p>Finn dokumentene du trenger for medlemskap og støtteordninger.</p>
            </div>
            <div class="documents-grid">
                @foreach ($documents as $document)
                    <article class="document-item{{ $document['available'] ? '' : ' document-item--unavailable' }}">
                        <h3>{{ $document['title'] }}</h3>
                        <p>{{ $document['description'] }}</p>
                        @if ($document['available'])
                            <a class="document-link" href="{{ asset($document['path']) }}" target="_blank" rel="noopener">
                                Last ned PDF
                            </a>
                        @else
                            <p class="document-note">
                                Kontakt oss på <a href="mailto:{{ $contact['email'] }}">{{ $contact['email'] }}</a> for å få dette skjemaet.
                            </p>
                        @endif
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="management-section" id="management">
        <div class="container">
            <div class="section-heading">
                <div>
                    <div class="eyebrow">Ledelse</div>
                    <h2>Ansvarlige</h2>
                </div>
                <p>Engasjerte frivillige og ansatte koordinerer våre programmer, organisasjon og daglige støtte.</p>
            </div>
            @foreach ($managementGroups as $group)
                <div class="management-group">
                    <h3>{{ $group['title'] }}</h3>
                    <div class="management-grid">
                        @foreach ($group['members'] as $member)
                            @php
                                $phoneDigits = preg_replace('/\D+/', '', $member['phone']);
                            @endphp
                            <article class="management-card">
                                <h4>{{ $member['name'] }}</h4>
                                <p class="management-role">{{ $member['role'] }}</p>
                                <ul class="management-contact">
                                    <li>
                                        <span>Telefon</span>
                                        <a href="tel:+47{{ $phoneDigits }}">+47 {{ $member['phone'] }}</a>
                                    </li>
                                    <li>
                                        <span>E-post</span>
                                        <a href="mailto:{{ $member['email'] }}">{{ $member['email'] }}</a>
                                    </li>
                                </ul>
                            </article>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="container contact-card">
            <div class="contact-info-block">
                <div class="eyebrow">Ta kontakt</div>
                <h2>Kontakt foreningen</h2>
                <p>Vi svarer gjerne på spørsmål om medlemskap, tilbud og arrangementer. Vi tar kontakt så snart som mulig.</p>
                <ul class="contact-details">
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
                    <li>
                        <span>Facebook</span>
                        <a href="{{ $contact['facebook'] }}" target="_blank" rel="noopener">Følg oss på Facebook</a>
                    </li>
                </ul>
                <div class="vipps-banner">
                    <span>Vipps</span>
                    <strong>{{ $contact['vipps'] }}</strong>
                </div>
            </div>
            <form class="contact-form" action="#" method="post">
                @csrf
                <label for="name">Navn</label>
                <input id="name" name="name" type="text" placeholder="Fullt navn" required>

                <label for="email">E-post</label>
                <input id="email" name="email" type="email" placeholder="deg@example.com" required>

                <label for="subject">Emne</label>
                <input id="subject" name="subject" type="text" placeholder="Hvordan kan vi hjelpe?" required>

                <label for="message">Melding</label>
                <textarea id="message" name="message" rows="4" placeholder="Skriv meldingen din..." required></textarea>

                <button type="submit" class="cta-button filled full-width">Send melding</button>
            </form>
        </div>
    </section>
@endsection
