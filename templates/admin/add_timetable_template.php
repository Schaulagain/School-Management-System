
	<!-- form here-->							
				<div class="panel panel-default">
					<div class="panel-heading">Add TimeTable</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form action="" method="POST" role="form">
								<div class="form-group">
										<label>Module</label><br>
									<select name="module_id">
										<?php 
											foreach ($stmt as $row) {?>
											 	<option value="<?php echo $row['module_id']?>"><?php echo $row['module_name']?></option>
											 } 
										<?php }
										?>
									</select>
										
								</div>
								<div class="form-group">
									<label>Date</label>
									<input  type="date" name="date" class="form-control" placeholder="date">
								</div>
								<div class="form-group">
									<label>Time</label>
									<input  type="time" name="time" class="form-control" placeholder="time">
								</div>
								<div class="form-group">
									<label>Class Number</label>
									<input  type="text" name="class_no" class="form-control" placeholder="Class Number">
								</div>
								<div class="form-group">
									<label>Session</label>
									<input  type="text" name="session_type" class="form-control" placeholder="session_type">
								</div>								
								<!--gender option-->
								
								
								<input type="hidden" name="timetable_id">
								<input type="submit" name="submit" value="submit">
						</form>
</body>

</html>