@extends('admin.base')

@push('style')
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{ asset('dashboard/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
        
    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link href="{{ asset('dashboard/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/assets/css/forms/theme-checkbox-radio.css')}}">
    <link href="{{ asset('dashboard/assets/css/tables/table-basic.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL CUSTOM STYLES -->

    <!-- END PAGE LEVEL CUSTOM STYLES -->
@endpush


@section('content')
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        
        <div class="row layout-top-spacing" id="cancel-row">
            
            <div class="col-xl-12 col-Alg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-12">
                    <button class="btn btn-secondary mb-2"> Probabilitas Nilai Umur</button> 
                    <div class="table-responsive">
                        <table class="table table-bordered mb-4">
                            <thead>
                                <tr>
                                    <th>Kategori</th>
                                    <th rowspan="2">Label</th>
                                    <th>Jumlah</th>
                                    <th class="text-center">Peluang</th>
                                    <th class="text-right">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @include('admin.probabilitas.umur')
                            </tbody>
                        </table>
                    </div>
                        
                </div>
            </div>

            <div class="col-xl-12 col-Alg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-12">
                    <button class="btn btn-secondary mb-2"> Probabilitas Nilai Berat Badan</button> 
                    <div class="table-responsive">
                        <table class="table table-bordered mb-4">
                            <thead>
                                <tr>
                                    <th>Kategori</th>
                                    <th rowspan="2">Label</th>
                                    <th>Jumlah</th>
                                    <th class="text-center">Peluang</th>
                                    <th class="text-right">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @include('admin.probabilitas.berat_badan')
                            </tbody>
                        </table>
                    </div>
                        
                </div>
            </div>
            <div class="col-xl-12 col-Alg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-12">
                    <button class="btn btn-secondary mb-2"> Probabilitas Nilai Tinggi Badan</button> 
                    <div class="table-responsive">
                        <table class="table table-bordered mb-4">
                            <thead>
                                <tr>
                                    <th>Kategori</th>
                                    <th rowspan="2">Label</th>
                                    <th>Jumlah</th>
                                    <th class="text-center">Peluang</th>
                                    <th class="text-right">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @include('admin.probabilitas.tinggi_badan')
                            </tbody>
                        </table>
                    </div>
                        
                </div>
            </div>
            <div class="col-xl-12 col-Alg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-12">
                    <button class="btn btn-secondary mb-2"> Probabilitas Nilai Lingkar Lengan Atas</button> 
                    <div class="table-responsive">
                        <table class="table table-bordered mb-4">
                            <thead>
                                <tr>
                                    <th>Kategori</th>
                                    <th rowspan="2">Label</th>
                                    <th>Jumlah</th>
                                    <th class="text-center">Peluang</th>
                                    <th class="text-right">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @include('admin.probabilitas.lingkar_atas')
                            </tbody>
                        </table>
                    </div>
                        
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
@endsection

@push('script')
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('dashboard/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{ asset('dashboard/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{ asset('dashboard/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('dashboard/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{ asset('dashboard/assets/js/app.js')}}"></script>
    
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('dashboard/plugins/highlight/highlight.pack.js')}}"></script>
    <script src="{{ asset('dashboard/assets/js/custom.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
    <script src="{{ asset('dashboard/assets/js/scrollspyNav.js')}}"></script>
    <script>
        checkall('todoAll', 'todochkbox');
        $('[data-toggle="tooltip"]').tooltip()
    </script>
    <script src="{{ asset('dashboard/plugins/tagInput/tags-input.js')}}"></script>
    <!-- END PAGE LEVEL CUSTOM SCRIPTS -->
@endpush