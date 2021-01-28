<?php
$student = new DatabaseTable('modules');
$title = 'Add module to student';
$info=$student->findAll();

?>
<div class="panel panel-default">
	<form action="" method="POST" role="form">
		<div class="col-md-6">
			<div class="form-group">
				<label> Assign Modules</label>
				<?php foreach ($info as $row) {?>

				<div class="checkbox">
					<label>
						<input type="checkbox" name="modules[]" value="<?php echo $row['module_id'] ?>"><?php echo $row['module_name'] ?>
					</label>
				<?php } ?>	
				</div>
			</div>
		</div>
		<input type="hidden" name="student_id" value="<?php echo $stmt['student_id'] ?>" >
		<input type="submit" name="add" value="Add"><br><br><br>
	</form>
</div>	
	<div class="divider"></div>	<div class="alert bg-info" >Send Concern Letter to student</a></a></div>

	<div class="panel panel-default">
					<div class="panel-heading">
						Concern Letter
						
						</div>
					<div class="panel-body">
						<form class="form-horizontal" action="" method="POST">
							<fieldset>
								<!-- Title input-->
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Title</label>
									<div class="col-md-9">
										<input  name="conc_title" type="text" placeholder="Title" class="form-control">
									</div>
								</div>
								
								<!-- Message body -->
								<div class="form-group">
									<label class="col-md-3 control-label" for="message">Your message</label>
									<div class="col-md-9">
										<textarea class="form-control"  name="conc_details" placeholder="Please enter your message here..." rows="10"></textarea>
									</div>
								</div>
								
								<!-- Form actions -->
								<input type="hidden" name="concern_id">
								<input type="hidden" name="student_id" value="<?php echo $stmt['student_id'] ?>" >
								<div class="form-group">
									<div class="col-md-12 widget-right">
										<button type="submit" class="btn btn-default btn-md pull-right" name="send" value="send">Send</button>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>