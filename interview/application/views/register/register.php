<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom/register_form.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fonts/css/font-awesome.css">
	
	<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
</head>
<body class="container-fluid">
	<div class="row ">
		<div class="col-md-3 col-md-offset-4 col-sm-12 col-xs-12 header">
			<span>Register Here</span>
		</div>
	</div>
	<!-- Basic Details Tab Starts -->
	<?php echo form_open_multipart(base_url()."register"); ?>
	<div class="row">
		<?php
			if($this->session->flashdata('success_msg'))
			{
		?>
			<div class="alert alert_reg_success_msg"><?php echo $this->session->flashdata('success_msg') ?></div>
		<?php
			}
		?>
		<?php
			if($this->session->flashdata('fail_msg'))
			{
		?>
			<div class="alert alert-success"><?php echo $this->session->flashdata('fail_msg') ?></div>
		<?php
			}
		?>
		<div class="col-md-11 col-sm-11 col-xs-11 section section-basic" >
			<legend class="section-legend" style="">Basic Details</legend>
			<div class="col-md-4 col-sm-4 col-xs-12" >
				<div class="form-group">
					<label>First Name: </label>
					<input type="text" name="fname" class="form-control" placeholder="Enter first name" 
							value="<?php echo set_value('fname'); ?>">
					<?php echo form_error('fname'); ?>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="form-group">
					<label>Middle Name: </label>
					<input type="text" name="mname" class="form-control" placeholder="Enter name"
						 	value="<?php echo set_value('mname'); ?>">
					<?php echo form_error('mname'); ?>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="form-group">
					<label>Last Name: </label>
					<input type="text" name="lname" class="form-control" placeholder="Enter name" 
							value="<?php echo set_value('lname'); ?>">
					<?php echo form_error('lname'); ?>

				</div>
			</div>
			
			<div class="col-md-4 col-sm-4 col-xs-12" >
				<div class="form-group">
					<label>Mobile No: </label>
					<input type="text" name="mobile_no" class="form-control" placeholder="Enter mobile number" 
							value="<?php echo set_value('mobile_no'); ?>">
					<?php echo form_error('mobile_no'); ?>

				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="form-group">
					<label>Landline No: </label>
					<input type="text" name="landline_no" class="form-control" placeholder="Enter landline number" 
							value="<?php echo set_value('landline_no'); ?>">
					<?php echo form_error('landline_no'); ?>

				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="form-group">
					<label>Email Id: </label>
					<input type="text" name="email" class="form-control test" placeholder="Enter email id" 
							value="<?php echo set_value('email'); ?>">
					<?php echo form_error('email'); ?>

				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="form-group">
					<label>State: </label>
					<select class="form-control state" name="state_id_fk" <?php echo set_select('state'); ?>>
						<?php 
							foreach($states as $state)
							{
						?>
								<option value="<?php echo $state['state_id']; ?>" 
									><?php echo $state['state_name'] ?></option>
						<?php
							}
						?>
						
					</select>
					<?php echo form_error('state_id_fk'); ?>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="form-group">
					<label>City: </label>
					<select class="form-control city" name="city_id_fk" >
						
					</select>
					<?php echo form_error('city_id_fk'); ?>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="form-group">
					<label>Pincode: </label>
					<input type="text" name="pin_code" class="form-control" placeholder="Enter email id"
							 value="<?php echo set_value('pin_code'); ?>">
					<?php echo form_error('pin_code'); ?>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="form-group">
					<label>Permanent Address: </label>
					<textarea class="form-control" name="permanent_addr"  placeholder="Enter permanent address"><?php echo set_value('permanent_addr'); ?></textarea>
					<?php echo form_error('permanent_addr'); ?>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="form-group">
					<label>Present Address: </label>
					<textarea class="form-control" name="present_addr"  placeholder="Enter present address" ><?php echo set_value('present_addr'); ?></textarea>
					<?php echo form_error('present_addr'); ?>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="form-group">
					<label>Gender: </label>
					<select class="form-control city" name="city_id_fk" >
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
					<?php echo form_error('gender'); ?>
				</div>
			</div>
			
			<!-- <div class="col-md-4 col-sm-12 col-xs-12 col-md-offset-8" >
				<a href="javascript:void(0)" class="btn  next-btn section-basic-details-next-btn">Next</a>
		    </div> -->
		</div>

	</div>
	<!-- Basic Details Tab Ends -->

	<!-- Educational Details Tab Starts -->
	<div class="row">

		<div class="col-md-11 col-sm-11 col-xs-11 section section-edu" >
			<legend class="section-legend" style="">Educational Details</legend>
			<div class="col-md-4 col-sm-4 col-xs-12" >
				<div class="form-group">
					<label>Class 10th School Name: </label>
					<input type="text" name="10th_school" class="form-control" placeholder="Enter 10th school name" value="<?php echo set_value('10th_school'); ?>">
					<?php echo form_error('10th_school'); ?>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="form-group">
					<label>Class 10th Board: </label>
					<input type="text" name="10th_board" class="form-control" placeholder="Enter class 10th marks" value="<?php echo set_value('10th_board'); ?>">
					<?php echo form_error('10th_board'); ?>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="form-group">
					<label>Class 10th Marks: </label>
					<input type="text" name="10th_marks" class="form-control" placeholder="Enter class 10th marks" value="<?php echo set_value('10th_marks'); ?>">
					<?php echo form_error('10th_marks'); ?>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<div class="form-group">
					<label>Class 12th School Name: </label>
					<input type="text" name="12th_school" class="form-control" placeholder="Enter name" value="<?php echo set_value('12th_school'); ?>">
					<?php echo form_error('12th_school'); ?>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12" >
				<div class="form-group">
					<label>Class 12th Board:</label>
					<input type="text" name="12th_board" class="form-control" placeholder="Enter mobile number" value="<?php echo set_value('12th_board'); ?>">
					<?php echo form_error('12th_board'); ?>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12" >
				<div class="form-group">
					<label>Class 12th School marks:</label>
					<input type="text" name="12th_marks" class="form-control" placeholder="Enter mobile number" value="<?php echo set_value('12th_marks'); ?>">
					<?php echo form_error('12th_marks'); ?>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12" >
				<div class="form-group">
					<label>Graduation College:</label>
					<input type="text" name="grad_clg" class="form-control" placeholder="Enter mobile number" value="<?php echo set_value('grad_clg'); ?>">
					<?php echo form_error('grad_clg'); ?>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12" >
				<div class="form-group">
					<label>University Name:</label>
					<input type="text" name="university_name" class="form-control" placeholder="Enter mobile number" value="<?php echo set_value('university_name'); ?>">
					<?php echo form_error('university_name'); ?>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12" >
				<div class="form-group">
					<label>Graduation Degree:</label>

						<input type="text" name="grad_degree" class="form-control" placeholder="Enter mobile number" style="" value="<?php echo set_value('grad_degree'); ?>">
						<?php echo form_error('grad_degree'); ?>
					
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12" >
				<div class="form-group">
					<label>Skills:</label>
					<textarea class="form-control" name="skills" placeholder="Enter your skills"><?php echo set_value('skills'); ?></textarea>
					<?php echo form_error('skills'); ?>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12" >
				<div class="form-group">
					<label>Experience in year(If you have):</label>
					<input type="text" name="exp_yr" class="form-control" placeholder="Enter year" style="" value="<?php echo set_value('exp_yr'); ?>">
					<?php echo form_error('exp_yr'); ?>
					
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12" >
				<div class="form-group">
					<label>Experience in month(If you have):</label>
					
					<input type="text" name="exp_month" class="form-control" placeholder="Enter month" style="" value="<?php echo set_value('exp_month'); ?>">
					<?php echo form_error('exp_month'); ?>
				</div>
			</div>
			
			<div class="col-md-12 col-sm-12 col-xs-12" >
				<input type="submit" class="btn  next-btn" value="Submit">
				<!-- <a href="javascript:void(0)" class="btn  next-btn">Submit & Next</a> -->
				<!-- <a href="javascript:void(0)" class="btn  next-btn section-basic-details-previous-btn">Previous</a> -->

		    </div>
		</div>

	</div>
	<?php echo form_close(); ?>
	<!-- Educational Details Tab Ends -->
	<script src="<?php echo base_url(); ?>assets/js/interview-register.js"></script>
</body>
</html>