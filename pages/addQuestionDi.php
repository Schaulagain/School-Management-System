<?php
$discuss = new DatabaseTable('module_discussion');
$title = 'Module Details';



if(isset($_POST['question'])){
	unset($_POST['question']);
	$criteria = $_POST;
	$criteria =[
			'md_id' => $_POST['md_id'],
			'module_id' => $_POST['module_id'],
			'student_id'=>$_SESSION['sessUserId'],
			'md_ques'=>$_POST['md_ques']
	];

	$discuss->save($criteria, "md_id");

}



$content = loadTemplate('../templates/students/student_module_discussion_template.php' , []);

?>