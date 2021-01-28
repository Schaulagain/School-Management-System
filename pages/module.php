<?php
$module = new DatabaseTable('modules');
$title = 'Module List';
$fetch=$module->findAll();

if(isset($_GET['did'])){
	$module->delete('module_id',$_GET['did']);
		header('Location:index.php?page=module');


}
else{
	$std=[];
}

if(isset($_GET['march'])){
		$criteria = $_POST;
		$criteria =[
		'm_archive'=>$_GET['an'],
		'module_id'=>$_GET['march'],
	];
	$add=$module->save($criteria,'module_id');
	header('Location:index.php?page=module');



}
else{
	$std=[];
}





$content = loadTemplate('../templates/admin/module_template.php' , ['stmt' =>$fetch]);

?>