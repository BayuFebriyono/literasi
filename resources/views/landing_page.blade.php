<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>Literasi Bangsa</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('landing/plugins/bootstrap/bootstrap.min.css') }}">
    <!-- themefy-icon -->
    <link rel="stylesheet" href="{{ asset('landing/plugins/themify-icons/themify-icons.css') }}">
    <!-- slick slider -->
    <link rel="stylesheet" href="{{ asset('landing/plugins/slick/slick.css') }}">
    <!-- venobox popup -->
    <link rel="stylesheet" href="{{ asset('landing/plugins/Venobox/venobox.css') }}">
    <!-- aos -->
    <link rel="stylesheet" href="{{ asset('landing/plugins/aos/aos.css') }}">

    <!-- Main Stylesheet -->
    <link href="{{ asset('landing/css/style.css') }}" rel="stylesheet">

    <!--Favicon-->

</head>

<body>


    <!-- navigation -->
    <section class="fixed-top navigation">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.html">
                    <h4>Literasi</h4>
                </a>
                <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbar"
                    aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- navbar -->
                <div class="collapse navbar-collapse text-center" id="navbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>

                    </ul>
                    @if (auth()->guard('siswa')->guest())
                        <a href="/login-siswa" class="btn btn-primary ml-lg-3 primary-shadow">Log In </a>
                    @elseif (auth()->guard('siswa')->check())
                        <a href="/login-siswa" class="btn btn-danger ml-lg-3 primary-shadow">Log Out </a>
                    @endif
                </div>
            </nav>
        </div>
    </section>
    <!-- /navigation -->

    <!-- hero area -->
    <section class="hero-section hero" data-background=""
        style="background-image: url(landing/images/hero-area/banner-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center zindex-1">
                    <h1 class="mb-3">Pantau dan Control<br>
                        Tingkat Literasimu</h1>
                    <p class="mb-4">Kendalikan dan pantau tingkat literasi pada siswa per kelas di sekolah anda</p>
                    <a href="#" class="btn btn-secondary btn-lg">Start</a>
                    <!-- banner image -->

                </div>
            </div>
        </div>
        <!-- background shapes -->
        <div id="scene">
            <img class="img-fluid hero-bg-1 up-down-animation"
                src="{{ asset('landing/images/background-shape/feature-bg-2.png') }}" alt="">
            <img class="img-fluid hero-bg-2 left-right-animation"
                src="{{ asset('landing/images/background-shape/seo-ball-1.png') }}" alt="">
            <img class="img-fluid hero-bg-3 left-right-animation"
                src="{{ asset('landing/images/background-shape/seo-half-cycle.png') }}" alt="">
            <img class="img-fluid hero-bg-4 up-down-animation"
                src="{{ asset('landing/images/background-shape/green-dot.png') }}" alt="">
            <img class="img-fluid hero-bg-5 left-right-animation"
                src="{{ asset('landing/images/background-shape/blue-half-cycle.png') }}" alt="">
            <img class="img-fluid hero-bg-6 up-down-animation"
                src="{{ asset('landing/images/background-shape/seo-ball-1.png') }}" alt="">
            <img class="img-fluid hero-bg-7 left-right-animation"
                src="{{ asset('landing/images/background-shape/yellow-triangle.png') }}" alt="">
            <img class="img-fluid hero-bg-8 up-down-animation"
                src="{{ asset('landing/images/background-shape/service-half-cycle.png') }}" alt="">
            <img class="img-fluid hero-bg-9 up-down-animation"
                src="{{ asset('landing/images/background-shape/team-bg-triangle.png') }}" alt="">
        </div>
    </section>
    <!-- /hero-area -->

    <!-- feature -->
    <section class="section feature mb-0" id="feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-title">Fitur Megagumkan</h2>
                    <p class="mb-100">Terdapat banyak sekali fitur menarik yang bisa kami tawarkan kepada ana<br>Berikut
                        beberapa fitur yang tersedia</p>
                </div>
                <!-- feature item -->
                <div class="col-md-6 mb-80">
                    <div class="d-flex feature-item">
                        <div>
                            <i class="ti-ruler-pencil feature-icon mr-4"></i>
                        </div>
                        <div>
                            <h4>Awesome Design</h4>
                            <p>Consectetur adipiscing elit donec tempus
                                pellentesque dui.</p>
                        </div>
                    </div>
                </div>
                <!-- feature item -->
                <div class="col-md-6 mb-80">
                    <div class="d-flex feature-item">
                        <div>
                            <i class="ti-layout-cta-left feature-icon mr-4"></i>
                        </div>
                        <div>
                            <h4>Easy Customize</h4>
                            <p>Consectetur adipiscing elit donec tempus
                                pellentesque dui.</p>
                        </div>
                    </div>
                </div>
                <!-- feature item -->
                <div class="col-md-6 mb-80">
                    <div class="d-flex feature-item">
                        <div>
                            <i class="ti-split-v-alt feature-icon mr-4"></i>
                        </div>
                        <div>
                            <h4>Bug free Code</h4>
                            <p>Consectetur adipiscing elit donec tempus
                                pellentesque dui.</p>
                        </div>
                    </div>
                </div>
                <!-- feature item -->
                <div class="col-md-6 mb-80">
                    <div class="d-flex feature-item">
                        <div>
                            <i class="ti-layers-alt feature-icon mr-4"></i>
                        </div>
                        <div>
                            <h4>Organized Layouts</h4>
                            <p>Consectetur adipiscing elit donec tempus
                                pellentesque dui.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img class="feature-bg-1 up-down-animation"
            src="{{ asset('landing/images/background-shape/feature-bg-1.png') }}" alt="bg-shape">
        <img class="feature-bg-2 left-right-animation"
            src="{{ asset('landing/images/background-shape/feature-bg-2.png') }}" alt="bg-shape">
    </section>
    <!-- /feature -->



    <!-- jQuery -->
    <script src="{{ asset('landing/plugins/jQuery/jquery.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('landing/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <!-- slick slider -->
    <script src="{{ asset('landing/plugins/slick/slick.min.js') }}"></script>
    <!-- venobox -->
    <script src="{{ asset('landing/plugins/Venobox/venobox.min.js') }}"></script>
    <!-- aos -->
    <script src="{{ asset('landing/plugins/aos/aos.js') }}"></script>
    <!-- Main Script -->
    <script src="{{ asset('landing/js/script.js') }}"></script>

</body>

</html>
