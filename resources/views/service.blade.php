@extends('layouts.main')

@section('content')
    @include('partials._navgrad')

    <header class="cover-half">
        <img src="{{ asset('img/banner.jpg') }}" alt="bg" class="bg-img-half" id="bghalf">
    </header>

    <div class="service-section">
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

        <div class="row py-3">
            <div class="col-12 text-center">
                <h2 class="text-center">Partnership</h2>
                <span>Partnered with over 100 agents worldwide, our coverage reaches all around the globe.
                </span>
            </div>
        </div>
        <div class="container">
            <div class="row py-3 justify-content-center">
                <!-- Tambahkan class 'justify-content-center' untuk mengatur konten ke tengah -->
                <div class="col-md-6 text-center">
                    <!-- Tambahkan class 'text-center' untuk mengatur konten ke tengah secara horizontal -->
                    <img src="{{ asset('img/partner.png') }}" alt="partners" class="img-fluid mx-auto">
                    <!-- Tambahkan 'mx-auto' pada gambar -->
                </div>
            </div>
        </div>

    </div>


    <!-- Sea Freight Modal -->
    <div class="modal fade" id="seaFreight" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <img src="{{ asset('img/service/1.jpg') }}" alt="sea-freight" class="img-fluid">
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col-12">
                            <h4>Sea Freight</h4>
                            <p>Strong strategic alliance with every shipping lines enable us to provide best logistic
                                services to our customers consist of Export, Import and Local handling and service.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Sea Freight Modal -->

    <!-- Air Freight Modal -->
    <div class="modal fade" id="airFreight" tabindex="-1" role="dialog" aria-labelledby="modalTitleId"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <img src="{{ asset('img/service/2.jpg') }}" alt="air-freight" class="img-fluid">
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col-12">
                            <h4>Air Freight</h4>
                            <p>Taking advantage of network from our partners to provide Air Freight service from Indonesia
                                to airports all over the world and conversely.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Air Freight Modal -->

    <!-- Inland Freight Modal -->
    <div class="modal fade" id="inlandFreight" tabindex="-1" role="dialog" aria-labelledby="modalTitleId"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <img src="{{ asset('img/service/3.jpg') }}" alt="inland-transportation" class="img-fluid">
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col-12">
                            <h4>Inland Transportation</h4>
                            <p>Our inland transportation service operate large fleet of modern commercial trucks and prime
                                movers, transporting numerous of containers daily and embracing innovation to exceed
                                customer expectations.</p>
                            <p>Each vehicle is equipped with modern telecommunications and GPS device for prompt tracking,
                                monitoring to ensure a timely and cost effective service for our clients.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Inland Freight Modal -->

    <!-- Reefer Freight Modal -->
    <div class="modal fade" id="reeferFreight" tabindex="-1" role="dialog" aria-labelledby="modalTitleId"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <img src="{{ asset('img/service/4.jpg') }}" alt="reefer-services" class="img-fluid">
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col-12">
                            <h4>Reefer Service</h4>
                            <p>With the grow of our company and market demand now we have extend our service to reefer
                                cargo/transportation.</p>
                            <p>We have equipment for reefer and will provide the best service you needs. Whether it is a
                                reefer transportaion or equipment rent and any other needs, customer can always count on us.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Reefer Freight Modal -->

    <!-- Document Freight Modal -->
    <div class="modal fade" id="documentFreight" tabindex="-1" role="dialog" aria-labelledby="modalTitleId"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <img src="{{ asset('img/service/5.jpg') }}" alt="documentation" class="img-fluid">
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col-12">
                            <h4>Documentation</h4>
                            <p>Tired of all the hassle? We can handle all your document necessity. Our team will
                                professionally handle the document such as:</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-type-none">
                                        <li>Bill of Lading</li>
                                        <li>Export Declaration</li>
                                        <li>Custom Clearance</li>
                                        <li>COO</li>
                                        <li>Fumigation</li>
                                        <li>Phytosanitary</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-type-none">
                                        <li>Embassy Legalization</li>
                                        <li>CNCA</li>
                                        <li>ECTN</li>
                                        <li>NMC</li>
                                        <li>etc.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Document Freight Modal -->
@endsection
