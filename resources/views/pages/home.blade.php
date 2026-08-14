@extends('layouts.app')

@section('content')


    {{-- HERO SECTION --}}
    <section class="hero">
        <div class="hero-content">
            <p class="eyebrow">AURA & HORLOGE</p>

            <h1>Excellence<br>In Motion</h1>

            <p class="hero-subtitle">
                Discover our world-renowned curation of haute horlogerie
                and artisanal handbags.
            </p>

            <div class="hero-actions">
                <a href="{{ url('/services') }}" class="btn btn-gold">
                    Explore Offerings
                </a>

                <a href="{{ url('/contact') }}" class="btn btn-outline">
                    Book Private Viewing
                </a>
            </div>
        </div>

        <div class="hero-image">
            <img
                src="{{ asset('images/hero-watch.png') }}"
                alt="Luxury chronograph watch"
            >
        </div>
    </section>


    {{-- INTRODUCTION --}}
    <section class="intro">
        <div class="section-label">THE HOUSE</div>

        <h2>Where Precision Meets Artistry</h2>

        <p>
            Founded at the intersection of Swiss precision and Italian
            leather artistry, Aura & Horloge is a premier luxury house
            dedicated to curating rare timepieces and handcrafted luxury
            handbags for discerning collectors worldwide.
        </p>
    </section>


    {{-- FEATURED SERVICES --}}
    <section class="offerings">

        <div class="section-heading">
            <div>
                <div class="section-label">OUR EXPERTISE</div>
                <h2>Exceptional Craftsmanship</h2>
            </div>

            <a href="{{ url('/services') }}" class="text-link">
                View All Services &rarr;
            </a>
        </div>


        <div class="service-grid">

            <article class="service-card">
                <div class="service-number">01</div>

                <div class="service-icon icon-watch"></div>

                <h3>Rare Horological Sourcing</h3>

                <p>
                    Access off-market, vintage, and limited-run
                    high-complication timepieces sourced globally.
                </p>
            </article>


            <article class="service-card">
                <div class="service-number">02</div>

                <div class="service-icon icon-handbag"></div>

                <h3>Bespoke Leather Crafting</h3>

                <p>
                    Discover hand-crafted leather goods created to
                    individual specifications using exceptional materials.
                </p>
            </article>


            <article class="service-card">
                <div class="service-number">03</div>

                <div class="service-icon icon-restore"></div>

                <h3>Master Restoration & Spa</h3>

                <p>
                    Preserve the beauty and heritage of treasured
                    watches and handbags through expert restoration.
                </p>
            </article>

        </div>
    </section>


    {{-- CLOSING STATEMENT --}}
    <section class="statement">
        <p class="eyebrow">A LEGACY OF EXCELLENCE</p>

        <h2>
            Timeless Elegance,<br>
            Uncompromising Craftsmanship.
        </h2>

        <a href="{{ url('/about') }}" class="btn btn-gold">
            Discover Our Story
        </a>
    </section>

    {{-- BRAND SIGNATURE --}}
    <section class="brand-signature">

        <div class="brand-signature-inner">

            <img
                src="{{ asset('images/aura-horloge-logo.png') }}"
                alt="AURA & HORLOGE — Fine Horology & Leather Atelier"
                class="brand-signature-logo"
            >

            <span class="brand-signature-label">
                TIMELESS ELEGANCE
            </span>

            <p class="brand-signature-text">
                Exceptional horology and bespoke leather craftsmanship,
                curated for those who value authenticity, precision,
                and heritage.
            </p>

            <div class="brand-signature-line"></div>

        </div>

    </section>

@endsection