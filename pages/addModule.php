<?php
$student = new DatabaseTable('modules');
$staff = new DatabaseTable('module_leaders');

$title = 'Add Modules';
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
	header('Location:index.php?page=module');

}


$info=$staff->findAll();
$content = loadTemplate('../templates/admin/add_module_template.php',['stmt'=>$info]);

?>
