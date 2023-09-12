@extends('layouts.app')

@section('content')
    @include('components._cover_half')

    <div class="service-full py-5 py-sm-2 mx-auto">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="section-title-dark">- Our Service -</h1>
                    <hr class="custom-hr-dark">
                    <p class="text-darker">Where Every Shipment Ends with Your Satisfaction.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 py-3">
                    <div class="card card-dark">
                        <div class="card-body">
                            <img src="{{ asset('img/service/1.jpg') }}" alt="sea-freight" class="img-fluid">

                            <h4 class="service-title-bright py-3">Sea Freight</h4>
                            <p class="service-detail-bright">Strong strategic alliance with every shipping lines enable us
                                to
                                provide best logistic services to our customers consist of Export, Import and Local
                                handling
                                and
                                service.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 py-3">
                    <div class="card card-dark">
                        <div class="card-body">
                            <img src="{{ asset('img/service/2.jpg') }}" alt="sea-freight" class="img-fluid">
                            <br>
                            <h4 class="service-title-bright py-3">Air Freight</h4>
                            <p class="service-detail-bright">Taking advantage of network from our partners to provide Air
                                Freight service from Indonesia to airports all over the world and conversely.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 py-3">
                    <div class="card card-dark">
                        <div class="card-body">
                            <img src="{{ asset('img/service/3.jpg') }}" alt="sea-freight" class="img-fluid">
                            <h4 class="service-title-bright py-3">Inland Transportation</h4>
                            <p class="service-detail-bright">Our inland transportation service operate large fleet of modern
                                commercial trucks and prime movers, transporting numerous of containers daily and embracing
                                innovation to exceed customer expectations.</p>
                            <p class="service-detail-bright">Each vehicle is equipped with modern telecommunications and GPS
                                device for prompt tracking, monitoring to ensure a timely and cost effective service for our
                                clients.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 py-3">
                    <div class="card card-dark">
                        <div class="card-body">
                            <img src="{{ asset('img/service/4.jpg') }}" alt="sea-freight" class="img-fluid">
                            <br>
                            <h4 class="service-title-bright py-3">Reefer Service</h4>
                            <p class="service-detail-bright">With the grow of our company and market demand now we have
                                extend
                                our service to reefer cargo/transportation.</p>
                            <p class="service-detail-bright">We have equipment for reefer and will provide the best service
                                you
                                needs. Whether it is a reefer transportaion or equipment rent and any other needs, customer
                                can
                                always count on us.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 py-3">
                    <div class="card card-dark">
                        <div class="card-body">
                            <img src="{{ asset('img/service/5.jpg') }}" alt="sea-freight" class="img-fluid">
                            <br>
                            <h4 class="service-title py-3">Documentation</h4>
                            <p class="service-detail">Tired of all the hassle?<br>
                                We can handle all your document necessity. Our team will professionally handle the document
                                such
                                as:</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="text-small">
                                        <li>Bill of Lading</li>
                                        <li>Export Declaration</li>
                                        <li>Custom Clearance</li>
                                        <li>COO</li>
                                        <li>Fumigation</li>
                                        <li>Phytosanitary</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
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
@endsection
