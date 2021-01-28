<?php
$student = new DatabaseTable('modules');
$title = 'Module Update';
$fetch=$student->findAll();


if(isset($_GET['id'])){
	$std=$student->find('module_id',$_GET['id']);
$std=$std->fetch();
}
else{
	$std=[];
}
if(isset($_POST['submit'])){
			
	$criteria = $_POST;
	$criteria =[
		'module_name'=>$_POST['module_name'],
		'module_level'=>$_POST['module_level'],
		'exam_structure'=>$_POST['exam_structure'],
		'merits_point'=>$_POST['merits_point'],
		'module_id'=>$_POST['module_id'],
		'staff_id'=>$_POST['staff_id']
	];
	unset($_POST['submit']);
	$add=$student->save($criteria,'module_id');
	var_dump($add);
	header('Location:index.php?page=module');
}


$content = loadTemplate('../templates/admin/update_module_template.php' , ['stmt' =>$std]);

?>

