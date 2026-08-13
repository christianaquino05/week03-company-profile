@extends('layouts.app')

@section('content')

<section class="hero">
    <div class="hero-content">
        <h1>Welcome to Our Company</h1>

        <p>
            We provide reliable and innovative solutions designed
            to help businesses grow and succeed.
        </p>

        <a href="/services" class="btn">Explore Our Services</a>
    </div>
</section>

<section class="about-preview">
    <h2>Who We Are</h2>

    <p>
        We are committed to delivering quality services and
        creating meaningful solutions for our clients.
    </p>
</section>

<section class="services-preview">
    <h2>What We Offer</h2>

    <div class="service-list">
        <div class="service-card">
            <h3>Web Development</h3>
            <p>Modern and responsive web solutions for businesses.</p>
        </div>

        <div class="service-card">
            <h3>IT Solutions</h3>
            <p>Technology solutions tailored to your business needs.</p>
        </div>

        <div class="service-card">
            <h3>Technical Support</h3>
            <p>Reliable assistance to keep your systems running smoothly.</p>
        </div>
    </div>
</section>

@endsection