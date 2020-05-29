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
  <link href="<?php echo base_url('assets/navbar.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets/jquery.dataTables.min.css" rel="stylesheet" type="text/css">

  <!-- MbekSite JavaScript & JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url('assets/jquery.dataTables.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/dataTables.bootstrap.min.js') ?>"></script>
  <script src="<?php echo base_url();?>assets/mbeksite.js" rel="stylesheet""></script>

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
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
  <div class="container" style="margin-top:50px;">
    <h2 style="text-align: center;">Belanjaan Saya</h2>

  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>No.</th>
        <th>Penjual</th>
        <th>Nama Produk</th>
        <th>Harga</th> 
        <th>Jumlah</th>
        <th>Sub-Total</th>
        <th>Gambar</th>
        <th>Status</th>
        <th>Tindakan</th>
      </tr>
    </thead>
    <tbody>
      <?php
        if(isset($_SESSION['id'])) {
        if($mydata == false) {
      ?>
        <div class="alert alert-info" role="alert">Tidak ada belanjaan</div>
        <?php
      } else{
        $no = 1;
        $result = 0;
        foreach ($mydata as $row) {
          ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $row->username ?></td>
            <td><?php echo $row->nama_prd ?></td>
            <td><?php echo $row->harga ?></td>
            <td><?php echo $row->jumlah ?></td>
            <?php $result = $row->harga*$row->jumlah?>
            <td><?php echo $result ?></td>
            <td><img src="<?php echo base_url('uploads/'.$row->gambar_prd) ?>" width="200px" height="150px"></td>
            <td><?php echo $row->status ?></td>
            <td class="text-center">
              <a href="<?php echo site_url('produk/pilih/'.$row->id_prd) ?>" class="btn btn-warning">Edit</a>
              <a href="<?php echo site_url('produk/hapus/'.$row->id_prd) ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin?')">Hapus</a>
            </td>
          </tr>
          <?php
        }
      }
    }
      ?>
    </tbody>
  </table>
</div>
    <script>
      $('table').dataTable();
    </script>
</body>

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>MbekSite 2017</p> 
</footer>

</html>