@extends('layouts.app')

@section('title', 'Services — AURA & HORLOGE')

@section('description', 'Private sourcing, bespoke leather craftsmanship, authentication, restoration, and collection services by AURA & HORLOGE.')

@section('content')

{{-- =========================
    SERVICES HERO
========================= --}}
<section class="page-hero services-hero">
    <div class="container">

        <span class="section-label">OUR EXPERTISE</span>

        <h1>
            Exceptional<br>
            Craftsmanship
        </h1>

        <p class="page-hero-text">
            From rare horological sourcing to bespoke leather artistry,
            every AURA & HORLOGE service is guided by precision,
            discretion, and heritage.
        </p>

    </div>
</section>


{{-- =========================
    SERVICES INTRO
========================= --}}
<section class="section services-intro">
    <div class="container services-intro-grid">

        <div>
            <span class="section-label">THE AURA & HORLOGE EXPERIENCE</span>

            <h2>
                Expertise Reserved<br>
                For Collectors
            </h2>
        </div>

        <div>
            <p>
                Our services are designed for discerning collectors who
                value authenticity, craftsmanship, and absolute discretion.
            </p>

            <p>
                Whether acquiring an exceptional timepiece, commissioning
                a bespoke handbag, or preserving a treasured collection,
                our specialists provide a highly personal experience
                from consultation to completion.
            </p>
        </div>

    </div>
</section>


{{-- =========================
    SIX SERVICES
========================= --}}
<section class="section services-list">
    <div class="container">

        <div class="section-heading">
            <div>
                <span class="section-label">OUR SERVICES</span>

                <h2>
                    A Complete<br>
                    Luxury Atelier
                </h2>
            </div>
        </div>


        <div class="services-grid">

            {{-- SERVICE 01 --}}
            <article class="service-detail">

                <div class="service-detail-top">
                    <span class="service-detail-number">01</span>
                    <span class="service-detail-icon icon-watch"></span>
                </div>

                <h3>Private Watch Brokerage</h3>

                <p>
                    Sourcing off-market, rare vintage, and limited-run
                    high-complication timepieces globally.
                </p>

                <span class="service-detail-link">
                    Discover Service &rarr;
                </span>

            </article>


            {{-- SERVICE 02 --}}
            <article class="service-detail">

                <div class="service-detail-top">
                    <span class="service-detail-number">02</span>
                    <span class="service-detail-icon icon-handbag"></span>
                </div>

                <h3>Bespoke Handbag Tailoring</h3>

                <p>
                    Hand-stitching custom leather goods crafted to
                    individual client specifications in exceptional
                    exotic leathers.
                </p>

                <span class="service-detail-link">
                    Discover Service &rarr;
                </span>

            </article>


            {{-- SERVICE 03 --}}
            <article class="service-detail">

                <div class="service-detail-top">
                    <span class="service-detail-number">03</span>
                    <span class="service-detail-icon icon-auth"></span>
                </div>

                <h3>Forensic Authentication</h3>

                <p>
                    Multi-point physical and microscopic verification
                    for luxury watches and high-end handbags.
                </p>

                <span class="service-detail-link">
                    Discover Service &rarr;
                </span>

            </article>


            {{-- SERVICE 04 --}}
            <article class="service-detail">

                <div class="service-detail-top">
                    <span class="service-detail-number">04</span>
                    <span class="service-detail-icon icon-gear"></span>
                </div>

                <h3>Watch Movement Servicing</h3>

                <p>
                    Precision Swiss-standard movement overhaul,
                    calibration, and historical restoration.
                </p>

                <span class="service-detail-link">
                    Discover Service &rarr;
                </span>

            </article>


            {{-- SERVICE 05 --}}
            <article class="service-detail">

                <div class="service-detail-top">
                    <span class="service-detail-number">05</span>
                    <span class="service-detail-icon icon-restore"></span>
                </div>

                <h3>Handbag Restoration Spa</h3>

                <p>
                    Deep leather reconditioning, hardware re-plating,
                    color touch-up, and structural repair.
                </p>

                <span class="service-detail-link">
                    Discover Service &rarr;
                </span>

            </article>


            {{-- SERVICE 06 --}}
            <article class="service-detail">

                <div class="service-detail-top">
                    <span class="service-detail-number">06</span>
                    <span class="service-detail-icon icon-collection"></span>
                </div>

                <h3>Consignment & Liquidity</h3>

                <p>
                    Discreet high-security vaulting, estate evaluation,
                    and private consignment for high-value collections.
                </p>

                <span class="service-detail-link">
                    Discover Service &rarr;
                </span>

            </article>

        </div>

    </div>
</section>


{{-- =========================
    SERVICE CTA
========================= --}}
<section class="statement services-cta">

    <div class="container">

        <span class="eyebrow">
            PRIVATE CONSULTATION
        </span>

        <h2>
            Your Collection<br>
            Deserves Exceptional Care.
        </h2>

        <p class="statement-text">
            Speak privately with one of our specialists about
            sourcing, craftsmanship, restoration, or collection services.
        </p>

        <a href="{{ url('/contact') }}" class="btn btn-gold">
            Book A Private Consultation
        </a>

    </div>

</section>

@endsection