<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog | MbekSite</title>

  <link href="<?php echo base_url();?>assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/admin/vendor/bootstrap/css/admin_css.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
        <h2 style="text-align: left;">Edit Info</h2>
        <?php echo form_open_multipart('myadmin/blog/update');?>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label>ID Info:</label>
              <input type="text" name="id_info" id="id_info" class="form-control" value="<?php echo $id_info ?>" readonly/>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Judul:</label>
              <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $judul ?>">
              <br>
              <label>Konten:</label>
              <textarea class="form-control" id="konten" name="konten" value="<?php echo $konten ?>"></textarea>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Gambar:</label>
              <div class="input-group">
                <span class="input-group-btn">
                  <span class="btn btn-default btn-file">
                    <input type="file" id="imgInp" name="userfile">
                  </span>
                </span>
                <input type="text" class="form-control" readonly>
              </div>
              <img id='img-upload'/>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <span class="pull-right">
                <input type="submit" name="simpan" class="btn btn-primary" value="Simpan"/>
              </span>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="<?php echo base_url();?>assets/admin/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/vendor/bootstrap/js/admin_js.js"></script>

</body>
</html>