<?php 
extract($stmt);  
?>
	<!-- form here-->							
				<div class="panel panel-default">
					<div class="panel-heading">Add student to system</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form action="" method="POST" role="form">
								<div class="form-group">
									<label>Firstname</label>
									<input  type="text" name="student_firstname" class="form-control" placeholder="Firstname" value="<?php if (isset($_GET['id'])) echo $stmt['student_firstname'];?>">
								</div>
								<div class="form-group">
									<label>Surname</label>
									<input  type="text" name="student_surname" class="form-control" placeholder="Surname" value="<?php if (isset($_GET['id'])) echo $stmt['student_surname'];?>">
								</div>
								<div class="form-group">
									<label>Date Of Birth</label>
									<input  type="text" name="student_dob" class="form-control" placeholder="Date Of birth"
									value="<?php if (isset($_GET['id'])) echo $stmt['student_dob'];?>">
								</div>
								<div class="form-group">
									<label>Address</label>
									<input  type="text" name="student_address" class="form-control" placeholder="Address"
									value="<?php if (isset($_GET['id'])) echo $stmt['student_address'];?>">
								</div>
								<div class="form-group">
									<label>Contact</label>
									<input  type="text" name="student_contact" class="form-control" placeholder="Contact"value="<?php if (isset($_GET['id'])) echo $stmt['student_contact'];?>">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input  type="text" name="student_email" class="form-control" placeholder="Email"value="<?php if (isset($_GET['id'])) echo $stmt['student_email'];?>">
								</div>

								<!--gender option-->
								<div class="form-group">
										<label>Gender</label>
										<select  name="student_gender" class="form-control" value="<?php if (isset($_GET['id'])) echo $stmt['student_gender'];?>">
											<option value="1">Male</option>
											<option value="2">Female</option>
											<option value="3">Others</option>
										</select>
								</div>
								<div class="form-group">
										<label>Level</label>
										<select  name="level" class="form-control"value="<?php if (isset($_GET['id'])) echo $stmt['level'];?>">
											<option value="1">B1</option>
											<option value="2">B2</option>
											<option value="3">B3</option>
											<option value="4">B4</option>
										</select>
								</div>
								<div class="form-group">
									<label>Choose Photo</label>
									<input name="student_photo" type="file"value="<?php if (isset($_GET['id'])) echo $stmt['student_photo'];?>">
								</div><br>
								<input type="hidden" name="student_id"value="<?php if (isset($_GET['id'])) echo $stmt['student_id'];?>">
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