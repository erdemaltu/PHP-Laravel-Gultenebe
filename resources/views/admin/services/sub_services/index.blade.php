@extends('layouts.admin')

@section('title',$service->title.' Hizmetleri Listesi')

@section('css')
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
                                    <h4 class="mb-sm-0 font-size-18">{{$service->title}} Alt Hizmetleri</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{ route('services.index') }}">Hizmetler</a></li>
                                            <li class="breadcrumb-item active">Alt Hizmetler</li>
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
                                    @include('admin.alert')
                                    <a href="{{route('subservices.create',['id'=>$service->id])}}" type="button" class="btn btn-success waves-effect waves-light">
                                        <i class="bx bx-list-plus font-size-16 align-middle me-2"></i> {{$service->title}} Alt Hizmetleri Ekle
                                        </a>
                                        <p></p>
                                        <div id="orderSuccess" style="display:none" class="alert alert-success">
                                            Sıralama başarıyla güncellendi.
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Sıralama</th>
                                                        <th>Resim</th>
                                                        <th>Başlık</th>
                                                        <th>Durum</th>
                                                        <th>İşlemler</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="orders">
                                                    @foreach ($subservices as $rs)
                                                    <tr id="sub_service_{{$rs->id}}">
                                                        <td class="text-center" style="width:3%"><i class="fa fa-arrows-alt-v fa-3x handle" style="cursor:move;"></i> </td>
                                                        <td data-field="image">
                                                            @if($rs->image)
                                                                <img src="{{ asset('uploads/services/subservices/'.$rs->image)}}" height="70" alt="">
                                                            @endif
                                                        </td>
                                                        <td>{{$rs->name_tr}}</td>
                                                        <td data-field="id">
                                                            <a href="{{route('subservices.index',['id'=>$rs->id])}}" class="btn btn-secondary waves-effect waves-light" title="Alt Hizmet">
                                                            <i class="fas fa-angle-double-down"></i> Alt Hizmetleri
                                                        </a>
                                                        </td>
                                                        <td>
                                                            <div class="square-switch">
                                                                <input
                                                            class="switch" sub_service-id="{{$rs->id}}" type="checkbox" id="square-switch{{$rs->id}}" switch="bool" @if($rs->active == 1) checked @endif />
                                                                    <label for="square-switch{{$rs->id}}"  data-on-label="Aktif" data-off-label="Pasif"></label>
                                                            </div>
                                                        </td>
                                                        <td style="width: 100px">
                                                            <a href="{{route('subservices.edit',['id'=>$rs->id])}}" class="btn btn-info waves-effect waves-light" title="Düzenle">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                            <a href="{{route('subservices.delete',['id'=>$rs->id])}}" onclick="return confirm('Silinen veri bir daha geri gelmez! Emin misiniz?')" class="btn btn-danger waves-effect waves-light" title="Sil">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
@endsection
@section('footer')
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

    <script>
        $('#orders').sortable({
        handle:'.handle',
        update:function(){
            var siralama = $('#orders').sortable('serialize');
            $.get("{{route('subservices.order')}}?"+siralama,function(data,status){
            $("#orderSuccess").show().delay(1000).fadeOut();
            });
        }
        });
    </script>
    <script>
    $(function() {
        $('.switch').change(function() {
            id = $(this)[0].getAttribute('sub_service-id');
            statu = $(this).prop('checked') ? "1" : "0";
            $.get("{{route('subservices.switch')}}", {id:id,statu:statu}, function(data, status){
                console.log(data);
            });
        })
    })
    </script>
@endsection