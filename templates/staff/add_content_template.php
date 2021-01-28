
	<!-- form here-->							
				<div class="panel panel-default">
					<div class="panel-heading">Add  Study Materials</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form action="" method="POST" role="form" enctype="multipart/form-data">
								
								
								
								<div class="form-group">
									<label>Title</label>
									<input  type="text" name="mda_title" class="form-control" placeholder="Title">
								</div>
								<div class="form-group">
									<label>Description</label>
									<input  type="text" name="mda_desc" class="form-control" placeholder="Description">
								</div>

								<!--gender option-->
								
								<div class="form-group">
									<label>Select File</label>
									<input name="mda_file" type="file">
								</div><br>
								<input type="hidden" name="mda_id">
								<input type="submit" name="submit" value="submit">
						</form>


</body>

</html>