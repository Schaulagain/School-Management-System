<?php
$announce = new DataBaseTable('anouncements');
$anno = new DataBaseTable('anouncements');
$title = 'Anouncemts List';

if(isset($_GET['did'])){
	$announce->delete('ano_id',$_GET['did']);
		header('Location:index.php?page=staff_announcement');


}
else{
	$std=[];
}
if(isset($_GET['anoamd'])){
	$criteria = $_POST;
		$criteria =[
		'ano_archive'=>$_GET['an'],
		'ano_id'=>$_GET['anoamd'],
	];
	$add=$anno->save($criteria,'ano_id');
	header('Location:index.php?page=staff_announcement');



}
else{
	$std=[];
}


$fetch = $announce->findAll();
$here = $anno->findAll();
$content = loadTemplate('../templates/staff/staff_announcement_template.php' , ['stmt'=>$fetch , 'st'=>$here]);





?>