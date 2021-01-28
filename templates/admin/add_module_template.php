
	<!-- form here-->							
				<div class="panel panel-default">
					<div class="panel-heading">Add Module</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form action="" method="POST" role="form">
								<div class="form-group">
									<label>Module Name</label>
									<input  type="text" name="module_name" class="form-control" placeholder="Module Name">
								</div>
								<div class="form-group">
										<label>Level</label>
										<select  name="module_level" class="form-control">
											<option value="1">B1</option>
											<option value="2">B2</option>
											<option value="3">B3</option>
											<option value="4">B4</option>
										</select>
								</div>
								<div class="form-group">
									<label>Exam Structure</label>
									<input  type="text" name="exam_structure" class="form-control" placeholder="Exam Structure">
								</div>
								<div class="form-group">
									<label>Merit Point</label>
									<input  type="text" name="merits_point" class="form-control" placeholder="Merit Point">
								</div>
								
								<!--gender option-->
								<div class="form-group">
										<label>Staff</label><br>
									<select name="staff_id">
										<?php 
											foreach ($stmt as $row) {?>
											 	<option value="<?php echo $row['staff_id']?>"><?php echo $row['staff_firstname'].' '.$row['staff_surname'] ?></option>
											 } 
										<?php }
										?>
									</select>
										
								</div>
								
								<input type="hidden" name="module_id">
								<input type="submit" name="submit" value="submit">
						</form>
</body>

</html>