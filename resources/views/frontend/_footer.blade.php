<footer id="footer" class="padding-large">
      <div class="container">
        <div class="row">
          <div class="footer-top-area">
            <div class="row d-flex flex-wrap justify-content-between">
              <div class="col-lg-3 col-sm-6 pb-3">
                <div class="footer-menu">
                  <img src="{{ asset('frontend')}}/images/gultenebe.png" alt="logo" class="img-fluid mb-2">
                  <div class="social-links">
                    <ul class="d-flex list-unstyled">
                      <li>
                        <a href="#">
                          <svg class="facebook">
                            <use xlink:href="#facebook" />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <svg class="instagram">
                            <use xlink:href="#instagram" />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <svg class="twitter">
                            <use xlink:href="#twitter" />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <svg class="linkedin">
                            <use xlink:href="#linkedin" />
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <svg class="youtube">
                            <use xlink:href="#youtube" />
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-sm-6 pb-3">
                <div class="footer-menu text-capitalize">
                  <h5 class="widget-title pb-2">Hızlı Likler</h5>
                  <ul class="menu-list list-unstyled text-capitalize">
                    <li class="menu-item mb-1">
                      <a href="#">Anasayfa</a>
                    </li>
                    <li class="menu-item mb-1">
                      <a href="#">Hakkımızda</a>
                    </li>
                    <li class="menu-item mb-1">
                      <a href="#">Paketler</a>
                    </li>
                    <li class="menu-item mb-1">
                      <a href="#">İletişim</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 pb-3">
                <div class="footer-menu text-capitalize">
                  <h5 class="widget-title pb-2">Hizmetlerimiz</h5>
                  <ul class="menu-list list-unstyled">
                    @foreach ($services as $service)
                    <li class="menu-item mb-1">
                      <a href="{{ route('services', $service->slug) }}">{{ $service->name_tr }}</a>
                    </li>
                    @endforeach
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 pb-3">
                <div class="footer-menu contact-item">
                  <h5 class="widget-title text-capitalize pb-2">Bize Ulaşın</h5>
                  <a href="https://wa.me/905394031063" target="_blank" class="whatsapp-link">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" width="50" height="50">
                    <span>WhatsApp ile İletişime Geç</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <hr>
    <div id="footer-bottom" class="mb-2">
      <div class="container">
        <div class="d-flex flex-wrap justify-content-between">
          <div class="copyright">
            <p><script>document.write(new Date().getFullYear())</script> ©  <a href="https://www.linkedin.com/in/erdemaltugalaca/"
                target="_blank">erdemaltugalaca</a>
            </p>
          </div>
        </div>
      </div>
    </div>

    <script src="{{ asset('frontend')}}/js/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="{{ asset('frontend')}}/js/script.js"></script>