<!-- start of hero section -->
@include('partials._carousel')

<section class="hero-part">
    <div class="container-fluid">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <!-- Indikator Carousel
            <ol class="carousel-indicators">
                <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
            </ol> -->

            <!-- Slides Carousel -->
            <div class="carousel-inner text-center">
                <div class="carousel-item active">
                    <div class="carousel-content">
                        <h3>Secure Shipping</h3>
                        <p>We care specially about the security of our partners and customers by having freight
                            forwarding liabilities.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-content">
                        <h3>Know where your goods are</h3>
                        <p>Easily keep track of your shipment with us.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-content">
                        <h3>Total Logistics</h3>
                        <p>From your doorstep to destination, in one easy step. </p>
                    </div>
                </div>
            </div>

            <!-- Tombol Navigasi Carousel
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a> -->
        </div>
    </div>

    <div class="container-fluid">
        <div class="row py-3">
            <!-- Kolom 1 -->
            <div class="col-md-4 mx-auto py-2">
                <img src="{{ asset('img/colapse1.jpg') }}" alt="welcome-img" class="img-fluid">
            </div>

            <!-- Kolom 2 -->
            <div class="col-md-8 pt-5 mobile-center">
                <h1 class="company-name">PT. INTERBENUA LOGISTINDO</h1>
                <button type="button" class="btn btn-socmed about-btn" data-bs-toggle="modal"
                    data-bs-target="#modalId">About Us</button>
            </div>
        </div>
    </div>
</section>
<!-- end of hero section -->

<!-- Modal Video -->
<div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="true" data-bs-keyboard="false" role="dialog"
    aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
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
