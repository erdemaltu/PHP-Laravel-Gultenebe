@extends('layouts.admin')

@section('title','Resim Ekleme')

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
                                    <h4 class="mb-sm-0 font-size-18"><A>Resim Ekleme</A></h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Anasayfa</a></li>
                                            <li class="breadcrumb-item active">Resim Ekleme</li>
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
                                        <h4 class="card-title mb-4">Ürün : {{$product->brand}} <i>{{$product->title}}</i></h4>
                                        @include('admin.alert')
                                        <form action="{{route('admin_image_store',['id'=>$product->id])}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Başlık</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" id="horizontal-firstname-input" name="title" placeholder="...." value="{{old('title')}}">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Resim</label>
                                                <div class="col-sm-9">
                                                  <input type="file" class="form-control" id="horizontal-firstname-input" name="image" placeholder="...." value="{{old('image')}}">
                                                </div>
                                            </div>
                                            <div class="row justify-content-end">
                                                <div class="col-sm-9">

                                                    <div>
                                                        <button type="submit" class="btn btn-primary w-md">Resim Ekle</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form><br>
                                        <table  id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th>Başlık</th>
                                                        <th>Resim</th>
                                                        <th>Sil</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ( $image as $rs)
                                                    <tr data-id="{{$rs->id}}">
                                                        <td data-field="title">{{$rs->title}}</td>
                                                        <td data-field="image">
                                                            @if($rs->image)
                                                            <img src="{{ asset('uploads/products/'.$rs->image)}}" height="200" alt="">
                                                            @endif    
                                                        </td>
                                                        <td style="width: 100px">
                                                            <a href="{{route('admin_image_delete',['id'=>$rs->id,'product_id'=>$product->id])}}" onclick="return confirm('Silinen veri bir daha geri gelmez! Emin misiniz?')" class="btn btn-danger waves-effect waves-light" title="Sil">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                                </table>
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