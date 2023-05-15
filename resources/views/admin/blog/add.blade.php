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
                                <h4>Tambah Blog Baru</h4>
                            </div>                 
                        </div>
                    </div>
                    <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="widget-content widget-content-area">
                            <div class="row">
                                <div class="col-lg-12 col-12 mx-auto">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Judul Blog</label> 
                                    <input type="text" class="form-control" name="judul" id="exampleFormControlInput1" placeholder="Enter the Title" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-12 mx-auto">
                                <div class="form-group">
                                    <label for="kategoriSelect">Kategori</label> 
                                    <select name="kategori" id="kategoriSelect" class="form-control" required>
                                        @foreach ($kategori as $ktg)
                                        <option value="{{ $ktg->id }}">{{ $ktg->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="custom-file-container" data-upload-id="myFirstImage">
                            <label>Upload Tumbnail <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                            <label class="custom-file-container__custom-file" >
                                <input type="file" name="gambar" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                {{-- <input type="file" name="image" style="hide"> --}}
                                <span class="custom-file-container__custom-file__custom-file-control"></span>
                            </label>
                            <div class="custom-file-container__image-preview"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-12 mx-auto">
                                <div class="form-group">
                                    <label for="kategoriSelect">Konten</label> 
                                    <textarea name="konten" id="editor" class="form-control ckeditor"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-12 mx-auto">
                                <div class="form-group">
                                    <label for="kategoriSelect">Tag</label> 
                                    <select name="tag[]" id="tagSelect" class="form-control" multiple>
                                        @foreach ($tag as $t)
                                        <option value="{{ $t->id }}">{{ $t->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-12 mx-auto">
                                <button class="btn btn-primary" type="submit">Buat Blog</button>
                            </div>
                        </div>
                    </form>
                        
                        
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

    {{-- Form Script --}}
    <script>

        var ss = $("#kategoriSelect").select2({
            tags: true,
        });
        var ss = $("#tagSelect").select2({
            tags: true,
        });

        var firstUpload = new FileUploadWithPreview('myFirstImage');
        
        
    </script>
    <script>
        const inputGambar = document.querySelector('input[name="gambar"]');
        const inputImage = document.querySelector('input[name="image"]');
      
        inputGambar.addEventListener('change', (event) => {
          const file = event.target.files[0];
          if (file) {
            inputImage.value = file.name;
          }
        });
      </script>
      
    <script>
        $(document).ready(function() {
            CKEDITOR.replaceAll('.ckeditor');

            CKEDITOR.on('instanceReady', function(event) {
                event.editor.config.filebrowserUploadUrl = "{{route('blog.imageStore', ['_token' => csrf_token() ])}}";
                event.editor.config.filebrowserUploadMethod = 'form';
            });
        });

    </script>
@endpush