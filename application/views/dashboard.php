<!DOCTYPE html>
<html lang="en">
<head>

	<title>Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- MbekSite CSS -->
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/mbeksite.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/dashboard.css" rel="stylesheet" type="text/css">

	<!-- MbekSite JavaScript & JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/mbeksite.js" rel="stylesheet"></script>
	<script src="<?php echo base_url();?>assets/dashboard.js" rel="stylesheet"></script>

</head>

<body background="<?php echo base_url();?>assets/image/farm.png">

<div class="container">
	<a href="<?php echo base_url();?>">
		<center> <img style="margin-top: -200px;" src="<?php echo base_url();?>assets/image/logo.png"> </center>
	</a>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-login">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-6">
							<a href="#" class="active" id="login-form-link">Login</a>
						</div>
						<div class="col-xs-6">
							<a href="#" id="register-form-link">Register</a>
						</div>
					</div>
					<hr>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
						<font color="red"> <?php echo $this->session->flashdata('gagallogin') ?> </font>
							<form role="form" action="user/do_login" method="POST" id="login-form" style="display: block;">
								<div class="form-group">
									<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
								</div>
								<div class="form-group">
									<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6 col-sm-offset-3">
											<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-lg-12">
										</div>
									</div>
								</div>
							</form>
							<form id="register-form" action="<?php echo base_url("index.php/user/validasiRegistrasi");?>" method="post" role="form" style="display: none;">
								<div class="form-group">
									<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									<span class="text-danger"> <?php echo form_error("username"); ?> </span>
								</div>
								<div class="form-group">
									<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
									<span class="text-danger"> <?php echo form_error("email"); ?> </span>
								</div>
								<div class="form-group">
									<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									<span class="text-danger"> <?php echo form_error("password"); ?> </span>
								</div>
								<div class="form-group">
									<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
									<span class="text-danger"> <?php echo form_error("confirm-password"); ?> </span>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6 col-sm-offset-3">
											<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register">
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>

</html>