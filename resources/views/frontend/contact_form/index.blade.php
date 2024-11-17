@extends('layouts.frontend')

@section('title','Hakkımızda')

@section('content')
<section id="hakkimizda">
      <div class="container">
        <div class="text-center mb-4">
          <h3>Hakkımızda</h3>
        </div>
        <div>
            {!! $about_us->content_tr !!}
        </div>
      </div>
    </section>
@endsection