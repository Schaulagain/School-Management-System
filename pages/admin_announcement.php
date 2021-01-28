<?php
$announce = new DataBaseTable('anouncements');
$anno = new DataBaseTable('anouncements');
$title = 'Anouncemts List';

if(isset($_GET['did'])){
	$announce->delete('ano_id',$_GET['did']);
		header('Location:index.php?page=admin_announcement');


}
else{
	$std=[];
}	



$fetch = $announce->findAll();
$here = $anno->findAll();
$content = loadTemplate('../templates/admin/admin_announcement_template.php' , ['stmt'=>$fetch , 'st'=>$here]);





?>