<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} Page | IBL</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,900&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top border-bottom shadow" style="max-width: 100%;">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand" href="/">
                <img src="{{ asset('img/logo.png') }}" alt="ibl" width="100" height="85">
            </a>

            <!-- Nama Perusahaan dan Tagline -->
            <div class="d-none d-md-flex flex-column align-items-md-start ms-2">
                <span class="navbar-text" style="font-weight: bold; text-transform: uppercase; color: black;">PT. Interbenua Logistindo</span>
                <span class="navbar-text" style="font-style: italic; font-size: smaller; color: black;">Member of IFF (International Freight Forwarder Fellowship)</span>
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

    <!-- Main -->
       <div class="header">
        <div class="col-12">
            <img src="{{ asset('img/freighter.jpg') }}" class="bg-img">
            <div class="container-fluid cover-hero">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="row">
                            <div class="col">
                                <h1>PT. Interbenua Logistindo</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <img src="{{ asset('img/colapse1.jpg') }}" alt="" class="img-fluid collapse-img">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="button" class="btn btn-socmed" data-bs-toggle="modal" data-bs-target="#modalId">
                                    About Us
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 text-end pb-2 pe-2 socmed-area" style="margin-bottom: 20px; margin-right: 20px;">
                        <a href="https://api.whatsapp.com/send?phone=123456789" class="btn btn-socmed">
                            <i class="fab fa-whatsapp" aria-hidden="true"></i> Whatsapp
                        </a>
                        <a href="mailto:email@example.com" class="btn btn-socmed">
                            <i class="far fa-envelope" aria-hidden="true"></i> Email
                        </a>
                    </div>
                </div>
            </div>
        </div>
       </div>
    <!-- End Main -->

    <!-- Modal Video -->
    <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="true" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="video-container">
                                <video id="modalVideo" width="100%" height="auto" controls autoplay muted>
                                    <source src="{{ asset('video/iblvideo.mp4') }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- end Modal Video -->

    <!-- Bootstrap JS and other scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script>
        const navbar = document.querySelector('.navbar');

        window.addEventListener('scroll', function() {
            if (window.scrollY >= 56) {
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
            }
        });
    </script>

<script>
    // Ambil elemen modal
    var modal = new bootstrap.Modal(document.getElementById('modalId'));

    // Tambahkan event listener untuk saat modal terbuka
    modal._element.addEventListener('shown.bs.modal', function () {
        // Ambil elemen video
        var modalVideo = document.getElementById("modalVideo");

        // Putar video secara otomatis saat modal terbuka
        modalVideo.play();
    });
</script>

</body>

</html>
