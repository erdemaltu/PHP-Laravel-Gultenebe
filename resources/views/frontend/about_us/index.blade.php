@extends('layouts.frontend')

@section('title','Hakkımızda')

@section('content')
<section id="hero" style="position: relative; background: url('{{ asset('frontend')}}/images/baby.png') no-repeat center center / cover; height: 300px; color: white;">
  <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);"></div>
  <div class="container text-center position-relative" style="z-index: 2;">
    <h1 class="display-4">Hakkımızda</h1>
  </div>
</section>
<section id="hakkimizda">
      <div class="container">
        <div class="text-center mt-4">
            {!! $about_us->content_tr !!}
        </div>
      </div>
    </section>
@endsection