@extends('layouts.frontend')

@section('title', 'Alt Hizmetler')

@section('content')
<section id="hero" style="position: relative; background: url('{{ asset('frontend') }}/images/baby.png') no-repeat center center / cover; height: 300px; color: white;">
  <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);"></div>
  <div class="container text-center position-relative" style="z-index: 2;">
    <h1 class="display-4">{{ $subService->name_tr }}</h1>
  </div>
</section>

<div class="container my-5">
  <div class="text-center my-4">
      <img 
        src="{{ asset('uploads/services/subservices/' . $subService->image) }}" 
        alt="{{ $subService->name_tr }}" 
        class="service-image img-fluid rounded shadow-sm rounded mx-auto d-block">
  </div>
    <h3 class="text-center mt-4">{{ $subService->name_tr }}</h3>
    <p class="text-justify" style="font-size: 1rem; line-height: 1.6;">{!! $subService->description_tr !!}</p>
</div>

@endsection
