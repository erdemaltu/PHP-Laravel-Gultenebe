@extends('layouts.frontend')

@section('title')
    {{ $subService->seo_title ?? 'Gülten Ebe | Alt Hizmetler' }}
@endsection
@section('head')
    <meta name="description" content="{{ $subService->seo_description ?? 'Gulten Ebe\'nin doğum öncesi danışmanlık hizmetleriyle güvenli ve bilinçli bir hamilelik süreci geçirin. Uzman desteği için hemen iletişime geçin.' }}">
    <meta name="keywords" content="{{ $subService->seo_keywords ?? 'doğum danışmanlığı, doğum öncesi eğitim, hamilelik rehberliği, ebe danışmanlık' }}">
@endsection

@section('content')
<section id="hero" style="position: relative; background: url('{{ asset('frontend') }}/images/baby.png') no-repeat center center / cover; height: 300px; color: white;">
  <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);"></div>
  <div class="container d-flex justify-content-center align-items-center flex-column text-center" style="height: 100%; position: relative; z-index: 2;">
    <h1 class="display-4">{{ $subService->name }}</h1>
  </div>
</section>

<div class="container my-5">
  <div class="text-center my-4">
      <img 
        src="{{ asset('uploads/services/subservices/' . $subService->image) }}" 
        alt="{{ $subService->name }}" 
        class="service-image img-fluid rounded shadow-sm rounded mx-auto d-block">
  </div>
    <h3 class="text-center mt-4">{{ $subService->name }}</h3>
    <p class="text-justify" style="font-size: 1rem; line-height: 1.6;">{!! $subService->description !!}</p>
</div>

@endsection
