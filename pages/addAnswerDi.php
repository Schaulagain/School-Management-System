<?php

$discuss = new DatabaseTable('module_discussion');
$title = 'Add Answer';



if(isset($_POST['ans'])){
	unset($_POST['ans']);
	$criteria = $_POST;
	$criteria =[
			'md_id' => $_POST['md_id'],
			'md_ans'=>$_POST['md_ans']
	];

	$discuss->save($criteria, "md_id");

}

$content = loadTemplate('../templates/staff/staff_module_discussion_template.php' , []);

?>