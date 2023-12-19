<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ShareStuff - SuperAdmin</title>

    <!-- Custom fonts for this template-->
    <link href="sbadmin2/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/logo-4.png">
    <link rel="stylesheet" type="text/css" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendor/signericafat.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendor/cerebrisans.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendor/simple-line-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendor/elegant.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendor/linear-icon.css">
    <link rel="stylesheet" type="text/css" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" type="text/css" href="assets/css/plugins/easyzoom.css">
    <link rel="stylesheet" type="text/css" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/plugins/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="assets/css/plugins/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <link href="sbadmin2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="sbadmin2/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: orangered" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
            <div class="sidebar-brand-text mx-3">ShareStuff - Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Data Master -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Data Master</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/kategori">Data Kategori</a>
                        <a class="collapse-item" href="/subkategori">Data Subkategori</a>
                        <a class="collapse-item" href="/slider">Data Slider</a>
                        <a class="collapse-item" href="/barang">Data Barang</a>
                        <a class="collapse-item" href="/member">Data Member</a>
                        <a class="collapse-item" href="/testimoni">Data Testimoni</a>
                        <a class="collapse-item" href="/reviews">Data Reviews</a>
                    </div>
                </div>
            </li>

            <!-- Data Pesanan -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="sbadmin2/#" data-toggle="collapse" data-target="#pesanan"
                    aria-expanded="true" aria-controls="pesanan">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                    <span>Data Pesanan</span>
                </a>
                <div id="pesanan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="/pesanan/baru">Pesanan Baru</a>
                        <a class="collapse-item" href="/pesanan/dikonfirmasi">Pesanan Dikonfirmasi</a>
                        <a class="collapse-item" href="/pesanan/dikemas">Pesanan Dikemas</a>
                        <a class="collapse-item" href="/pesanan/dikirim">Pesanan Dikirim</a>
                        <a class="collapse-item" href="/pesanan/diteria">Pesanan Diterima</a>
                        <a class="collapse-item" href="/pesanan/selesai">Pesanan Selesai</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="/laporan">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Laporan Pesanan</span>
                </a>
                
            </li>



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
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="sbadmin2/#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="/logout">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">@yield('title')</h1>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; HizHAL 2023</span>
                    </div>
                </div>
            </footer>
        </div>

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="sbadmin2/#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="sbadmin2/vendor/jquery/jquery.min.js"></script>
    <script src="sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="sbadmin2/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="sbadmin2/js/sb-admin-2.min.js"></script>

</body>

</html>