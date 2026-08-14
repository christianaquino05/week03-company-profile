@extends('layouts.app')

@section('title', 'About Us — AURA & HORLOGE')

@section('description', 'Discover the heritage, philosophy, and people behind AURA & HORLOGE.')

@section('content')

{{-- =========================
    ABOUT HERO
========================= --}}
<section class="page-hero">
    <div class="container">
        <span class="section-label">THE HOUSE</span>

        <h1>
            A Legacy of<br>
            Precision & Artistry
        </h1>

        <p class="page-hero-text">
            Discover the heritage, philosophy, and craftsmanship
            behind AURA & HORLOGE.
        </p>
    </div>
</section>


{{-- =========================
    HISTORY
========================= --}}
<section class="section about-history">
    <div class="container about-grid">

        <div>
            <span class="section-label">OUR HISTORY</span>

            <h2>
                Nearly a Century<br>
                of Excellence
            </h2>
        </div>

        <div>
            <p>
                Originally established in Geneva in 1928 as a private
                atelier for elite watch collectors, Aura & Horloge
                expanded to Milan to combine Swiss watchmaking heritage
                with Italian leather design.
            </p>

            <p>
                Over nearly a century, the house has evolved into an
                international hallmark for authentic luxury assets and
                custom craftsmanship.
            </p>
        </div>

    </div>
</section>


{{-- =========================
    MISSION & VISION
========================= --}}
<section class="section about-philosophy">
    <div class="container">

        <div class="section-heading">
            <span class="section-label">OUR PHILOSOPHY</span>

            <h2>
                Craftsmanship With<br>
                Purpose
            </h2>
        </div>

        <div class="philosophy-grid">

            <div class="philosophy-card">
                <span class="card-number">01</span>

                <h3>Mission</h3>

                <p>
                    To preserve traditional artisan craftsmanship while
                    providing global collectors seamless access to rare
                    horological investments and bespoke leather artistry.
                </p>
            </div>

            <div class="philosophy-card">
                <span class="card-number">02</span>

                <h3>Vision</h3>

                <p>
                    To remain the global authority in luxury watch
                    sourcing, high-end leather bag customization,
                    and forensic authentication.
                </p>
            </div>

        </div>

    </div>
</section>


{{-- =========================
    CORE VALUES
========================= --}}
<section class="section values-section">
    <div class="container">

        <span class="section-label">WHAT DEFINES US</span>

        <h2>Our Core Values</h2>

        <div class="values-grid">

            <div class="value-item">
                <span>01</span>
                <h3>Authenticity</h3>
                <p>
                    Uncompromising verification of provenance
                    and craftsmanship.
                </p>
            </div>

            <div class="value-item">
                <span>02</span>
                <h3>Precision</h3>
                <p>
                    Swiss-standard exactness in horology
                    and leather stitching.
                </p>
            </div>

            <div class="value-item">
                <span>03</span>
                <h3>Discretion</h3>
                <p>
                    Absolute confidentiality for private
                    collectors and clients.
                </p>
            </div>

            <div class="value-item">
                <span>04</span>
                <h3>Heritage</h3>
                <p>
                    Honoring centuries-old artisan traditions
                    through every creation and service.
                </p>
            </div>

        </div>

    </div>
</section>


{{-- =========================
    TEAM
========================= --}}
<section class="section team-section">
    <div class="container">

        <div class="section-heading">
            <span class="section-label">THE PEOPLE</span>

            <h2>
                Masters Behind<br>
                The House
            </h2>
        </div>

        <div class="team-grid">

            <article class="team-card">
                <span class="team-role">
                    FOUNDER & MASTER WATCHMAKER
                </span>

                <h3>Henri Laurent</h3>

                <p>
                    30+ years in Geneva Haute Horlogerie,
                    dedicated to the preservation and restoration
                    of exceptional timepieces.
                </p>
            </article>

            <article class="team-card">
                <span class="team-role">
                    HEAD OF LEATHER ATELIER
                </span>

                <h3>Elena Rossi</h3>

                <p>
                    Former senior leather artisan in Florence,
                    specializing in bespoke craftsmanship and
                    exceptional exotic leatherwork.
                </p>
            </article>

            <article class="team-card">
                <span class="team-role">
                    CHIEF FINE ART & ASSET CURATOR
                </span>

                <h3>Marcus Vance</h3>

                <p>
                    Specialist in rare luxury auctions and the
                    private acquisition of extraordinary collectible assets.
                </p>
            </article>

        </div>

    </div>
</section>


{{-- =========================
    CLOSING CTA
========================= --}}
<section class="section about-cta">
    <div class="container">

        <span class="section-label">THE AURA & HORLOGE PROMISE</span>

        <h2>
            Timeless Elegance,<br>
            Uncompromising Craftsmanship.
        </h2>

        <a href="{{ url('/contact') }}" class="btn btn-primary">
            Begin A Private Conversation
        </a>

    </div>
</section>

@endsection