<div class="header">
        <div class="col-12">
            <img src="{{ asset('img/freighter.jpg') }}" class="bg-img">
            <div class="container-fluid cover-hero">
                <div class="row">
                    <div class="col-sm-12 col-md-6 text-center text-md-start">
                        <div class="row">
                            <div class="col">
                                <h1 class="company-name">PT. Interbenua Logistindo</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <img src="{{ asset('img/colapse1.jpg') }}" alt="" class="img-fluid collapse-img">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="button" class="btn btn-socmed about-btn" data-bs-toggle="modal" data-bs-target="#modalId">
                                    About Us
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 position-relative" style="margin-bottom: 20px; margin-right: 20px; padding-top: 6%;">
                        <div class="position-absolute bottom-0 end-0 d-flex justify-content-center justify-content-md-end">
                            <a href="https://api.whatsapp.com/send?phone=123456789" class="btn btn-socmed me-2 me-md-0 mb-2 mb-md-0">
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
