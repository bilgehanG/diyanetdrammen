<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'LuminaSphere')</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="https://fonts.bunny.net/css?family=manrope:400,500,600,700">
        <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    </head>
    <body class="antialiased">
        <div class="noise-overlay"></div>
        <header class="site-header">
            <div class="container header-content">
                <a class="brand" href="{{ url('/') }}">LuminaSphere</a>
                <input id="primary-menu-toggle" class="menu-toggle-input" type="checkbox" aria-hidden="true">
                <label for="primary-menu-toggle" class="menu-toggle" aria-controls="primary-navigation">
                    <span class="menu-line"></span>
                    <span class="menu-line"></span>
                    <span class="menu-line"></span>
                    <span class="sr-only">Toggle navigation</span>
                </label>
                <nav id="primary-navigation" class="nav-links" aria-label="Primary">
                    <a href="#about">About</a>
                    <a href="#features">Features</a>
                    <a href="#showcase">Showcase</a>
                    <a href="#contact">Contact</a>
                    <a href="#contact" class="cta-button nav-cta">Request Demo</a>
                </nav>
            </div>
        </header>

        <main>
            @yield('content')
        </main>

        <footer class="site-footer">
            <div class="container footer-content">
                <p>&copy; {{ date('Y') }} LuminaSphere Studios. Crafted with Laravel.</p>
                <div class="footer-links">
                    <a href="#about">Vision</a>
                    <a href="#features">Capabilities</a>
                    <a href="#showcase">Gallery</a>
                    <a href="#contact">Connect</a>
                </div>
            </div>
        </footer>
    </body>
</html>
