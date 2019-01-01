<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom/admin-home.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom/listing.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fonts/css/font-awesome.css">
	
	<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>


</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<!--================================= side bar starts ===================================-->
			<div class="col-md-2 col-sm-4 col-xs-4 side-bar" id="side-bar">
				<div class="row side-bar-link-close" ><i class="fa fa-times" onclick="closeSidebar()"></i></div>
				<div class="row side-bar-link">Dashboard</div>
				<div class="row side-bar-link"><a href="<?php base_url(); ?>list_of_candidate">Manage Candidates</a></div>
				
			</div>
			
