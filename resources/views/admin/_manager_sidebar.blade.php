<div class="topnav">

    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
            <!--- Sidemenu -->
            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <!-- Left Menu Start -->
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="{{ route('admin_manager_home') }}" id="topnav-dashboard" role="button"
                                    >
                            <i class="bx bx-home-circle me-2"></i><span key="t-dashboards">Anasayfa</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboard" role="button">
                            <i class="fas fa-shopping-cart"></i><span key="t-dashboards"> Teknoloji</span> <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-dashboard">
                            <a href="{{ route('admin_technology_stock') }}" class="dropdown-item">Ürün Stok</a>
                            <a href="{{ route('admin_technology_pending_order') }}" class="dropdown-item">Atama Bekleyen Siparişler</a>
                            <a href="{{ route('admin_technology_approval_pending_order') }}" class="dropdown-item">Kabul Bekleyen Siparişler</a>
                            <a href="{{ route('admin_technology_active_order') }}" class="dropdown-item">Aktif Siparişler</a>
                            <a href="{{ route('admin_technology_completed_order') }}" class="dropdown-item">Tamamlanan Siparişler</a>
                            <a href="{{ route('admin_technology_canceled_order') }}" class="dropdown-item">İptal Edilen Siparişler</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboard" role="button">
                            <i class="fas fa-shopping-cart"></i><span key="t-dashboards"> Kozmetik</span> <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-dashboard">
                            <a href="{{ route('admin_cosmetic_stock') }}" class="dropdown-item">Ürün Stok</a>
                            <a href="{{ route('admin_cosmetic_pending_order') }}" class="dropdown-item">Atama Bekleyen Siparişler</a>
                            <a href="{{ route('admin_cosmetic_approval_pending_order') }}" class="dropdown-item">Kabul Bekleyen Siparişler</a>
                            <a href="{{ route('admin_cosmetic_active_order') }}" class="dropdown-item">Aktif Siparişler</a>
                            <a href="{{ route('admin_cosmetic_completed_order') }}" class="dropdown-item">Tamamlanan Siparişler</a>
                            <a href="{{ route('admin_cosmetic_canceled_order') }}" class="dropdown-item">İptal Edilen Siparişler</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboard" role="button">
                            <i class="fas fa-shopping-cart"></i><span key="t-dashboards"> Market</span> <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-dashboard">
                            <a href="{{ route('admin_market_stock') }}" class="dropdown-item">Ürün Stok</a>
                            <a href="{{ route('admin_market_pending_order') }}" class="dropdown-item">Atama Bekleyen Siparişler</a>
                            <a href="{{ route('admin_market_approval_pending_order') }}" class="dropdown-item">Kabul Bekleyen Siparişler</a>
                            <a href="{{ route('admin_market_active_order') }}" class="dropdown-item">Aktif Siparişler</a>
                            <a href="{{ route('admin_market_completed_order') }}" class="dropdown-item">Tamamlanan Siparişler</a>
                            <a href="{{ route('admin_market_canceled_order') }}" class="dropdown-item">İptal Edilen Siparişler</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="{{ route('admin_preparation_time') }}" id="topnav-dashboard" role="button">
                            <i class="fas fa-object-ungroup"></i><span key="t-dashboards"> Ürün Hazırlama Süresi</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="{{ route('admin_courier') }}" id="topnav-dashboard" role="button">
                            <i class="fas fa-people-carry"></i><span key="t-dashboards"> Kuryeler</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="{{ route('admin_courier_activityStatus') }}" id="topnav-dashboard" role="button">
                            <i class="fas fa-people-carry"></i><span key="t-dashboards"> Kurye Aktiflik Durumu</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Sidebar -->
        </nav>
    </div>
</div>
<!-- Left Sidebar End -->
