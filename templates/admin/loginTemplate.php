

<!-- Mirrored from medialoot.com/preview/lumino/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Mar 2019 09:03:59 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home	</title>
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
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="../images/vslogo.png" c alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Woodland University College</div>
				Woodland,United Kingdom<br>
				_____________________________________
				<h5><i>"Working For Achivements and Excellence..."</i></h5>
							</div>

			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li class="active">
		</ul>
		
		
		<h5>&nbsp&nbsp Connect Us <br></h5>
				<h4>
					&nbsp&nbsp<a href="#" class="fa fa-facebook"> </a>&nbsp&nbsp&nbsp&nbsp
					<a href="#" class="fa fa-twitter"></a>&nbsp&nbsp&nbsp&nbsp
					<a href="#" class="fa fa-instagram"></a>&nbsp&nbsp&nbsp&nbsp
					<a href="#" class="fa fa-linkedin"></a>&nbsp&nbsp&nbsp&nbsp
					<a href="#" class="fa fa-google"></a>
				</h4>

		
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193319.81917588037!2d-0.30120252593098484!3d51.55871490916339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604735c907c47%3A0xf7c44e785589a6fb!2sWoodlands.Co.UK!5e0!3m2!1sen!2snp!4v1555997120399!5m2!1sen!2snp" width="278" alt="google map" height="300" frameborder="0" style="border:0" allowfullscreen ></iframe>
	</div>
		
		
	</div><!--/.sidebar-->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Woodland</span>University</a>
				
			</div>
		</div><!-- /.container-fluid -->
	</nav>

		<div class="col-lg-12">
			<h1 class="page-header">Woodland University</h1>
		</div>
	</div>	
<div class="col-md-7">
	<div class="panel panel-default">
		<div class="panel-heading">
			Service Messages and Help						
		</div>
		<div class="panel-body">
			<div class="canvas-wrapper">
				<div class="login-panel panel panel-default">
					<div class="service">
						<div class="help">
							<h4> <strong> Blackboard</strong> is operating normally.</h4>
							<h5> <strong>Collaborate</strong>  is operating normally. There may be minor disruption to the service between 2am and 8am on Saturday 23rd March 2019 during routine maintenance.</h5>
							<h5><strong>Edublogs </strong>is operating normally
							<h5><strong>PebblePad</strong> is operating normally.</h5>
							<h5><strong>Turnitin  </strong>is operating normally.</h5>
							<h5><strong>Xerte  </strong>is operating normally.</h5>
							<h5>Live status updates are available for Blackboard and Collaborate, PebblePad, and Turnitin.</h5>
							<h3 style="color: #30a5ff;">Woodland Notice and Takedown Policy</h3>
						</div>
					</div>				
				</div>
			</div>
		</div>

	</div>
	<div class="panel panel-default ">
					<div class="panel-heading">
						 University Announcements
					</div>
					<div class="panel-body timeline-container">
						<ul class="timeline">
							<?php 
							$tbl=new  DatabaseTable('anouncements');
							$ftb=$tbl->findAll();
							foreach ($ftb as $ftbs) {
								if(isset($ftbs['admin_id'])){
							?>
							<li>
								<div class="timeline-badge"><i class="glyphicon glyphicon-pushpin"></i></div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4 class="timeline-title"><?php echo $ftbs['ano_title'] ; ?></h4>
									</div>
									<div class="timeline-body">
										<p><?php echo $ftbs['ano_details'] ; ?></p><br>
										<p><?php echo $ftbs['ano_date'] ; ?></p>
									</div>
								</div>
							</li>
							<?php } 
						}?>
						</ul>
					</div>
				</div>
			</div>
<!--Login Panel -->

<div class="col-md-4">
	<div class="panel panel-default">
		<div class="panel-heading">
			Login to Woodland
			
			</div>
		<div class="panel-body">
			<div class="canvas-wrapper">
								
				<div class="login-panel panel panel-default">
					<div class="panel-heading">Log in</div>
					
					<div class="panel-body">
						<form role="form" action="" method="POST">
							<fieldset>
								<div class="form-group">
									<input class="form-control" placeholder="E-mail" name="email" type="text" required="" autofocus="">
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Password" name="password" type="password" required="" value="">
								</div>
								
								<button type="submit" name="login" class="btn btn-primary">Login </button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<div class="panel panel-default chat">
					<div class="panel-heading">
						FAQ
						
						</div>
					<div class="panel-body">
						<ul>
							
							<?php 
							$tblf=new  DatabaseTable('faqs');
							$ftbb=$tblf->findAll();
							foreach ($ftbb as $ftbbs) {
								if(isset($ftbbs['faq_ans'])){
							?>
							<li class="left clearfix"><span class="chat-img pull-left">
								<img src="http://placehold.it/60/30a5ff/fff" alt="User Avatar" class="img-circle" />
								</span>
								<div class="chat-body clearfix">
									<div class="header">Question: <small class="text-muted"><?php echo $ftbbs['faq_ques']; ?></small></div>
									<p>Answer: <small class="text-muted"><?php echo $ftbbs['faq_ans']; ?></small></p>
								</div>  
							</li>
							<?php }
							} ?>
							
					</div>
					<div class="panel-footer">
						<form role="form" action="" method="POST">
						<div class="input-group">

							<input name="faq_ques" id="btn-input" type="text" class="form-control input-md" placeholder="Enter your question here" /><span class="input-group-btn">
								<input type="hidden" name="faq_id">
								<button class="btn btn-primary btn-md" id="btn-chat" name="inquery" >Send</button>
						</span></div>
					</form>
					</div>
				</div>
			</div>
</div><!--/.row-->


	