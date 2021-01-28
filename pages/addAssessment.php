<?php
$student = new DatabaseTable('assignments');

$title = 'Add Assignment';
if(isset($_POST['submit'])){
	$assignmentDir = "../files/assignment/";
		$file = $assignmentDir .basename($_FILES["assignment_file"]["name"]);
		$fileDir = "files/assignment/".basename($_FILES["assignment_file"]["name"]);
	    copy(($_FILES["assignment_file"]["tmp_name"]), $file);

	$criteria = $_POST;
	$criteria =[
		'assignment_name'=>$_POST['assignment_name'],
		'details'=>$_POST['details'],
		'issue_date'=>$_POST['issue_date'],
		'due_date'=>$_POST['due_date'],
		'module_id'=>$_GET['mid'],
		'assignment_file'=>$fileDir
	];
	unset($_POST['submit']);
	$add=$student->save($criteria,'module_id');
	


}



$content = loadTemplate('../templates/staff/add_assignment_template.php',[]);

?>
