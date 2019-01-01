<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom/login.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fonts/css/font-awesome.css">
	
	<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
</head>
<body class="container-fluid">
	<div class="row">
		<div class="col-md-3 col-sm-2 col-xs-2" style="border: 0px solid blue"></div>
		<div class="col-md-7 col-sm-8 col-xs-8" style="border: 0px solid red">
			<div class="col-md-12 col-sm-12 col-xs-12 login_body">
				<div class="row login_header">
					<h4>Admin Login</h4>
				</div>
				<?php echo form_open_multipart(base_url()."login"); ?>
				<div class="col-md-7 col-md-offset-2 col-sm-12 col-xs-12 login_inner_body" >
					
						<?php 
							if($this->session->flashdata('login_error'))
							{
						?>
							<div class="alert alert-danger login_error">
								<?php echo $this->session->flashdata('login_error'); ?>
							</div>
						<?php
							}
						?>


					
					<div class="form-group">
						<label>Login Id </label>
						<input type="text" name="login_id" class="form-control" placeholder="Enter login Id" 
								value="<?php echo set_value("login_id"); ?>">
						<?php echo form_error('login_id') ?>
					</div>
					<div class="form-group">
						<label>Password </label>
						<input type="password" name="password" class="form-control" placeholder="Enter password">
					</div>
					<div class="form-group">
						<!-- <label>Password </label> -->
						<input type="submit" value="Login" class="btn login_btn">
					</div>
				</div>
				<?php echo form_close()?>
			</div>
		</div>
		<div class="col-md-2 col-sm-2 col-xs-2" style="border: 0px solid green"></div>
	</div>
</body>
</html>