@extends('layouts.admin')

@section('title','Mesaj Detay')

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
                                    <h4 class="mb-sm-0 font-size-18"><A>Mesaj Detay</A></h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{route('contant_form.index')}}">Mesajlar</a></li>
                                            <li class="breadcrumb-item active">Mesaj Detay</li>
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
                                    @include('admin.alert')
                                        <h4 class="card-title mb-4">Düzenle</h4>
                                        @include('admin.alert')
                                        <form action="{{route('contant_form.update',['id'=>$contact_form->id])}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            
                                            <table  id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                                <tr>
                                                    <th>IP</th><td>{{$contact_form->IP}}</td>
                                                </tr>
                                                <tr>
                                                    <th>İsim</th><td>{{$contact_form->name}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Email</th><td>{{$contact_form->email}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Telefon</th><td>{{$contact_form->phone}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Konu</th><td>{{$contact_form->subject}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Mesaj</th><td>{{$contact_form->message}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Admin Notu</th><td><textarea id="message" class="form-control" placeholder="Notunuzu Giriniz" name="note">{{$contact_form->note}}</textarea></td>
                                                </tr>
                                                <tr><th></th>
                                                    <td>
                                                        <div class="col-sm-9">
                                                            <div>
                                                                <button type="submit" class="btn btn-primary w-md">Not Ekle</button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
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