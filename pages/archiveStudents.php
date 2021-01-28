<?php
$student = new DatabaseTable('students');
$title = 'Archive Students List';
$fetch=$student->findAll();
$content = loadTemplate('../templates/admin/archive_student_template.php' , ['stmt' =>$fetch]);

?>