@extends('layouts.admin')

@section('title','Paketler Listesi')

@section('css')
    <!-- DataTables -->
    <link href="{{ asset('assets')}}/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets')}}/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{ asset('assets')}}/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
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
                                    <h4 class="mb-sm-0 font-size-18">Paketler</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item active">Paket</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="{{route('packages.create')}}" type="button" class="btn btn-success waves-effect waves-light">
                                        <i class="bx bx-list-plus font-size-16 align-middle me-2"></i> Paket Ekle
                                        </a>
                                        <p></p>
                                            <table  id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th>Başlık</th>
                                                        <th>Fiyat</th>
                                                        <th>İşlemler</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ( $packages as $rs)
                                                    <tr data-id="{{$rs->id}}">
                                                        <td>{{$rs->name_tr}}</td>
                                                        <td>{{ $rs->price }} ₺</td>
                                                        <td style="width: 150px">
                                                            <a href="{{route('packages.edit',['id'=>$rs->id])}}" class="btn btn-info waves-effect waves-light" title="Düzenle">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                            <a href="{{route('packages.delete',['id'=>$rs->id])}}" onclick="return confirm('Silinen veri bir daha geri gelmez! Emin misiniz?')" class="btn btn-danger waves-effect waves-light" title="Sil">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
@endsection
@section('footer')
    <!-- Required datatable js -->
    <script src="{{ asset('assets')}}/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets')}}/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('assets')}}/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('assets')}}/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('assets')}}/libs/jszip/jszip.min.js"></script>
    <script src="{{ asset('assets')}}/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="{{ asset('assets')}}/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="{{ asset('assets')}}/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('assets')}}/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('assets')}}/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('assets')}}/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('assets')}}/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="{{ asset('assets')}}/js/pages/datatables.init.js"></script>

    <script src="{{ asset('assets')}}/js/app.js"></script>

    <script src="assets/js/pages/form-advanced.init.js"></script>
@endsection
