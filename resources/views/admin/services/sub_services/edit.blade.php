@extends('layouts.admin')

@section('title',$subservice->title.' alt hizmetini güncelle')

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
                                    <h4 class="mb-sm-0 font-size-18"><A>{{$subservice->title}} Alt Hizmeti Güncelle</A></h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{ route('services.index') }}">Hizmet</a></li>
                                            <li class="breadcrumb-item"><a href="{{ route('subservices.index',['id'=>$subservice->service_id]) }}">Alt Hizmet</a></li>
                                            <li class="breadcrumb-item active">Alt Hizmeti Düzenleme</li>
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
                                        <form action="{{route('subservices.update',['id'=>$subservice->id])}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Başlık (Türkçe)</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" id="horizontal-firstname-input" name="name_tr" placeholder="...." value="{{$subservice->name_tr}}">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Başlık (İngilizce)</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" id="horizontal-firstname-input" name="name_en" placeholder="...." value="{{$subservice->name_en}}">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Tanım (Türkçe)</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" id="horizontal-firstname-input" name="definition_tr" placeholder="...." value="{{$subservice->definition_tr}}">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Tanım (İngilizce)</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" id="horizontal-firstname-input" name="definition_en" placeholder="...." value="{{$subservice->definition_en}}">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">SEO Başlık</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" id="horizontal-firstname-input" name="seo_title" placeholder="...." value="{{$subservice->seo_title}}">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">SEO Açıklama</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" id="horizontal-firstname-input" name="seo_description" placeholder="...." value="{{$subservice->seo_description}}">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">SEO Anahtar Kelimeler</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" id="horizontal-firstname-input" name="seo_keywords" placeholder="...." value="{{$subservice->seo_keywords}}">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Resim</label>
                                                <div class="col-sm-9">
                                                    @if($subservice->image)
                                                    <div class="row">
                                                        <div class="col-lg-2">
                                                            <img src="{{ asset('uploads/services/subservices/'.$subservice->image)}}" class="img-thumbnail rounded" alt="" width="300" data-holder-rendered="true">
                                                        </div>
                                                    </div>
                                                    @endif
                                                    <input type="file" class="form-control" id="horizontal-firstname-input" name="image" placeholder="....">

                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">İçerik (Türkçe)</label>
                                                <div class="col-sm-9">
                                                    <textarea id="summernote_tr" name="description_tr">{{$subservice->description_tr}}</textarea>
                                                <script>
                                                $('#summernote_tr').summernote({
                                                    placeholder: '...',
                                                    tabsize: 2,
                                                    height: 250,
                                                    toolbar: [
                                                    ['style', ['style']],
                                                    ['font', ['bold', 'underline', 'clear']],
                                                    ['color', ['color']],
                                                    ['para', ['ul', 'ol', 'paragraph']],
                                                    ['table', ['table']],
                                                    ['insert', ['link', 'picture', 'video']],
                                                    ['view', ['fullscreen', 'codeview', 'help']]
                                                    ]
                                                });
                                                </script>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">İçerik (İngilizce)</label>
                                                <div class="col-sm-9">
                                                    <textarea id="summernote_en" name="description_en">{{$subservice->description_en}}</textarea>
                                                <script>
                                                $('#summernote_en').summernote({
                                                    placeholder: '...',
                                                    tabsize: 2,
                                                    height: 250,
                                                    toolbar: [
                                                    ['style', ['style']],
                                                    ['font', ['bold', 'underline', 'clear']],
                                                    ['color', ['color']],
                                                    ['para', ['ul', 'ol', 'paragraph']],
                                                    ['table', ['table']],
                                                    ['insert', ['link', 'picture', 'video']],
                                                    ['view', ['fullscreen', 'codeview', 'help']]
                                                    ]
                                                });
                                                </script>
                                                </div>
                                            </div>
                                            <div class="row justify-content-end">
                                                <div class="col-sm-9">

                                                    <div>
                                                        <button type="submit" class="btn btn-primary w-md">Alt Hizmeti Düzenle</button>
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
