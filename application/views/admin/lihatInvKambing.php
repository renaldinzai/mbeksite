<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Daftar Investasi Kambing</title>

  <link href="<?php echo base_url();?>assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/admin/vendor/bootstrap/css/admin_css.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets/admin/tambahan/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">

</head>

<body>
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="<?php echo base_url('index.php/admin/showInfo') ?>"><i class="fa fa-sticky-note-o fa-fw"></i> Blogs</a>
      <a href="<?php echo base_url('index.php/admin/showKandang') ?>"><i class="fa fa-money fa-fw"></i> Investasi Kandang</a>
      <a href="<?php echo base_url('index.php/admin/showKambing') ?>"><i class="fa fa-money fa-fw"></i> Investasi Kambing</a>
      <a href="<?php echo base_url('index.php/admin/showQurban') ?>"><i class="fa fa-balance-scale fa-fw"></i> Qurban</a>
      <hr>
      <a href="<?php echo base_url('index.php/admin/logout') ?>"><i class="fa fa-sign-out fa-fw"></i> Keluar</a>
  </div>

  <div id="main">
    <div class="container">
      <button class="btn" onclick="openNav()"> Show Menu</button>
        <div class="container" style="margin-top:50px;">
    <h2 style="text-align: left;">Investasi Kambing</h2>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th class="text-center">No.</th>
        <th class="text-center">Jenis</th>
        <th class="text-center">Banyak</th>
        <th class="text-center">Status</th>
        <th class="text-center">Tindakan</th>
      </tr>
    </thead>
    <tbody>
      <?php
        if($mydata == false) {
      ?>
        <div class="alert alert-info" role="alert">Data masih kosong, silahkan isi dulu</div>
        <?php
      } else{
        $no = 1;
        foreach ($mydata as $row) {
          ?>
          <tr>
            <td class="text-center"><?php echo $no++ ?></td>
            <td class="text-center"><?php echo $row->jenis ?></td>
            <td class="text-center"><?php echo $row->banyak ?></td>
            <td class="text-center"><?php echo $row->status ?></td>
            <td class="text-center">
              <a href="<?php echo site_url('myadmin/invKambing/pilih/'.$row->id_invKambing) ?>" class="btn btn-warning">Edit</a>
              <a href="<?php echo site_url('myadmin/invKambing/hapus/'.$row->id_invKambing) ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin?')">Hapus</a>
            </td>
          </tr>
          <?php
        }
      }
      ?>
    </tbody>
  </table>
  </div>

<script src="<?php echo base_url();?>assets/admin/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/vendor/bootstrap/js/admin_js.js"></script>

</body>
</html>