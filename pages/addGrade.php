<?php

$grd = new DatabaseTable('grades');
$grade_id=$_GET['aid'];
$title = 'Add grades';
if(isset($_POST['save'])){
	$criteria = $_POST;
	$criteria =[
		'grade_id'=>$grade_id,
		'grades'=>$_POST['grades']
	];
	unset($_POST['submit']);
	$add=$grd->save($criteria,'grade_id');
}


$stmt=$grd->findAll();
$content = loadTemplate('../templates/staff/addgrade_template.php',['upgrade'=>$stmt]);

?>