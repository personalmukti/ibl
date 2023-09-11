@extends('layouts.app')

@section('content')
    @include('components._cover')

    <section class="about py-5">
        <div class="container">
            <div class="col-md-12">
                <div class="card card-about">
                    <div class="card-body">
                        <div class="container-fluid d-sm-flex flex-column justify-content-center align-items-sm-center">
                            <div class="row py-5">
                                <div class="col-sm-12">
                                    <div class="card card-about">
                                        <div class="card-body">
                                            <h4 class="about-glance desktop-left mobile-center">About Us</h4>
                                            <br>
                                            <br>
                                            <p class="about-text desktop-left mobile-center">PT INTERBENUA LOGISTINDO is a
                                                leading cargo
                                                transportation
                                                and
                                                logistics company in
                                                Indonesia. We provide a comprehensive range of integrated cargo
                                                transportation and
                                                logistics services to meet the needs of domestic and international
                                                customers.</p>
                                            <br>
                                            <p class="about-text desktop-left mobile-center">In today's competitive and
                                                constantly
                                                evolving business
                                                environment,
                                                we must be adaptable
                                                to changes and be proactive to meet the market. We are constantly developing
                                                strategies
                                                and creating an efficient and effective system to be able to exceed customer
                                                expectations.</p>
                                            <br>
                                            <h4 class="about-glance desktop-left mobile-center">Vision</h4>
                                            <br>
                                            <p class="about-text desktop-left mobile-center">To become most reliable global
                                                freight forwarding company in Indonesia.</p>
                                            <br>

                                            <h4 class="about-glance desktop-left mobile-center">Mission</h4>
                                            <br>
                                            <p class="about-text desktop-left mobile-center">To deliver service with care.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components._partner')

    <section class="about-carousel">
        <div class="row">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/secure-shipping.jpg') }}" class="d-block w-100 img-carousel"
                            alt="Secure Shipping">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Secure Shipping</h5>
                            <p>We care specially about the security of our partners and customers by having freight
                                forwarding liabilities.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/track-goods.jpg') }}" class="d-block w-100 img-carousel" alt="Track Goods">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Know where your goods are</h5>
                            <p>Easily keep track of your shipment with us.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/delivery.jpg') }}" class="d-block w-100 img-carousel" alt="Delivery">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Total Logistics</h5>
                            <p>From your doorstep to destination, in one easy step.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
@endsection
