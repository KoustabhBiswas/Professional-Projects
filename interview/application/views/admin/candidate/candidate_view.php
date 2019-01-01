<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom/candidate/profile.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fonts/css/font-awesome.css">
	
	<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
</head>
<body class="container-fluid">
	<div class="row">
		<div class="col-md-4 col-sm-4 col-xs-12 left_box">
			<div class="col-md-12 col-sm-12 col-xs-12 left_box_content">


				<div class="col-md-6 col-sm-6 col-xs-6 col-xs-offset-2 img_content">
					<img src="<?php echo base_url(); ?>assets/images/goku.jpg" class="left_content_image">
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
				<p class="user_name">
					<label >
						<i class="fa fa-user user_icon"></i>
					</label>
					<span> </span> 
					<label><?php echo $candidate_dtls[0]['first_name'].' '.$candidate_dtls[0]['middle_name'].' '.$candidate_dtls[0]['last_name'] ?></label>
				</p>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<p class="mail">
						<label>
							<i class="fa fa-envelope mail_icon"></i>
						</label>
						<span> </span>
						<label><?php echo $candidate_dtls[0]['email']; ?></label>
					</p>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<p class="mobile">
						<label>
							<i class="fa fa-phone-square phone_icon"></i>
						</label>
						<span> </span>
						<label><?php echo $candidate_dtls[0]['mobile_no']; ?></label>
					</p>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<p class="mobile">
						<label>
							<i class="fa fa-venus-mars phone_icon"></i>
						</label>
						<span> </span>
						<label><?php echo $candidate_dtls[0]['gender']; ?></label>
					</p>
				</div>

			</div>			
		</div>
		<div class="col-md-8 col-sm-8 col-xs-12 right_box" >
			<div class="col-md-12 col-sm-12 col-xs-12 right_box_content">
				
				<div class="row right_content_common_elem" >
					<div class="col-md-2 col-sm-4 col-xs-6 " >
						<label>State </label>
					</div>
					<div class="col-md-10 col-sm-8 col-xs-6 right_content_desc">
						<p><?php echo $candidate_dtls[0]['state_name']; ?></p>
					</div>
				</div>
				<div class="row right_content_common_elem" >
					<div class="col-md-2 col-sm-4 col-xs-6 " >
						<label>City </label>
					</div>
					<div class="col-md-10 col-sm-8 col-xs-6 right_content_desc">
						<p><?php echo $candidate_dtls[0]['city_name']; ?></p>
					</div>
				</div>
				<div class="row right_content_common_elem" >
					<div class="col-md-2 col-sm-4 col-xs-6 " >
						<label>Pincode </label>
					</div>
					<div class="col-md-10 col-sm-8 col-xs-6 right_content_desc">
						<p><?php echo $candidate_dtls[0]['pin_code']; ?> </p>
					</div>
				</div>
				<div class="row right_content_common_elem" >
					<div class="col-md-2 col-sm-4 col-xs-6 " >
						<label>Present Address </label>
					</div>
					<div class="col-md-10 col-sm-8 col-xs-6 right_content_desc">
						<p><?php echo $candidate_dtls[0]['address_2']; ?></p>
					</div>
				</div>
				<div class="row right_content_common_elem" >
					<div class="col-md-2 col-sm-4 col-xs-6 " >
						<label>Permanent Address </label>
					</div>
					<div class="col-md-10 col-sm-8 col-xs-6 right_content_desc">
						<p><?php echo $candidate_dtls[0]['address_1']; ?> </p>
					</div>
				</div>

				<div class="row right_content_common_elem" >
					<div class="col-md-2 col-sm-4 col-xs-6 " >
						<label>10th School Name </label>
					</div>
					<div class="col-md-10 col-sm-8 col-xs-6 right_content_desc">
						<p><?php echo $candidate_dtls[0]['10th_school_name']; ?> </p>
					</div>
				</div>
				<div class="row right_content_common_elem" >
					<div class="col-md-2 col-sm-4 col-xs-6 " >
						<label>10th Board </label>
					</div>
					<div class="col-md-10 col-sm-8 col-xs-6 right_content_desc">
						<p><?php echo $candidate_dtls[0]['10th_board']; ?> </p>
					</div>
				</div>
				<div class="row right_content_common_elem" >
					<div class="col-md-2 col-sm-4 col-xs-6 " >
						<label>10th Marks </label>
					</div>
					<div class="col-md-10 col-sm-8 col-xs-6 right_content_desc">
						<p><?php echo $candidate_dtls[0]['10th_marks']; ?>% </p>
					</div>
				</div>

				<div class="row right_content_common_elem" >
					<div class="col-md-2 col-sm-4 col-xs-6 " >
						<label>12th School Name </label>
					</div>
					<div class="col-md-10 col-sm-8 col-xs-6 right_content_desc">
						<p><?php echo $candidate_dtls[0]['12th_school_name']; ?></p>
					</div>
				</div>
				<div class="row right_content_common_elem" >
					<div class="col-md-2 col-sm-4 col-xs-6 " >
						<label>12th Board </label>
					</div>
					<div class="col-md-10 col-sm-8 col-xs-6 right_content_desc">
						<p><?php echo $candidate_dtls[0]['12th_board']; ?> </p>
					</div>
				</div>
				<div class="row right_content_common_elem" >
					<div class="col-md-2 col-sm-4 col-xs-6 " >
						<label>12th Marks </label>
					</div>
					<div class="col-md-10 col-sm-8 col-xs-6 right_content_desc">
						<p><?php echo $candidate_dtls[0]['12th_marks']; ?>% </p>
					</div>
				</div>

				<div class="row right_content_common_elem" >
					<div class="col-md-2 col-sm-4 col-xs-6 " >
						<label>Graduation College </label>
					</div>
					<div class="col-md-10 col-sm-8 col-xs-6 right_content_desc">
						<p><?php echo $candidate_dtls[0]['graduation_college']; ?> </p>
					</div>
				</div>
				<div class="row right_content_common_elem" >
					<div class="col-md-2 col-sm-4 col-xs-6 " >
						<label>Graduation University </label>
					</div>
					<div class="col-md-10 col-sm-8 col-xs-6 right_content_desc">
						<p><?php echo $candidate_dtls[0]['graduation_university']; ?> </p>
					</div>
				</div>
				<div class="row right_content_common_elem" >
					<div class="col-md-2 col-sm-4 col-xs-6 " >
						<label>Graduation Marks </label>
					</div>
					<div class="col-md-10 col-sm-8 col-xs-6 right_content_desc">
						<p><?php echo $candidate_dtls[0]['graduation_marks']; ?>% </p>
					</div>
				</div>

				<div class="row right_content_common_elem" >
					<div class="col-md-2 col-sm-4 col-xs-6 " >
						<label>Skills </label>
					</div>
					<div class="col-md-10 col-sm-8 col-xs-6 right_content_desc">
						<p><?php echo $candidate_dtls[0]['skills']; ?></p>
					</div>
				</div>
				<div class="row right_content_common_elem" >
					<div class="col-md-2 col-sm-4 col-xs-6 " >
						<label>Experience </label>
					</div>
					<div class="col-md-10 col-sm-8 col-xs-6 right_content_desc">
						<p><?php echo $candidate_dtls[0]['experience_year']; ?> years <?php echo $candidate_dtls[0]['experience_month']; ?> months </p>
					</div>
				</div>

			</div>
		</div>
	</div>
	<a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" class="btn back_btn">Back</a>
</body>
</html>