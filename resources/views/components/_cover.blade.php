<header class="cover">
    <img src="{{ asset('img/ny.jpg') }}" alt="bg" class="bg-img-half" id="bghalf">
    <div class="container hero">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="text-darker">{{ $title }}</h1>
                <div class="row py-2">
                    <div class="col-12 animate__animated animate__slideInRightl">
                        <video width="100%" height="auto    " controls autoplay>
                            <source src="{{ asset('video/iblvideo.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>

    </div>
</header>

@push('script')
    <script>
        let bghalf = document.getElementById('bghalf');

        window.addEventListener(function() {
            var value = window.scrollY;

            bghalf.style.top = value * 1 + 'px';
        });
    </script>
@endpush
