<section id="billboard" class="position-relative d-flex align-items-center py-5 bg-light-gray"
      style="background-image: url({{ asset('frontend')}}/images/midwife.png); background-size: cover; background-repeat: no-repeat; background-position: center; height: 800px;">
      <!-- Pembe Overlay -->
      <div class="overlay" style="
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 192, 203, 0.5); /* Pembe tonu */
            z-index: 1;">
      </div>
      <div class="position-absolute end-0 pe-0 pe-xxl-5 me-0 me-xxl-5 swiper-next main-slider-button-next">
        <svg class="chevron-forward-circle d-flex justify-content-center align-items-center p-2" width="80" height="80">
          <use xlink:href="#alt-arrow-right-outline"></use>
        </svg>
      </div>
      <div class="position-absolute start-0 ps-0 ps-xxl-5 ms-0 ms-xxl-5 swiper-prev main-slider-button-prev">
        <svg class="chevron-back-circle d-flex justify-content-center align-items-center p-2" width="80" height="80">
          <use xlink:href="#alt-arrow-left-outline"></use>
        </svg>
      </div>
      <div class="swiper main-swiper">
        <div class="swiper-wrapper d-flex align-items-center">
        @foreach ($sliders as $rs)
          <div class="swiper-slide">
            <div class="container">
              <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
                <div class="col-md-5 offset-md-1 mt-5 mt-md-0 text-center text-md-start">
                  <div class="banner-content">
                    <h2>{{ $rs->name }}</h2>
                    <p>{!!$rs->description!!}</p>
                  </div>
                </div>
                <div class="col-md-6 text-center">
                  <div class="image-holder">
                    <img src="{{ asset('uploads/sliders/'.$rs->image)}}" class="img-fluid" alt="banner">
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
        </div>
      </div>
    </section>

    <section id="latest-posts" class="padding-large">
      <div class="container">
        <div class="section-title d-md-flex justify-content-between align-items-center mb-4">
          <h3 class="d-flex align-items-center">{{ __('Hizmetlerimiz') }}</h3>
        </div>
        <div class="row">
            @foreach ($services as $rs)
            <div class="col-md-3 posts mb-4">
              <a href="{{ route('services', $rs->slug) }}">
                <img src="{{ asset('uploads/services/'.$rs->image)}}" alt="post image" class="card-img-top img-fluid rounded-3">
              </a>  
                <a href="{{ route('home') }}" class="fs-6 text-primary">gültenebe</a>
                <h4 class="card-title mb-2 text-capitalize text-dark"><a href="{{ route('services', $rs->slug) }}">{{ $rs->name }}</a></h4>
                <p class="mb-2">{{ $rs->definition }}. <span><a class="text-decoration-underline text-black-50" href="{{ route('services', $rs->slug) }}">{{ __('Daha Fazla Oku') }}</a></span>
                </p>
            </div>
          @endforeach
        </div>
      </div>
    </section>

    <section id="instagram">
      <div class="container">
        <div class="section-title d-md-flex justify-content-between align-items-center mb-4">
          <h3 class="d-flex align-items-center">Instagram</h3>
        </div>
        <div>
        <script src="https://static.elfsight.com/platform/platform.js" async></script>
        <div class="elfsight-app-90a7eb09-794c-43a9-8c2d-20beea75c274" data-elfsight-app-lazy></div>
        </div>
      </div>
    </section>
    