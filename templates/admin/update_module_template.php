<?php 
extract($stmt);  
$staff = new DatabaseTable('module_leaders');
$info=$staff->findAll();
?>
	<!-- form here-->							
				<div class="panel panel-default">
					<div class="panel-heading">Update Module</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form action="" method="POST" role="form">
								<div class="form-group">
									<label>Module Name</label>
									<input  type="text" name="module_name" class="form-control" placeholder="Module Name"value="<?php if (isset($_GET['id'])) echo $stmt['module_name'];?>">
								</div>
								<div class="form-group">
										<label>Level</label>
										<select  name="module_level" class="form-control"value="<?php if (isset($_GET['id'])) echo $stmt['module_level'];?>">
											<option value="1">B1</option>
											<option value="2">B2</option>
											<option value="3">B3</option>
											<option value="4">B4</option>
										</select>
								</div>
								<div class="form-group">
									<label>Exam Structure</label>
									<input  type="text" name="exam_structure" class="form-control" placeholder="Exam Structure"value="<?php if (isset($_GET['id'])) echo $stmt['exam_structure'];?>">
								</div>
								<div class="form-group">
									<label>Merit Point</label>
									<input  type="text" name="merits_point" class="form-control" placeholder="Merit Point"value="<?php if (isset($_GET['id'])) echo $stmt['merits_point'];?>">
								</div>
								
								<div class="form-group">
										<label>Staff</label><br>
									<select name="staff_id">
										 <?php 
											foreach ($info as $row) {?>
											 	<option value="<?php echo $row['staff_id']?>"><?php echo $row['staff_firstname'].' '.$row['staff_surname'] ?></option>
											 } 
										<?php }
										?> 
									</select>
										
								</div>
								
								<input type="hidden" name="module_id" value="<?php if (isset($_GET['id'])) echo $stmt['module_id'];?>" >

								<input type="submit" name="submit" value="submit">
						</form>
</body>

</html>