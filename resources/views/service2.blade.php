@extends('layouts.main')

@section('content')
    @include('partials._navgrad')

    <header class="cover-half">
        <img src="{{ asset('img/banner-shading.jpg') }}" alt="bg" class="bg-img-half" id="bghalf">
    </header>

    <div class="service-section py-4">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Services</h2>
            </div>
        </div>
        <div class="container d-flex flex-row justify-content-md-center">
            <div class="row py-3">
                <div class="col-md-1 col-sm-12"></div>
                <div class="col-md-2 col-sm-12 py-1">
                    <a class="no-decor" data-bs-toggle="modal" data-bs-target="#seaFreight">
                        <div class="card card-bordered service-card">
                            <div class="card-body">
                                <div class="col text-center py-3 px-2 py-3 px-2">
                                    <p class="py-2 px-2">
                                        <span class="icon-color"><i class="fa fa-ship fa-3x" aria-hidden="true"></i></span>
                                        <br>
                                    <h6 class="card-title">Sea Freight</h6>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 col-sm-12 py-1">
                    <a class="no-decor" data-bs-toggle="modal" data-bs-target="#airFreight">
                        <div class="card card-bordered service-card">
                            <div class="card-body">
                                <div class="col text-center py-3 px-2">
                                    <p class="py-2 px-2">
                                        <span class="icon-color"><i class="fa fa-plane fa-3x" aria-hidden="true"></i></span>
                                        <br>
                                    <h6 class="card-title">Air Freight</h6>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 col-sm-12 py-1">
                    <a class="no-decor" data-bs-toggle="modal" data-bs-target="#inlandFreight">
                        <div class="card card-bordered service-card">
                            <div class="card-body">
                                <div class="col text-center py-3 px-2">
                                    <p class="py-2 px-2">
                                        <span class="icon-color"><i class="fa fa-truck-fast fa-3x"
                                                aria-hidden="true"></i></span>
                                        <br>
                                    <h6 class="card-title">Inland Transportation</h6>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 col-sm-12 py-1">
                    <a class="no-decor" data-bs-toggle="modal" data-bs-target="#reeferFreight">
                        <div class="card card-bordered service-card">
                            <div class="card-body">
                                <div class="col text-center py-3 px-2">
                                    <p class="py-2 px-2">
                                        <span class="icon-color"><i class="fa fa-cube fa-3x" aria-hidden="true"></i></span>
                                        <br>
                                    <h6 class="card-title">Reefer Service</h6>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 col-sm-12 py-1">
                    <a class="no-decor" data-bs-toggle="modal" data-bs-target="#documentFreight">
                        <div class="card card-bordered service-card">
                            <div class="card-body">
                                <div class="col text-center py-3 px-2">
                                    <p class="py-2 px-2">
                                        <span class="icon-color"><i class="fa fa-file fa-3x" aria-hidden="true"></i></span>
                                        <br>
                                    <h6 class="card-title">Documentation</h6>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-1 col-sm-12"></div>
            </div>
        </div>

        <div class="row py-2">
            <div class="col-12 text-center">
                <h2 class="text-center">Partnership</h2>
                <span>Partnered with over 100 agents worldwide, our coverage reaches all around the globe.
                </span>
            </div>
        </div>
        <div class="container">
            <div class="row py-1 justify-content-center">
                <div class="col-md-6 text-center">
                    <img src="{{ asset('img/partner.png') }}" alt="partners" class="img-fluid mx-auto">
                </div>
            </div>
        </div>

    </div>
    @include('partials._modal')
@endsection
