<!DOCTYPE html>
<html lang="no">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Det tyrkiske trossamfunnet i Drammen')</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="https://fonts.bunny.net/css?family=manrope:400,500,600,700">
        <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    </head>
    <body class="antialiased">
        <div class="noise-overlay"></div>
        <header class="site-header">
            <div class="container header-content">
                <a class="brand" href="{{ url('/') }}">Det tyrkiske trossamfunnet</a>
                <input id="primary-menu-toggle" class="menu-toggle-input" type="checkbox" aria-hidden="true">
                <label for="primary-menu-toggle" class="menu-toggle" aria-controls="primary-navigation">
                    <span class="menu-line"></span>
                    <span class="menu-line"></span>
                    <span class="menu-line"></span>
                    <span class="sr-only">Åpne meny</span>
                </label>
                <nav id="primary-navigation" class="nav-links" aria-label="Primary">
                    <a href="#about">Om oss</a>
                    <a href="#activities">Aktiviteter</a>
                    <a href="#services">Tjenester</a>
                    <a href="#documents">Dokumenter</a>
                    <a href="#management">Ledelse</a>
                    <a href="#contact">Kontakt</a>
                    <a href="#contact" class="cta-button nav-cta">Støtt oss</a>
                </nav>
            </div>
        </header>

        <main>
            @yield('content')
        </main>

        <footer class="site-footer">
            <div class="container footer-content">
                <p>&copy; {{ date('Y') }} Det tyrkiske trossamfunnet i Drammen og omegn. Alle rettigheter forbeholdt.</p>
                <div class="footer-links">
                    <a href="#about">Om oss</a>
                    <a href="#activities">Aktiviteter</a>
                    <a href="#services">Tjenester</a>
                    <a href="#documents">Dokumenter</a>
                    <a href="#management">Ledelse</a>
                    <a href="#contact">Kontakt</a>
                </div>
            </div>
        </footer>
    </body>
</html>
