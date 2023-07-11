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
</head>

<body>
    <!--====== Start Preloader ======-->
    <div class="preloader">
        <div class="loader">
            <div class="pre-shadow"></div>
            <div class="pre-box"></div>
        </div>
    </div>
    <!--====== End Preloader ======-->
    <!--====== Search From ======-->
    @include('user.layouts.navbar')
    {{--
    <!--====== Start Breadcrumb Section ======-->
    <section class="page-banner light-red-bg pt-170 pb-170 bg_cover"
        style="background-image: url(assets/images/bg/page-bg-1.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="page-banner-content text-center text-white">
                        <h1 class="page-title">About Us</h1>
                        <ul class="breadcrumb-link text-white">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Breadcrumb Section ======--> --}}
    <!--====== Start Who-we Section ======-->
    <section class="who-we-bg-section p-r z-1 pt-100 pb-100">
        @if ($predicted == 'absence')
        <div class="who-bg bg_cover wow fadeInLeft"
            style="background-image: url({{ asset('user/assets/images/home/absence.png') }});"></div>
        <div class="container-fluid">
            <div class="row justify-content-end">
                <div class="col-xl-6 col-lg-12">
                    <div class="who-we-wrapper wow fadeInDown">
                        <div id="myChart" style="width:100%; max-width:600px; height:300px;"></div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title wow fadeInUp">
                                    <span class="sub-title"><span class="number"></span> &#127881;&#127881;&#127881;
                                    </span>
                                    <h2>Si Paling Sehat</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 justify-content-center wow fadeInUp">
                            <div class="col-lg-12 col-md-12">
                                <div class="fancy-icon-box mb-2">
                                    <div class="icon">
                                        <i class="far fa-shield-check"></i>
                                    </div>
                                    <div class="text">
                                        <h5 class="title">Horee! {{ $nama }}
                                        </h5>
                                        <h6>
                                            Tumbuh tinggi dan sehat seperti seharusnya,
                                            tidak ada kekhawatiran tentang stunting.
                                        </h6>
                                        <p style="text-transform: capitalize">Hasil Sistem Mengatakan : Tidak Beresiko
                                            Stunting
                                        </p>
                                        <span class="line"></span>
                                    </div>
                                    <div class="text">
                                        <p>
                                            Rekomendasi Bacaan Untuk Anda
                                            <span class="thin" style="color : blue">
                                                <a href="{{ route('blog') }}">
                                                {{-- <a href="{{ url('blog/kategori/absence') }}"> --}}
                                                    Klik Disini
                                                </a>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="who-bg bg_cover wow fadeInLeft"
            style="background-image: url({{ asset('user/assets/images/home/presence.png') }});"></div>
        <div class="container-fluid">
            <div class="row justify-content-end">
                <div class="col-xl-6 col-lg-12">
                    <div class="who-we-wrapper wow fadeInDown">
                        <div id="myChart" style="width:100%; max-width:600px; height:300px;"></div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title wow fadeInUp">
                                    <span class="sub-title"><span class="number"></span>
                                        &#128577;&#128577;&#128577;</span>
                                    <h2>Ayo Ke Puskesmas</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 justify-content-center wow fadeInUp">
                            <div class="col-lg-12 col-md-12">
                                <div class="fancy-icon-box mb-2">
                                    <div class="icon">
                                        <i class="fas fa-exclamation-triangle" style="color: #F7921E;"></i>
                                    </div>
                                    <div class="text">
                                        <h5 class="title">Hai {{ $nama }}, <br>
                                        </h5>
                                        <h6>
                                            Jangan khawatir bersama-sama, kita akan membuat perubahan positif
                                            untuk menghentikan stunting dan memastikan kamu tumbuh dengan baik.
                                        </h6>
                                        <p style="text-transform: capitalize">Hasil Sistem Mengatakan : Beresiko
                                            Stunting
                                        </p>
                                            <span class="line"></span>
                                    </div>
                                    <div class="text">
                                        <p>
                                            Rekomendasi Bacaan Untuk Anda
                                            <span class="thin" style="color : blue">
                                                <a href="{{ route('blog') }}">
                                                {{-- <a href="{{ url('blog/kategori/absence') }}"> --}}
                                                    Klik Disini
                                                </a>
                                            </span>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

    </section>
    <!--====== End Who-we Section ======-->
    {{-- <!--====== Start Blog Section ======-->
    <section class="blog-section pt-90 pb-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="section-title text-center mb-50 wow fadeInDown">
                        <h2>Rekomendasi Bacaan Untuk Anda <br><span class="thin">Articles & Tips</span></h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($blog as $item)

                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="single-blog-post-item mb-40 wow fadeInUp">
                        <div class="post-thumbnail">
                            <img src="{{  asset('images/'.$item->tumbnail)}}" alt="Blog Image" height="300px">
                        </div>
                        <div class="entry-content">
                            <div class="post-meta">
                                <ul>
                                    <li><span><a href="#"><i class="far fa-calendar-alt"></i> {{ date('M d,Y',
                                                strtotime($item->created_at))}}</a></span></li>
                                    <li><span><a href="#"><i class="far fa-user"></i> {{ $item->user->name }}</a></span>
                                    </li>
                                </ul>
                            </div>
                            <h4 class="title"><a href="{{ route('detailBlog', $item->slug) }}">{!! $item->title !!}</a>
                            </h4>
                            <a href="{{ route('detailBlog', $item->slug) }}" class="btn-link">Read more <i
                                    class="far fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--====== End Blog Section ======--> --}}
    @include('user.modal')

    @include('user.layouts.footer')
    <!--====== Back To Top  ======-->
    <a href="#" class="back-to-top"><i class="far fa-angle-up"></i></a>
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

    <script src="https://www.gstatic.com/charts/loader.js"></script>

    <script>
        var absence = {{ $nilaiAbsence ?? 0}};
            var presence = {{ $nilaiPresence ?? 0}};
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);
            
            function drawChart() {
            
            // Set Data
            const data = google.visualization.arrayToDataTable([
              ['invisible', '', { role: 'style' }],
              ['Tidak Beresiko', absence, '#63AC45'],
              ['Beresiko', presence, '#F7921E'],
            ]);
            
            // Set Options
            const options = {
              title:'NILAI PERHITUNGAN SISTEM'
            };
            
            // Draw
            const chart = new google.visualization.BarChart(document.getElementById('myChart'));
            chart.draw(data, options);
            
            }
    </script>


</body>

</html>