@extends('layouts.app')

@section('title', 'Styret | Det Tyrkiske Trossamfunnet i Drammen og Omegn')

@section('content')
    <section class="page-hero">
        <div class="container">
            <p class="page-eyebrow">Styret</p>
            <h1>Styret</h1>
            <p class="page-lead">
                Lær om vår organisasjons historie, misjon og struktur
            </p>
        </div>
    </section>

    <section class="management-page-section">
        <div class="container">
            @foreach ($managementGroups as $group)
                <div class="management-group-card">
                    <h2>{{ $group['title'] }}</h2>
                    <div class="management-grid">
                        @foreach ($group['members'] as $member)
                            @php
                                $phoneDigits = preg_replace('/\D+/', '', $member['phone']);
                            @endphp
                            <article class="management-card">
                                <h3>{{ $member['name'] }}</h3>
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
@endsection
