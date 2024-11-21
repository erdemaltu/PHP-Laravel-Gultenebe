@extends('layouts.admin')

@section('title',$service->title.' hizmetini güncelle')

@section('javascript')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
@endsection

@section('content')
    <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18"><A>{{$service->title}} Hizmeti Güncelle</A></h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{ route('services.index') }}">Hizmet</a></li>
                                            <li class="breadcrumb-item active">Hizmeti Düzenleme</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- end page title -->
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Düzenle</h4>
                                        @include('admin.alert')
                                        <form action="{{route('services.update',['id'=>$service->id])}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Başlık (Türkçe)</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" id="horizontal-firstname-input" name="name_tr" placeholder="...." value="{{$service->name_tr}}">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Başlık (İngilizce)</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" id="horizontal-firstname-input" name="name_en" placeholder="...." value="{{$service->name_en}}">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Tanım (Türkçe)</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" id="horizontal-firstname-input" name="definition_tr" placeholder="...." value="{{$service->definition_tr}}">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Tanım (İngilizce)</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" id="horizontal-firstname-input" name="definition_en" placeholder="...." value="{{$service->definition_en}}">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">SEO Başlık</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" id="horizontal-firstname-input" name="seo_title" placeholder="...." value="{{$service->seo_title}}">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">SEO Açıklama</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" id="horizontal-firstname-input" name="seo_description" placeholder="...." value="{{$service->seo_description}}">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">SEO Anahtar Kelimeler</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" id="horizontal-firstname-input" name="seo_keywords" placeholder="...." value="{{$service->seo_keywords}}">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Resim</label>
                                                <div class="col-sm-9">
                                                    @if($service->image)
                                                    <div class="row">
                                                        <div class="col-lg-2">
                                                            <img src="{{ asset('uploads/services/'.$service->image)}}" class="img-thumbnail rounded" alt="" width="300" data-holder-rendered="true">
                                                        </div>
                                                    </div>
                                                    @endif
                                                    <input type="file" class="form-control" id="horizontal-firstname-input" name="image" placeholder="....">

                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">İçerik (Türkçe)</label>
                                                <div class="col-sm-9">
                                                    <textarea id="summernote_tr" name="description_tr">{{$service->description_tr}}</textarea>
                                                <script>
                                                $('#summernote_tr').summernote({
                                                    height: 300, 
                                                    minHeight: 200, 
                                                    maxHeight: 500, 
                                                    focus: true,
                                                    lang: 'tr-TR', 
                                                    toolbar: [
                                                        ['style', ['style']], 
                                                        ['font', ['bold', 'italic', 'underline', 'clear']], 
                                                        ['fontname', ['fontname']], 
                                                        ['fontsize', ['fontsize']], 
                                                        ['color', ['color']], 
                                                        ['para', ['ul', 'ol', 'paragraph']], 
                                                        ['table', ['table']], 
                                                        ['insert', ['link', 'picture', 'video']], 
                                                        ['view', ['fullscreen', 'codeview', 'help']] 
                                                    ],
                                                    fontNames: [
                                                        'Arial', 'Courier New', 'Georgia', 'Times New Roman', 'Verdana', 'Roboto', 'Montserrat'
                                                    ],
                                                    fontSizes: [
                                                        '8', '10', '12', '14', '16', '18', '20', '24', '28', '32', '36', '40', '48', '64', '72'
                                                    ],
                                                    callbacks: {
                                                        onPaste: function (e) {
                                                            var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                                                            e.preventDefault();
                                                            document.execCommand('insertText', false, bufferText);
                                                        }
                                                    }
                                                });
                                                </script>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">İçerik (İngilizce)</label>
                                                <div class="col-sm-9">
                                                    <textarea id="summernote_en" name="description_en">{{$service->description_en}}</textarea>
                                                <script>
                                                $('#summernote_en').summernote({
                                                    height: 300, 
                                                    minHeight: 200, 
                                                    maxHeight: 500, 
                                                    focus: true,
                                                    lang: 'en-US', 
                                                    toolbar: [
                                                        ['style', ['style']], 
                                                        ['font', ['bold', 'italic', 'underline', 'clear']], 
                                                        ['fontname', ['fontname']], 
                                                        ['fontsize', ['fontsize']], 
                                                        ['color', ['color']], 
                                                        ['para', ['ul', 'ol', 'paragraph']], 
                                                        ['table', ['table']], 
                                                        ['insert', ['link', 'picture', 'video']], 
                                                        ['view', ['fullscreen', 'codeview', 'help']] 
                                                    ],
                                                    fontNames: [
                                                        'Arial', 'Courier New', 'Georgia', 'Times New Roman', 'Verdana', 'Roboto', 'Montserrat'
                                                    ],
                                                    fontSizes: [
                                                        '8', '10', '12', '14', '16', '18', '20', '24', '28', '32', '36', '40', '48', '64', '72'
                                                    ],
                                                    callbacks: {
                                                        onPaste: function (e) {
                                                            var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                                                            e.preventDefault();
                                                            document.execCommand('insertText', false, bufferText);
                                                        }
                                                    }
                                                });
                                                </script>
                                                </div>
                                            </div>
                                            <div class="row justify-content-end">
                                                <div class="col-sm-9">

                                                    <div>
                                                        <button type="submit" class="btn btn-primary w-md">Hizmeti Düzenle</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
@endsection
