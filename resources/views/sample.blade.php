<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Navbar with Logo, Company Name, and Tagline</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" width="150" height="125" class="d-inline-block align-text-top me-2">
                <div>
                    <span style="font-size: 2.5rem; text-transform: uppercase;">PT. Interbenua Logistindo</span><br>
                    <span style="font-size: 1rem; color: #6c757d;">Tagline</span>
                </div>
            </a>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
