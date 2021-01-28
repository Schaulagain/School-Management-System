

<h2>Module Leaders </h2>

	<div class="alert bg-info" ><a href="index.php?page=addStaff">Add Staff</a></a></div>
	
	<table border=1 >
	<tr>
		<th>FirstName</th>
		<th>Surname</th>
		<th>Staff Type</th>
		<th>Address</th>
		<th>Contact</th>
		<th>E-mail</th>
		<th>Gender</th>
		<th>Hired Date</th>
		<th>Qualification</th>
		<th>Photo</th>
		<th>Action</th>


	</tr>
	<?php
	foreach($stmt as $row){
		if($row['leader_archive']==1){?>



		

		<tr>
			<td style="padding:10px"><?php echo $row['staff_firstname'];?></td>
			<td style="padding:10px"><?php echo $row['staff_surname'];?></td>
			<td style="padding:10px"><?php if ($row['staff_type']==0) echo "Module Leader";
					  elseif ($row['staff_type']==1) echo "Course Leader";
			?>
				
			</td>
			<td style="padding:10px"><?php echo $row['staff_address'];?></td>
			<td style="padding:10px"><?php echo $row['staff_contact'];?></td>
			<td style="padding:10px"><?php echo $row['staff_email'];?></td>

			<td style="padding:10px"><?php if ($row['staff_gender']==1)  echo "Male";
					  elseif ($row['staff_gender']==2) echo "Female";
					  elseif ($row['staff_gender']==3) echo "Others";
			?></td>
			<td style="padding:10px"><?php echo $row['hire_date'];?></td>
			<td style="padding:10px"><?php echo $row['qualification'];?></td>
		
			<td style="padding:10px"><img src="../photos/<?php echo $row['staff_photo']; ?>" width="100px" height="100px" alt="Staff photo"></td>
			<td style="padding:10px"><a href="index.php?page=updateStaff&id=<?php echo $row['staff_id'];  ?>">Update</a><br><a href="index.php?page=module_leader&did=<?php echo $row['staff_id'];  ?>">Delete</a><br><a href="index.php?page=module_leader&samd=<?php echo $row['staff_id'];?>&an=0">Archive</a></td>




		</tr>
		<?php }
	}
		?>
	</table>