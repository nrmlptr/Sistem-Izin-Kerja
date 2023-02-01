<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>IKS System - Login</title>

        <!-- Custom fonts for this template-->
        <link href="<?php echo base_url('assets/sbadmin/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="<?php echo base_url('assets/sbadmin/');?>css/sb-admin-2.min.css" rel="stylesheet">

    </head>

    <body class="bg-gradient-primary">

        <div class="container">

            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-xl-5 col-lg-12 col-md-9">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <!-- <div class="col-lg-12 d-none d-lg-block bg-login-image"></div> -->
                                <div class="col-lg-12">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Welcome to Your Dashboard!</h1>
                                        </div>
                                        <form class="user" action="<?php echo base_url('Login/verifyLogin');?>" method="POST">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user"
                                                    id="username" 
                                                    placeholder="Username" name="username" for="username" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user"
                                                    id="upass" placeholder="Password" name="upass" for="upass" required>
                                            </div>
                                            <!-- <a href="#" class="btn btn-primary btn-user btn-block" type="submit">
                                                Login
                                            </a> -->
                                            <button class="btn btn-primary btn-user btn-block" type="submit">Login</button>
                                            <hr>
                                            <h6 class="text-center">Untuk Calon Pekerja Subcont, Klik Tombol di Bawah untuk Mengisi Form</h6>
                                            <a href="<?php echo base_url('Home/form_IKSJSA');?>" class="btn btn-google btn-user btn-block">
                                                <i></i>Izin Kerja Subcont
                                            </a>
                                            <!-- <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                                <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                            </a> -->
                                        </form>
                                        <hr>
                                        <!-- <div class="text-center">
                                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                                        </div>
                                        <div class="text-center">
                                            <a class="small" href="register.html">Create an Account!</a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="<?php echo base_url('assets/sbadmin/');?>vendor/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url('assets/sbadmin/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?php echo base_url('assets/sbadmin/');?>vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?php echo base_url('assets/sbadmin/');?>js/sb-admin-2.min.js"></script>

    </body>

</html>