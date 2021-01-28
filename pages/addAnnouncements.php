<?php

$anno = new DatabaseTable('anouncements');
$admin= new DatabaseTable('admins');
$staff = new DatabaseTable('module_leaders');

$title = 'Add Announcemts';
if(isset($_POST['submit'])){
	$criteria = $_POST;
	$criteria =[
		'ano_id'=>$_POST['ano_id'],
		'ano_title'=>$_POST['ano_title'],
		'ano_details'=> $_POST['ano_details'],
		'ano_date'=>$_POST['ano_date'],
		'staff_id'=>$_GET['sid']

	];
	
	$add=$anno->save($criteria,'ano_id');
	header('Location:index.php?page=staff_announcement');
}







$content = loadTemplate('../templates/staff/add_announcement_template.php',[]);

?>
