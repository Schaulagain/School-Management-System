<?php
$time = new DatabaseTable('timetable');
$title = 'TimeTable Update';
$fetch=$time->findAll();


if(isset($_GET['id'])){
	$std=$time->find('timetable_id',$_GET['id']);
$std=$std->fetch();
}
else{
	$std=[];
}
if(isset($_POST['submit'])){
			
	$criteria = $_POST;
	$criteria =[
		'module_id'=>$_POST['module_id'],
		'date'=>$_POST['date'],
		'time'=>$_POST['time'],
		'class_no'=>$_POST['class_no'],
		'session_type'=>$_POST['session_type'],
		'timetable_id'=>$_POST['timetable_id']
	];
	unset($_POST['submit']);
	$add=$time->save($criteria,'timetable_id');
	header('Location:index.php?page=timetable');
}


$content = loadTemplate('../templates/admin/update_timetable_template.php' , ['stmt' =>$std]);

?>

