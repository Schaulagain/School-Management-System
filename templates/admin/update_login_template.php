<?php 
extract($stmt);  
?>
<div class="panel panel-default">
					<div class="panel-heading">Change data</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form action="" method="POST" role="form">
								<div class="form-group">
									<label>Login Email</label>
									<input  type="text" name="login_email" class="form-control"  value="<?php if (isset($_GET['eid'])) echo $stmt['login_email'];?>">
								</div>
								<div class="form-group">
									<label>Change password</label>
									<input  type="text" name="login_password" class="form-control"value="<?php if (isset($_GET['eid'])) echo $stmt['login_password'];?>">
								</div>
								
								<input type="hidden" name="login_id"value="<?php if (isset($_GET['eid'])) echo $stmt['login_id'];?>">
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