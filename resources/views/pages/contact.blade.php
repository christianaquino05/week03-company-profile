@extends('layouts.app')

@section('title', 'Contact — AURA & HORLOGE')

@section('description', 'Begin a private conversation with AURA & HORLOGE.')

@section('content')

    {{-- PAGE HERO --}}
    <section class="page-hero">
        <div class="container">
            <p class="section-label">PRIVATE CONCIERGE</p>

            <h1>
                Begin a Private<br>
                Conversation
            </h1>

            <p class="page-hero-text">
                Whether you are seeking a rare timepiece, commissioning
                a bespoke handbag, or preserving a treasured collection,
                our concierge team is here to assist.
            </p>
        </div>
    </section>


    {{-- CONTACT INFORMATION + FORM --}}
    <section class="contact-section">

        <div class="container contact-grid">

            {{-- CONTACT INFORMATION --}}
            <div class="contact-info">

                <p class="section-label">THE ATELIER</p>

                <h2>
                    A World of<br>
                    Exceptional Luxury.
                </h2>

                <p class="contact-intro">
                    Visit our Milan atelier or contact our private
                    concierge for discreet assistance with your
                    collection.
                </p>


                <div class="contact-details">

                    <div class="contact-detail">
                        <span>ADDRESS</span>

                        <p>
                            Via Montenapoleone 8<br>
                            20121 Milano, Italy
                        </p>
                    </div>


                    <div class="contact-detail">
                        <span>EMAIL</span>

                        <p>
                            <a href="mailto:concierge@aura-horloge.com">
                                concierge@aura-horloge.com
                            </a>
                        </p>
                    </div>


                    <div class="contact-detail">
                        <span>PHONE</span>

                        <p>
                            <a href="tel:+39025550192">
                                +39 02 555 0192
                            </a>
                        </p>
                    </div>


                    <div class="contact-detail">
                        <span>SOCIAL</span>

                        <p>
                            Instagram &nbsp; @aura.horloge
                        </p>

                        <p>
                            LinkedIn &nbsp; aura-horloge
                        </p>

                        <p>
                            Facebook &nbsp; aurahorloge
                        </p>
                    </div>

                </div>

            </div>


            {{-- CONTACT FORM --}}
            <div class="contact-form-wrapper">

                <p class="section-label">PRIVATE INQUIRY</p>

                <h3>
                    How May We Assist?
                </h3>

                <form action="#" method="POST" class="contact-form">

                    @csrf

                    <div class="form-group">
                        <label for="name">Full Name</label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Your full name"
                        >
                    </div>


                    <div class="form-row">

                        <div class="form-group">
                            <label for="email">Email</label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="your@email.com"
                            >
                        </div>


                        <div class="form-group">
                            <label for="phone">Phone</label>

                            <input
                                type="tel"
                                id="phone"
                                name="phone"
                                placeholder="+39"
                            >
                        </div>

                    </div>


                    <div class="form-group">
                        <label for="inquiry">
                            Inquiry Category
                        </label>

                        <select id="inquiry" name="inquiry">

                            <option value="">
                                Select an inquiry
                            </option>

                            <option value="watch-sourcing">
                                Watch Sourcing
                            </option>

                            <option value="handbag-commission">
                                Handbag Commission
                            </option>

                            <option value="restoration">
                                Restoration / Spa
                            </option>

                            <option value="general">
                                General Inquiry
                            </option>

                        </select>
                    </div>


                    <div class="form-group">
                        <label for="message">Message</label>

                        <textarea
                            id="message"
                            name="message"
                            rows="6"
                            placeholder="Tell us how we may assist you..."
                        ></textarea>
                    </div>


                    <button type="submit" class="btn btn-gold">
                        Send Private Inquiry
                    </button>

                </form>

            </div>

        </div>

    </section>

@endsection