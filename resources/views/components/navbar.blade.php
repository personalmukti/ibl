<nav class="navbar navbar-expand-md navbar-dark fixed-top">
    <div class="container-fluid">
        <div class="d-flex justify-content-between w-100">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('img/logo-lg.png') }}" alt="ibl" width="80" height="50">
            </a>
            <div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto pt-3">
                        <li class="nav-item">
                            @if ($title === 'Home')
                                <a class="nav-link active" href="/">Home</a>
                            @else
                                <a class="nav-link" href="/">Home</a>
                            @endif
                        </li>
                        <li class="nav-item">
                            @if ($title === 'About')
                                <a class="nav-link active" href="{{ route('homepage.about') }}">About</a>
                            @else
                                <a class="nav-link" href="{{ route('homepage.about') }}">About</a>
                            @endif
                        </li>
                        <li class="nav-item">
                            @if ($title === 'Service')
                                <a class="nav-link active" href="{{ route('homepage.service') }}">Service</a>
                            @else
                                <a class="nav-link" href="{{ route('homepage.service') }}">Service</a>
                            @endif
                        </li>
                        <li class="nav-item">
                            @if ($title === 'Contact')
                                <a class="nav-link active" href="{{ route('homepage.contact') }}">Contact</a>
                            @else
                                <a class="nav-link" href="{{ route('homepage.contact') }}">Contact</a>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
