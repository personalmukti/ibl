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
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>

    <body>
        <!-- Main -->
        @yield('content')
        <!-- Main -->

        <!-- Bootstrap JS and other scripts -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

        <script>
            // Ambil elemen modal
            var modal = new bootstrap.Modal(document.getElementById('modalId'));

            // Ambil elemen video
            var modalVideo = document.getElementById("modalVideo");

            // Tambahkan event listener untuk saat modal terbuka
            modal._element.addEventListener('shown.bs.modal', function() {
                // Putar video secara otomatis saat modal terbuka
                modalVideo.play();
            });

            // Tambahkan event listener untuk saat modal ditutup
            modal._element.addEventListener('hidden.bs.modal', function() {
                // Hentikan video saat modal ditutup
                modalVideo.pause();
            });
        </script>

    </body>

</html>
