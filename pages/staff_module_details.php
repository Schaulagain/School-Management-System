<?php
$modules = new DatabaseTable('modules');
$assign = new DatabaseTable('assignments');
$title = 'Module Details';
$fetch=$modules->find('module_id',$_GET['mid']);

if(isset($_POST['Submit'])){
	unset($_POST['Submit']);
	$criteria = $_POST;
	$criteria =[
			'assignment_id' => $_POST['assignment_id'],
			'approve'=>$_POST['approve']
	];

	$assign->save($criteria, "assignment_id");

}

$content = loadTemplate('../templates/staff/staff_module_details_template.php' , ['stmt' =>$fetch]);

?>