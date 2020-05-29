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
          <li><a href="<?php echo base_url('index.php/user/blog'); ?>">BLOG</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              <?php 
              echo $_SESSION["username"];
              ?>
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url('index.php/user/userpage'); ?>">Halaman Pengguna</a></li>
                <li><a href="<?php echo site_url('produk/do_lihat');?>">Produk Saya</a></li>
                <li><a href="<?php echo base_url('index.php/user/belanja'); ?>">Belanja</a></li>
                <li><a href="<?php echo base_url('index.php/user/logout'); ?>">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<div class="container">
<h2>Tambah Produk</h2>
<?php echo form_open_multipart('produk/tambahProduk');?>
  <div class="row">
    <div class="col-sm-6">
      <div class="form-group">
        <label>Nama Produk:</label>
        <input type="text" class="form-control" id="nama_prd" name="nama_prd">
      </div>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <label>Kategori:</label>
        <select class="form-control" id="kategori" name="kategori_prd">
          <option>Kambing</option>
          <option>Susu</option>
        </select>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <label for="pwd">Harga (Rp):</label>
        <input type="text" class="form-control" id="harga" name="harga">
      </div>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <label>Stok:</label>
        <select class="form-control" id="stok" name="stok">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
        </select>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <label>Deskripsi:</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <div class="form-group">
          <label>Gambar Produk:</label>
          <div class="input-group">
            <span class="input-group-btn">
              <button class="btn btn-file">
                Pilih <input type="file" id="imgInp" name="userfile" >
              </button>
            </span>
            <input type="text" class="form-control" readonly>
          </div> 
          <img name="img-upload" id="img-upload" width="150" height="200"/>
        </div>
        <span class="pull-right">
          <a href="<?php echo site_url('user/produk') ?>" class="btn btn-link">Batal</a>
          <input type="submit" name="jual" class="btn btn-primary" value="Jual"/>
        </span>
      </div>
    </div>
  </div>
</form>
</div>
</body>

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>MbekSite 2017</p> 
</footer>

</html>