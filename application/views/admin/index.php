<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin | MbekSite</title>

    <link href="<?php echo base_url();?>assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/vendor/bootstrap/css/admin_css.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>
  <h1><a href="<?php echo base_url('index.php/admin') ?>">Klik!</a></h1>
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="<?php echo base_url('index.php/admin/showInfo') ?>"><i class="fa fa-sticky-note-o fa-fw"></i> Blogs</a>
      <a href="<?php echo base_url('index.php/admin/showKandang') ?>"><i class="fa fa-money fa-fw"></i> Investasi Kandang</a>
      <a href="<?php echo base_url('index.php/admin/showKambing') ?>"><i class="fa fa-money fa-fw"></i> Investasi Kambing</a>
      <a href="<?php echo base_url('index.php/admin/showQurban') ?>"><i class="fa fa-balance-scale fa-fw"></i> Qurban</a>
      <hr>
      <a href="<?php echo base_url('index.php/admin/logout') ?>"><i class="fa fa-sign-out fa-fw"></i> Keluar</a>
  </div>


  <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
  <div id="main">
    <div class="container">
      <div class="jumbotron">
        <h1>Selamat datang, Admin</h1>
        <button class="btn" onclick="openNav()"> Show Menu</button>
    </div>
</div>
</div>

<!-- jQuery -->
<script src="<?php echo base_url();?>assets/admin/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url();?>assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/vendor/bootstrap/js/admin_js.js"></script>


<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url();?>assets/admin/vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="<?php echo base_url();?>assets/admin/vendor/raphael/raphael.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/vendor/morrisjs/morris.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/data/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url();?>assets/admin/dist/js/sb-admin-2.js"></script>

</body>

</html>