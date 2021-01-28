<?php
$student = new DatabaseTable('module_leaders');
$title = 'Staff List';
$fetch=$student->findAll();




if(isset($_GET['did'])){
	$student->delete('staff_id',$_GET['did']);
		header('Location:index.php?page=module_leader');


}
else{
	$std=[];
}	

if(isset($_GET['samd'])){      //samd is varaible for archive the data of the staff.
		$criteria = $_POST;
		$criteria =[
		'leader_archive'=>$_GET['an'],
		'staff_id'=>$_GET['samd'],
	];
	$add=$student->save($criteria,'staff_id');
	header('Location:index.php?page=module_leader');



}
else{
	$std=[];
}


$content = loadTemplate('../templates/admin/module_leader_template.php' , ['stmt' =>$fetch]);

?>