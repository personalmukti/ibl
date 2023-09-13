@extends('layouts.main')

@section('content')
    <!-- Header (Cover) -->
    <header class="cover d-flex justify-content-center align-items-center">
        <div class="bg-img" style="background-image: url('{{ asset('img/freighter.jpg') }}');"></div>
        <div class="container-fluid mx-5">
            <div class="row">
                <div class="col-md-6 text-start position-absolute top-0 left-0" style="margin-top: 200px; margin-left: 20px;">
                    <h1 class="cover-nama">PT. INTERBENUA LOGISTINDO</h1>
                    <h3 class="cover-tagline">International Freight Forwarding</h3>
                </div>
                <div class="col-md-6 text-end position-absolute bottom-0 end-0"
                    style="margin-bottom: 20px; margin-right: 20px;">
                    <a href="https://api.whatsapp.com/send?phone=123456789" class="btn btn-socmed">
                        <i class="fab fa-whatsapp" aria-hidden="true"></i> Whatsapp
                    </a>
                    <a href="mailto:email@example.com" class="btn btn-socmed">
                        <i class="far fa-envelope" aria-hidden="true"></i> Email
                    </a>
                </div>
            </div>
        </div>
    </header>
@endsection
