<nav class="navbar navbar-expand-md navbar-dark fixed-top glass-nav" style="max-width: 100%;">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" width="150" height="125" class="d-inline-block align-text-top me-2">
                <div>
                    <span style="font-size: 2.5rem; text-transform: uppercase;">PT. Interbenua Logistindo</span><br>
                    <span style="font-size: 1rem; color: #000;">Member of IFF
                    (International Freight Forwarder Fellowship)</span>
                </div>
            </a>

        <!-- Hamburger Menu untuk Mobile -->
        <button class="navbar-toggler order-md-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fas fa-bars" style="color: black;"></span> <!-- Ganti dengan ikon FontAwesome -->
        </button>

        <!-- Daftar Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('homepage.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('homepage.about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('homepage.service') }}">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('homepage.contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
