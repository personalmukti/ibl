

    <!-- Main Content -->
        <header class="cover d-flex justify-content-center align-items-center">
            <div class="bg-img" style="background-image: url('{{ asset('img/freighter.jpg') }}');"></div>
            <div class="container-fluid mx-5">
                <div class="row">
                    <div class="col-md-6 text-start position-absolute top-0 left-0" style="margin-top: 120px; margin-left: 20px;">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="cover-company">PT. Interbenua Logistindo</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="{{ asset('img/gallery/gallery1.jpg') }}" alt="" width="500" height="300">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-socmed" data-bs-toggle="modal" data-bs-target="#modalId">
                                    About Us
                                  </button>
                            </div>
                        </div>
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
        <!-- Modal Body -->
        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
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
