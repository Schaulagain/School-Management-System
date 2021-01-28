
	<!-- form here-->							
				<div class="panel panel-default">
					<div class="panel-heading">Add  Assessment</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form action="" method="POST" role="form" enctype="multipart/form-data">
								
								
								
								<div class="form-group">
									<label>Name</label>
									<input  type="text" name="assignment_name" class="form-control" placeholder="Name">
								</div>
								<div class="form-group">
									<label>Details</label>
									<input  type="text" name="details" class="form-control" placeholder="Description">
								</div>
								<label>Issue Date</label>
								<div class="form-group">
									<input  type="date" name="issue_date" class="form-control" placeholder="Issue Date">
								</div>
								<div class="form-group">
									<label>Due Date</label>
									<input  type="date" name="due_date" class="form-control" placeholder="Due Date">
								</div>


								<!--gender option-->
								
								<div class="form-group">
									<label>Select File</label>
									<input name="assignment_file" type="file">
								</div><br>
								<input type="hidden" name="assignment_id">
								<input type="submit" name="submit" value="submit">
						</form>


</body>

</html>