<?php
$assign = new DatabaseTable('grades');

$title = 'submit your assignments';
if(isset($_POST['add'])){
$assignmentDir = "../files/assignment/";
		$file = $assignmentDir .basename($_FILES["grade_file"]["name"]);
		$fileDir = "files/assignment/".basename($_FILES["grade_file"]["name"]);
	    copy(($_FILES["grade_file"]["tmp_name"]), $file);

	$criteria = $_POST;
	$criteria =[
		
		'grade_file'=>$fileDir,
		'grade_id'=>$_POST['grade_id'],
		'module_id'=>$_GET['mid'],
		'assignment_id'=>$_GET['aid'],
		'student_id'=>$_SESSION['sessUserId'],
		'submit_status'=>1

	];
	unset($_POST['add']);
	$add=$assign->save($criteria,'grade_id');
	header('Location:index.php?page=student_module');


}
$content = loadTemplate('../templates/students/student_assignment_template.php',[]);
?>
