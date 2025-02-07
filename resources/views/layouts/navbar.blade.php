<nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->
    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-search" type="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Nav Item - Alerts -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-danger badge-counter">3+</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="alertsDropdown">
                <!-- Alerts content -->
            </div>
        </li>

        <!-- Nav Item - Messages -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <span class="badge badge-danger badge-counter">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="messagesDropdown">
                <!-- Messages content -->
            </div>
        </li>

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-white small">M. Farrel Maulana</span>
                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown" style="font">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/sesi/logout">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>
    </ul>
</nav>

<style>
    /* Navbar dengan warna gradasi */
    .navbar {
        background: linear-gradient(90deg, #3A6D8C, #6A9AB0);
        color: white;
    }

    /* Teks navbar */
    .navbar .nav-link, 
    .navbar .dropdown-toggle {
        color: white !important;
    }

    /* Warna hover pada elemen navbar */
    .navbar .nav-link:hover, 
    .navbar .dropdown-toggle:hover {
        color: #D3E3F3 !important;
    }

    /* Warna teks dropdown menu */
    .dropdown-menu a {
        color: #333 !important;
    }

    .dropdown-menu a:hover {
        color: #3A6D8C !important;
    }

    /* Warna divider dropdown */
    .dropdown-divider {
        border-color: #e3e3e3;
    }

    /* Style untuk nama akun */
    .text-white {
        color: white !important;
    }

    /* Gambar profil */
    .img-profile {
        height: 40px;
        width: 40px;
    }

    /* Tombol search dengan gradasi */
    .btn-search {
        background: linear-gradient(90deg, #3A6D8C, #6A9AB0); /* Gradasi untuk tombol */
        color: white;
        border: none;
    }

    .btn-search:hover {
        background: linear-gradient(90deg, #6A9AB0, #3A6D8C); /* Gradasi terbalik saat hover */
        color: white;
    }
</style>
