@extends('layouts.frontend')

@section('title')
    {{ $service->seo_title ?? 'Gülten Ebe | Hizmetler' }}
@endsection
@section('head')
    <meta name="description" content="{{ $service->seo_description ?? 'Gulten Ebe\'nin doğum öncesi danışmanlık hizmetleriyle güvenli ve bilinçli bir hamilelik süreci geçirin. Uzman desteği için hemen iletişime geçin.' }}">
    <meta name="keywords" content="{{ $service->seo_keywords ?? 'doğum danışmanlığı, doğum öncesi eğitim, hamilelik rehberliği, ebe danışmanlık' }}">
@endsection

@section('content')
<section id="hero" style="position: relative; background: url('{{ asset('frontend')}}/images/baby.png') no-repeat center center / cover; height: 300px; color: white;">
  <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);"></div>
  <div class="container d-flex justify-content-center align-items-center flex-column text-center" style="height: 100%; position: relative; z-index: 2;">
    <h1 class="display-4">{{ $service->name }}</h1>
  </div>
</section>
<div class="container my-5">
        <img src="{{ asset('uploads/services/' . $service->image) }}" class="service-image img-fluid rounded shadow-sm rounded mx-auto d-block" alt="{{ $service->name_tr }}">
        <h3 class="text-center mt-4">{{ $service->name }}</h3>
        <p class="mt-4">{!! $service->description !!}</p>

        @if($subservices->count())
        <h3 class="mt-5">{{ __('Alt Hizmetler') }}</h3>
        <div class="row mt-4">
            @foreach ($subservices as $subservice)
            <div class="col-sm-6 col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('uploads/services/subservices/' . $subservice->image) }}" class="card-img-top img-fluid" alt="{{ $subservice->name_tr }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $subservice->name }}</h5>
                        <a href="{{ route('subservices', $subservice->slug) }}" class="btn btn-secondary">{{ __('Detaylı Bilgi') }}</a>
                    </div>
                </div>
            </div>
            @endforeach
          </div>
          @endif
    </div>
@endsection