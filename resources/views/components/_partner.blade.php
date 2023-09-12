<section class="partner" id="partner" style="background-image: url('{{ asset('img/map.jpg') }}'); z-index: -2">
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-12 text-center">
                <h1 class="section-title">- Partner -</h1>
                <hr class="custom-hr">
            </div>
        </div>
        <div class="row pb-5 pt-5">
            <div class="container d-md-flex flex-row justify-content-center align-items-center">
                <div class="col-md-3 mx-2">
                    <div class="card">
                        <div class="card-body text-darker text-center">
                            Algeria<br>
                            Angola<br>
                            Argentina<br>
                            Australia<br>
                            Austria<br>
                            Bahrain<br>
                            Bangladesh<br>
                            Belgium<br>
                            Brazil<br>
                            Brunei<br>
                            Bulgaria<br>
                            Cambodia<br>
                            Canada<br>
                            Canary Islands<br>
                            Chile<br>
                            China<br>
                            Colombia<br>
                            Costa Rica<br>
                            Cyprus<br>
                            Czech Republic<br>
                            Denmark<br>
                            Dijibouti<br>
                            Dominican Republic<br>
                            Ecuador<br>
                            Egypt<br>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 mx-2">
                    <div class="card">
                        <div class="card-body text-darker text-center">

                            El Salvador<br>
                            Estonia<br>
                            Ethopia<br>
                            Finland<br>
                            France<br>
                            Germany<br>
                            Ghana<br>
                            Greece<br>
                            Guatemala<br>
                            Honduras<br>
                            Hong Kong<br>
                            Hungary<br>
                            India<br>
                            Indonesia<br>
                            Iraq <br>
                            Ireland<br>
                            Israel<br>
                            Italy<br>
                            Ivory Coast<br>
                            Jamaica<br>
                            Japan<br>
                            Jordan<br>
                            Kenya<br>
                            Korea<br>
                            Kuwait<br>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 mx-2">
                    <div class="card">
                        <div class="card-body text-darker text-center">

                            Latvia<br>
                            Lebanon<br>
                            Libya<br>
                            Lithuania<br>
                            Malawi<br>
                            Malaysia<br>
                            Malta<br>
                            Mexico<br>
                            Morocco<br>
                            Mozambique<br>
                            Netherlands<br>
                            New Zealand<br>
                            Nigeria<br>
                            Norway<br>
                            Oman<br>
                            Pakistan<br>
                            Panama<br>
                            Paraguay<br>
                            Peru<br>
                            Philippines<br>
                            Portugal<br>
                            Qatar<br>
                            Romania<br>
                            Russia<br>
                            Saudi Arabia<br>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 mx-2">
                    <div class="card">
                        <div class="card-body text-darker text-center">
                            Senegal<br>
                            Singapore<br>
                            Slovak Republic<br>
                            Slovenia<br>
                            South Africa<br>
                            Spain<br>
                            Sri Lanka<br>
                            Sudan<br>
                            Sweden<br>
                            Switzerland<br>
                            Taiwan<br>
                            Tanzania<br>
                            Thailand<br>
                            Tunisia<br>
                            Turkey<br>
                            Uganda<br>
                            Ukraine<br>
                            United Arab Emirates<br>
                            United Kingdom<br>
                            Unites States<br>
                            Uruguay<br>
                            Venezuela<br>
                            Vietnam<br>
                            Yemen<br>
                            Zambia<br>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('script')
    <script>
        // Menggunakan event scroll untuk mengubah posisi latar belakang
        window.addEventListener('scroll', function() {
            const parallax = document.querySelector('.partner');
            parallax.style.backgroundPositionY = -window.pageYOffset / 2 +
                'px'; // Sesuaikan dengan kecepatan paralaks yang Anda inginkan
        });
    </script>
@endpush
