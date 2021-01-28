<div class="panel panel-default">
	<div class="panel-heading">Add Attendence</div>
		<div class="panel-body">
			<div class="col-md-6">
				<form action="" method="POST" role="form" enctype="multipart/form-data">
					<div class="form-group">
					
					 <label  class="control-label">Add/Update Attendance Sheet</label>
					 	<input type="file" name="file" class="form-control" />
					</div><br>
					<input type="submit" name="submit" value="submit">
					
			</form></div></div></div><br><br><br>

<table border=2>
	<tr>
		<th>Student Name</th>
		<th>Week1</th>
		<th>Week2</th>
		<th>Week3</th>
		<th>Week4</th>
		<th>Week5</th>
		<th>Week6</th>
		<th>Week7</th>
		<th>Week8</th>
		<th>Week9</th>
		<th>Week10</th>
		<th>Week11</th>
		<th>Week12</th>
		<th>Total Days</th>
	</tr>
<?php
$att=new DatabaseTable('attendences');
$stat=$att->find('module_id',$_GET['mid']);
foreach ($stat as $stats) {
	$sum=$stats['week1']+$stats['week2']+$stats['week3']+$stats['week4']+$stats['week5']+$stats['week6']+$stats['week7']+$stats['week8']+$stats['week9']+$stats['week10']+$stats['week11']+$stats['week12'];
	?>

	<tr>
		<td><?php 
		$std=new DatabaseTable('students');
		$search=$std->find('student_id',$stats['student_id']);
		foreach ($search as $searchs) {

			echo $searchs['student_firstname'].$searchs['student_surname'];
		}
		?>
		<td style="padding:10px"><?php echo $stats['week1']; ?></td>
		<td style="padding:10px"><?php echo $stats['week2']; ?></td>
		<td style="padding:10px"><?php echo $stats['week3']; ?></td>
		<td style="padding:10px"><?php echo $stats['week4']; ?></td>
		<td style="padding:10px"><?php echo $stats['week5']; ?></td>
		<td style="padding:10px"><?php echo $stats['week6']; ?></td>
		<td style="padding:10px"><?php echo $stats['week7']; ?></td>
		<td style="padding:10px"><?php echo $stats['week8']; ?></td>
		<td style="padding:10px"><?php echo $stats['week9']; ?></td>
		<td style="padding:10px"><?php echo $stats['week10']; ?></td>
		<td style="padding:10px"><?php echo $stats['week11']; ?></td>
		<td style="padding:10px"><?php echo $stats['week12']; ?></td>
		<td style="padding:10px"><?php echo $sum; ?></td>
			
		</td>
	</tr>
	<?php } ?>
</table>




