@extends('layouts.app')

@section('title', 'Aktiviteter | Det Tyrkiske Trossamfunnet i Drammen og Omegn')

@section('content')
    <section class="page-hero">
        <div class="container">
            <p class="page-eyebrow">Sosiale Aktiviteter</p>
            <h1>Aktiviteter</h1>
            <p class="page-lead">
                Oppdag vårt mangfoldige spekter av aktiviteter som bringer samfunnet vårt sammen
            </p>
        </div>
    </section>

    <section class="page-content">
        <div class="container">
            @foreach ($activities as $activity)
                <article class="detail-card">
                    <div class="detail-header">
                        <h2>{{ $activity['title'] }}</h2>
                        <p>{{ $activity['description'] }}</p>
                    </div>
                    <ul class="detail-list">
                        @foreach ($activity['highlights'] as $highlight)
                            <li>{{ $highlight }}</li>
                        @endforeach
                    </ul>
                </article>
            @endforeach
        </div>
    </section>
@endsection
