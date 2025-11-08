<!-- Sidebar Putih - Versi Tanpa Auth -->
<aside class="main-sidebar sidebar-light-primary elevation-1" style="background-color: #f8f9fc;">
    <!-- Brand Logo -->
    <a href="#" class="d-flex justify-content-center align-items-center py-3" style="background-color: #fff;">
        <img src="{{ asset('image/rpl.png') }}"
            alt="Logo ITATS"
            style="height: 55px; object-fit: contain;">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- User Info Dummy -->
        <div class="user-panel d-flex align-items-center mb-3 px-3">
            <div class="image">
                <img src="{{ asset('image/default.png') }}"
                    class="img-circle elevation-2"
                    alt="User Image"
                    style="width: 45px; height: 45px; object-fit: cover; border: 2px solid #dee2e6;">
            </div>
            <div class="info ml-2">
                <a href="#" class="d-block text-dark font-weight-bold">
                    Nama Pengguna
                </a>
                <span class="badge badge-success">Online</span>
                <span class="d-block" style="color: #f39c12; font-size: 13px; font-weight: 600;">
                    Aslab / Praktikan
                </span>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" data-accordion="false">

                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-home text-primary"></i>
                        <p class="ml-1">Dashboard</p>
                    </a>
                </li>

                <!-- Manajemen Role -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-shield text-secondary"></i>
                        <p>Manajemen Role</p>
                    </a>
                </li>

                <!-- Users -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users-cog text-secondary"></i>
                        <p>Manajemen Users</p>
                    </a>
                </li>

                <!-- Aslab -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-tie text-secondary"></i>
                        <p>Aslab</p>
                    </a>
                </li>

                <!-- Praktikan -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-graduate text-secondary"></i>
                        <p>Praktikan</p>
                    </a>
                </li>

                <!-- Praktikum -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-flask text-secondary"></i>
                        <p>Praktikum</p>
                    </a>
                </li>

                <!-- Asistensi -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chalkboard-teacher text-secondary"></i>
                        <p>Asistensi</p>
                    </a>
                </li>

                <!-- Penugasan -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tasks text-secondary"></i>
                        <p>Penugasan</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
