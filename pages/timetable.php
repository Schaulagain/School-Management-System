<?php
$time = new DatabaseTable('timetable');
$title = 'Time Table';
$fetch=$time->findAll();

if(isset($_GET['did'])){
	$time->delete('timetable_id',$_GET['did']);
		header('Location:index.php?page=timetable');


}
else{
	$std=[];
}	

$content = loadTemplate('../templates/admin/timetableTemplate.php' , ['time' =>$fetch]);

?>