<?php
$student = new DatabaseTable('login_detail');
$title = 'Settings';
$fetch=$student->findAll();


if(isset($_GET['id'])){
	$std=$student->find('user_id',$_GET['id']);
$std=$std->fetch();
}
else{
	$std=[];
}
if(isset($_POST['submit'])){
			
	$criteria = $_POST;
	$criteria =[
		'login_password'=>$_POST['login_password'],
		'login_id'=>$_POST['login_id']
	];
	unset($_POST['submit']);
	$add=$student->save($criteria,'login_id');
	echo "<script>alert('Password Changed Sucessfully!');</script>";
	header('location:index.php?page=staffHome');
	
}


$content = loadTemplate('../templates/staff/staff_settings_template.php' , ['stmt' =>$std]);

?>
