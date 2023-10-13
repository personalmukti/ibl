@extends('layouts.main')

@section('content')
    @include('partials._navgrad')

    <header class="cover-half">
        
    </header>

    <div class="about-section">
        <div class="container">
            <div class="row">
                <h2 class="text-center animate__animated animate__slideInUp">Service</h2>
            </div>
            <div class="row py-3">
                <div class="col-md-2">
                    <div class="card ">
                        <div class="card-body">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <a class="no-decor" data-bs-toggle="modal" data-bs-target="#seaFreight">
                                        <div class="card service-card my-1 animate__animated animate__slideInUp">
                                            <div class="card-body text-center">
                                                <img src="{{ asset('img/icons/ship.png') }}" alt="ship-icons" class="service-icon">
                                                <br>
                                                Sea Freight
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <a class="no-decor" data-bs-toggle="modal" data-bs-target="#airFreight">
                                        <div class="card service-card my-1 animate__animated animate__slideInUp">
                                            <div class="card-body text-center">
                                                <img src="{{ asset('img/icons/plane.png') }}" alt="ship-icons" class="service-icon">
                                                <br>
                                                Air Freight
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">    
                                    <div class="col-md-12">
                                        <a class="no-decor" data-bs-toggle="modal" data-bs-target="#inlandFreight">
                                        <div class="card service-card my-1 animate__animated animate__slideInUp">
                                            <div class="card-body text-center">
                                                <img src="{{ asset('img/icons/truck.png') }}" alt="ship-icons" class="service-icon">
                                                <br>
                                                Inland Transport
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <a class="no-decor" data-bs-toggle="modal" data-bs-target="#reeferFreight">
                                        <div class="card service-card my-1 animate__animated animate__slideInUp">
                                            <div class="card-body text-center">
                                                <img src="{{ asset('img/icons/reefer.png') }}" alt="ship-icons" class="service-icon">
                                                <br>
                                                Reefer Service
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <a class="no-decor" data-bs-toggle="modal" data-bs-target="#documentFreight">
                                        <div class="card service-card my-1 animate__animated animate__slideInUp">
                                            <div class="card-body text-center">
                                                <img src="{{ asset('img/icons/document.png') }}" alt="ship-icons" class="service-icon">
                                                <br>
                                                Documentation
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-md-10">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-12 pt-4">
                                <div class="row align-items-center">
                                    <div class="col-md-12 text-center" style="position: relative;">
                                        <img src="{{ asset('img/partner.png') }}" alt="partner" class="img-fluid" loading="lazy" style="width: 100%; height: auto; z-index: 1;">
                                        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 2; background-color: rgba(255, 255, 255, 0.7); padding: 10px;">
                                            <h2 style="margin: 0;" class="animate__animated animate__fadeInUp">Partnership</h2>
                                            <span class="animate__animated animate__fadeInUp">Partnered with over 100 agents worldwide, our coverage reaches all around the globe.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </div>
    </div>

    @include('partials._modal')
@endsection
