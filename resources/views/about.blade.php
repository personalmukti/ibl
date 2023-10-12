@extends('layouts.main')

@section('content')
    @include('partials._navgrad')

    <header class="cover-half">
        
    </header>

    <div class="about-section">
        <div class="container">
            <div class="row">
                <h2 class="text-center">About Us</h2>
            </div>
            <div class="row py-3">
                <div class="card card-noboreder">
                    <div class="card-body py-5 px-5">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-6 py-2">
                                    <img src="{{ asset('img/colapse1.jpg') }}" alt="about-us" class="img-fluid">
                                </div>
                                <div class="col-md-6">
                                    <div class="row py-2">
                                        <div class="col">
                                            <p class="about-text">
                                                PT INTERBENUA LOGISTINDO is a leading cargo transportation and logistics
                                                company in Indonesia.
                                            </p>
                                            <p class="about-text">We provide a comprehensive range of integrated cargo
                                                transportation and logistics services to meet the needs of domestic and
                                                international customers.</p>
                                            <p class="about-text">
                                                In today's competitive and constantly evolving business environment, we must
                                                be adaptable to changes and be proactive to meet the market. We are
                                                constantly developing strategies and creating an efficient and effective
                                                system to be able to exceed customer expectations.
                                            </p>
                                            <br>
                                            <h5 class="about-title">Vision</h5>
                                            <p class="about-text">To become most reliable global freight forwarding company in Indonesia.</p>
                                            <br>
                                            <h5 class="about-title">Mission</h5>
                                            <p class="about-text">To deliver service with care.</p>
                                            <p>
                                                <button type="button" class="btn btn-socmed about-btn"
                                                    data-bs-toggle="modal" data-bs-target="#modalId">
                                                    More
                                                </button>
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
    </div>

    <!-- Modal Video -->
    <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="true" data-bs-keyboard="false" role="dialog"
        aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="video-container">
                            <video id="modalVideo" width="100%" height="auto" controls>
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
@endsection
