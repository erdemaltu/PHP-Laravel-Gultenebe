@extends('layouts.admin')

@section('title',$category->title.' Alt Kategorisi Ekleme')

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
                                    <h4 class="mb-sm-0 font-size-18"><A>{{$category->title}} Kategori Ekleme</A></h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{ route('admin_technology_category') }}">Kategori</a></li>
                                            <li class="breadcrumb-item"><a href="{{route('admin_technology_category_children',['id'=>$category->id])}}">Alt Kategori</a></li>
                                            <li class="breadcrumb-item active">Alt Kategori Ekleme</li>
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
                                        <h4 class="card-title mb-4">Ekle</h4>
                                        @include('admin.alert')
                                        <form action="{{route('admin_technology_category_children_store',['id'=>$category->id])}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Başlık</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" id="horizontal-firstname-input" name="title" placeholder="...." value="{{old('title')}}" required>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Anahtar Kelimeler</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" id="horizontal-firstname-input" name="keywords" placeholder="...." value="{{old('keywords')}}">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Resim</label>
                                                <div class="col-sm-9">
                                                  <input type="file" class="form-control" id="horizontal-firstname-input" name="image" placeholder="...." value="{{old('image')}}" required>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Tanım</label>
                                                <div class="col-sm-9">
                                                <textarea id="summernote" name="description"></textarea>
                                                <script>
                                                $('#summernote').summernote({
                                                    placeholder: '...',
                                                    tabsize: 2,
                                                    height: 300,
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
                                                <label class="col-sm-3 col-form-labell">Durum</label>
                                                <div class="col-sm-9">
                                                    <select name="status"  class="form-select">
                                                        <option @if(old('status')=="Pasif") selected @endif>Pasif</option>
                                                        <option @if(old('status')=="Aktif") selected @endif>Aktif</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row justify-content-end">
                                                <div class="col-sm-9">

                                                    <div>
                                                        <button type="submit" class="btn btn-primary w-md">Alt Kategoriyi Ekle</button>
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
