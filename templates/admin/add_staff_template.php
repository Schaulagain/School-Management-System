
	<!-- form here-->							
				<div class="panel panel-default">
					<div class="panel-heading">Add Staff to system</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form action="" method="POST" role="form"  >
								<div class="form-group">
									<label>Firstname</label>
									<input  type="text" name="staff_firstname" class="form-control" placeholder="Firstname">
								</div>
								<div class="form-group">
									<label>Surname</label>
									<input  type="text" name="staff_surname" class="form-control" placeholder="Surname">
								</div>
								<div class="form-group">
										<label>Staff Type</label>
										<select  name="staff_type" class="form-control">
											<option value="0">Module Leader</option>
											<option value="2">Course Leader</option>
											
										</select>
								</div>
								<div class="form-group">
									<label>Date Of Birth</label>
									<input  type="date" name="staff_dob" class="form-control" placeholder="Date Of birth">
								</div>
								<div class="form-group">
									<label>Address</label>
									<input  type="text" name="staff_address" class="form-control" placeholder="Address">
								</div>
								<div class="form-group">
									<label>Contact</label>
									<input  type="text" name="staff_contact" class="form-control" placeholder="Contact">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input  type="text" name="staff_email" class="form-control" placeholder="Email">
								</div>

								<!--gender option-->
								<div class="form-group">
										<label>Gender</label>
										<select  name="staff_gender" class="form-control">
											<option value="1">Male</option>
											<option value="2">Female</option>
											<option value="3">Others</option>
										</select>
								</div>
								<div class="form-group">
									<label>Hire Date</label>
									<input  type="date" name="hire_date" class="form-control" placeholder="Hire Date">
								</div>
								<div class="form-group">
									<label>Qualification</label>
									<input  type="text" name="qualification" class="form-control" placeholder="Qualification">
								</div>
								<div class="form-group">
									<label>Choose Photo</label>
									<input name="staff_photo" type="file">
								</div><br>
								<input type="hidden" name="staff_id">
								<input type="hidden" name="staff_password">

								<input type="submit" name="submit" value="submit">
						</form>



		
</body>

</html>