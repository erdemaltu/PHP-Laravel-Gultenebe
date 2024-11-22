@extends('layouts.frontend')

@section('title')
    Gülten Ebe | İletişim
@endsection
@section('head')
    <meta name="description" content="Gulten Ebe\'nin doğum öncesi danışmanlık hizmetleriyle güvenli ve bilinçli bir hamilelik süreci geçirin. Uzman desteği için hemen iletişime geçin.">
    <meta name="keywords" content="doğum danışmanlığı, doğum öncesi eğitim, hamilelik rehberliği, ebe danışmanlık">
@endsection

@section('content')
<section id="hero" style="position: relative; background: url('{{ asset('frontend') }}/images/baby.png') no-repeat center center / cover; height: 300px; color: white;">
    <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);"></div>
    <div class="container text-center position-relative" style="z-index: 2;">
        <h1 class="display-4">{{ __('İletişim') }}</h1>
    </div>
</section>

<div class="container my-5 d-flex justify-content-center align-items-center">
    <div class="card shadow-sm p-4" style="width: 100%; max-width: 500px; background-color: rgba(100, 149, 237, 0.1); border-radius: 20px;">
        <div class="card-body">
            <h5 class="card-title text-center mb-4">{{ __('Bize Ulaşın') }}</h5>
            
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact_form.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">{{ __('Ad Soyad') }}</label>
                    <input type="text" class="form-control rounded-input" id="name" name="name" value="{{ old('name') }}" maxlength="50" required>
                    @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('E-posta') }}</label>
                    <input type="email" class="form-control rounded-input" id="email" name="email" value="{{ old('email') }}" maxlength="50">
                    @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">{{ __('Telefon') }}</label>
                    <input type="text" class="form-control rounded-input" id="phone" name="phone" value="{{ old('phone') }}" maxlength="20">
                    @error('phone') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label">{{ __('Konu') }}</label>
                    <input type="text" class="form-control rounded-input" id="subject" name="subject" value="{{ old('subject') }}" maxlength="100">
                    @error('subject') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">{{ __('Mesaj') }}</label>
                    <textarea class="form-control rounded-input" id="message" name="message" rows="4" maxlength="255">{{ old('message') }}</textarea>
                    @error('message') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">{{ __('Gönder') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
