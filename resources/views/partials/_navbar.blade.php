<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="max-width: 100%;">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand" href="/">
            <img src="{{ asset('img/logo.png') }}" alt="ibl" width="100" height="85">
        </a>

        <!-- Nama Perusahaan dan Tagline -->
        <div class="d-none d-md-flex flex-column align-items-md-start ms-3">
            <a class="navbar-brand" href="{{ route('homepage.index') }}">
                <span class="navbar-text" style="font-weight: bold; text-transform: uppercase; color: black;">PT.
                    Interbenua Logistindo</span></a>
            <a class="navbar-brand" href="{{ route('homepage.index') }}">
                <span class="navbar-text" style="font-style: italic; font-size: 14px; color: black;">Member of IFF
                    (International Freight Forwarder Fellowship)</span>
            </a>

        </div>

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
