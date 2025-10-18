@extends('layouts.app')

@section('title', 'Det Tyrkiske Trossamfunnet i Drammen og Omegn')

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
                            $type = $action['type'] ?? 'anchor';
                            $href = match ($type) {
                                'route' => route($action['route'] ?? $action['href']),
                                'asset' => asset($action['href']),
                                default => $action['href'],
                            };
                            $shouldOpenNewTab = $type === 'asset' && ! str_starts_with($action['href'], '#');
                        @endphp
                        <a
                            class="cta-button {{ $action['style'] === 'filled' ? 'filled' : 'outline' }}"
                            href="{{ $href }}"
                            @if ($shouldOpenNewTab)
                                target="_blank" rel="noopener"
                            @endif
                        >
                            {{ $action['label'] }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="floating-orb orb-one"></div>
        <div class="floating-orb orb-two"></div>
    </section>

    <section class="landing-placeholder">
        <div class="container">
            <p class="placeholder-copy">
                Velg ønsket side i menyen for detaljer om aktiviteter, tjenester og kontaktinformasjon.
            </p>
        </div>
    </section>
@endsection
