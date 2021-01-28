<?php

$anno = new DatabaseTable('anouncements');


$title = 'Add Announcemts';
if(isset($_POST['submit'])){
	$criteria = $_POST;
	$criteria =[
		'ano_id'=>$_POST['ano_id'],
		'ano_title'=>$_POST['ano_title'],
		'ano_details'=> $_POST['ano_details'],
		'ano_date'=>$_POST['ano_date'],
		'admin_id'=>$_GET['sid']

	];
	
	$add=$anno->save($criteria,'ano_id');
	header('Location:index.php?page=admin_announcement');
}



$content = loadTemplate('../templates/admin/add_admin_announcement_template.php',[]);

?>
