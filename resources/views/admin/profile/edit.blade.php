@extends('layouts.admin')

@section('title','Profil güncelle')

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
                                    <h4 class="mb-sm-0 font-size-18"><A>Profil Düzenleme</A></h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{ route('admin_profile_show') }}">Profil</a></li>
                                            <li class="breadcrumb-item active">Profil Düzenleme</li>
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
                                        <form action="{{route('admin_profile_update')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">İsim Soyisim</label>
                                                <div class="col-sm-9">
                                                  <input type="text" class="form-control" id="horizontal-firstname-input" name="name_surname" placeholder="...." value="{{$user->name_surname}}">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Email</label>
                                                <div class="col-sm-9">
                                                  <input type="email" class="form-control" id="horizontal-firstname-input" name="email" placeholder="...." value="{{$user->email}}">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Telefon</label>
                                                <div class="col-sm-9">
                                                    <input type="number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{2}" class="form-control" id="horizontal-email-input" name="phone" placeholder="...." value="{{$user->phone}}">
                                                    <small>Biçim: 5xx-xxx-xx-xx</small>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Resim</label>
                                                <div class="col-sm-9">
                                                    @if($user->image)
                                                    <div class="row">
                                                        <div class="col-lg-2">
                                                            <div class="card border border-secondary">
                                                                <img src="{{ asset('uploads/users/'.$user->image)}}" class="rounded me-2" alt="200x200" width="120" data-holder-rendered="true">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @else
                                                    <div class="row">
                                                        <div class="col-lg-2">
                                                            <div class="card border border-secondary">
                                                                <img src="{{ asset('uploads/users/default_user.png')}}" class="rounded me-2" alt="200x200" width="120" data-holder-rendered="true">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    <input type="file" class="form-control" id="horizontal-firstname-input" name="image" placeholder="....">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Mevcut Parola</label>
                                                <div class="col-sm-9">
                                                    <input type="password" class="form-control" id="horizontal-email-input" name="current_password" placeholder="...." >
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Yeni Parola</label>
                                                <div class="col-sm-9">
                                                    <input type="password" class="form-control" id="horizontal-email-input" name="new_password" placeholder="...." >
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Yeni Parola Tekrarı</label>
                                                <div class="col-sm-9">
                                                    <input type="password" class="form-control" id="horizontal-email-input" name="new_password_confirmation" placeholder="...." >
                                                </div>
                                            </div>
                                            <div class="row justify-content-end">
                                                <div class="col-sm-9">

                                                    <div>
                                                        <button type="submit" class="btn btn-primary w-md">Profil Düzenle</button>
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