<?php
$modules = new DatabaseTable('attendences');
$title = 'Module List';

$fetch=$modules->find('student_id',$_SESSION['sessUserId']);
$content = loadTemplate('../templates/students/student_attendence_template.php' , ['stmt'=>$fetch]);

?>