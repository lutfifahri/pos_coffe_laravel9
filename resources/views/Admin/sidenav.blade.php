<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{ url('/dashboard') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Manage Data Master</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Data Master
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <!-- <a class="nav-link" href="{{ url('/users') }}">Data User</a> -->
                                    <a class="nav-link" href="{{ url('/menu') }}">Data Menu</a>
                                    <a class="nav-link" href="{{ url('/meja') }}">Data Meja</a>
                                    <a class="nav-link" href="{{ url('/kategori') }}">Data Kategori</a>
                                    <a class="nav-link" href="{{ url('/testimoni') }}">Data Testimoni</a>
                                </nav>
                            </div>
                            <!-- <div class="sb-sidenav-menu-heading">Pesan Menu</div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                    Pesan Menu
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                        <a class="nav-link" href="{{ url('/pesan-menu') }}">Pesan</a>
                                        
                                    </nav>
                                </div> -->
                            @if(Auth::user()->role != 'Customer')
                            <div class="sb-sidenav-menu-heading">Manage Data Pesanan</div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                    Pesanan
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                        <a class="nav-link" href="{{ url('/pesanan') }}">Data Pesanan</a>
                                        <!-- <a class="nav-link" href="{{ url('/metodepembayaran') }}">Metode Pembayaran</a> -->
                                        <a class="nav-link" href="{{ url('/pembayaran') }}">Data Pembayaran</a>
                                    </nav>
                                </div>
                            @endif
                            @if(Auth::user()->role == 'Admin')
                            <div class="sb-sidenav-menu-heading">Manage Data Users</div>
                                <a class="nav-link" href="{{ url('/kelola_user') }}">
                                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                    Kelola Data Users  
                                </a>
                            @endif
                            @if(Auth::user()->role != 'Customer')
                            <!-- <div class="sb-sidenav-menu-heading">Addons</div>
                                <a class="nav-link" href="{{ url('/pesanan') }}">
                                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                    Data Pesanan
                                </a> -->
                            @endif
                        </div>
                    </div>
                    <div class="sb-sidenav-footer bg-dark">
                        <div class="small">Design By :</div>
                        Human
                    </div>
                </nav>
            </div>