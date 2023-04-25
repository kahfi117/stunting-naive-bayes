<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>CORK Admin </title>

    <link rel="icon" type="image/x-icon" href="{{ asset('dashboard/assets/img/dinses/sinjai.png')}}"/>
    
    @stack('style')

</head>
<body class="sidebar-noneoverflow">
    <!-- BEGIN LOADER -->
    @yield('loader')
    <!--  END LOADER -->

    {{-- Navbar Start --}}

    @include('admin.layout.navbar')

    {{-- Navbar End --}}

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        @include('admin.layout.sidebar')
        <!--  END SIDEBAR  -->
        
        <!--  BEGIN CONTENT AREA  -->
        @yield('content')
        <!--  END CONTENT AREA  -->


    </div>
    <!-- END MAIN CONTAINER -->

    @stack('script')

</body>
</html>