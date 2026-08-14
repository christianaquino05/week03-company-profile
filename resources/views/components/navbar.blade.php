<nav class="site-nav">
    <div class="nav-container">

        {{-- BRAND --}}
        <a href="{{ url('/') }}" class="brand">
            <span class="brand-name">AURA & HORLOGE</span>
            <span class="brand-tagline">Fine Horology & Leather Atelier</span>
        </a>

        {{-- NAVIGATION --}}
        <div class="nav-links">
            <a href="{{ url('/') }}"
               class="{{ request()->is('/') ? 'active' : '' }}">
                Home
            </a>

            <a href="{{ url('/about') }}"
               class="{{ request()->is('about') ? 'active' : '' }}">
                About
            </a>

            <a href="{{ url('/services') }}"
               class="{{ request()->is('services') ? 'active' : '' }}">
                Services
            </a>

            <a href="{{ url('/contact') }}"
               class="{{ request()->is('contact') ? 'active' : '' }}">
                Contact
            </a>
        </div>

    </div>
</nav>