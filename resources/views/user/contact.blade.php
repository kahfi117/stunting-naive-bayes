<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--====== Title ======-->
        <title>{{ env('APP_NAME') }}</title>
        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="{{  asset('user/assets/images/logo/logo.png')}}" type="image/png">
        <!--====== Flaticon css ======-->
        <link rel="stylesheet" href="{{  asset('user/assets/fonts/flaticon/flaticon.css')}}">
        <!--====== FontAwesome css ======-->
        <link rel="stylesheet" href="{{  asset('user/assets/fonts/fontawesome/css/all.min.css')}}">
        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="{{  asset('user/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
        <!--====== magnific-popup css ======-->
        <link rel="stylesheet" href="{{  asset('user/assets/vendor/magnific-popup/dist/magnific-popup.css')}}">
        <!--====== Slick-popup css ======-->
        <link rel="stylesheet" href="{{  asset('user/assets/vendor/slick/slick.css')}}">
        <!--====== Jquery UI css ======-->
        <link rel="stylesheet" href="{{  asset('user/assets/vendor/jquery-ui/jquery-ui.min.css')}}">
        <!--====== Nice Select css ======-->
        <link rel="stylesheet" href="{{  asset('user/assets/vendor/nice-select/css/nice-select.css')}}">
        <!--====== Animate css ======-->
        <link rel="stylesheet" href="{{  asset('user/assets/vendor/animate.css')}}">
        <!--====== Default css ======-->
        <link rel="stylesheet" href="{{  asset('user/assets/css/default.css')}}">
        <!--====== Style css ======-->
        <link rel="stylesheet" href="{{  asset('user/assets/css/style.css')}}">

        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
        crossorigin=""/>
        <style>
            #map { height: 700px; }
        </style>


    </head>
    <body>
        <!--====== Start Preloader ======-->
        <div class="preloader">
            <div class="loader">
                <div class="pre-shadow"></div>
                <div class="pre-box"></div>
            </div>
        </div><!--====== End Preloader ======-->

        @include('user.layouts.navbar')

        <!--====== Start Breadcrumb Section ======-->
        <section class="page-banner light-red-bg pt-170 pb-170 bg_cover" style="background-image: url(assets/images/bg/page-bg-1.jpg);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="page-banner-content text-center text-white">
                            <h1 class="page-title">Contact Us</h1>
                            <ul class="breadcrumb-link text-white">
                                <li><a href="index.html">Home</a></li>
                                <li class="active">Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Breadcrumb Section ======-->

        <!--====== Start Contact Section ======-->
        <section class="contact-bg-section bg_cover pt-100 pb-50" style="background-image: url(assets/images/bg/contact-bg-1.png);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="contact-content-box mb-50">
                            <div class="section-title mb-45 wow fadeInUp">
                                <span class="sub-title"><span class="number"></span>Contact Us</span>
                                <h2>Ready to <span class="thin">Better Healthies</span></h2>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="contact-icon-box mb-50 wow fadeInDown">
                                        <div class="icon">
                                            <i class="fal fa-map-marker-alt"></i>
                                        </div>
                                        <div class="text">
                                            <h4 class="title">Locations</h4>
                                            <p>Jl. Poros Bulukumba-Sinjai, Sangianseri, 
                                                Kec. Sinjai Sel., Kabupaten Sinjai, 
                                                Sulawesi Selatan 92661</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-icon-box mb-50 wow fadeInDown">
                                        <div class="icon">
                                            <i class="fal fa-phone"></i>
                                        </div>
                                        <div class="text">
                                            <h4 class="title">Hotline</h4>
                                            <p><a href="tel:+62(0482) 2424528">tel:(0482) 2424528</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Contact Section ======-->
        <!--====== Start Contact Map Section ======-->
        <section class="contact-page-map pb-100 wow fadeInUp">
            <div class="container-fluid">
                <!--=== Map Box ===-->
                <div id="map"></div>

            </div>
        </section>
        <!--====== End Contact Map Section ======-->
        
        @include('user.modal')

        @include('user.layouts.footer')
        <!--====== Back To Top  ======-->
        <a href="#" class="back-to-top" ><i class="far fa-angle-up"></i></a>
        <!--====== Jquery js ======-->
        <script src="{{  asset('user/assets/vendor/jquery-3.6.0.min.js')}}"></script>
        <!--====== Bootstrap js ======-->
        <script src="{{  asset('user/assets/vendor/popper/popper.min.js')}}"></script>
        <!--====== Bootstrap js ======-->
        <script src="{{  asset('user/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
        <!--====== Slick js ======-->
        <script src="{{  asset('user/assets/vendor/slick/slick.min.js')}}"></script>
        <!--====== Magnific js ======-->
        <script src="{{  asset('user/assets/vendor/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
        <!--====== Isotope js ======-->
        <script src="{{  asset('user/assets/vendor/isotope.min.js')}}"></script>
        <!--====== Imagesloaded js ======-->
        <script src="{{  asset('user/assets/vendor/imagesloaded.min.js')}}"></script>
        <!--====== Counterup js ======-->
        <script src="{{  asset('user/assets/vendor/jquery.counterup.min.js')}}"></script>
        <!--====== Waypoints js ======-->
        <script src="{{  asset('user/assets/vendor/jquery.waypoints.js')}}"></script>
        <!--====== Nice-select js ======-->
        <script src="{{  asset('user/assets/vendor/nice-select/js/jquery.nice-select.min.js')}}"></script>
        <!--====== jquery UI js ======-->
        <script src="{{  asset('user/assets/vendor/jquery-ui/jquery-ui.min.js')}}"></script>
        <!--====== WOW js ======-->
        <script src="{{  asset('user/assets/vendor/wow.min.js')}}"></script>
        <!--====== Main js ======-->
        <script src="{{  asset('user/assets/js/theme.js')}}"></script>

        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

        <script>
            var map = L.map('map').setView([-5.2576671, 120.1571321], 13);

            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            L.marker([-5.2576671, 120.1571321]).addTo(map)
                .bindPopup('PUSKESMAS SAMAENRE')
                .openPopup();
         </script>
         
    </body>
</html>