<?php
$student = new DatabaseTable('students');
$login=new DatabaseTable('login_detail');

$title = 'Add Student';
if(isset($_POST['submit'])){
			$file = $_FILES['student_photo']['tmp_name'];

			if (!isset($file))
			  echo "Please select a profile pic";
			else
			{
			  $image = addslashes(file_get_content($_FILES['student_photo']['tmp_name']));
			  $image_name = addslashes($FILES['student_photo']['name']);
			  $image_size = getimagesize($_FILES['student_photo']['tmp_name']);

			 
			}




	$criteria = $_POST;
	$criteria =[
		'student_firstname'=>$_POST['student_firstname'],
		'student_surname'=>$_POST['student_surname'],
		'student_dob'=>$_POST['student_dob'],
		'student_address'=>$_POST['student_address'],
		'student_contact'=>$_POST['student_contact'],
		'student_email'=>$_POST['student_email'],
		'student_gender'=>$_POST['student_gender'],
		'level'=>$_POST['level'],
		'student_id'=>$_POST['student_id'],
		'student_photo'=>$_POST['student_photo'],
		'student_password'=>$_POST['student_firstname']
	];
	unset($_POST['submit']);
	 $file="..photos/".basename($_FILES['student_photo']['name']);
	move_uploaded_file($FILES['student_photo']['temp_name'],$file);
	$add=$student->save($criteria,'student_id');

	$id=$student->getLastInsertId();
	$login_criteria=[
		'login_email'=>$_POST['student_email'],
		'login_password'=>$_POST['student_firstname'],
		'user_type'=>'STUDENT',
		'user_id'=>$id
	];
	$login->insert($login_criteria);
	header('Location:index.php?page=student');

	echo "<script>alert('Student added Sucessfully!');</script>";






}



$content = loadTemplate('../templates/admin/add_student_template.php' , []);

?>
