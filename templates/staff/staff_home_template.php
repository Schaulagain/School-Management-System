<div class="panel panel-default articles">
					<div class="panel-heading">
						Personal Info
					</div>
					<?php foreach ($stmt as $stmts) { ?>
					<div class="panel-body articles-container">
						<div class="article border-bottom">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-2 col-md-2 date">
										<img src="../photos/<?php echo $stmts['staff_photo']; ?>" width="190px" height="200px" alt="Student photo">
									</div>
									<div class="col-xs-10 col-md-10">
									<h3>	Name: <?php echo $stmts['staff_firstname'].'  '.$stmts['staff_surname']; ?></h4>
									<h3>	DoB: <?php echo $stmts['staff_dob']; ?></h4>
									<h3>	Address: <?php echo $stmts['staff_address']; ?></h4>
									<h3>	E-mail: <?php echo $stmts['staff_email']; ?></h4>
									<h3>	Hired Date: <?php echo $stmts['hire_date']; ?></h4>
									<h3>	Qualification: <?php echo $stmts['qualification']; ?></h4>	
									
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div><!--End .article-->
					</div>

				<?php }?>
				</div><!--End .articles-->