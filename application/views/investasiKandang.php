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
  <link href="<?php echo base_url('assets/mbeksite.css') ?>" rel="stylesheet">

  <!-- MbekSite JavaScript & JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
          <li><a href="<?php echo base_url('index.php/investasi/showKandang'); ?>">LIHAT INVESTASI KANDANG</a></li>
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
<div class="container">
<h2>Investasi Kandang</h2>
<?php echo form_open_multipart('investasi/addKandang');?>
  <div class="row">
    <div class="col-sm-6">
      <div class="form-group">
        <label>Alamat Peternakan:</label>
        <textarea class="form-control" id="alamaternak" name="alamaternak"></textarea>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <label for="pwd">Jumlah Hewan Ternak:</label>
        <input type="text" class="form-control" id="jumlahternak" name="jumlahternak">
      </div>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <label>Durasi investasi:</label>
        <select class="form-control" id="durasi" name="durasi">
          <option>3 bulan (Rp 1.000.000) </option>
          <option>6 bulan (Rp 2.500.000)</option>
          <option>9 bulan (Rp 5.000.000)</option>
        </select>
      </div>
         <span class="pull-right">
          <a href="<?php echo site_url('user/userpage') ?>" class="btn btn-link">Batal</a>
          <input type="submit" name="invest" class="btn btn-primary" value="Investasikan!"/>
        </span> 
    </div>
  </div>
</form>
</div>
</body>

</html>