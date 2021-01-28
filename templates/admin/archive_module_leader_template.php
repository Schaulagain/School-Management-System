

<h2> Archived Module Leaders </h2>

	
	<table border=1 >
	<tr>
		<th>FirstName</th>
		<th>Surname</th>
		<th>Date Of Birth</th>
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
		if($row['leader_archive']==0){?>



		

		<tr>
			<td style="padding:10px"><?php echo $row['staff_firstname'];?></td>
			<td style="padding:10px"><?php echo $row['staff_surname'];?></td>
			<td style="padding:10px"><?php echo $row['staff_dob'];?></td>
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
			<td style="padding:10px"><a href="index.php?page=module_leader&did=<?php echo $row['staff_id'];  ?>">Delete</a><br><a href="index.php?page=module_leader&samd=<?php echo $row['staff_id'];?>&an=1">unArchive</a></td>




		</tr>
		<?php }
	}
		?>
	</table>