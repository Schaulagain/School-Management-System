<?php 
extract($stmt);  
$modules= new DatabaseTable('modules');
$info=$modules->findAll();
?>
	<!-- form here-->							
				<div class="panel panel-default">
					<div class="panel-heading">Update Timetable</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form action="" method="POST" role="form">
								
								<div class="form-group">
										<label>Module Name</label><br>
									<select name="module_id">
										 <?php 
											foreach ($info as $row) {?>
											 	<option value="<?php echo $row['module_id']?>"><?php echo $row['module_name'] ?></option>
											 } 
										<?php }
										?> 
									</select>
										
								</div>
								
								<div class="form-group">
									<label>Date/label>
									<input  type="date" name="date" class="form-control" placeholder="date"value="<?php if (isset($_GET['id'])) echo $stmt['date'];?>">
								</div>
								<div class="form-group">
									<label>time</label>
									<input  type="time" name="time" class="form-control"value="<?php if (isset($_GET['id'])) echo $stmt['time'];?>">
								</div>
								<div class="form-group">
									<label>class</label>
									<input  type="text" name="class_no" class="form-control" placeholder="class"value="<?php if (isset($_GET['id'])) echo $stmt['class_no'];?>">
								</div>
								<div class="form-group">
									<label>session</label>
									<input  type="text" name="session_type" class="form-control" placeholder="sesion"value="<?php if (isset($_GET['id'])) echo $stmt['session_type'];?>">
								</div>
								<input type="hidden" name="timetable_id" value="<?php if (isset($_GET['id'])) echo $stmt['timetable_id'];?>">

								<input type="submit" name="submit" value="submit">
						</form>
</body>

</html>