<?php
$student = new DatabaseTable('module_leaders');
$title = 'Staff List';
$fetch=$student->findAll();


if(isset($_GET['id'])){
	$std=$student->find('staff_id',$_GET['id']);
$std=$std->fetch();
}
else{
	$std=[];
}
if(isset($_POST['submit'])){
			$file = $_FILES['staff_photo']['tmp_name'];

			if (!isset($file))
			  echo "Please select a profile pic";
			else
			{
			  $image = addslashes(file_get_content($_FILES['staff_photo']['tmp_name']));
			  $image_name = addslashes($FILES['staff_photo']['name']);
			  $image_size = getimagesize($_FILES['staff_photo']['tmp_name']);

			 
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
		'staff_id'=>$_POST['staff_id'],
		'staff_photo'=>$_POST['staff_photo'],
		'staff_type'=>$_POST['staff_type']

	];
	unset($_POST['submit']);
	$add=$student->save($criteria,'staff_id');
	header('Location:index.php?page=module_leader');





}


$content = loadTemplate('../templates/admin/update_staff_template.php' , ['stmt' =>$std]);

?>

