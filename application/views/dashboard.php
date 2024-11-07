<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url('template/main-semidark/images/favicon.ico'); ?>">
    <title>Halaman Laporan</title>

    <!-- Vendors Style -->
    <link rel="stylesheet" href="<?php echo base_url('template/main-semidark/css/vendors_css.css'); ?>?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo base_url('template/main-semidark/css/style.css'); ?>?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo base_url('template/main-semidark/css/skin_color.css'); ?>?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        /* Custom styles */
        .table {
            margin-bottom: 0;
            /* Remove bottom margin */
        }

        .logo img {
            max-width: 85px;
            height: auto;
        }
    </style>
</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">

    <div class="wrapper">
        <div id="loader"></div>

        <!-- Navbar Section -->
        <header class="main-header">
            <div class="d-flex align-items-center logo-box justify-content-start">
                <a href="#" class="waves-effect waves-light nav-link d-none d-md-inline-block mx-10 push-btn bg-transparent text-white" data-toggle="push-menu" role="button">
                    <span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                </a>
                <a href="<?php echo base_url('dashboard'); ?>" class="logo">
                    <div class="logo-lg">
                        <span class="light-logo"><img src="<?php echo base_url('template/images/ppplll.png'); ?>" alt="logo"></span>
                        <span class="dark-logo"><img src="<?php echo base_url('template/images/ppplll.png'); ?>" alt="logo"></span>
                    </div>
                </a>
            </div>
            <nav class="navbar navbar-static-top">
                <div class="app-menu">
                    <ul class="header-megamenu nav">
                        <li class="btn-group nav-item d-md-none">
                            <a href="#" class="waves-effect waves-light nav-link push-btn" data-toggle="push-menu" role="button">
                                <span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                            </a>
                        </li>
                        <li class="btn-group nav-item d-none d-xl-inline-block">
                            <a href="contact_app_chat.html" class="waves-effect waves-light nav-link svg-bt-icon" title="Chat">
                                <i class="icon-Chat"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>
                        <li class="btn-group nav-item d-none d-xl-inline-block">
                            <a href="mailbox.html" class="waves-effect waves-light nav-link svg-bt-icon" title="Mailbox">
                                <i class="icon-Mailbox"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>
                        <li class="btn-group nav-item d-none d-xl-inline-block">
                            <a href="extra_taskboard.html" class="waves-effect waves-light nav-link svg-bt-icon" title="Taskboard">
                                <i class="icon-Clipboard-check"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="navbar-custom-menu r-side">
                    <ul class="nav navbar-nav">
                        <li class="btn-group nav-item d-lg-inline-flex d-none">
                            <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen" title="Full Screen">
                                <i class="icon-Expand-arrows"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>
                        <li class="btn-group d-lg-inline-flex d-none">
                            <div class="app-menu">
                                <div class="search-bx mx-5">
                                    <form>
                                        <div class="input-group">
                                            <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                            <div class="input-group-append">
                                                <button class="btn" type="submit" id="button-addon3"><i class="ti-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown notifications-menu">
                            <a href="#" class="waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" title="Notifications">
                                <i class="icon-Notifications"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>
                        <li class="dropdown user user-menu">
                            <a href="#" class="waves-effect waves-light dropdown-toggle" data-bs-toggle="dropdown" title="User">
                                <i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Sidebar -->
        <aside class="main-sidebar">
            <section class="sidebar position-relative">
                <div class="multinav">
                    <div class="multinav-scroll" style="height: 100%;">
                        <ul class="sidebar-menu" data-widget="tree">
                            <li class="header">Transaction</li>
                            <li class="treeview">
                                <a href="#"><i class="icon-Chart-pie"></i> <span>Form Transaction</span><i class="fa fa-angle-right pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php echo base_url('dashboard'); ?>"><i class="icon-Commit"></i>Halaman Transaction </a></li>
                                    <li><a href="<?php echo base_url('laporan'); ?>"><i class="icon-Commit"></i>Halaman Laporan </a></li>
                                </ul>
                            </li>
                            <li class="header">LOGIN ADMIN</li>
                            <li class="treeview">
                                <a href="#"><i class="icon-Chat-locked"></i> <span>Authentication</span><i class="fa fa-angle-right pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php echo base_url(''); ?>"><i class="icon-Commit"></i> logout</a></li>
                                    <li><a href="<?php echo base_url('setuser'); ?>"><i class="icon-Commit"></i> Tambah User</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <div class="sidebar-footer">
                <a href="#" class="link" title="Settings"><span class="icon-Settings-2"></span></a>
                <a href="mailbox.html" class="link" title="Email"><span class="icon-Mail"></span></a>
                <a href="#" class="link" title="Logout"><span class="icon-Lock-overturning"></span></a>
            </div>
        </aside>
        <!-- Main Content -->
        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Penjualan Form -->
                        <div class="col-md-6">
                            <h2>Form Penjualan</h2>
                            <form action="<?php echo base_url('dashboard/submit_penjualan'); ?>" method="post" id="penjualanForm">
                                <fieldset class="border p-3">
                                    <legend class="w-auto">Detail Penjualan</legend>
                                    <div class="form-group">
                                        <label for="user">User:</label>
                                        <input type="text" name="user" class="form-control form-control-lg" placeholder="Masukkan Nama User" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="kode_barang">Kode Barang:</label>
                                        <input type="text" name="kode_barang" class="form-control form-control-lg" placeholder="Masukkan Kode Barang" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="barang">Barang:</label>
                                        <input type="text" name="barang" class="form-control form-control-lg" placeholder="Masukkan Nama Barang" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah">Jumlah:</label>
                                        <input type="number" name="jumlah" class="form-control form-control-lg" placeholder="Masukkan Jumlah" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="harga">Harga:</label>
                                        <input type="number" name="harga" class="form-control form-control-lg" placeholder="Masukkan Harga" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal:</label>
                                        <input type="date" name="tanggal" class="form-control form-control-lg" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg">Submit Penjualan</button>
                                </fieldset>
                            </form>
                        </div>

                        <!-- Pembelian Form -->
                        <div class="col-md-6">
                            <h2>Form Pembelian</h2>
                            <form action="<?php echo base_url('dashboard/submit_pembelian'); ?>" method="post" id="pembelianForm">
                                <fieldset class="border p-3">
                                    <legend class="w-auto">Detail Pembelian</legend>
                                    <div class="form-group">
                                        <label for="user">User:</label>
                                        <input type="text" name="user" class="form-control form-control-lg" placeholder="Masukkan Nama User" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="barang">Barang:</label>
                                        <input type="text" name="barang" class="form-control form-control-lg" placeholder="Masukkan Nama Barang" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah">Jumlah:</label>
                                        <input type="number" name="jumlah" class="form-control form-control-lg" placeholder="Masukkan Jumlah" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="harga">Harga:</label>
                                        <input type="number" name="harga" class="form-control form-control-lg" placeholder="Masukkan Harga" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal:</label>
                                        <input type="date" name="tanggal" class="form-control form-control-lg" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg">Submit Pembelian</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- Footer -->
        <footer class="main-footer">
            &copy; 2021 <a href="https://www.multipurposethemes.com/">Multipurpose Themes</a>. All Rights Reserved.
        </footer>
    </div>

    <!-- Vendor JS -->
    <script src="<?php echo base_url('template/main-semidark/js/vendors.min.js'); ?>?v=<?php echo time(); ?>"></script>
    <script src="<?php echo base_url('template/assets/icons/feather-icons/feather.min.js'); ?>?v=<?php echo time(); ?>"></script>
    <script src="<?php echo base_url('template/assets/vendor_components/raphael/raphael.min.js'); ?>?v=<?php echo time(); ?>"></script>
    <script src="<?php echo base_url('template/main-semidark/js/template.js'); ?>?v=<?php echo time(); ?>"></script>
    <script src="<?php echo base_url('template/main-semidark/js/highcharts.js'); ?>?v=<?php echo time(); ?>"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    <script>
        <?php if ($this->session->flashdata('success')): ?>
            swal({
                title: "Success!",
                text: "<?php echo $this->session->flashdata('success'); ?>",
                type: "success",
                timer: 2000,
                showConfirmButton: false
            });
        <?php endif; ?>
    </script>
</body>

</html>
