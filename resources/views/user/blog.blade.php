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
        <!--====== Start Breadcrumb Section ======-->
        <section class="page-banner light-red-bg pt-170 pb-170 bg_cover" style="background-image: url('{{ asset("user/assets/images/bg/page-bg-1.jpg") }}');">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="page-banner-content text-center text-white">
                            <h2 class="page-title">Belajar Stunting Itu Baik</h2>
                            <ul class="breadcrumb-link text-white">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="active">Blog</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Breadcrumb Section ======-->
        <!--====== Start Breadcrumb Section ======-->
        <section class="blog-standard-section pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="blog-standard-wrapper mb-30">
                            @foreach ($blog as $item)
                                
                            <div class="blog-standard-post-item mb-50 wow fadeInUp">
                                <div class="post-thumbnail">
                                    <img src="{{  asset('images/'.$item->tumbnail)}}" alt="Post Image">
                                </div>
                                <div class="entry-content">
                                    <div class="post-meta">
                                        <ul>
                                            <li><span><a href="#"><i class="far fa-calendar-alt"></i> {{ date('M d,Y', strtotime($item->created_at))}}</a></span></li>
                                            <li><span><a href="#"><i class="far fa-user"></i> {{ $item->user->name }}</a></span></li>
                                        </ul>
                                    </div>
                                    <h3 class="title">
                                        <a href="{{ route('detailBlog', $item->slug) }}">
                                            {!! $item->title !!}
                                        </a>
                                    </h3>
                                    <a href="{{ route('detailBlog', $item->slug) }}" class="btn-link">read more<i class="far fa-angle-double-right"></i></a>
                                </div>
                            </div>
                            @endforeach
                                {{ $blog->links() }}
                            </div>
                        </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar-widget-area pl-lg-40">
                            <!--=== Search Widget ===-->
                            <div class="sidebar-widget search-widget mb-30 wow fadeInUp">
                                <h5 class="widget-title">Search</h5>
                                <form method="get" action="{{ route('blog') }}">
                                    @csrf
                                    <div class="form_group">
                                        <label><i class="far fa-search"></i></label>
                                        <input type="text" class="form_control" value="{{ $search ?? null }}" placeholder="Search" name="search" required>
                                    </div>
                                </form>
                            </div>
                            <!--=== Category Widget ===-->
                            @if (url('/blog/kategori'))
                            @else
                            <div class="sidebar-widget category-widget mb-30 wow fadeInUp">
                                <h5 class="widget-title">Kategory</h5>
                                <ul class="category-nav">
                                    @forelse ($kategori as $kat)
                                    <li><a href="{{ route('blogKategori', $kat->slug) }}">{{ $kat->nama }}<i class="far fa-arrow-right"></i></a></li>
                                    @empty
                                        
                                    @endforelse
                                </ul>
                            </div>
                                
                            @endif
                            <!--=== Recent Post Widget ===-->
                            <div class="sidebar-widget recent-post-widget mb-40 wow fadeInUp">
                                <h5 class="widget-title">Recent Blog</h5>
                                <ul class="recent-post-list">
                                    @foreach ($recent as $rt)   
                                    <li class="post-thumbnail-content">
                                        <img src="{{ url('images/'.$rt->tumbnail) }}" alt="post thumb">
                                        <div class="post-title-date">
                                            <h5><a href="{{ route('detailBlog', $rt->slug) }}">{{$rt->title}}</a></h5>
                                            <span class="posted-on"><i class="far fa-calendar-alt"></i><a href="#">{{ date('M d,Y', strtotime($rt->updated_at)) }}</a></span>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Breadcrumb Section ======-->
        
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