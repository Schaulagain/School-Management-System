<?php
$staff = new DatabaseTable('module_leaders');

?>   

<h2>Modules </h2>

	<div class="alert bg-info" ><a href="index.php?page=addModule">Add Module</a></a></div>
	
	<table border=1>
	<tr>
		<th>Module Name</th>
		<th>Module Level</th>
		<th>Exam Structure</th>
		<th>Merit Point</th>
		<th>Module Leader</th>
		<th>Actions</th>


	</tr>
	<?php
	foreach($stmt as $row){
		$info=$staff->find('staff_id',$row['staff_id']);
		$data=$info->fetch();
		if($row['m_archive']==1){?>
			

		<tr>
			<td style="padding:10px"><?php echo $row['module_name'];?></td>
			<td style="padding:10px"><?php if($row['module_level']==1) echo "B1";
					  elseif($row['module_level']==2) echo "B2";
					  elseif($row['module_level']==3) echo "B3";
					  elseif($row['module_level']==4) echo "B4";

			?></td>
			<td style="padding:10px"><?php echo $row['exam_structure'];?></td>
			<td style="padding:10px"><?php echo $row['merits_point'];?></td>
			<td style="padding:10px"><?php echo $data['staff_firstname'].' '.$data['staff_surname']?></td>
			

			<td style="padding:10px"><a href="index.php?page=updateModule&id=<?php echo $row['module_id'];  ?>">Update</a><br><a href="index.php?page=module&did=<?php echo $row['module_id'];  ?>">Delete</a><br><a href="index.php?page=module&march=<?php echo $row['module_id'];?>&an=0">Archive</a>




		</tr>
		<?php }
	}
		?>
	</table>