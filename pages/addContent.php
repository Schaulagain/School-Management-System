<?php
$student = new DatabaseTable('module_activites');

$title = 'Add Content';
if(isset($_POST['submit'])){
	$assignmentDir = "../files/";
		$file = $assignmentDir .basename($_FILES["mda_file"]["name"]);
		$fileDir = "files/".basename($_FILES["mda_file"]["name"]);
	    copy(($_FILES["mda_file"]["tmp_name"]), $file);

	$criteria = $_POST;
	$criteria =[
		'mda_title'=>$_POST['mda_title'],
		'mda_desc'=>$_POST['mda_desc'],
		'module_id'=>$_GET['mid'],
		'mda_file'=>$fileDir
	];
	unset($_POST['submit']);
	$add=$student->save($criteria,'module_id');


}



$content = loadTemplate('../templates/staff/add_content_template.php',[]);

?>
