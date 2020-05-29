<!DOCTYPE html>
<html lang="en">
<head>

  <title>MbekSite</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- MbekSite CSS -->
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets/mbeksite.css" rel="stylesheet" type="text/css">

  <!-- MbekSite JavaScript & JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/mbeksite.js" rel="stylesheet""></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

  <div id="mySidenav" class="sidenav">
    <a href="<?php echo base_url('index.php/user/produk'); ?>" id="blog" data-toggle="modal">Produk Saya</a>
  </div>

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="<?php echo base_url();?>">
          <img style="max-width:150px; margin-top: -61px;" src="<?php echo base_url();?>assets/image/logo.png">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#myInvestasi">INVESTASI</a></li>
          <li><a href="#myQurban">E-QURBAN</a></li>
          <li><a href="<?php echo base_url('index.php/user/blog'); ?>">BLOG</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              <?php 
              echo $_SESSION["username"];
              ?>
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url('index.php/user/userpage'); ?>">Halaman Pengguna</a></li>
                <li><a href="<?php echo base_url('index.php/all_produk'); ?>">Beli Produk</a></li>
                <li><a href="<?php echo base_url('index.php/cart'); ?>">Cart</a></li>
                <li><a href="<?php echo base_url('index.php/user/logout'); ?>">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Investasi -->
    <div id="myInvestasi" class="container">
      <?php include 'investasi.php'; ?>
    </div>

    <!-- Produk Kambing Qurban -->
    <div id="tour" class="bg-1">
      <div class="container">
        <div class="row">
        <div class="col-sm-6">
          <img src="<?php echo base_url('assets/image/kambing-qurban.jpg'); ?>" class="img-rounded" alt="Kambing Qurban" style="max-width:450px; margin-top: -50px;">
        </div>
        <div class="col-sm-6">
          <p> Kami mempersembahkan Kambing Qurban terbaik. Digemukkan dan dikelola oleh para peternak terbaik dan terhandal dibidangnya. Proses transaksi yang aman dan relatif cepat memberikan Anda kenyaman dalam memberikan donasi qurban ke target yang Anda pilih. </p>

          <h2> Rp 3.000.000,- </h2>
      </div>
    </div>
  </div>
</div>

    <!-- Qurban -->
    <div id="myQurban" class="container">
      <?php include 'qurban.php'; ?>
    </div>

    <!-- Footer -->
    <footer class="text-center">
      <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
        <span class="glyphicon glyphicon-chevron-up"></span>
      </a><br><br>
      <p>MbekSite 2017</p> 
    </footer>

  </body>
  </html>