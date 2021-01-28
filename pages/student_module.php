<?php
$modules = new DatabaseTable('students');
$title = 'Module List';

$fetch=$modules->find('student_id',$_SESSION['sessUserId']);
foreach ($fetch as $fetches) {
	$md=$fetches['modules'];
	
}

$content = loadTemplate('../templates/students/student_module_template.php' , ['stmt'=>$md]);

?>