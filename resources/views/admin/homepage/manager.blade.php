@extends('layouts.manager_admin')

@section('title','Anasayfa')

@section('content')
    @include('admin._manager_content')
@endsection

@section('footer')
    <script>
        get_fb();
    </script>
@endsection