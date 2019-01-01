<?php $this->load->view('admin/layout/sidebar.php'); ?>
<?php $this->load->view('admin/layout/footer.php'); ?>
<!--================================ right bar starts ====================================-->
			<div class="col-md-10 col-sm-8 col-xs-8 right-bar">
				<?php $this->load->view('admin/layout/topbar.php'); ?>
				
				<!--================================ right bar body starts =============================-->
				<div class="row box">
					<div class="col-md-12 col-sm-12 col-xs-12 ">
						<div class="col-md-12 col-sm-12 col-xs-12 box-body">
							<div class="row  table-nav-bar">
								<a href="" class="table-nav-bar-links active" id="manage-client">
									<!-- <i class="glyphicon glyphicon-cog"></i> -->
									<span>  Manage Candidates</span>
								</a>
								<!-- <a href="" class="table-nav-bar-links " id="add-client" onclick="addClient(event)">
									<i class="fa fa-user-plus"></i>
									<span>  Add Client</span>
								</a> -->
							</div>
							<!--================================ table starts =============================-->
							<div class="row table-body" id="table-body">
								<div class="col-md-12">
									<a href="list_of_candidate/createXLS" class="btn export">Export To Excel</a>
								</div>
								<table class="table responsive-table" id="table">

									<thead>
										<tr>
											<th>Sl No</th>
											<th class="mobile-table-column" >Basic Details</th>
											
											
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php 
											$i = 1;
											foreach ($candidates as $candidate)
											{
										?>
										<tr>
											<td><?php echo $i; ?></td>
											<td class="mobile-table-column">
												<div class="td-left-body">
													<img src="<?php echo base_url(); ?>/assets/images/default_profile.jpg" width="195px" height="200px">
												</div>
												<div class="td-right-body">
													<div class="td-right-body-name">
														
														<p><label>Name :</label><?php echo $candidate['first_name'].' '.$candidate['middle_name'].' '.$candidate['last_name']; ?></p>
													</div>
													<div class="td-right-body-name">
														
														<p><label>Email :</label><?php echo $candidate['email']; ?></p>
													</div>
													<div class="td-right-body-name">
														
														<p><label>Mobile No :</label><?php echo $candidate['mobile_no']; ?></p>
													</div>
													<div class="td-right-body-name">
														
														<p><label>Address :</label><?php echo $candidate['address_1']; ?></p>
													</div>
													<div class="td-right-body-name">
														
														<p><label>Skills :</label><?php echo $candidate['skills']; ?></p>
													</div>
													<div class="td-right-body-name">
														
														<p><label>Work Experience :</label><?php echo $candidate['experience_year'].' '; ?>years <?php echo ' '.$candidate['experience_month']; ?> months</p>
													</div>
												</div>
											</td>
											<td style="/*text-align: center;*/">
												<a href="list_of_candidate/view/<?php echo md5($candidate['user_id_pk']); ?>" class="btn list_view">View </a>
												<!-- <i class="fa fa-eye view-profile-icon"></i> -->
												<!-- <i class="fa fa-pencil edit-icon"></i>
												<i class="fa fa-trash-o delete-icon"></i> -->
											</td>
										</tr>
										<?php
											$i++; 
											}
										?>
										
										
									</tbody>
								</table>
							</div>
							<!--================================ table ends ===============================-->
							
							

						</div>
					</div>
				</div>

				<!--================================ right bar body ends =============================-->
				

			</div>
			
			<!--================================ right bar ends ====================================-->