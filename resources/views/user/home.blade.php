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
        </div><!--====== End Preloader ======-->
        
        @include('user.layouts.navbar')
        <!--====== Start Banner Section ======-->
        <section class="banner-section">
            <div class="hero-wrapper-one p-r z-1">
                <div class="hero-dots"></div>
                <div class="hero-slider-one">
                    <!--====== Single Slider ======-->
                    <div class="single-slider p-r z-1" data-title="Puskesmas Samenre">
                        <div class="image-layer bg_cover" style="background-image: url(user/assets/images/hero/1.jpg);"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="hero-content text-white">
                                        <span class="sub-title" data-animation="fadeInDown" data-delay=".4s"><span class="number">01</span>Peran Puskesmas</span>
                                        <h1 data-animation="fadeInUp" data-delay=".6s">Puskesmas Samaenre</h1>
                                            <q>
                                                Puskesmas memegang peran yang sangat penting dalam pencegahan stunting. Sebagai tempat pertama yang 
                                                dikunjungi oleh masyarakat dalam mencari pelayanan kesehatan, puskesmas memiliki potensi besar untuk 
                                                memberikan edukasi dan layanan yang diperlukan guna mencegah terjadinya stunting pada anak-anak. 
                                                Melalui tim kesehatan yang terlatih dan berkomitmen, puskesmas dapat menyediakan program gizi balita 
                                                yang holistik, meliputi pemeriksaan rutin pertumbuhan anak, pemberian pendidikan kesehatan kepada 
                                                ibu hamil dan ibu menyusui, serta penyuluhan mengenai nutrisi dan pola makan sehat.
                                            </q>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--====== Single Slider ======-->
                    <div class="single-slider p-r z-1" data-title="Fasilititas Puskesmas">
                        <div class="image-layer bg_cover" style="background-image: url(user/assets/images/hero/2.jpg);"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="hero-content text-white">
                                        <span class="sub-title" data-animation="fadeInDown" data-delay=".4s"><span class="number">02</span>Peran Puskesmas</span>
                                        <h1 data-animation="fadeInUp" data-delay=".6s">Fasilitas Puskesmas</h1>
                                        <q>
                                            Fasilitas puskesmas harus dilengkapi dengan tim kesehatan yang terlatih dan berkompeten dalam memberikan pelayanan 
                                            kesehatan kepada ibu hamil, ibu menyusui, dan balita. program gizi balita yang komprehensif. Hal ini mencakup pemeriksaan 
                                            rutin pertumbuhan anak, termasuk pengukuran berat badan, tinggi badan, dan lingkar lengan atas.
                                            Fasilitas puskesmas juga memberikan akses mudah dan terjangkau bagi masyarakat untuk mendapatkan layanan kesehatan 
                                            yang berkaitan dengan pencegahan stunting. Puskesmas harus menjadi tempat yang ramah anak, menyediakan ruang menyusui yang nyaman, 
                                            serta memberikan dukungan dan bimbingan kepada ibu dalam memberikan ASI eksklusif kepada bayi mereka.
                                        </q>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--====== Single Slider ======-->
                    <div class="single-slider p-r z-1" data-title="Lokasi Puskesmas">
                        <div class="image-layer bg_cover" style="background-image: url(user/assets/images/hero/3.jpg);"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="hero-content text-white">
                                        <span class="sub-title" data-animation="fadeInDown" data-delay=".4s"><span class="number">03</span>Lokasi Puskesmas</span>
                                        <h1 data-animation="fadeInUp" data-delay=".6s">Lokasi Strategis</h1>
                                            <q>
                                                Lokasi puskesmas memainkan peran penting dalam aksesibilitas dan keterjangkauan pelayanan kesehatan dalam mencegah stunting. 
                                                Puskesmas yang strategis ditempatkan di daerah yang mudah dijangkau oleh masyarakat akan memberikan manfaat yang besar. 
                                                Puskesmas Samaenre sendiri sangat mudah dijangkau oleh masyarkat karena berada di tengah-tengah ibu kota kecamatan sinjai selatan
                                                dan mudah diakses dengan kendaraan umum juga, lokasi tepat puskesmas berada di Jl. Poros Bulukumba-Sinjai, Sangianseri, Kec. Sinjai Sel., 
                                                Kabupaten Sinjai, Sulawesi Selatan 92661
                                            </q>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Banner Section ======-->

        <!--====== Start Features Section ======-->
        <section class="features-section pt-95 pb-50">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-10">
                        <!--====== Section Title ======-->
                        <div class="section-title text-center mb-50 wow fadeInDown">
                            <h2>Bahaya Stunting</h2>
                            <span class="sub-title"><span>Kenalan dengan beberapa bahaya yang diakibatkan oleh Stunting</span>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <!--====== Features Thumb Item ======-->
                        <div class="features-thumb-item mb-40 wow fadeInUp">
                            <div class="thumb">
                                <img src="user/assets/images/home/section1-a.png" alt="Features image" height="200px">
                            </div>
                            <div class="text mt-25">
                                <h4 class="title"><a href="#">Gangguan Kognitif</a></h4>
                                <p>Anak dengan stunting memiliki kemampuan kognitif yang lebih buruk.
                                    Tingkat fokus anak juga juga dapat terpengaruh karena mengidap stunting. 
                                    Pasalnya, anak-anak yang stunting akan mengalami kesulitan berkonsentrasi, 
                                    yang membuat mereka kesulitan belajar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <!--====== Features Thumb Item ======-->
                        <div class="features-thumb-item mb-40 wow fadeInUp">
                            <div class="thumb">
                                <img src="user/assets/images/home/section1-b.png" alt="Features image" height="200px">
                            </div>
                            <div class="text mt-25">
                                <h4 class="title"><a href="#">Rentan Mengalami Penyakit</a></h4>
                                <p>Salah satu dampak stunting terhadap kesehatan anak adalah membuat anak lebih 
                                    rentan terhadap penyakit tidak menular saat dewasa nanti. Penyakit tidak 
                                    menular tersebut antara lain obesitas, penyakit jantung, dan hipertensi.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <!--====== Features Thumb Item ======-->
                        <div class="features-thumb-item mb-40 wow fadeInUp">
                            <div class="thumb">
                                <img src="user/assets/images/home/section1-c.jpg" alt="Features image" height="200px">
                            </div>
                            <div class="text mt-25">
                                <h4 class="title"><a href="#">Imun Lebih Rendah</a></h4>
                                <p> Kekebalan yang menurun terkait dengan malnutrisi yang terjadi pada stunting. 
                                    Asupan gizi yang kurang dapat menyebabkan gangguan pada sistem kekebalan 
                                    tubuh secara keseluruhan, sehingga membuat anak lebih rentan terhadap mengidap 
                                    penyakit berulang yang sama.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <!--====== Features Thumb Item ======-->
                        <div class="features-thumb-item mb-40 wow fadeInUp">
                            <div class="thumb">
                                <img src="user/assets/images/home/section1-d.jpg" alt="Features image" height="200px">
                            </div>
                            <div class="text mt-25">
                                <h4 class="title"><a href="#">Hilangnya Produktivitas</a></h4>
                                <p>Orang dewasa dengan riwayat stunting terbukti kurang produktif di tempat kerja, 
                                    yang pada akhirnya memengaruhi pendapatan mereka. Hal ini tidak terjadi pada 
                                    sekelompok orang dewasa yang tidak mengidap stunting saat masih anak-anak</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Features Section ======-->

        {{-- <!--====== Start About Section ======-->
        <section class="about-section pt-100 pb-50">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-image-box text-lg-end pr-lg-30 mb-50 wow fadeInLeft">
                            <img src="user/assets/images/about/about-1.jpg" alt="About Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content-box pl-lg-50 mb-50 wow fadeInRight">
                            <div class="section-title mb-20">
                                <span class="sub-title"><span class="number">03</span>About Us</span>
                                <h2>We’re Most Trusted 
                                    Travel <span class="thin">Partner Aroud
                                        The World</span></h2>
                            </div>
                            <p class="mb-30">Sit amet consectetur adipiscing elit. At donec et fusce orci tellus aliquam vitae. Metus nibh laoreet velit, diam enim. Justo
                                sagittis fringilla ulputatey honcus justo, cras sed</p>
                            <ul class="check-style-one mb-35">
                                <li><i class="flaticon-draw-check-mark"></i>Wild Camping</li>
                                <li><i class="flaticon-draw-check-mark"></i>Family Camping</li>
                                <li><i class="flaticon-draw-check-mark"></i>Tent Camping</li>
                            </ul>
                            <a href="about.html" class="main-btn btn-yellow">learn more us <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End About Section ======--> --}}

        <!--====== Start Video Section ======-->
        <section class="video-bg-section pt-140 pb-210 p-r z-1 bg_cover" style="background-image: linear-gradient(to bottom, rgba(230, 231, 237, 0.52), rgba(0, 0, 0, 0.73)), url(user/assets/images/hero/stunting.jpg) ; ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6" >
                        <div class="video-content-box text-white mb-40 wow fadeInLeft">
                            <h2 class="mb-30">Cegah Stunting Dari Diri Kita</h2>
                            <q>Cegah stunting dengan tindakan dari dirimu sendiri! Gizi seimbang, 
                                pola makan sehat, asupan nutrisi yang cukup, dan perhatian pada 
                                pertumbuhan anak adalah langkah awal yang bisa kita lakukan 
                                untuk mencegah stunting. Bersama-sama, mari jaga kesehatan 
                                generasi masa depan! #StopStunting #CegahStuntingDariDiriSendiri</q>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="play-box text-lg-end mb-40 wow fadeInRight">
                            <a href="https://www.youtube.com/watch?v=PBHFf-eNG2E" id="video-check" class="video-popup"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Video Section ======-->
        
        <!--====== Start Fun Section ======-->
        <section class="fun-fact mt-minus-100 plr-5p p-r z-2">
            <div class="container-fluid">
                <div class="fun-wrapper mt-minus-100 p-r z-2 bg_cover pt-60 pb-20 light-gray-bg" style="background-image: url(user/assets/images/bg/fun-bg-1.png);">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-sm-12">
                                <div class="counter-item mb-30 d-flex justify-content-center wow fadeInUp">
                                    <div class="counter-inner-item">
                                        <blockquote style=" 
                                        text-align: justify; 
                                        text-justify: inter-word; 
                                        border-left: 10px solid #ccc;
                                        margin-left: 1.5em 10px;
                                        margin-right: 1.5em 10px;
                                        padding: 0.5em 10px;
                                        quotes: '\201C''\201D''\2018''\2019';">
                                            <p style="display: inline; font-size: 23px;">
                                                Menurut WHO (2015), stunting adalah gangguan pertumbuhan dan 
                                                perkembangan anak akibat kekurangan gizi kronis dan infeksi 
                                                berulang, yang ditandai dengan panjang atau tinggi badannya 
                                                berada di bawah standar. Selanjutnya menurut WHO (2020) 
                                                stunting adalah pendek atau sangat pendek berdasarkan 
                                                panjang / tinggi badan menurut usia yang kurang dari -2 
                                                standar deviasi (SD) pada kurva pertumbuhan WHO yang t
                                                erjadi dikarenakan kondisi irreversibel akibat asupan 
                                                nutrisi yang tidak adekuat dan/atau infeksi berulang / 
                                                kronis yang terjadi dalam 1000 HPK. 
                                            </p>
                                            <i><b> - dr. Desi Fajar Susanti, M.Sc, Sp.A (K) - </b></i> 
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Fun Section ======-->
        
        <!--====== Start Choose Section ======-->
        <section class="choose-bg-section p-r z-1 pt-50 pb-20">
            <div class="choose-bg bg_cover wow fadeInLeft" style="background-image: url(user/assets/images/home/ceria.jpeg);"></div>
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-6 col-lg-12">
                        <div class="choose-content-box pl-lg-70 pr-lg-50">
                            <div class="section-title mb-40 wow fadeInDown">
                                <span class="sub-title"></span>CEGAH STUNTING</span>
                                <h2>Bagaimana Cara Pencegahan Stunting?</h2>
                            </div>
                            <ul>
                                <li class="features-left-icon-box mb-35 wow fadeInUp">
                                    <div class="icon bg-one">
                                        <i class="flaticon-tent-1"></i>
                                    </div>
                                    <div class="text">
                                        <h5 class="title">ASI itu penting</h5>
                                        <p>Memberikan ASI eksklusif pada bayi hingga berusia 6 bulan</p>
                                    </div>
                                </li>
                                <li class="features-left-icon-box mb-35 wow fadeInUp">
                                    <div class="icon bg-one">
                                        <i class="flaticon-tent-2"></i>
                                    </div>
                                    <div class="text">
                                        <h5 class="title">Ayo Ke Posyandu</h5>
                                        <p>Memantau perkembangan anak dan membawa ke posyandu secara berkala</p>
                                    </div>
                                </li>
                                <li class="features-left-icon-box mb-35 wow fadeInUp">
                                    <div class="icon bg-one">
                                        <i class="flaticon-tent-3"></i>
                                    </div>
                                    <div class="text">
                                        <h5 class="title">Ingat TTD</h5>
                                        <p>Mengkonsumsi secara rutin Tablet tambah Darah (TTD)</p>
                                    </div>
                                </li>
                                <li class="features-left-icon-box mb-35 wow fadeInUp">
                                    <div class="icon bg-one">
                                        <i class="flaticon-tent-4"></i>
                                    </div>
                                    <div class="text">
                                        <h5 class="title">Makanan Pendamping Asi</h5>
                                        <p>Memberikan MPASI yang begizi dan kaya protein hewani untuk bayi yang berusia diatas 6 bulan</p>
                                    </div>
                                </li>
                                <li class="features-left-icon-box mb-35 wow fadeInUp">
                                    <div class="icon bg-one">
                                        <i class="flaticon-tent-5"></i>
                                    </div>
                                    <div class="text">
                                        <h5 class="title">Pola Hidup Sehat</h5>
                                        <p>Tetap terapkan perilaku hidup bersih dan sehat, serta bersegera untuk melakukan pemeriksaan 
                                            ke fasilitas kesehatan terdekat apabila mengalami gejala penyakit, agar bisa segera 
                                            mendapatkan penanganan sedini mungkin dari para petugas kesehatan</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Choose Section ======-->
        
        <!--====== Start CTa Section ======-->
        <section class="cta-section dark-green-bg pt-70 pb-35">
            <div class="container">
                <div class="cta-wrapper bg_cover">
                    <div class="row align-items-center" style="">
                        <div class="col-lg-7">
                            <div class="section-title text-white mb-40 wow fadeInLeft">
                                <h2>Cek Status Stunting Anak <span class="thin">Kenali lebih awal</span></h2>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="cta-button float-lg-end mb-35 wow fadeInRight">
                                <button class="main-btn btn-yellow" data-bs-toggle="modal" data-bs-target="#stuntingModal">Cek Sekarang<i class="far fa-angle-double-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End CTa Section ======-->

        {{-- <!--====== Start Gallery Section ======-->
        <section class="gallery-section pt-90">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-10">
                        <div class="section-title text-center mb-50 wow fadeInDown">
                            <span class="sub-title"><span class="number">06</span>Recent Gallery</span>
                            <h2>Take a Look About Our Recent <span class="thin">Camping Photo</span></h2>
                        </div>
                    </div>
                </div>
                <div class="gallery-slider-one wow fadeInUp">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="user/assets/images/gallery/gl-1.jpg" alt="Gallery Image">
                            <div class="hover-overlay">
                                <div class="hover-content text-center text-white">
                                    <a href="gallery.html" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                                    <h4 class="title"><a href="gallery.html">Tent Camping</a></h4>
                                    <a href="#" class="cat-link">Forest Traveling</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="user/assets/images/gallery/gl-2.jpg" alt="Gallery Image">
                            <div class="hover-overlay">
                                <div class="hover-content text-center text-white">
                                    <a href="gallery.html" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                                    <h4 class="title"><a href="gallery.html">Tent Camping</a></h4>
                                    <a href="#" class="cat-link">Forest Traveling</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="user/assets/images/gallery/gl-3.jpg" alt="Gallery Image">
                            <div class="hover-overlay">
                                <div class="hover-content text-center text-white">
                                    <a href="gallery.html" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                                    <h4 class="title"><a href="gallery.html">Tent Camping</a></h4>
                                    <a href="#" class="cat-link">Forest Traveling</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="user/assets/images/gallery/gl-4.jpg" alt="Gallery Image">
                            <div class="hover-overlay">
                                <div class="hover-content text-center text-white">
                                    <a href="gallery.html" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                                    <h4 class="title"><a href="gallery.html">Tent Camping</a></h4>
                                    <a href="#" class="cat-link">Forest Traveling</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="user/assets/images/gallery/gl-3.jpg" alt="Gallery Image">
                            <div class="hover-overlay">
                                <div class="hover-content text-center text-white">
                                    <a href="gallery.html" class="icon-btn"><i class="far fa-arrow-right"></i></a>
                                    <h4 class="title"><a href="gallery.html">Tent Camping</a></h4>
                                    <a href="#" class="cat-link">Forest Traveling</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Gallery Section ======--> --}}

        <!--====== Start Blog Section ======-->
        <section class="blog-section pt-90 pb-50 mt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-10">
                        <div class="section-title text-center mb-50 wow fadeInDown">
                            <h2>Blog</h2>
                            <span class="sub-title">Read EveryBlog</span>
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
                                        <li><span><a href="#"><i class="far fa-calendar-alt"></i> {{ date('M d,Y', strtotime($item->created_at))}}</a></span></li>
                                        <li><span><a href="#"><i class="far fa-user"></i> {{ $item->user->name }}</a></span></li>
                                    </ul>
                                </div>
                                <h4 class="title"><a href="blog-details.html">{!! $item->title !!}</a></h4>
                                    <a href="blog-details.html" class="btn-link">Read more <i class="far fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section><!--====== End Blog Section ======-->

        @include('user.modal')
        
        <!--====== Start Footer ======-->
        @include('user.layouts.footer')
        <!--====== End Footer ======-->
        
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
    </body>
</html>