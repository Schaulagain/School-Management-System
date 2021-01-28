
<div class="alert bg-info" ><a href="index.php?page=add_admin_announcements&sid=<?php echo $_SESSION['sessUserId']?>">Add Announcements</a></a></div>
<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default articles">
			<div class="panel-heading">Announcements
				<?php foreach ($stmt as $key) {?>
				<div class="panel-body articles-container">
					<div class="article border-bottom">
						<div class="col-xs-12">
							<div class="row">
								<div class="col-xs-2 col-md-2 date">
								<div class="large"><?php echo date('d', strtotime($key['ano_date']));?></div>
								<div class="text-muted"><?php echo date('M', strtotime($key['ano_date']));?></div>
							</div>
							<div class="col-xs-10 col-md-10">
								<h4><?php echo $key['ano_title'];?></h4>
								<h5><?php echo $key['ano_details'];?></h5>
								<h5>Announcement By: <?php 
								$ad=new DatabaseTable('admins');
								$stf=new DatabaseTable('module_leaders');
								$adf=$ad->find('admin_id',$key['admin_id']);
								$stff=$stf->find('staff_id',$key['staff_id']);
								foreach ($adf as $adfs) {
									echo $adfs['admin_name'];
								}
								foreach ($stff as $stffs) {
									echo $stffs['staff_firstname'].' '.$stffs['staff_surname'];
								}
								?>
								

								</h5>
								<a href="index.php?page=admin_announcement&did=<?php echo $key['ano_id'];?>">Delete</a></h4>

							</div>
						</div>
					</div>

				
					<div class="clear"></div>
				</div><!--End .article-->
				
			</div>

			<?php }?>
		</div><!--End .articles-->
	</div>
</div>