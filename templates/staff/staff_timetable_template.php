<?php
$module = new DatabaseTable('modules');
?>

<h2>TimeTable </h2>

	         
	
	<table border=1>
	
	<tr>
		<th>Module name </th>
		<th>Date </th>
		<th>Time </th>
		<th>Room Number</th>
		<th>Session Type</th>
		
		
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
		</tr>
		<?php }
		?>
	</table>