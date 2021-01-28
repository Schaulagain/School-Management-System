 <?php
	$ano=new DatabaseTable('anouncements');
	$see=$ano->findAll();
	?>



 <html>

<!-- Mirrored from medialoot.com/preview/lumino/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Mar 2019 09:03:59 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title;	?>	</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/font-awesome.min.css" rel="stylesheet">
	<link href="../css/datepicker3.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Woodland</span>University</a><img src="../images/vslogo.png" c alt="" height="60px" width="60px;">
				<?php
				if(isset($_SESSION['user_type'])){
					if($_SESSION['user_type']=='STUDENT'){?>
						<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">
							<?php
							$ani=new DatabaseTable('anouncements');
							$nums=$ani->findAll();
							if ($nums->rowCount()!=0) {
								$data=$nums->fetchAll();
								$num=count($data);
								echo $num;
							}  

							?>
						</span>
					</a>
						
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box">
									<?php
									foreach ($see as $sees) {
									?>
									<div><em class="fa fa-envelope"></em><?php echo $sees['ano_title']; ?><br><br>
									<span class="pull-right text-muted small"><?php echo $sees['ano_date']; ?></span>
									<?php
									$ad=new DatabaseTable('admins');
								$stf=new DatabaseTable('module_leaders');
								$adf=$ad->find('admin_id',$sees['admin_id']);
								$stff=$stf->find('staff_id',$sees['staff_id']);
								foreach ($adf as $adfs) {
									echo $adfs['admin_name'];
								}
								foreach ($stff as $stffs) {
									echo $stffs['staff_firstname'].' '.$stffs['staff_surname'];
								}

									?>
									 	<div class="divider"></div>
								<?php } ?>
								</div>
							</li>

						
						</ul>
				
					</li>
				
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">
							<?php 
							$modules = new DatabaseTable('students');
							$fetch=$modules->find('student_id',$_SESSION['sessUserId']);
							foreach ($fetch as $fetches) {
								$md=$fetches['modules'];
							}
								$var = explode(",", $md);
								$tbl=new DatabaseTable('assignments');
							for($i=0;$i<sizeof($var);$i++){
								$find=$tbl->find('module_id',$var[$i]);
								if($find->rowCount()!=0){
									$data=$find->fetchAll();
									$num=count($data);
									
								}
								
							}
						echo $num;
							?>


						</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<?php 
							$modules = new DatabaseTable('students');
							$fetch=$modules->find('student_id',$_SESSION['sessUserId']);
							foreach ($fetch as $fetches) {
								$md=$fetches['modules'];
							}
								$var = explode(",", $md);
								$tbl=new DatabaseTable('assignments');
							for($i=0;$i<sizeof($var);$i++){
								$find=$tbl->find('module_id',$var[$i]);
								foreach ($find as $finds) {
							?>
							<li><a href="#">
								<div><?php echo $finds['assignment_name'];?><br><?php echo $finds['details'];?><br>
									<span class="pull-right text-muted small"><?php echo $finds['issue_date'];?></span>
										<div class="divider"></div>
								</div>
							</a></li>
						<?php } }?>
						
							
						</ul>
					</li>
				</ul>
						
					<?php }
				}
				?>

				
			</div>
		</div><!-- /.container-fluid -->
	</nav>

	<!-- -- side bar -- -->
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<?php
				if(isset($_SESSION['user_type'])){
					if($_SESSION['user_type']=='STAFF'){
						$staff = new DatabaseTable(' module_leaders');
						$fetch=$staff->find('staff_id',$_SESSION['sessUserId']);
						foreach ($fetch as $data) {?>
							<img src="../photos/<?php echo $data['staff_photo']; ?>"  alt=" photo">
																																										
						<?php }
					}
					if($_SESSION['user_type']=='STUDENT'){
						$staff = new DatabaseTable('students');
						$fetch=$staff->find('student_id',$_SESSION['sessUserId']);
						foreach ($fetch as $data) {?>
							<img src="../photos/<?php echo $data['student_photo']; ?>"  alt=" photo">
																																										
						<?php }
					}
				}
					?>

				</div>
			
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">
					<?php
						if($_SESSION['user_type']=='ADMIN'){
							$admin = new DatabaseTable('admins');
							$fetch=$admin->find('admin_id',$_SESSION['sessUserId']);
							foreach ($fetch as $data) {
								echo $data['admin_name'];
							}
													}
						else if($_SESSION['user_type']=='STAFF'){
							$admin = new DatabaseTable('module_leaders');
							$fetch=$admin->find('staff_id',$_SESSION['sessUserId']);
							foreach ($fetch as $data) {
								echo $data['staff_firstname'].$data['staff_surname'];
							}
						}
						else if($_SESSION['user_type']=='STUDENT'){
							$admin = new DatabaseTable('students');
							$fetch=$admin->find('student_id',$_SESSION['sessUserId']);
							foreach ($fetch as $data) {
								echo $data['student_firstname'].$data['student_surname'];
							}
						}
					
					?>
				</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		
		<ul class="nav menu">

			<?php
			if(isset($_SESSION['user_type'])){
				if($_SESSION['user_type']=='ADMIN'){?>
					<li><a href="index.php?page=adminHome"> Home</a></li>
					<li><a href="index.php?page=student"> Student Management</a></li>
					<li><a href="index.php?page=module"> Module Management</a></li>
					<li><a href="index.php?page=module_leader"> Staff Management</a></li>
					<li><a href="index.php?page=timetable"> Time Table</a></li>
					<li><a href="index.php?page=admin_announcement">Announcement</a></li>
					<li><a href="index.php?page=loginDetails">Login Management</a></li>
					<li><a href="index.php?page=faq">FAQs</a></li>
					<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
						<em class="fa fa-navicon">&nbsp;</em> Archived<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"></span>
						</a>
						<ul class="children collapse" id="sub-item-1">
							<li><a class="" href="index.php?page=archiveStudents">
								<span class="fa fa-arrow-right">&nbsp;</span>Archived Students
							</a></li>
							<li><a class="" href="index.php?page=archiveModule">
								<span class="fa fa-arrow-right">&nbsp;</span>Archived Modules
							</a></li>
							<li><a class="" href="index.php?page=archiveModuleLeader">
								<span class="fa fa-arrow-right">&nbsp;</span>Archived Staffs
							</a></li>
						</ul>
					</li>
					
					<br><br><?php }
				else if($_SESSION['user_type']=='STAFF'){?>
					<li><a href="index.php?page=staffHome">Home</a></li>
					<li><a href="index.php?page=staff_modules">My Modules</a></li>
					<li><a href="index.php?page=showAttendence">Attendence Management</a></li>
					<li><a href="index.php?page=grade">Grade Management</a></li>
					<li><a href="index.php?page=staff_announcement">Announcements</a></li>
					<li><a href="index.php?page=staffStudentsList">My Students</a></li>
					<li><a href="index.php?page=staff_announcement_archive">Archive Announcements</a></li>
					<li><a href="index.php?page=staff_timetable">Schedule</a></li>
					<li><a href="index.php?page=staffSettings&id=<?php echo $_SESSION['sessUserId'] ?>">Settings</a></li>

					<?php }
				else if($_SESSION['user_type']=='STUDENT'){?>
					<li><a href="index.php?page=studentHome">Home</a></li>
					<li><a href="index.php?page=student_module">My Modules</a></li>
					<li><a href="index.php?page=student_letter">My Mails</a></li>
					<li><a href="index.php?page=student_announcement">Announcements</a></li>
					<li><a href="index.php?page=studentAttendence">My Attendence</a></li>
					<li><a href="index.php?page=student_timetable">Schedule</a></li>
					<li><a href="index.php?page=studentGrades">My Grades</a></li>
					<li><a href="index.php?page=studentSettings&id=<?php echo $_SESSION['sessUserId'] ?>">Settings</a></li>

					<?php }	


		}
		 ?>
	
			<li><a href="index.php?page=logout"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div>
</li>
</ul>
</li>
</ul>
</div>
</div>
</nav>

	</div><!--/.sidebar-->
		
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active"><?php
			if(isset($_SESSION['user_type'])){
				if($_SESSION['user_type']=='ADMIN'){
					echo $_SESSION['user_type'];
				}
				elseif($_SESSION['user_type']=='STAFF'){
					echo $_SESSION['user_type'];
				}
				elseif($_SESSION['user_type']=='STUDENT'){
					echo $_SESSION['user_type'];
				}
			}
			else{
				echo "GENERAL";

			}

					?></li>
			</ol>
		</div><!--/.row-->



<!--/.here to ashow details-->



<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body">
			<?php echo $content;	?>				
			</div>
	</div>
</div><!--/.row-->
</div>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body">
			<p class="back-link"><b>WoodLand University</b><br>
					<b>Visit Us<br> </b><a href="https://www.woodlanduniversity.com/">www.woodlanduniversity.com</a><br>
						 Woodland,United Kingdom<br>Connect Us <br>
					<a href="#" class="fa fa-facebook"> </a>&nbsp&nbsp&nbsp&nbsp
					<a href="#" class="fa fa-twitter"></a>&nbsp&nbsp&nbsp&nbsp
					<a href="#" class="fa fa-instagram"></a>&nbsp&nbsp&nbsp&nbsp
					<a href="#" class="fa fa-linkedin"></a>&nbsp&nbsp&nbsp&nbsp
					<a href="#" class="fa fa-google"></a><br><br>
					<b>All rights Reserved @woodland.com <a href="#">&copy; 2010-<?php echo date("Y");?></a></b><br><br>
					
			
					<a href="#">FAQs </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<a href="#">Library </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<a href="#">Club </a><br>
					
					
				</h4>
						
			</div>
	</div>
</div><!--/.row-->
</div>
</div>

</div>
	

	<script src="../js/jquery-1.11.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="./js/chart.min.js"></script>
	<script src="../js/chart-data.js"></script>
	<script src="../js/easypiechart.js"></script>
	<script src="../js/easypiechart-data.js"></script>
	<script src="../js/bootstrap-datepicker.js"></script>
	<script src="../../js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>

<!-- Mirrored from medialoot.com/preview/lumino/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Mar 2019 09:03:59 GMT -->
</html>