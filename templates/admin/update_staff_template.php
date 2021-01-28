<?php 
extract($stmt);  
?>
	<!-- form here-->							
				<div class="panel panel-default">
					<div class="panel-heading">Update Staff to system</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form action="" method="POST" role="form">
								<div class="form-group">
									<label>Firstname</label>
									<input  type="text" name="staff_firstname" class="form-control" placeholder="Firstname" value="<?php if (isset($_GET['id'])) echo $stmt['staff_firstname'];?>">
								</div>
								<div class="form-group">
									<label>Surname</label>
									<input  type="text" name="staff_surname" class="form-control" placeholder="Surname" value="<?php if (isset($_GET['id'])) echo $stmt['staff_surname'];?>">
								</div>
								<div class="form-group">
										<label>Staff Type</label>
										<select  name="staff_type" class="form-control" value="<?php if (isset($_GET['id'])) echo $stmt['staff_type'];?>">
											<option value="0">Module Leader</option>
											<option value="1">Course Leader</option>
											
										</select>
								</div>
								<div class="form-group">
									<label>Date Of Birth</label>
									<input  type="text" name="staff_dob" class="form-control" placeholder="Date Of birth"
									value="<?php if (isset($_GET['id'])) echo $stmt['staff_dob'];?>">
								</div>
								<div class="form-group">
									<label>Address</label>
									<input  type="text" name="staff_address" class="form-control" placeholder="Address"
									value="<?php if (isset($_GET['id'])) echo $stmt['staff_address'];?>">
								</div>
								<div class="form-group">
									<label>Contact</label>
									<input  type="text" name="student_contact" class="form-control" placeholder="Contact"value="<?php if (isset($_GET['id'])) echo $stmt['staff_contact'];?>">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input  type="text" name="staff_email" class="form-control" placeholder="Email"value="<?php if (isset($_GET['id'])) echo $stmt['staff_email'];?>">
								</div>

								<!--gender option-->
								<div class="form-group">
										<label>Gender</label>
										<select  name="staff_gender" class="form-control" value="<?php if (isset($_GET['id'])) echo $stmt['staff_gender'];?>">
											<option value="1">Male</option>
											<option value="2">Female</option>
											<option value="3">Others</option>
										</select>
								</div>
								<div class="form-group">
									<label>Hire Date</label>
									<input  type="text" name="hire_date" class="form-control" placeholder="Hire Date" value="<?php if (isset($_GET['id'])) echo $stmt['hire_date'];?>">
								</div>
								<div class="form-group">
									<label>Qualification</label>
									<input  type="text" name="qualification" class="form-control" placeholder="Qualification" value="<?php if (isset($_GET['id'])) echo $stmt['qualification'];?>">
								</div>
							
								<div class="form-group">
									<label>Choose Photo</label>
									<input name="staff_photo" type="file"value="<?php if (isset($_GET['id'])) echo $stmt['staff_photo'];?>">
								</div><br>
								<input type="hidden" name="staff_id"value="<?php if (isset($_GET['id'])) echo $stmt['staff_id'];?>">
								<input type="submit" name="submit" value="submit">
						</form>


	
	<script src="../js/jquery-1.11.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="./js/chart.min.js"></script>
	<script src="../js/chart-data.js"></script>
	<script src="../js/easypiechart.js"></script>
	<script src="../js/easypiechart-data.js"></script>
	<script src="../js/bootstrap-datepicker.js"></script>
	<script src="../js/custom.js"></script>
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