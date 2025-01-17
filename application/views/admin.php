<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url('template/main-semidark/images/favicon.ico'); ?>">
    <title>EduAdmin - Dashboard Morris Charts</title>

    <!-- Vendors Style -->
    <link rel="stylesheet" href="<?php echo base_url('template/main-semidark/css/vendors_css.css'); ?>?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo base_url('template/main-semidark/css/style.css'); ?>?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo base_url('template/main-semidark/css/skin_color.css'); ?>?v=<?php echo time(); ?>">
    <style>
        /* Adjust logo size */
        .logo img {
            max-width: 85px;
            height: auto;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
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
                        <span class="light-logo"><img src="<?php echo base_url('template/images/logopako1.png'); ?>" alt="logo"></span>
                        <span class="dark-logo"><img src="<?php echo base_url('template/images/logopako1.png'); ?>" alt="logo"></span>
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
        <!-- content -->
        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    <h4>Setting Monthly Working Days</h4>
                    <form action="<?php echo site_url('admin/submit_monthly_hk'); ?>" method="post">
                        <div class="form-group">
                            <label for="plant">Select Plant:</label>
                            <select id="plant" name="plant" class="form-control" required>
                                <option value="">Select a plant</option>
                                <option value="inko">Inko</option>
                                <option value="4w">4W</option>
                                <option value="2w">2W</option>
                                <option value="assy_tire">Assy Tire</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="year">Select Year:</label>
                            <input type="number" id="year" name="year" class="form-control" required min="2000" max="2100" placeholder="Enter year">
                        </div>

                        <div class="form-group">
                            <label for="month">Select Month:</label>
                            <select id="month" name="month" class="form-control" required>
                                <option value="">Select a month</option>
                                <option value="01">January</option>
                                <option value="02">February</option>
                                <option value="03">March</option>
                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>
                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="working_days">Number of Working Days:</label>
                            <input type="number" id="working_days" name="working_days" class="form-control" required min="0" placeholder="Enter number of working days">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
                <h4 class="mt-4">Monthly Working Days</h4>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Plant</th>
                            <th>Year</th>
                            <th>Month</th>
                            <th>Working Days</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($monthly_data)): ?>
                            <?php foreach ($monthly_data as $row): ?>
                                <tr>
                                    <td><?php echo $row->id; ?></td>
                                    <td><?php echo $row->plant; ?></td>
                                    <td><?php echo $row->year; ?></td>
                                    <td><?php echo $row->month; ?></td>
                                    <td><?php echo $row->working_days; ?></td>
                                    <td>
                                        <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal<?php echo $row->id; ?>">Edit</button>
                                        <a href="<?php echo site_url('admin/delete/' . $row->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                                    </td>
                                </tr>

                                <!-- Edit Modal -->
                                <div class="modal fade" id="editModal<?php echo $row->id; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModalLabel">Edit Monthly Working Day</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?php echo site_url('admin/update/' . $row->id); ?>" method="post">
                                                    <div class="form-group">
                                                        <label for="plant">Plant:</label>
                                                        <select name="plant" class="form-control" required>
                                                            <option value="inko" <?php echo ($row->plant == 'inko') ? 'selected' : ''; ?>>Inko</option>
                                                            <option value="4w" <?php echo ($row->plant == '4w') ? 'selected' : ''; ?>>4W</option>
                                                            <option value="2w" <?php echo ($row->plant == '2w') ? 'selected' : ''; ?>>2W</option>
                                                            <option value="assy_tire" <?php echo ($row->plant == 'assy_tire') ? 'selected' : ''; ?>>Assy Tire</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="year">Year:</label>
                                                        <input type="number" name="year" class="form-control" value="<?php echo $row->year; ?>" required min="2000" max="2100">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="month">Month:</label>
                                                        <select name="month" class="form-control" required>
                                                            <option value="01" <?php echo ($row->month == '01') ? 'selected' : ''; ?>>January</option>
                                                            <option value="02" <?php echo ($row->month == '02') ? 'selected' : ''; ?>>February</option>
                                                            <option value="03" <?php echo ($row->month == '03') ? 'selected' : ''; ?>>March</option>
                                                            <option value="04" <?php echo ($row->month == '04') ? 'selected' : ''; ?>>April</option>
                                                            <option value="05" <?php echo ($row->month == '05') ? 'selected' : ''; ?>>May</option>
                                                            <option value="06" <?php echo ($row->month == '06') ? 'selected' : ''; ?>>June</option>
                                                            <option value="07" <?php echo ($row->month == '07') ? 'selected' : ''; ?>>July</option>
                                                            <option value="08" <?php echo ($row->month == '08') ? 'selected' : ''; ?>>August</option>
                                                            <option value="09" <?php echo ($row->month == '09') ? 'selected' : ''; ?>>September</option>
                                                            <option value="10" <?php echo ($row->month == '10') ? 'selected' : ''; ?>>October</option>
                                                            <option value="11" <?php echo ($row->month == '11') ? 'selected' : ''; ?>>November</option>
                                                            <option value="12" <?php echo ($row->month == '12') ? 'selected' : ''; ?>>December</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="working_days">Working Days:</label>
                                                        <input type="number" name="working_days" class="form-control" value="<?php echo $row->working_days; ?>" required min="0">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="6" class="text-center">No data available</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
                <?php if ($this->session->flashdata('success')): ?>
                    <script>
                        swal("Success!", "<?php echo $this->session->flashdata('success'); ?>", "success");
                    </script>
                <?php endif; ?>

                <?php if ($this->session->flashdata('error')): ?>
                    <script>
                        swal("Error!", "<?php echo $this->session->flashdata('error'); ?>", "error");
                    </script>
                <?php endif; ?>
            </section>

        </div>
        <!-- Sidebar -->
        <aside class="main-sidebar">
            <section class="sidebar position-relative">
                <div class="multinav">
                    <div class="multinav-scroll" style="height: 100%;">
                        <ul class="sidebar-menu" data-widget="tree">
                            <li class="header">Tipe Pekerja</li>
                            <li class="treeview">
                                <a href="#"><i class="icon-Chart-pie"></i> <span>Charts</span><i class="fa fa-angle-right pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php echo base_url(); ?>"><i class="icon-Commit"></i> UMH DL</a></li>
                                    <li><a href="<?php echo base_url('dashboardidl'); ?>"><i class="icon-Commit"></i> UMH IDL</a></li>
                                </ul>
                            </li>
                            <li class="header">LOGIN ADMIN</li>
                            <li class="treeview">
                                <a href="#"><i class="icon-Chat-locked"></i> <span>Authentication</span><i class="fa fa-angle-right pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php echo base_url('admin'); ?>"><i class="icon-Commit"></i> setting hari kerja</a></li>
                                    <li><a href="<?php echo base_url('setuser'); ?>"><i class="icon-Commit"></i> setting user</a></li>
                                    <li><a href="<?php echo base_url(''); ?>"><i class="icon-Commit"></i> logout</a></li>
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

</body>

</html>