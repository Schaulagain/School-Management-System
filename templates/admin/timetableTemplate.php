<?php
$module = new DatabaseTable('modules');
?>

<h2>TimeTable </h2>

	<div class="alert bg-info" ><a href="index.php?page=addTimetable">Add TimeTable</a></div>                                                                                                      
	
	<table border=1>
	
	<tr>
		<th>Module name </th>
		<th>Date </th>
		<th>Time </th>
		<th>Room Number</th>
		<th>Session Type</th>
		<th>Actions</th>
		
	</tr>
	<?php
	foreach($time as $row){
		$info=$module->find('module_id',$row['module_id']);
		$data=$info->fetch();
		?>

		<tr>
			<td style="padding:10px"><?php echo $data['module_name'];?></td>
			<td style="padding:10px"><?php echo $row['date'];?></td>
			<td style="padding:10px"><?php echo $row['time'];?></td>
			<td style="padding:10px"><?php echo $row['class_no'];?></td>
			<td style="padding:10px"><?php echo $row['session_type'];?></td>

			</td>
			
			<td style="padding:10px"><a href="index.php?page=updatetimetable&id=<?php echo $row['timetable_id'];  ?>">Update</a><br><a href="index.php?page=timetable&did=<?php echo $row['timetable_id'];  ?>">Delete</a></td>




		</tr>
		<?php }
		?>
	</table>