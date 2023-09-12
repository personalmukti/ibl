<section class="gallery py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="section-title-dark">- Gallery -</h1>
                <hr class="custom-hr-dark">
            </div>
        </div>
        <div class="row py-5">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="gallery">
                    <div class="row pb-4">
                        <div class="col-md-6 pb-4">
                            <a data-fancybox="gallery" href="{{ asset('img/gallery/gallery1.jpg') }}">
                                <img src="{{ asset('img/gallery/gallery1.jpg') }}" alt="Gallery Image" width="100%">
                            </a>
                        </div>
                        <div class="col-md-6 pb-4">
                            <a data-fancybox="gallery" href="{{ asset('img/gallery/gallery2.jpg') }}">
                                <img src="{{ asset('img/gallery/gallery2.jpg') }}" alt="Gallery Image" width="100%">
                            </a>
                        </div>
                    </div>
                    <div class="row pb-4">
                        <div class="col-md-6 pb-4">
                            <a data-fancybox="gallery" href="{{ asset('img/gallery/gallery3.jpg') }}">
                                <img src="{{ asset('img/gallery/gallery3.jpg') }}" alt="Gallery Image" width="100%">
                            </a>
                        </div>
                        <div class="col-md-6 pb-4">
                            <a data-fancybox="gallery" href="{{ asset('img/gallery/gallery4.jpg') }}">
                                <img src="{{ asset('img/gallery/gallery4.jpg') }}" alt="Gallery Image" width="100%">
                            </a>
                        </div>
                    </div>
                    <div class="row pb-4">
                        <div class="col-md-6 pb-4">
                            <a data-fancybox="gallery" href="{{ asset('img/gallery/gallery5.jpg') }}">
                                <img src="{{ asset('img/gallery/gallery5.jpg') }}" alt="Gallery Image" width="100%">
                            </a>
                        </div>
                        <div class="col-md-6 pb-4">
                            <a data-fancybox="gallery" href="{{ asset('img/gallery/gallery6.jpg') }}">
                                <img src="{{ asset('img/gallery/gallery6.jpg') }}" alt="Gallery Image" width="100%">
                            </a>
                        </div>
                    </div>
                    <div class="row pb-4">
                        <div class="col-md-6 pb-4">
                            <a data-fancybox="gallery" href="{{ asset('img/gallery/gallery7.jpg') }}">
                                <img src="{{ asset('img/gallery/gallery7.jpg') }}" alt="Gallery Image" width="100%">
                            </a>
                        </div>
                        <div class="col-md-6 pb-4">
                            <a data-fancybox="gallery" href="{{ asset('img/gallery/gallery8.jpg') }}">
                                <img src="{{ asset('img/gallery/gallery8.jpg') }}" alt="Gallery Image" width="100%">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</section>

@push('script')
    <script>
        $(document).ready(function() {
            $("[data-fancybox]").fancybox();
        });
    </script>
@endpush
