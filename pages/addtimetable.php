<?php

$time = new DatabaseTable('timetable');
$module = new DatabaseTable('modules');

$title = 'Add TimeTable';
if(isset($_POST['submit'])){
	$criteria = $_POST;
	$criteria =[
		'module_id'=>$_POST['module_id'],
		'date'=>$_POST['date'],
		'time'=>$_POST['time'],
		'class_no'=>$_POST['class_no'],
		'session_type'=>$_POST['session_type']

	];
	unset($_POST['submit']);
	$add=$time->save($criteria,'timetable_id');
}


$info=$time->findAll();
$data= $module->findAll();
$content = loadTemplate('../templates/admin/add_timetable_template.php',['stmt'=>$info , 'stmt'=>$data]);

?>