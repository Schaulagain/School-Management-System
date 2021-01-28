<?php
$student = new DatabaseTable('module_leaders');
$login=new DatabaseTable('login_detail');

$title = 'Add Module Leader';
if(isset($_POST['submit'])){
			$file = $_FILES['staff_photo']['tmp_name'];
			$assignmentDir = "../photos/";
		$fileP = $assignmentDir .basename($_FILES["staff_photo"]["name"]);

			if (!isset($file))
			  echo "Please select a profile pic";
			else
			{
			  $image = addslashes(file_get_content($_FILES['staff_photo']['tmp_name']));
			  $image_name = addslashes($FILES['staff_photo']['name']);
			  $image_size = getimagesize($_FILES['staff_photo']['tmp_name']);
			  copy(($_FILES["staff_photo"]["tmp_name"]), $fileP);
			}
	$criteria = $_POST;
	$criteria =[
		'staff_firstname'=>$_POST['staff_firstname'],
		'staff_surname'=>$_POST['staff_surname'],
		'staff_dob'=>$_POST['staff_dob'],
		'staff_address'=>$_POST['staff_address'],
		'staff_contact'=>$_POST['staff_contact'],
		'staff_email'=>$_POST['staff_email'],
		'staff_gender'=>$_POST['staff_gender'],
		'hire_date'=>$_POST['hire_date'],
		'qualification'=>$_POST['qualification'],
		'staff_photo'=>$_POST['staff_photo'],
		'staff_id'=>$_POST['staff_id'],
		'staff_password'=>$_POST['staff_firstname'],
		'staff_type'=>$_POST['staff_type'],

	];
	unset($_POST['submit']);
	$add=$student->save($criteria,'staff_id');
	$id=$student->getLastInsertId();
	$login_criteria=[
		'login_email'=>$_POST['staff_email'],
		'login_password'=>$_POST['staff_firstname'],
		'user_type'=>'STAFF',
		'user_id'=>$id
	];
	$login->insert($login_criteria);
	header('Location:index.php?page=module_leader');

	echo "<script>alert('Staff added Sucessfully!');</script>";






}



$content = loadTemplate('../templates/admin/add_staff_template.php' , []);

?>
