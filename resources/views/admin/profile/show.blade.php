@extends('layouts.admin')

@section('title','Kullanıcı Profili')

@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="card">
                            <div class="card-header bg-primary">
                                <h2 class="text-center text-white">Profilim</h2>
                            </div>
                            <div class="card-body">
                                <form action="{{route('admin_user_update',['id'=>$user->id])}}" method="post" enctype="multipart/form-data">
                                @csrf   
                                <div class="text-center mb-4">
                                    <img src="{{ asset('uploads/users/'.$user->image)}}" alt="Profil Resmi" class="rounded-circle avatar-xl">
                                </div>
                                <h4 class="text-center">{{ $user->name_surname }}</h4>
                                <p class="text-center">{{ $user->email }}</p>
                                <hr>
                                <h5>Bilgiler</h5>
                                <div class="table-responsive">
                                    <table class="table table-striped table-nowrap mb-0">
                                        <tbody>
                                        <tr>
                                            <th>Telefon:</th>
                                            <td>
                                                {{ $user->phone }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Rol:</th>
                                            <td>
                                            @if ($user->role->role=="Admin")
                                                Admin
                                            @elseif($user->role->role=="User")
                                                Kullanıcı
                                            @elseif($user->role->role=="Courier")
                                                Kurye
                                            @elseif($user->role->role=="Warehouse Manager")
                                                Depo Yöneticisi
                                            @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Mail:</th>
                                            <td>
                                                {{ $user->email }}
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                </form>
                            </div>
                            <div class="card-footer text-center">
                                <a href="{{ route('admin_profile_edit') }}" class="btn btn-warning">Profili Düzenle</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
