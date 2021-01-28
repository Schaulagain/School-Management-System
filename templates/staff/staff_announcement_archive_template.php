
<div class="alert bg-info" ><a href="index.php?page=addAnnouncements&sid=<?php echo $_SESSION['sessUserId']?>">Add Announcements</a></a></div>
<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default articles">
			<div class="panel-heading">Announcements
				<?php foreach ($stmt as $key) {
					if($key['ano_archive']==0){
						?>
				<div class="panel-body articles-container">
					<div class="article border-bottom">
						<div class="col-xs-12">
							<div class="row">
								<div class="col-xs-2 col-md-2 date">
								<div class="large"><?php echo date('d', strtotime($key['ano_date']));?></div>
								<div class="text-muted"><?php echo date('M', strtotime($key['ano_date']));?></div>
							</div>
							<div class="col-xs-10 col-md-10">
								<h4><?php echo $key['ano_title'];?><a href="index.php?page=staff_announcement&did=<?php echo $key['ano_id'];  ?>"> Delete</a><a href="index.php?page=staff_announcement&anoamd=<?php echo $key['ano_id'];  ?>&an=1;"> DE-Archive</a></td>
								</h4>
								<p><?php echo $key['ano_details'];?></p>

							</div>
						</div>
					</div>
				
					<div class="clear"></div>
				</div><!--End .article-->
				
			</div>
			<?php }
		}
		?>
		</div><!--End .articles-->
	</div>
</div>