@extends('layouts.admin')

@section('title','Anasayfa')

@section('content')
    @include('admin._content')
@endsection

@section('footer')
    <script>
        get_fb();
    </script>
@endsection