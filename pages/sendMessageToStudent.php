<?php
$title="Send Letter";
$concerns = new DatabaseTable('concerns');
if(isset($_POST['send'])){
			
	$criteria = $_POST;
	$criteria =[
		'conc_title'=>$_POST['conc_title'],
		'conc_details'=>$_POST['conc_details'],
		'conc_id'=>$_POST['conc_id'],
		'student_id'=>$_GET['sid'],
		'staff_id'=>$_SESSION['sessUserId']
	];
	unset($_POST['send']);
	$add=$concerns->save($criteria,'conc_id');
	echo "<script>alert(' Letter send Sucessfully!');</script>";	
	header('Location:index.php?page=staffStudentsList');

}


$content = loadTemplate('../templates/staff/send_message_template.php' , []);

?>