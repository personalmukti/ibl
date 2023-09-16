@extends('layouts.main')

@section('content')
    @include('partials._navgrad')

    <header class="cover-half">
        <img src="{{ asset('img/banner.jpg') }}" alt="bg" class="bg-img-half" id="bghalf">
    </header>
    <div class="row">
        <div class="col-12">
            <h2 class="text-center">Contact</h2>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="container">
                <div class="col-12">
                    <div class="row py-3">
                        <div class="col-sm-12 col-md-6 text-center">
                            <div class="row py-3">
                                <div class="col">
                                    <h3>Jakarta HQ</h3>
                                    <hr>
                                    <p class="address">Ruko Galeri Mediterania 1 (PIK)</p>
                                    <p class="address">Blok X-3 Kav. No. B-8M Kapuk Muara Penjaringan</p>
                                    <p class="address">Jakarta Utara 14460</p>
                                    <p class="address">Indonesia</p>
                                    <p class="address">(021) 5883377 [Office]</p>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.1020899461073!2d106.76932887593536!3d-6.11695765998717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a1d9e0f56b4b5%3A0x11ae8586173bd299!2sRuko%20Galeri%20Niaga%20Mediterania!5e0!3m2!1sid!2sid!4v1693364683380!5m2!1sid!2sid"
                                        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 text-center">
                            <div class="row py-3">
                                <div class="col-12">
                                    <h3>Surabaya Branch</h3>
                                    <hr>
                                    <p class="address">JL. Purwodadi II No. 77A, Kel. Jepara</p>
                                    <p class="address">Kecamatan Bubutan.</p>
                                    <p class="address">Surabaya 60171, Indonesia</p>
                                    <p class="address">(031) 99222978 [Office]</p>
                                    <p class="address">(+62) 82190068881 [Mobile]</p>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d416.03591049264054!2d112.7206733267839!3d-7.238224713943824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f93203b33b2d%3A0x7c763a1d3cfaeef6!2sJl.%20Purwodadi%20II%20No.77%2C%20RT.003%2FRW.04%2C%20Jepara%2C%20Kec.%20Bubutan%2C%20Surabaya%2C%20Jawa%20Timur%2060171!5e0!3m2!1sid!2sid!4v1693364855383!5m2!1sid!2sid"
                                        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
