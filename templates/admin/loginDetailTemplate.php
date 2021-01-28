

<h2>Active Logs </h2>
	<table border=1>
	<tr>
		
		<th>Login email</th>
		<th>login_password</th>
		
		
		<th>Action</th>


	</tr>
	<?php
	foreach($stmt as $row){?>
		<tr>
			<td style="padding:10px"><a href="index.php?page=loginDetails&id=<?php echo $row['login_id'];  ?>"><?php echo $row['login_email'];?></td>
			<td style="padding:10px"><?php echo $row['login_password'];?></td>
			
			
			
			<td style="padding:10px"><a href="index.php?page=updateLogin&eid=<?php echo $row['login_id'];  ?>">Update</a><br><a href="index.php?page=loginDetails&did=<?php echo $row['login_id'];  ?>">Delete</a><br>
		</tr>
		<?php } 
		?>
	</table>