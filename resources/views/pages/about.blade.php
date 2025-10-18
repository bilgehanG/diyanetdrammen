@extends('layouts.app')

@section('title', 'Om oss | Det Tyrkiske Trossamfunnet i Drammen og Omegn')

@section('content')
    <section class="page-hero">
        <div class="container">
            <p class="page-eyebrow">Om oss</p>
            <h1>Vår Organisasjon</h1>
            <p class="page-lead">{{ $about['intro'] }}</p>
        </div>
    </section>

    <section class="page-content">
        <div class="container content-columns">
            <article>
                <h2>{{ $about['mission']['title'] }}</h2>
                <p>{{ $about['mission']['body'] }}</p>
            </article>
            <article>
                <h2>{{ $about['history']['title'] }}</h2>
                <p>{{ $about['history']['body'] }}</p>
            </article>
        </div>
    </section>

    <section class="card-grid-section">
        <div class="container card-grid small">
            @foreach ($about['pillars'] as $pillar)
                <article class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <h2>{{ $pillar['title'] }}</h2>
                    <p>{{ $pillar['description'] }}</p>
                </article>
            @endforeach
        </div>
    </section>
@endsection
