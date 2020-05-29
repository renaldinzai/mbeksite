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

</head> 

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<?php
  if ($this->session->userdata('isLogin') == TRUE) { ?>
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
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#about">TENTANG</a></li>
        <li><a href="#layanan">LAYANAN</a></li>
        <li><a href="#contact">PRODUK</a></li>        
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
<?php }

else { ?>
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
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#about">TENTANG</a></li>
        <li><a href="#layanan">LAYANAN</a></li>
        <li><a href="#contact">PRODUK</a></li>
        <li><a href="<?php echo base_url('index.php/user/blog'); ?>">BLOG</a></li>
        <li><a href="<?php echo base_url('index.php/dashboard'); ?>">DASHBOARD</a></li>
      </ul>
    </div>
  </div>
</nav> 
<?php } ?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Video Header -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <div class="carousel-caption">
          <h1>MbekSite</h1>
          <h2>Hadir untuk Anda.</h2>
        </div>    
        <video autoplay loop>
          <source src="<?php echo base_url();?>assets/video/goat.mp4" type="video/mp4">
        </video>  
      </div>    
    </div>
</div>

<!-- Container (The Band Section) -->
<div id="about" class="container text-center">
  <h2>APA ITU MBEKSITE?</h2>
  <p>MbekSite adalah sebuah aplikasi berbasis web yang mempertemukan peternak di Indonesia dengan para masyarakat yang ingin melakukan investasi dalam peternakan Kambing dan pengelolaan hasil produksi susu Kambing. MbekSite juga dapat dimanfaatkan oleh masyarakat sebagai tempat memperjualbelikan Kambing dan hasil produksi Kambing. Dengan hadirnya MbekSite diharapkan dapat meningkatkan kesejahteraan peternak Kambing di Indonesia dan juga mengurangi tingkat monopolo pasar Kambing di Indonesia serta sekaligus mendukung program pemerintah dalam meningkatkan swasembada daging.</p>
</div>

<!-- Kredibilitas MbekSite -->
<div id="whyus" class="bg-1">
  <div class="container">
    
    </div>
</div>
  
<!-- Layanan -->
<div id="layanan">
  <div class="container">
    <h2 class="text-center">LAYANAN YANG KAMI TAWARKAN</h2>
    <br><br>
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="<?php echo base_url();?>assets/image/barn.png" alt="Invest Kandang" width="200" height="200">
          <p><strong>Investasi Kandang</strong></p>
          <button class="btn" data-toggle="modal" data-target="#kandang">Pelajari Selengkapnya</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="<?php echo base_url();?>assets/image/goat.png" alt="Invest Kambing" width="200" height="200">
          <p><strong>Investasi Kambing</strong></p>
          <button class="btn" data-toggle="modal" data-target="#kambing">Pelajari Selengkapnya</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="<?php echo base_url();?>assets/image/qurban.png" alt="MbekQurban" width="200" height="200">
          <p><strong>Beli Qurban</strong></p>
          <button class="btn" data-toggle="modal" data-target="#qurban">Pelajari Selengkapnya</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 1 -->
  <div class="modal fade" id="kandang" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4>Investasi Kandang</h4>
        </div>
        <div class="modal-body">
          <p style="text-align: center;">Dengan menginvestasikan Kandang Anda kepada kami, kami akan menyediakan perawat kandang kambing terbaik yang sudah memiliki pengalaman lebih dari 5 tahun dan bersertifikat internasional. </p>
          <p style="text-align: center;">Untuk info selengkapnya klik link dibawah ini: </p>
          <span class="pull-right"><button class="btn" >Klik disini</button></span>
          <br><br>  
      </div>
    </div>
  </div>
</div>

<!-- Modal 2 -->
  <div class="modal fade" id="kambing" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4>Investasi Kambing</h4>
        </div>
        <div class="modal-body">
          <p style="text-align: center;">Kambing ternak investasi Anda akan kami rawat selama 3 bulan. Bibit yang kami sediakn merupakan bibit terbaik. Begitu juga dengan para peternak terbaik yang memiliki pengalaman beternak lebih dari 5 tahun. </p>
          <p style="text-align: center;">Untuk info selengkapnya klik link dibawah ini: </p>
          <span class="pull-right"><button class="btn" >Klik disini</button></span>
          <br><br>  
      </div>
    </div>
  </div>
</div>

<!-- Modal 3 -->
  <div class="modal fade" id="qurban" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4>Ber-Qurban</h4>
        </div>
        <div class="modal-body">
          <p style="text-align: center;">Mari bantu yayasan yang bekerjasama dengan kami dengan memberikan bantuan berupa penyaluran hewan qurban. Kami memberikan hewan kambing qurban yang sesuai dengan harapan Anda. </p>
          <p style="text-align: center;">Untuk info selengkapnya klik link dibawah ini: </p>
          <span class="pull-right"><button class="btn" >Klik disini</button></span>
          <br><br>  
      </div>
    </div>
  </div>
</div>

<!-- Kredibilitas MbekSite -->
<div id="tour" class="bg-1">
  <div class="container">
    
    </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Pasar Kambing Online</h3>
  <br><br>
  <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="<?php echo base_url();?>assets/image/etawa.png" alt="Kambing Etawa" width="200" height="200">
          <p><strong>Kambing Etawa</strong></p>
          <a href="<?php echo base_url('index.php/all_produk') ?>" class="btn btn-primary")">Lihat</a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="<?php echo base_url();?>assets/image/kacang.png" alt="Kambing Kacang" width="200" height="200">
          <p><strong>Kambing Kacang</strong></p>
          <a href="<?php echo base_url('index.php/all_produk') ?>" class="btn btn-primary")">Lihat</a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="<?php echo base_url();?>assets/image/susu.png" alt="Susu Kambing" width="200" height="200">
          <p><strong>Susu Kambing</strong></p>
          <a href="<?php echo base_url('index.php/all_produk') ?>" class="btn btn-primary")">Lihat</a>
        </div>
      </div>
    </div>
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