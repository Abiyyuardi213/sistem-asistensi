<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab RPL - Peran</title>
    <link rel="icon" type="image/png" href="{{ asset('image/itats-1080.jpg') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        .toggle-status {
            width: 50px;
            height: 24px;
            appearance: none;
            background: #ddd;
            border-radius: 12px;
            position: relative;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .toggle-status:checked {
            background: linear-gradient(90deg, #28a745, #2ecc71);
        }

        .toggle-status::before {
            content: "❌";
            position: absolute;
            top: 3px;
            left: 4px;
            width: 18px;
            height: 18px;
            background: white;
            border-radius: 50%;
            transition: transform 0.3s ease;
            text-align: center;
            font-size: 12px;
            line-height: 18px;
        }

        .toggle-status:checked::before {
            content: "✔️";
            transform: translateX(26px);
            color: #28a745;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Sidebar toggle dan dropdown profile -->
            <ul class="navbar-nav">
                <!-- Tombol toggle sidebar -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>

                <!-- Tombol Profile (dropdown) -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        {{-- <i class="fas fa-user-circle"></i> {{ Auth::guard('admin')->check() ? Auth::guard('admin')->user()->username : Auth::guard('users')->user()->username }} --}}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="userDropdown">
                        <li>
                            <a class="dropdown-item" href="{{ url('dashboard-admin') }}">
                                <i class="fas fa-tachometer-alt"></i> Dashboard
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item"
                            href="#">
                                <i class="fas fa-user"></i> Profile
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item text-danger" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- Sidebar Putih - Versi Tanpa Auth -->
        <aside class="main-sidebar sidebar-light-primary elevation-1" style="background-color: #f8f9fc;">
            <!-- Brand Logo -->
            <a href="#" class="d-flex justify-content-center align-items-center py-3" style="background-color: #fff;">
                <img src="{{ asset('image/itats-biru.png') }}"
                    alt="Logo ITATS"
                    style="height: 40px; object-fit: contain;">
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

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Manajemen Peran</h1>
                        </div>
                    </div>
                </div>
            </div>

            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Daftar Peran</h3>
                            <a href="{{ route('role.create') }}" class="btn btn-primary btn-sm ml-auto">
                                <i class="fas fa-plus"></i> Tambah Peran
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="roleTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID</th>
                                            <th>Nama Peran</th>
                                            <th>Deskripsi</th>
                                            <th>Status Peran</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($roles as $index => $role)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $role->id }}</td>
                                                <td>{{ $role->role_name }}</td>
                                                <td>{{ $role->role_description }}</td>
                                                <td class="text-center">
                                                    <input type="checkbox" class="toggle-status"
                                                        data-role-id="{{ $role->id }}"
                                                        {{ $role->role_status ? 'checked' : '' }}>
                                                </td>
                                                <td class="text-center">
                                                    <a href="{{ route('admin.role.edit', $role->id) }}" class="btn btn-info btn-sm">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a>
                                                    <button class="btn btn-danger btn-sm delete-role-btn"
                                                        data-toggle="modal"
                                                        data-target="#deleteRoleModal"
                                                        data-role-id="{{ $role->id }}">
                                                        <i class="fas fa-trash"></i> Hapus
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div id="tablePagination"></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <footer class="main-footer">
            <strong>Copyright &copy; 2025 <a href="#">Sistem Informasi Akademik WR 1 ITATS</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Developed by</b> Akademik WR 1 ITATS
            </div>
        </footer>
    </div>

    <!-- Modal Konfirmasi Hapus -->
    <div class="modal fade" id="deleteRoleModal" tabindex="-1" aria-labelledby="deleteRoleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="deleteRoleModalLabel"><i class="fas fa-exclamation-triangle"></i> Konfirmasi Hapus</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus peran ini? Tindakan ini tidak dapat dibatalkan.
                </div>
                <form id="deleteForm" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Toast Container di bawah navbar -->
    <div aria-live="polite" aria-atomic="true" style="position: fixed; top: 60px; right: 10px; z-index: 1100; pointer-events: none;">
        <div id="toastNotification" class="toast bg-success text-white" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false" data-delay="3000" style="pointer-events: auto; width: 350px; max-width: none;">
            <div class="toast-header bg-success text-white">
                <i class="fas fa-check-circle mr-2"></i>
                <strong class="mr-auto">Notifikasi</strong>
                <button type="button" class="ml-2 mb-1 close text-white" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                @if (session('success'))
                    {{ session('success') }}
                @elseif (session('error'))
                    {{ session('error') }}
                @endif
            </div>
        </div>
    </div>


    <!-- Modal Konfirmasi Logout -->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="logoutModalLabel"><i class="fas fa-sign-out-alt"></i> Konfirmasi Logout</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin keluar dari sistem?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <form action="#" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-danger">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('js/ToastScript.js') }}"></script>
    <script>
        $(document).ready(function () {
            $("#roleTable").DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true
            });
        });

        $(document).ready(function () {
            $('.delete-role-btn').click(function () {
                let roleId = $(this).data('role-id');
                let deleteUrl = "{{ url('role') }}/" + roleId;
                $('#deleteForm').attr('action', deleteUrl);
            });
        });

        $(document).ready(function () {
            $(".toggle-status").change(function () {
                let roleId = $(this).data("role-id");
                let status = $(this).prop("checked") ? 1 : 0;

                $.post("{{ url('role') }}/" + roleId + "/toggle-status", {
                    _token: '{{ csrf_token() }}',
                    role_status: status
                }, function (res) {
                    if (res.success) {
                        $(".toast-body").text(res.message);
                        $("#toastNotification").toast({ autohide: true, delay: 3000 }).toast("show");
                    } else {
                        alert("Gagal memperbarui status.");
                    }
                }).fail(function () {
                    alert("Terjadi kesalahan dalam mengubah status.");
                });
            });
        });

        $(document).ready(function() {
            @if (session('success') || session('error'))
                $('#toastNotification').toast({
                    delay: 3000,
                    autohide: true
                }).toast('show');
            @endif
        });
    </script>
</body>
</html>
