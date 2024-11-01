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
            <section class="content-header">
                <h1>Transaction</h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url('dashboard'); ?>">Home</a></li>
                    <li class="active">Transaction</li>
                </ol>
            </section>

            <section class="content">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Sales and Purchase Overview</h3>
                    </div>
                    <div class="box-body">
                        <div id="chart1" style="height: 400px; min-width: 310px"></div>
                    </div>
                </div>
                <div class="box-body">
                <div class="row">
    <div class="col-md-6">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Penjualan</h3>
            </div>
            <div class="box-body">
                <div class="export-buttons" style="margin-bottom: 10px;">
                    <form method="POST" action="<?php echo base_url('laporan/export_all_penjualan'); ?>" style="display: inline;">
                        <button type="submit" class="btn btn-success btn-sm">Export All as Excel</button>
                    </form>
                    <form method="POST" action="<?php echo base_url('laporan/xport_by_date_penjualan'); ?>" style="display: inline;">
                        <input type="date" name="export_date" required class="btn btn-info btn-sm">
                        <button type="submit" class="btn btn-info btn-sm">Export by Date</button>
                    </form>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Barang</th>
                                <th>Kode Barang</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Total</th>
                                <th>Tanggal</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($penjualan_data)): ?>
                                <?php foreach ($penjualan_data as $item): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($item->user); ?></td>
                                        <td><?php echo htmlspecialchars($item->barang); ?></td>
                                        <td><?php echo htmlspecialchars($item->kode_barang); ?></td>
                                        <td><?php echo htmlspecialchars($item->jumlah); ?></td>
                                        <td><?php echo number_format($item->harga, 2); ?></td>
                                        <td><?php echo number_format($item->total, 2); ?></td>
                                        <td><?php echo date('Y-m-d', strtotime($item->tanggal)); ?></td>
                                        <td>
                                            <button class="btn btn-warning btn-sm"
                                                data-toggle="modal"
                                                data-target="#updateModal"
                                                data-id="<?php echo $item->id; ?>"
                                                data-user="<?php echo htmlspecialchars($item->user); ?>"
                                                data-barang="<?php echo htmlspecialchars($item->barang); ?>"
                                                data-kode="<?php echo htmlspecialchars($item->kode_barang); ?>"
                                                data-jumlah="<?php echo htmlspecialchars($item->jumlah); ?>"
                                                data-harga="<?php echo htmlspecialchars($item->harga); ?>">Update</button>
                                            <a href="<?php echo base_url('laporan/delete_penjualan/' . $item->id); ?>"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="8" class="text-center">No data available</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Pembelian</h3>
            </div>
            <div class="box-body">
                <div class="export-buttons" style="margin-bottom: 10px;">
                    <form method="POST" action="<?php echo base_url('laporan/export_all'); ?>" style="display: inline;">
                        <button type="submit" class="btn btn-success btn-sm">Export All as Excel</button>
                    </form>
                    <form method="POST" action="<?php echo base_url('laporan/export_by_date'); ?>" style="display: inline;">
                        <input type="date" name="export_date" required class="btn btn-info btn-sm">
                        <button type="submit" class="btn btn-info btn-sm">Export by Date</button>
                    </form>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Barang</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Total</th>
                                <th>Tanggal</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($pembelian_data)): ?>
                                <?php foreach ($pembelian_data as $item): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($item->user); ?></td>
                                        <td><?php echo htmlspecialchars($item->barang); ?></td>
                                        <td><?php echo htmlspecialchars($item->jumlah); ?></td>
                                        <td><?php echo number_format($item->harga, 2); ?></td>
                                        <td><?php echo number_format($item->total, 2); ?></td>
                                        <td><?php echo date('Y-m-d', strtotime($item->tanggal)); ?></td>
                                        <td>
                                            <button class="btn btn-warning btn-sm"
                                                data-toggle="modal"
                                                data-target="#updateModalPembelian"
                                                data-id="<?php echo $item->id; ?>"
                                                data-user="<?php echo htmlspecialchars($item->user); ?>"
                                                data-barang="<?php echo htmlspecialchars($item->barang); ?>"
                                                data-jumlah="<?php echo htmlspecialchars($item->jumlah); ?>"
                                                data-harga="<?php echo htmlspecialchars($item->harga); ?>">Update</button>
                                            <a href="<?php echo base_url('laporan/delete_pembelian/' . $item->id); ?>"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="7" class="text-center">No data available</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


            </section>
        </div>

        <!-- Modal for Update Penjualan -->
        <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="<?php echo base_url('laporan/update_penjualan'); ?>" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title">Update Penjualan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="id" id="penjualanId">
                            <div class="form-group">
                                <label for="itemUser">User</label>
                                <input type="text" class="form-control" name="user" id="penjualanUser" required>
                            </div>
                            <div class="form-group">
                                <label for="itemBarang">Barang</label>
                                <input type="text" class="form-control" name="barang" id="penjualanBarang" required>
                            </div>
                            <div class="form-group">
                                <label for="itemKode">Kode Barang</label>
                                <input type="text" class="form-control" name="kode_barang" id="penjualanKode" required>
                            </div>
                            <div class="form-group">
                                <label for="itemJumlah">Jumlah</label>
                                <input type="number" class="form-control" name="jumlah" id="penjualanJumlah" required>
                            </div>
                            <div class="form-group">
                                <label for="itemHarga">Harga</label>
                                <input type="number" class="form-control" name="harga" id="penjualanHarga" step="0.01" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal for Update Pembelian -->
        <div class="modal fade" id="updateModalPembelian" tabindex="-1" role="dialog" aria-labelledby="updateModalPembelianLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="<?php echo base_url('laporan/update_pembelian'); ?>" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title">Update Pembelian</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="id" id="pembelianId">
                            <div class="form-group">
                                <label for="itemUser">User</label>
                                <input type="text" class="form-control" name="user" id="pembelianUser" required>
                            </div>
                            <div class="form-group">
                                <label for="itemBarang">Barang</label>
                                <input type="text" class="form-control" name="barang" id="pembelianBarang" required>
                            </div>
                            <div class="form-group">
                                <label for="itemJumlah">Jumlah</label>
                                <input type="number" class="form-control" name="jumlah" id="pembelianJumlah" required>
                            </div>
                            <div class="form-group">
                                <label for="itemHarga">Harga</label>
                                <input type="number" class="form-control" name="harga" id="pembelianHarga" step="0.01" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal for Update Penjualan -->
        <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="<?php echo base_url('laporan/update_penjualan'); ?>" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title">Update Penjualan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="id" id="penjualanId">
                            <div class="form-group">
                                <label for="itemUser">User</label>
                                <input type="text" class="form-control" name="user" id="penjualanUser" required>
                            </div>
                            <div class="form-group">
                                <label for="itemBarang">Barang</label>
                                <input type="text" class="form-control" name="barang" id="penjualanBarang" required>
                            </div>
                            <div class="form-group">
                                <label for="itemKode">Kode Barang</label>
                                <input type="text" class="form-control" name="kode_barang" id="penjualanKode" required>
                            </div>
                            <div class="form-group">
                                <label for="itemJumlah">Jumlah</label>
                                <input type="number" class="form-control" name="jumlah" id="penjualanJumlah" required>
                            </div>
                            <div class="form-group">
                                <label for="itemHarga">Harga</label>
                                <input type="number" class="form-control" name="harga" id="penjualanHarga" step="0.01" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
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
        <?php if ($this->session->flashdata('message')): ?>
            swal({
                title: "<?php echo strpos($this->session->flashdata('message'), 'successfully') !== false ? 'Success!' : 'Error!'; ?>",
                text: "<?php echo $this->session->flashdata('message'); ?>",
                type: "<?php echo strpos($this->session->flashdata('message'), 'successfully') !== false ? 'success' : 'error'; ?>",
                timer: 2000,
                showConfirmButton: false
            });
        <?php endif; ?>
    </script>


    <script>
        $('#updateModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var id = button.data('id');
            var user = button.data('user');
            var barang = button.data('barang');
            var kode = button.data('kode');
            var jumlah = button.data('jumlah');
            var harga = button.data('harga');

            var modal = $(this);
            modal.find('#penjualanId').val(id);
            modal.find('#penjualanUser').val(user);
            modal.find('#penjualanBarang').val(barang);
            modal.find('#penjualanKode').val(kode);
            modal.find('#penjualanJumlah').val(jumlah);
            modal.find('#penjualanHarga').val(harga);
        });

        $('#updateModalPembelian').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var id = button.data('id');
            var user = button.data('user');
            var barang = button.data('barang');
            var jumlah = button.data('jumlah');
            var harga = button.data('harga');

            var modal = $(this);
            modal.find('#pembelianId').val(id);
            modal.find('#pembelianUser').val(user);
            modal.find('#pembelianBarang').val(barang);
            modal.find('#pembelianJumlah').val(jumlah);
            modal.find('#pembelianHarga').val(harga);
        });
    </script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const totals = <?php echo json_encode($totals); ?>; // Pass the totals to JavaScript
        const penjualanData = <?php echo json_encode($penjualan_data); ?>; // Pass penjualan data

        // Prepare categories and series data
        const categories = penjualanData.map(item => item.tanggal);
        const totalPenjualan = penjualanData.map(item => parseFloat(item.total)); // Total penjualan
        const totalPembelian = totals.total_pembelian || 0; // Total pembelian
        const pembelianData = new Array(categories.length).fill(totalPembelian); // Fill pembelian data

        // Target value
        const targetValue = 1000000; // Set your target value

        Highcharts.chart('chart1', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Sales Overview by Date',
                align: 'left'
            },
            xAxis: {
                categories: categories
            },
            yAxis: {
                allowDecimals: false,
                min: 0,
                title: {
                    text: 'Amount (Rp)'
                }
            },
            tooltip: {
                shared: true,
                useHTML: true,
                headerFormat: '<b>{point.key}</b><br/>',
                pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
            },
            plotOptions: {
                column: {
                    stacking: 'normal'
                }
            },
            series: [{
                name: 'Total Penjualan',
                data: totalPenjualan,
                stack: 'sales',
                color: '#7cb5ec' // Blue color
            }, //{
            //     name: 'Total Pembelian',
            //     data: pembelianData,
            //     stack: 'sales',
            //     color: '#434348' // Purple color
            // }, 
            {
                name: 'Target',
                type: 'line',
                data: new Array(categories.length).fill(targetValue), // Fill target array
                color: '#ff0000', // Red color for the target line
                dashStyle: 'ShortDash',
                tooltip: {
                    valueSuffix: ' Rp'
                },
                marker: {
                    enabled: false
                }
            }]
        });
    });
</script>


</body>

</html>