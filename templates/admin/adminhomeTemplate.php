<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
							<?php   
							$std = new DatabaseTable('students');
							$fetch=$std->findAll();
							if ($fetch->rowCount()!=0) {
								$data=$fetch->fetchAll();
								$num=count($data);
							}
							else{
								$num=0;
							}
							?>
							<div class="large"><?php echo $num; ?></div>
							<div class="text-muted">Students</div>
						</div>
					</div>
				</div>
			
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
							<?php   
							$std = new DatabaseTable('modules');
							$fetch=$std->findAll();
							if ($fetch->rowCount()!=0) {
								$data=$fetch->fetchAll();
								$num=count($data);
							}
							?>
							<div class="large"><?php echo $num; ?></div>
							<div class="text-muted">Modules</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-red panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
							<?php   
							$std = new DatabaseTable('module_leaders');
							$fetch=$std->findAll();
							if ($fetch->rowCount()!=0) {
								$data=$fetch->fetchAll();
								$num=count($data);
							}
							?>
							<div class="large"><?php echo $num; ?></div>
							<div class="text-muted">Module Leaders</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
							<?php   
							$std = new DatabaseTable('admins');
							$fetch=$std->findAll();
							if ($fetch->rowCount()!=0) {
								$data=$fetch->fetchAll();
								$num=count($data);
							}
							?>
							<div class="large"><?php echo $num; ?></div>
							<div class="text-muted">Admins</div>
						</div>
					</div>
				</div>
			</div><!--/.row-->
		</div>
