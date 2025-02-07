<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-amd" viewBox="0 0 16 16">
                <path d="m.334 0 4.358 4.359h7.15v7.15l4.358 4.358V0zM.2 9.72l4.487-4.488v6.281h6.28L6.48 16H.2z"/>
            </svg>
        </div>
        <div class="sidebar-brand-text mx-3" id="dbgc" >Data Galactic</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-menu-down" viewBox="0 0 16 16">
                <path d="M7.646.146a.5.5 0 0 1 .708 0L10.207 2H14a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h3.793zM1 7v3h14V7zm14-1V4a1 1 0 0 0-1-1h-3.793a1 1 0 0 1-.707-.293L8 1.207l-1.5 1.5A1 1 0 0 1 5.793 3H2a1 1 0 0 0-1 1v2zm0 5H1v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM2 4.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5m0 4a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5m0 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5"/>
            </svg>
            <span class="p">Halaman Utama</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('departemen.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Departemen</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('karyawan.index') }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-vcard" viewBox="0 0 16 16">
             <path d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4m4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5M9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8m1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5"/>
             <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96q.04-.245.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 1 1 12z"/>
        </svg>
            <span>Data Karyawan</span></a>
    </li>
    <!-- Divider -->
</ul>

<style>
    /* Sidebar gradasi warna */
    .navbar-nav {
        background: linear-gradient(130deg, #3A6D8C, #6A9AB0); /* Gradasi warna */
        color: white;
    }

    /* Teks sidebar */
    .navbar-nav .nav-link {
        color: white !important; /* Teks warna putih untuk kontras */
    }

    /* Hover efek sidebar */
    .navbar-nav .nav-link:hover {
        background-color: #2F586E; /* Warna lebih gelap saat hover */
        color: white !important;
    }

    /* Divider garis */
    .sidebar-divider {
        border-color: rgba(255, 255, 255, 0.1); /* Garis putih transparan */
    }

    /* Hover ikon */
    .navbar-nav .nav-link i {
        color: white !important;
    }

    #dbgc {
        font-size: 15px;
    }

    /* Animasi untuk memutar ikon AMD */
    @keyframes rotateIcon {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }

    .sidebar-brand-icon {
        animation: rotateIcon 7s linear infinite; /* 2 detik, rotasi tak terbatas */
    }
</style>
