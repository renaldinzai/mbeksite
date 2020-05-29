<!DOCTYPE html>
<html lang="en">
<head>

  <title>Belanja</title>
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

  <?php if ($this->session->userdata('isLogin') == TRUE) { ?>
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
    <?php } else{       ?>
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
        <li><a href="<?php echo base_url('index.php/dashboard'); ?>">DASHBOARD</a></li>
      </ul>
    </div>
  </div>
</nav> 
<?php } ?>

    <div id="layanan">
      <div class="container">
        <h2 class="text-center">Produk yang dijual</h2>
        <br><br>
        <?php 
        if($belanja == false) {
          ?>
          <div class="alert alert-info" role="alert">Mohon maaf. Tidak ada produk untuk saat ini.</div>
          <?php
        } else {
          foreach ($belanja as $row) {
            ?>
            <div class="row text-center">
              <div class="col-sm-4">
                <div class="thumbnail">
                  <img src="<?php echo base_url('uploads/'.$row->gambar_prd) ?>" width="200px" height="150px">
                  <p><strong><?php echo $row->nama_prd ?></strong></p>
                  <button class="btn" data-toggle="modal" data-target="#myModal">Lihat Rincian</button>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>

          <!-- Modal -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">×</button>
                  <h4><?php echo $row->nama_prd ?></h4>
                </div>
                <div class="modal-body">
                  <?php echo form_open_multipart('cart/add');?>
                  <div class="form-group">
                    <label><span class="glyphicon glyphicon-usd"></span> Harga : Rp <?php echo $row->harga ?></label>
                    <br>
                    <label><span class="glyphicon glyphicon-equalizer"></span> Jumlah : <?php echo $row->stok ?></label><br>
                    <label><span class="glyphicon glyphicon-info-sign"></span> Deskripsi : <?php echo $row->deskripsi ?></label>
                  </div>

                  <div class="form-group">
                    <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Pilih Jumlah</label>
                    <select class="form-control" id="jumlah" name="jumlah">
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
                  <span>
                    <input type="submit" name="beli" class="btn btn-primary" value="Beli"/>
                  </span>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php }  ?>

    </body>
    </html>