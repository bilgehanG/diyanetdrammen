<!DOCTYPE html>
<html lang="no">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Det Tyrkiske Trossamfunnet i Drammen og Omegn')</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="https://fonts.bunny.net/css?family=manrope:400,500,600,700">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" referrerpolicy="no-referrer">
        <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    </head>
    <body class="antialiased">
        @php
            $organization = config('site.organization', []);
            $contact = config('site.contact', []);
            $socialLinks = config('site.social_links', []);
        @endphp
        <header class="app-header" data-header>
            <div class="container nav-container">
                <a class="nav-brand" href="{{ route('landing') }}">
                    <span class="brand-icon">
                        <img src="{{ asset('favicon.png') }}" alt="Logo">
                    </span>
                    <span class="brand-text">
                        {{ $organization['name'] ?? 'Det Tyrkiske Trossamfunnet' }}
                        @if (! empty($organization['tagline']))
                            <small>{{ $organization['tagline'] }}</small>
                        @endif
                    </span>
                </a>

                <nav class="main-navigation" data-nav aria-label="Primær navigasjon">
                    <a href="{{ route('landing') }}" class="{{ request()->routeIs('landing') ? 'active' : '' }}">Hjem</a>
                    <a href="{{ route('activities') }}" class="{{ request()->routeIs('activities') ? 'active' : '' }}">Aktiviteter</a>
                    <a href="{{ route('religious-services') }}" class="{{ request()->routeIs('religious-services') ? 'active' : '' }}">Religiøse tjenester</a>
                    <a href="{{ route('documents') }}" class="{{ request()->routeIs('documents') ? 'active' : '' }}">Dokumenter</a>
                    <a href="{{ route('management') }}" class="{{ request()->routeIs('management') ? 'active' : '' }}">Styret</a>
                    <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">Om oss</a>
                    <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Kontakt</a>
                </nav>

                <button class="nav-toggle" type="button" data-menu-toggle aria-expanded="false" aria-controls="primary-navigation">
                    <span class="sr-only">Åpne meny</span>
                    <span class="nav-toggle-line"></span>
                    <span class="nav-toggle-line"></span>
                    <span class="nav-toggle-line"></span>
                </button>
            </div>
        </header>

        <main>
            @yield('content')
        </main>

        <footer class="app-footer">
            <div class="container footer-container">
                <div class="footer-brand">
                    <h2>Det Tyrkiske Trossamfunnet i Drammen og Omegn</h2>
                </div>
                <div class="footer-links-block">
                    <h3>Kontakt</h3>
                    <nav>
                        @if (! empty($contact['map']) && ! empty($contact['address']))
                            <a href="{{ $contact['map'] }}" target="_blank" rel="noopener">{{ $contact['address'] }}</a>
                        @elseif (! empty($contact['address']))
                            <span>{{ $contact['address'] }}</span>
                        @endif
                        @if (! empty($contact['phone']))
                            <a href="tel:+47{{ preg_replace('/\D+/', '', $contact['phone']) }}">{{ $contact['phone'] }}</a>
                        @endif
                        @if (! empty($contact['email']))
                            <a href="mailto:{{ $contact['email'] }}">{{ $contact['email'] }}</a>
                        @endif
                    </nav>
                </div>
                <div class="footer-social">
                    <h3>Sosiale Medier</h3>
                    <div class="social-links">
                        @foreach ($socialLinks as $link)
                            <a
                                href="{{ $link['url'] }}"
                                target="_blank"
                                rel="noopener"
                                aria-label="{{ $link['label'] ?? 'Sosial lenke' }}"
                            >
                                @if (! empty($link['icon']))
                                    <i class="{{ $link['icon'] }}" aria-hidden="true"></i>
                                @endif
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>{{ now()->format('Y') }} {{ $organization['name'] ?? 'Det Tyrkiske Trossamfunnet' }}. Alle rettigheter forbeholdt.</p>
            </div>
        </footer>

        <script>
            (function () {
                const toggle = document.querySelector('[data-menu-toggle]');
                const nav = document.querySelector('[data-nav]');

                if (!toggle || !nav) {
                    return;
                }

                const closeMenu = () => {
                    nav.classList.remove('is-open');
                    toggle.setAttribute('aria-expanded', 'false');
                    document.removeEventListener('click', handleOutsideClick);
                };

                toggle.addEventListener('click', () => {
                    const isOpen = nav.classList.toggle('is-open');
                    toggle.setAttribute('aria-expanded', String(isOpen));

                    if (isOpen) {
                        document.addEventListener('click', handleOutsideClick);
                    } else {
                        document.removeEventListener('click', handleOutsideClick);
                    }
                });

                const handleOutsideClick = (event) => {
                    if (! nav.contains(event.target) && ! toggle.contains(event.target)) {
                        closeMenu();
                        document.removeEventListener('click', handleOutsideClick);
                    }
                };

                nav.querySelectorAll('a').forEach((link) => {
                    link.addEventListener('click', closeMenu);
                });
            })();
        </script>
        @yield('scripts')
    </body>
</html>
