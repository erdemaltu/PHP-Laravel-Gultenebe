@extends('layouts.frontend')

@section('title')
    {{ $packages[0]->seo_title ?? 'Gülten Ebe | Paketler' }}
@endsection
@section('head')
    <meta name="description" content="{{ $packages[0]->seo_description ?? 'Gulten Ebe\'nin doğum öncesi danışmanlık hizmetleriyle güvenli ve bilinçli bir hamilelik süreci geçirin. Uzman desteği için hemen iletişime geçin.' }}">
    <meta name="keywords" content="{{ $packages[0]->seo_keywords ?? 'doğum danışmanlığı, doğum öncesi eğitim, hamilelik rehberliği, ebe danışmanlık' }}">
@endsection

@section('content')
<section id="hero" style="position: relative; background: url('{{ asset('frontend')}}/images/baby.png') no-repeat center center / cover; height: 300px; color: white;">
  <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);"></div>
  <div class="container d-flex justify-content-center align-items-center flex-column text-center" style="height: 100%; position: relative; z-index: 2;">
    <h1 class="display-4">{{ __('Paketlerimiz') }}</h1>
  </div>
</section>
<section id="hakkimizda">
  <div class="container">
    <div class="container my-5">
      <div class="row g-4 row-centered">
        <!-- Paket Kartı -->
        @foreach ( $packages as $rs)
          <div class="col">
              <div class="card custom-card h-100 shadow-sm">
                  <div class="card-header text-center bg-primary text-white">
                    <div class="icon-container">
                      <i class="fa-solid fa-baby" style="font-size: 4rem;"></i>
                    </div>
                    <br>
                    <h3 class="card-title">{{ $rs->name }}</h3>
                  </div>
                  <div class="card-body text-center">
                      <!-- <h3 class="card-price">{{str_replace(".",",",$rs->price)}} ₺</h3> -->
                      <p class="card-text text-white">{!! $rs->description !!}</p>
                  </div>
                  <div class="card-footer text-center">
                      <a href="https://wa.me/905544872987" target="_blank" class="btn btn-primary">{{ __('Seç') }}</a>
                  </div>
              </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
    
@endsection