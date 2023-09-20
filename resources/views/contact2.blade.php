@extends('layouts.main')

@section('content')
    @include('partials._navgrad')

    <header class="cover-half">
        <img src="{{ asset('img/banner-shading.jpg') }}" alt="bg" class="bg-img-half" id="bghalf">
    </header>

    <div class="about-section py-4">
        <div class="container">
            <div class="row">
                <h2 class="text-center">Contact</h2>
            </div>
            <div class="row py-1">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 alamat">
                                <h4>Jakarta HQ</h4>
                                <hr>
                                <a href="https://api.whatsapp.com/send?phone=123456789"
                                    class="btn btn-socmed me-2 me-md-0 mb-2 mb-md-0">
                                    <i class="fab fa-whatsapp" aria-hidden="true"></i> Whatsapp
                                </a>
                                <a href="mailto:email@example.com" class="btn btn-socmed">
                                    <i class="far fa-envelope" aria-hidden="true"></i> Email
                                </a>
                                <hr>
                                <p class="address"><i class="fa fa-map-marker" aria-hidden="true"></i> Ruko Galeri
                                    Mediterania 1 (PIK). Blok X-3 Kav. No. B-8M Kapuk Muara
                                    Penjaringan. Jakarta Utara 14460. Indonesia.</p>
                                <p class="address"><i class="fa fa-phone" aria-hidden="true"></i> (021) 5883377 [Office]</p>
                                <hr>
                            </div>
                            <div class="col-sm-12 col-md-6 map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.1020899461073!2d106.76932887593536!3d-6.11695765998717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a1d9e0f56b4b5%3A0x11ae8586173bd299!2sRuko%20Galeri%20Niaga%20Mediterania!5e0!3m2!1sid!2sid!4v1693364683380!5m2!1sid!2sid"
                                    width="100%" height="240" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-1">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 alamat">
                                <h4>Surabaya Branch</h4>
                                <hr>
                                <a href="https://api.whatsapp.com/send?phone=123456789"
                                    class="btn btn-socmed me-2 me-md-0 mb-2 mb-md-0">
                                    <i class="fab fa-whatsapp" aria-hidden="true"></i> Whatsapp
                                </a>
                                <a href="mailto:email@example.com" class="btn btn-socmed">
                                    <i class="far fa-envelope" aria-hidden="true"></i> Email
                                </a>
                                <hr>
                                <p class="address"><i class="fa fa-map-marker" aria-hidden="true"></i> JL. Purwodadi II No.
                                    77A, Kel. Jepara. Kecamatan Bubutan. Surabaya 60171,
                                    Indonesia.</p>
                                <p class="address"><i class="fa fa-phone" aria-hidden="true"></i> (031) 99222978
                                    [Office]
                                </p>
                                <p class="address"><i class="fa fa-mobile-phone" aria-hidden="true"></i> (+62) 82190068881
                                    [Mobile]</p>
                                <hr>
                            </div>
                            <div class="col-sm-12 col-md-6 map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d416.03591049264054!2d112.7206733267839!3d-7.238224713943824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f93203b33b2d%3A0x7c763a1d3cfaeef6!2sJl.%20Purwodadi%20II%20No.77%2C%20RT.003%2FRW.04%2C%20Jepara%2C%20Kec.%20Bubutan%2C%20Surabaya%2C%20Jawa%20Timur%2060171!5e0!3m2!1sid!2sid!4v1693364855383!5m2!1sid!2sid"
                                    width="100%" height="240" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
