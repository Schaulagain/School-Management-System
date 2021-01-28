<div class="panel panel-default chat">
	<div class="panel-heading">
		Students
	</div>
	<div class="panel-body">
		<ul><?php 
		foreach ($stmt as $stmts) {
			if($stmts['s_archive']==1){
		 ?>
			<li class="left clearfix"><span class="chat-img pull-left">
				<img src="../photos/<?php echo $stmts['student_photo']; ?>" alt="User Avatar" class="img-circle" width=50px; height=50px; >
				</span>
				<div class="chat-body clearfix">
					<div class="header"><strong class="primary-font"><?php echo $stmts['student_firstname'].' '.$stmts['student_surname'] ; ?><br></strong>Level: <?php if($stmts['level']==1) echo "B1";
					  elseif($stmts['level']==2) echo "B2";
					  elseif($stmts['level']==3) echo "B3";
					  elseif($stmts['level']==4) echo "B4";

					?><br>
					Date OF Birth: <?php echo $stmts['student_dob']; ?>
					<br>
					E-mail: <?php echo $stmts['student_email']; ?>
					<br>
					Contact: <?php echo $stmts['student_contact']; ?><br>

					<a href="index.php?page=sendMessageToStudent&sid=<?php echo $stmts['student_id'] ?>">Send Letter</a>


					<small class="text-muted"></small></div>
					<p></p>
				</div>
			</li>
		<?php } 
	}?>
		</ul>
	</div>
	
</div>