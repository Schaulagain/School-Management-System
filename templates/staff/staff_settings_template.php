<?php 
extract($stmt);  
?>
	<!-- form here-->							
				<div class="panel panel-default">
					<div class="panel-heading">Settings</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form action="" method="POST" role="form">
								<div class="form-group">
									<label>Change Password</label>
									<input  type="text" name="login_password" class="form-control"  value="<?php if (isset($_GET['id'])) echo $stmt['login_password'];?>">
								</div>
								<br>
								<input type="hidden" name="login_id"value="<?php if (isset($_GET['id'])) echo $stmt['login_id'];?>">
								<input type="submit" name="submit" value="submit">
						</form>
		
</body>

<!-- Mirrored from medialoot.com/preview/lumino/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Mar 2019 09:03:59 GMT -->
</html>