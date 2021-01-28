<?php
$student = new DatabaseTable('students');
$title = 'Student List';
$fetch=$student->findAll();




if(isset($_GET['did'])){
	$student->delete('student_id',$_GET['did']);
		header('Location:index.php?page=student');


}
else{
	$std=[];
}

if(isset($_GET['acid'])){
		$criteria = $_POST;
		$criteria =[
		's_archive'=>$_GET['an'],
		'student_id'=>$_GET['acid'],
	];
	$add=$student->save($criteria,'student_id');
	header('Location:index.php?page=student');



}
else{
	$std=[];
}


$content = loadTemplate('../templates/admin/student_template.php' , ['stmt' =>$fetch]);

?>