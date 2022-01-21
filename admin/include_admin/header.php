    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Tempellemahbang</title>

        <!-- Custom fonts for this template -->
        <link href="../assets_admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../assets_admin/css/sb-admin-2.min.css" rel="stylesheet">

        <!-- Custom styles for this page -->
        <link href="../assets_admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                    <div class="sidebar-brand-text mx-3"><h6 class="font-weight-bold">Tempellemahbang</h6></div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                    </li>

                    <!-- Divider -->
                    <hr class="sidebar-divider">

                    <li class="nav-item">
                        <a class="nav-link" href="data_user.php">
                            <i class="fas fa-fw fa-users"></i>
                            <span>Data User</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="data_berita.php">
                                <i class="fas fa-fw fa-newspaper"></i>
                                <span>Data Berita</span></a>
                            </li>

                             <li class="nav-item">
                            <a class="nav-link" href="data_video.php">
                                <i class="fas fa-fw fa-video"></i>
                                <span>Data Video</span></a>
                            </li>

                             <li class="nav-item">
                            <a class="nav-link" href="data_galeri.php">
                                <i class="fas fa-fw fa-image"></i>
                                <span>Data Galeri</span></a>
                            </li>

                             <li class="nav-item">
                            <a class="nav-link" href="data_pemesanan.php">
                                <i class="fas fa-fw fa-shopping-cart"></i>
                                <span>Data Pemesanan</span></a>
                            </li>

                             <li class="nav-item">
                            <a class="nav-link" href="data_komentar.php">
                                <i class="fas fa-fw fa-comment"></i>
                                <span>Data Komentar</span></a>
                            </li>


                            <!-- Sidebar Toggler (Sidebar) -->
                            <div class="text-center d-none d-md-inline">
                                <button class="rounded-circle border-0" id="sidebarToggle"></button>
                            </div>

                        </ul>
                        <!-- End of Sidebar -->

                        <!-- Content Wrapper -->
                        <div id="content-wrapper" class="d-flex flex-column">

                            <!-- Main Content -->
                            <div id="content">

                                <!-- Topbar -->
                                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                                    <!-- Sidebar Toggle (Topbar) -->
                                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                        <i class="fa fa-bars"></i>
                                    </button>

                                    <!-- Topbar Navbar -->
                                    <ul class="navbar-nav ml-auto">

                                        <div class="topbar-divider d-none d-sm-block"></div>

                                        <!-- Nav Item - User Information -->
                                        <li class="nav-item dropdown no-arrow">
                                            <a class="nav-link dropdown-toggle" href="../logout.php" onclick="return confirm('Yakin Logout?');">
                                                <i class="fas fa-sign-out-alt"></i>
                                            </a>
                                        </li>

                                    </ul>

                                </nav>
                                                <!-- End of Topbar -->