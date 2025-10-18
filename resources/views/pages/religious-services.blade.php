@extends('layouts.app')

@section('title', 'Religiøse tjenester | Det Tyrkiske Trossamfunnet i Drammen og Omegn')

@section('content')
    <section class="page-hero">
        <div class="container">
            <p class="page-eyebrow">Religiøse tjenester</p>
            <h1>Religiøse tjenester</h1>
            <p class="page-lead">
                Utforsk våre omfattende religiøse tjenester som nærer troen og styrker samfunnsbåndene
            </p>
        </div>
    </section>

    <section class="card-grid-section">
        <div class="container card-grid">
            @foreach ($services as $service)
                <article class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-moon"></i>
                    </div>
                    <h2>{{ $service['name'] }}</h2>
                    <p>{{ $service['description'] }}</p>
                </article>
            @endforeach
        </div>
    </section>
@endsection
