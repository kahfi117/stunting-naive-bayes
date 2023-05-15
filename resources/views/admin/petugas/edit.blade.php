@extends('admin.base')

@push('style')
     <!-- BEGIN GLOBAL MANDATORY STYLES -->
     <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
     <link href="{{ asset('dashboard/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
     <link href="{{ asset('dashboard/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
     <!-- END GLOBAL MANDATORY STYLES -->
 
     <!--  BEGIN CUSTOM STYLE FILE  -->
     <link href="{{ asset('dashboard/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
     <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/plugins/select2/select2.min.css') }}">
     <link href="{{ asset('dashboard/plugins/file-upload/file-upload-with-preview.min.css')}}" rel="stylesheet" type="text/css" />
     <link rel="stylesheet" href="{{ asset('dashboard/plugins/editors/markdown/simplemde.min.css')}}">

     <!--  END CUSTOM STYLE FILE  -->
@endpush

@section('content')
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        
        <div class="row layout-top-spacing" id="cancel-row">
            
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Tambah User Baru</h4>
                            </div>                 
                        </div>
                    </div>
                    <form action="{{ route('user.update', $user->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="widget-content widget-content-area">
                            <div class="row">
                                <div class="col-lg-12 col-12 mx-auto">
                                    <div class="form-group">
                                        <label for="nama">Nama</label> 
                                        <input type="text" class="form-control" name="name" id="nama" value="{{ $user->name }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-12 mx-auto">
                                    <div class="form-group">
                                        <label for="select"></label> 
                                        <select name="role" id="select" class="form-control" required>
                                            <option>--- Pilih Role ---</option>
                                            <option value="admin" {{$user->role == "admin"  ? 'selected' : ''}}>Admin</option>
                                            <option value="petugas" {{$user->role == "petugas"  ? 'selected' : ''}}>Petugas</option>
                                            <option value="user" {{$user->role == "user"  ? 'selected' : ''}}>User</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-12 mx-auto">
                                    <div class="form-group">
                                        <label for="email">Email</label> 
                                        <input type="email" class="form-control" name="email" id="email"  value="{{ $user->email }}" required>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="row">
                                <div class="col-lg-12 col-12 mx-auto">
                                    <div class="form-group">
                                        <label for="password">Password</label> 
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-12 mx-auto">
                                    <div class="form-group">
                                        <label for="password">Konfirmasi Password</label> 
                                        <input type="password" class="form-control" name="password_confirmation" id="password" placeholder="Masukkan Password" required>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="row">
                                <div class="col-lg-12 col-12 mx-auto">
                                    <button class="btn btn-primary" type="submit">Update Data User</button>
                                </div>
                            </div>
                        </div>
                    </form>
                        
                        
                    </div>
                </div>
            </div>
            
        </div>

    <div class="footer-wrapper">
        <div class="footer-section f-section-1">
            <p class="">Copyright © 2020 <a target="_blank" href="https://designreset.com">DesignReset</a>, All rights reserved.</p>
        </div>
        <div class="footer-section f-section-2">
            <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
        </div>
    </div>
</div>
            
        </div>
    </div>
</div>

@endsection


@push('script')
    <script src="{{ asset('dashboard/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('dashboard/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('dashboard/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/app.js') }}"></script>

    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('dashboard/plugins/highlight/highlight.pack.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/custom.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('dashboard/plugins/select2/select2.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/select2/custom-select2.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/scrollspyNav.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/file-upload/file-upload-with-preview.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/editors/markdown/simplemde.min.js')}}"></script>
    <script src="{{ asset('dashboard/plugins/editors/markdown/custom-markdown.js')}}"></script>
@endpush