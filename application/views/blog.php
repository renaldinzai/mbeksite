<!DOCTYPE html>
<html>
<title>Blog | MbekSite</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- w3-content defines a container for fixed size centered content, 
  and is wrapped around the whole page content, except for the footer in this example -->
  <div class="w3-content" style="max-width:1400px">

    <!-- Header -->
    <header class="w3-container w3-center w3-padding-32"> 
      <a href="<?php echo base_url();?>">
        <center><img style="margin-top: -100px;" src="<?php echo base_url();?>assets/image/logo.png"></center>
      </a>
      <h1><b>MbekSite Blog</b></h1>
      <p>Semua yang Anda butuhkan tentang <span class="w3-tag">Kambing!</span></p>
    </header>

    <!-- Grid -->
    <div class="w3-row">

      <!-- Blog entries -->
      <?php
      if($mydata == false) { 
        ?>
        <div class="alert alert-info" role="alert">Mohon maaf. Sedang tidak ada informasi yang tersedia.</div>
        <?php
      } else {
        foreach ($mydata as $row) {
          ?>
          <div class="w3-col l8 s12">
            <!-- Blog entry -->
            <div class="w3-card-4 w3-margin w3-white">
              <img src="<?php echo base_url('uploads/'.$row->gambar_info) ?>" style="width:100%">
              <div class="w3-container">
                <h3><b><?php echo $row->judul ?></b></h3>
              </div>

              <div class="w3-container">
                <p><?php echo $row->konten ?></p>
              </div>
            </div>
            <hr>
            <?php } 
          }?>
        </div>

        <!-- Introduction menu -->
        <div class="w3-col l4">
          <!-- About Card -->
          <div class="w3-card w3-margin w3-margin-top">
            <img src="/w3images/avatar_g.jpg" style="width:100%">
            <div class="w3-container w3-white">
              <h4><b>Penulis Blog</b></h4>
              <p>Blog ini dioperasikan oleh admin dari MbekSite</p>
            </div>
          </div><hr>

          <!-- Posts -->
          <div class="w3-card w3-margin">
            <div class="w3-container w3-padding">
              <h4>Popular Posts</h4>
            </div>
            <ul class="w3-ul w3-hoverable w3-white">
              <li class="w3-padding-16">
                <img src="<?php echo base_url();?>assets/image/kambingbisnis.jpg" class="w3-left w3-margin-right" style="width:50px">
                <span class="w3-large">Lorem</span><br>
                <span>Sed mattis nunc</span>
              </li>
              <li class="w3-padding-16">
                <img src="<?php echo base_url();?>assets/image/carabeternak.jpg" class="w3-left w3-margin-right" style="width:50px">
                <span class="w3-large">Ipsum</span><br>
                <span>Praes tinci sed</span>
              </li> 
              <li class="w3-padding-16">
                <img src="<?php echo base_url();?>assets/image/kambingbisnis.jpg" class="w3-left w3-margin-right" style="width:50px">
                <span class="w3-large">Dorum</span><br>
                <span>Ultricies congue</span>
              </li>   
              <li class="w3-padding-16 w3-hide-medium w3-hide-small">
                <img src="<?php echo base_url();?>assets/image/carabeternak.jpg" class="w3-left w3-margin-right" style="width:50px">
                <span class="w3-large">Mingsum</span><br>
                <span>Lorem ipsum dipsum</span>
              </li>  
            </ul>
          </div>
          <hr> 

          <!-- END Introduction Menu -->
        </div>

        <!-- END GRID -->
      </div><br>

      <!-- END w3-content -->
    </div>

    <!-- Footer -->
    <footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
      <button class="w3-button w3-black w3-disabled w3-padding-large w3-margin-bottom">Previous</button>
      <button class="w3-button w3-black w3-padding-large w3-margin-bottom">Next »</button>
      <p>Powered by <a href="<?php echo base_url(''); ?>" target="_blank">MbekSite</a></p>
    </footer>
  </body>
  </html>