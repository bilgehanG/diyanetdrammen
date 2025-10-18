@extends('layouts.app')

@section('title', 'Dokumenter | Det Tyrkiske Trossamfunnet i Drammen og Omegn')

@section('content')
    <section class="page-hero">
        <div class="container">
            <p class="page-eyebrow">Dokumenter</p>
            <h1>Dokumenter</h1>
            <p class="page-lead">
                Vår organisasjons vedtekter og regler
            </p>
        </div>
    </section>

    <section class="documents-grid-section">
        <div class="container documents-grid">
            @foreach ($documents as $document)
                <article class="document-card{{ $document['available'] ? '' : ' document-card--unavailable' }}">
                    <h2>{{ $document['title'] }}</h2>
                    <p>{{ $document['description'] }}</p>
                    @if ($document['available'])
                        <a class="document-link" href="{{ asset($document['path']) }}" target="_blank" rel="noopener">
                            Se Dokument
                        </a>
                    @else
                        <p class="document-note">
                            <a href="mailto:{{ $contact['email'] }}">Kontakt Oss</a>
                        </p>
                    @endif
                </article>
            @endforeach
        </div>
    </section>
@endsection
