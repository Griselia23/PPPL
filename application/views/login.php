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
</head>

<body class="hold-transition theme-primary bg-img" style="background-image: url('<?php echo base_url('images/auth-bg/bg-1.jpg'); ?>')">

    <div class="container h-p100">
        <div class="row align-items-center justify-content-md-center h-p100">

            <div class="col-12">
                <div class="row justify-content-center g-0">
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="bg-white rounded10 shadow-lg">
                            <div class="content-top-agile p-20 pb-0">
                                <h2 class="text-primary">Let's Get Started</h2>
                                <p class="mb-0">Sign in to continue to</p>
                            </div>
                            <div class="p-40">

                                <!-- Display error message if it exists -->
                                <?php if (!empty($error)): ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo $error; ?>
                                    </div>
                                <?php endif; ?>

                                <form action="<?php echo site_url('login/process_login'); ?>" method="post">
                                    <?php if ($this->session->flashdata('error')): ?>
                                        <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
                                    <?php endif; ?>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
                                            <input type="text" class="form-control ps-15 bg-transparent" name="display_name" placeholder="Username" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
                                            <input type="password" class="form-control ps-15 bg-transparent" name="password" placeholder="Password" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_1" name="remember_me">
                                                <label for="basic_checkbox_1">Remember Me</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="fog-pwd text-end">
                                                <a href="<?php echo site_url('admin/forgot_password'); ?>" class="hover-warning">
                                                    <i class="ion ion-locked"></i> Forgot pwd?
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center">
                                            <button type="submit" class="btn btn-danger mt-10">SIGN IN</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="text-center">
                                    <p class="mt-15 mb-0">Don't have an account? <a href="<?php echo base_url('register'); ?>" class="text-warning ms-5">Sign Up</a></p>
                                </div>





                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Vendor JS -->
            <script src="<?php echo base_url('template/main-semidark/js/vendors.min.js'); ?>?v=<?php echo time(); ?>"></script>
            <script src="<?php echo base_url('template/assets/icons/feather-icons/feather.min.js'); ?>?v=<?php echo time(); ?>"></script>
            <script src="<?php echo base_url('template/assets/vendor_components/raphael/raphael.min.js'); ?>?v=<?php echo time(); ?>"></script>


</body>

</html>