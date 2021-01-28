<?php
$student = new DatabaseTable('students');
$concerns = new DatabaseTable('concerns');

$title = 'Assign Module';
$fetch=$student->findAll();


if(isset($_GET['id'])){
	$std=$student->find('student_id',$_GET['id']);
$std=$std->fetch();
}
else{
	$std=[];
}
if(isset($_POST['add'])){	
	$criteria = $_POST;
	$moduleData=implode(',',$_POST['modules']);
	
	$criteria =[
		'modules'=>$moduleData,
		'student_id'=>$_POST['student_id']
	];
	unset($_POST['add']);
	$add=$student->save($criteria,'student_id');
	header('Location:index.php?page=student');

}
if(isset($_POST['send'])){
			
	$criteria = $_POST;
	$criteria =[
		'conc_title'=>$_POST['conc_title'],
		'conc_details'=>$_POST['conc_details'],
		'conc_id'=>$_POST['conc_id'],
		'student_id'=>$_POST['student_id'],
		'admin_id'=>$_SESSION['sessUserId']
	];
	unset($_POST['send']);
	$add=$concerns->save($criteria,'conc_id');
	echo "<script>alert(' Letter send Sucessfully!');</script>";	
	header('Location:index.php?page=student');

}


$content = loadTemplate('../templates/admin/module_assign_template.php' , ['stmt' =>$std]);

?>

