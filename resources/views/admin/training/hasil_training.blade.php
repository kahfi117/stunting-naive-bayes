@extends('admin.base')

@push('style')
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{ asset('dashboard/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
        
    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/plugins/table/datatable/datatables.css')}}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/plugins/table/datatable/custom_dt_html5.css')}}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/plugins/table/datatable/dt-global_style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/plugins/table/datatable/custom_dt_custom.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard/assets/css/forms/theme-checkbox-radio.css')}}">

    <link href="{{ asset('dashboard/plugins/tagInput/tags-input.css')}}" rel="stylesheet" type="text/css" />

    <!-- END PAGE LEVEL CUSTOM STYLES -->
@endpush


@section('content')
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        
        <div class="row layout-top-spacing" id="cancel-row">
            
            <div class="col-xl-12 col-Alg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="title">Hasil Uji Massal</h4>
                        </div>
                    </div>
                    
                    <div class="table-responsive mb-4 mt-4">
                        <table id="default-ordering" class="table style-3 table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Umur(bulan)</th>
                                    <th>BB</th>
                                    <th>TB</th>
                                    <th>LLA</th>
                                    <th>Status Awal</th>
                                    <th>Status Uji</th>
                                </tr>
                            </thead>
                            @php
                                $no = 1;
                            @endphp
                            <tbody>
                                @foreach ($predictions as $predicted)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $predicted['nama'] }}</td>
                                    <td>{{ $predicted['umur'] }}</td>
                                    <td>{{ $predicted['bb'] }}</td>
                                    <td>{{ $predicted['tb'] }}</td>
                                    <td>{{ $predicted['lla'] }}</td>
                                    @if ($predicted['status_awal'] == 'absence')
                                    <td>
                                        <span class="badge badge-primary"> Absence </span>
                                    </td>
                                    @else
                                    <td>
                                        <span class="badge badge-danger"> Presence </span>
                                    </td>
                                    @endif
                                    @if ($predicted['status'] == 'absence')
                                    <td>
                                        <span class="badge badge-primary"> Absence </span>
                                    </td>
                                    @else
                                    <td>
                                        <span class="badge badge-danger"> Presence </span>
                                    </td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Umur</th>
                                    <th>BB</th>
                                    <th>TB</th>
                                    <th>LLA</th>
                                    <th>Status</th>
                                    <th class="invisible"></th>
                                </tr>
                            </tfoot>
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
    <script src="{{ asset('dashboard/plugins/table/datatable/datatables.js')}}"></script>
    <script>        
        $('#default-ordering').DataTable( {
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "order": [[ 0, "asc" ]],
            "stripeClasses": [],
            "lengthMenu": [ 10, 20, 50, 100, 200],
            "pageLength": 10,
            drawCallback: function () { $('.dataTables_paginate > .pagination').addClass(' pagination-style-13 pagination-bordered mb-5'); }
	    } );
    </script>
    <script src="{{ asset('dashboard/assets/js/scrollspyNav.js')}}"></script>
    <script src="{{ asset('dashboard/plugins/tagInput/tags-input.js')}}"></script>
    <!-- END PAGE LEVEL CUSTOM SCRIPTS -->
@endpush