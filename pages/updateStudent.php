<?php
$student = new DatabaseTable('students');
$title = 'Student List';
$fetch=$student->findAll();


if(isset($_GET['id'])){
	$std=$student->find('student_id',$_GET['id']);
$std=$std->fetch();
}
else{
	$std=[];
}
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
		'student_photo'=>$_POST['student_photo']
	];
	unset($_POST['submit']);
	$add=$student->save($criteria,'student_id');
	header('Location:index.php?page=student');





}


$content = loadTemplate('../templates/admin/update_student_template.php' , ['stmt' =>$std]);

?>

