<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="#" onclick="redirectToAppropriatePage(); return false;" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('assets')}}/images/logo.svg" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets')}}/images/logo-dark.png" alt="" height="17">
                    </span>
                </a>

                <a href="#" onclick="redirectToAppropriatePage(); return false;" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('assets')}}/images/64.png" alt="" height="30">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets')}}/images/200.png" alt="" height="70">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                <i class="fa fa-fw fa-bars"></i>
            </button>
        </div>

        <div class="d-flex">

        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                                <i class="bx bx-fullscreen"></i>
                            </button>
                        </div>

            <!-- <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-bell @if(\App\Http\Controllers\Admin\HomeController::newordercount()>0)bx-tada @endif"></i>
                    @if(\App\Http\Controllers\Admin\HomeController::newordercount()>0)<span class="badge bg-danger rounded-pill">{{\App\Http\Controllers\Admin\HomeController::newordercount()}}</span> @endif

                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0" key="t-notifications"> Bildirimler </h6>
                            </div>
                            <div class="col-auto">
                                <a href="{{ route('admin_technology_order_list', ['status'=>'Ödeme Bekleniyor']) }}" class="small" key="t-view-all"> Hepsini Gör</a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">
                        @foreach (\App\Http\Controllers\Admin\HomeController::neworder() as $rs)
                        <a href="{{route('admin_technology_order_show',['id'=>$rs->id])}}" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="bx bx-cart"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1" key="t-your-order">Yeni Sipariş</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1" key="t-grammer">{{$rs->name}}  kullanıcısından yeni sipariş</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">{{$rs->created_at->diffForHumans()}}</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                    <div class="p-2 border-top d-grid">
                        <a class="btn btn-sm btn-link font-size-14 text-center" href="{{ route('admin_technology_order_list', ['status'=>'Ödeme Bekleniyor']) }}">
                            <i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more">Daha Fazla Gör..</span>
                        </a>
                    </div>
                </div>
            </div> -->

            <div class="dropdown d-inline-block">
                @auth
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{ asset('uploads/users/'.Auth::user()->image)}}"
                        alt="{{Auth::user()->name}}">
                    <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{Auth::user()->name}}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="{{route('admin_profile_show')}}"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profil</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="{{route('admin_manager_logout')}}"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Çıkış</span></a>
                </div>
                @endauth
            </div>
        </div>
    </div>
    <script>
function redirectToAppropriatePage() {
    @if (auth()->user()->isAdmin())
        window.location.href = "{{ route('admin_home') }}";
    @else
        window.location.href = "{{ route('admin_manager_home') }}";
    @endif
}
</script>
</header>
