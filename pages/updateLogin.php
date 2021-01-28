<?php
$login = new DatabaseTable('login_detail');
$title = 'log List';
$fetch=$login->findAll();

if(isset($_GET['eid'])){
	$std=$login->find('login_id',$_GET['eid']);
$std=$std->fetch();
}
else{
	$std=[];
}
if(isset($_POST['submit'])){

	$criteria = $_POST;
	$criteria =[
		'login_id'=>$_POST['login_id'],
		'login_email'=>$_POST['login_email'],
		'login_password'=>$_POST['login_password']
	];
	unset($_POST['submit']);
	$add=$login->save($criteria,'login_id');
	header('Location:index.php?page=loginDetails');





}

$content = loadTemplate('../templates/admin/update_login_Template.php' , ['stmt' =>$std]);

?>