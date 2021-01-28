<?php
$Log = new DatabaseTable('login_detail');
$title = 'Log List';
$fetch=$Log->findAll();

if(isset($_GET['did'])){
	$Log->delete('login_id',$_GET['did']);
		header('Location:index.php?page=loginDetails');


}
else{
	$std=[];
}

$content = loadTemplate('../templates/admin/loginDetailTemplate.php' , ['stmt' =>$fetch]);

?>