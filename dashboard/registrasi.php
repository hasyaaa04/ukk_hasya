<?php
include '../action.php';

if(isset($_POST['register.'])){
    // Instansiasi Class Aauth
    $objct = new Auth();
    $act =  $objct->register($_POST);

    // Cek Berhasil
    if($act){
        header("location:?register=success");
    }else {
        header("location:?register=fail#signup");
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap -->
    <link href="../assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../assets/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../assets/build/css/custom.min.css" rel="stylesheet">
</head>
<body>
    
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
        <section class="login_content">
            
        <div id="register" class="animate form registration_form">
        <section class="login_content">
            <form method="POST" action="index.php">
            <h1>Create Account</h1>
            <div>
                <input type="text" class="form-control" name="username" placeholder="Username" required/>
            </div>
            <div class="position-relative">
                <input type="password" class="form-control" name="password" id="pwregister" placeholder="Password" pattern=".{8,}" title="Password harus terdiri dari minimal 8 karakter" required="" autocomplete=""/>
                <button type="button" onclick="showPassword()" class="btn position-absolute" style="top: 0; right: 0;"><span class="fa fa-eye"></span></button>
            </div>
            <div>
                <input type="email" class="form-control" name="email" placeholder="Email" required/>
            </div>
            <div>
                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required/>
            </div>
            <div>
                <textarea name="alamat" class="form-control mb-3" rows="2" placeholder="Alamat" required></textarea>
            </div>
            <div>
                <input type="text" name="level" class="form-control" readonly value="peminjam">
            </div>
            <div>
                <button class="btn btn-primary rounded col-lg-12" type="submit" name="register">Registrasi</button>
            </div>

        
            </form>
        </section>
        </div>

            <div class="clearfix"></div>

            <div class="separator">
                <p class="change_link">Sudah punya akun ?
                <a href="index.php#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

            </div>
            </form>
        </section>
        </div>
    </div>
    </div>
         
    <!-- jQuery -->
<script src="../assets/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
    <script src="../assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../assets/vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../assets/vendors/iCheck/icheck.min.js"></script>
    <!-- PNotify -->
    <script src="../assets/vendors/pnotify/dist/pnotify.js"></script>
    <script src="../assets/vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="../assets/vendors/pnotify/dist/pnotify.nonblock.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../assets/build/js/custom.min.js"></script>
    <select name="level" class="form-control">
        <option value="petugas">petugas</option>
        <option value="peminjam">peminjam</option>
    </select>