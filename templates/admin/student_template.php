

<h2>Students </h2>


	<div class="alert bg-info" ><a href="index.php?page=addStudent">Add Student</a></a></div><br>
	<div class="alert bg-info" ><a href="index.php?page=addStudentByFile">Add Student From File</a></a></div>

	
	<table border=1>
	<tr>
		<th>FirstName</th>
		<th>Surname</th>
		<th>Date Of Birth</th>
		<th>Address</th>
		<th>Contact</th>
		<th>Gender</th>
		<th>E-mail</th>
		<th>Level</th>
		<th>Photo</th>
		<th>Action</th>


	</tr>
	<?php
	foreach($stmt as $row){
		if($row['s_archive']==1){?>

		<tr>
			<td style="padding:10px"><a href="index.php?page=assignModule&id=<?php echo $row['student_id'];  ?>"><?php echo $row['student_firstname'];?></td>
			<td style="padding:10px"><?php echo $row['student_surname'];?></td>
			<td style="padding:10px"><?php echo $row['student_dob'];?></td>
			<td style="padding:10px"><?php echo $row['student_address'];?></td>
			<td style="padding:10px"><?php echo $row['student_contact'];?></td>
			<td style="padding:10px"><?php if ($row['student_gender']==1)  echo "Male";
					  elseif ($row['student_gender']==2) echo "Female";
					  elseif ($row['student_gender']==3) echo "Others";
			?></td>
			<td style="padding:10px"><?php echo $row['student_email'];?></td>
			<td style="padding:10px"><?php if($row['level']==1) echo "B1";
					  elseif($row['level']==2) echo "B2";
					  elseif($row['level']==3) echo "B3";
					  elseif($row['level']==4) echo "B4";

			?></td>
			<td style="padding:10px"><img src="../photos/<?php echo $row['student_photo']; ?>" width="100px" height="100px" alt="Student photo"></td>
			<td style="padding:10px"><a href="index.php?page=updateStudent&id=<?php echo $row['student_id'];  ?>">Update</a><br><a href="index.php?page=student&did=<?php echo $row['student_id'];  ?>">Delete</a><br><a href="index.php?page=student&acid=<?php echo $row['student_id'];  ?>&an=0">Archive</a</td>
		</tr>
		<?php } }
		?>
	</table>