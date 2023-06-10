<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>CORK Admin </title>

    <link rel="icon" type="image/x-icon" href="{{ asset('dashboard/assets/img/dinses/sinjai.png')}}"/>
    
    @stack('style')
    <script src="//cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>

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

        <div class="modal fade" id="logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Logout Sistem</h5>
                  {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  </button> --}}
                </div>
                <form action="{{ route('logout') }}" method="post">
                  @csrf
                  <input type="hidden" name="id" id="id" value="">
                  <div class="modal-body">
                    Hi <b>{{ auth()->user()->name }}</b>, Yakin ingin mengakhiri sesi ini
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline-info" data-dismiss="modal">
                      <i class="bx bx-x d-block d-sm-none"></i>
                      <span class="d-none d-sm-block">Tutup</span>
                    </button>
                    <button type="submit" class="btn btn-outline-danger ml-1" id="btn-save">
                      <i class="bx bx-check d-block d-sm-none"></i>
                      <span class="d-none d-sm-block">Yakin</span>
                    </button>
                  </div>
                </form>
              </div>
            </div>
        </div>

        @include('sweetalert::alert')
    </div>
    <!-- END MAIN CONTAINER -->

    @stack('script')


</body>
</html>