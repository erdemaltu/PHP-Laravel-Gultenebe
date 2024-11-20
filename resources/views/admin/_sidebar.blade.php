<!-- ========== Left Sidebar Start ========== -->
<div class="topnav">

    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
            <!--- Sidemenu -->
            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <!-- Left Menu Start -->
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="{{ route('admin_home') }}" id="topnav-dashboard" role="button"
                                    >
                            <i class="bx bxs-home"></i><span key="t-dashboards">Anasayfa</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="{{route('about_us.edit')}}" id="topnav-dashboard" role="button">
                            <i class="bx bxs-info-circle"></i><span key="t-dashboards"> Hakkımızda</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="{{route('services.index')}}" id="topnav-dashboard" role="button">
                            <i class="bx bxs-detail"></i><span key="t-dashboards"> Hizmetler</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="{{route('packages.index')}}" id="topnav-dashboard" role="button">
                            <i class="bx bxs-dollar-circle"></i><span key="t-dashboards"> Paketler</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="{{route('slider.index')}}" id="topnav-dashboard" role="button">
                            <i class="bx bxs-image-add"></i><span key="t-dashboards"> Slider</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="{{route('contant_form.index')}}" id="topnav-dashboard" role="button">
                            <i class="bx bxs-inbox"></i><span key="t-dashboards"> Gelen Kutusu</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Sidebar -->
        </nav>
    </div>
</div>
<!-- Left Sidebar End -->
