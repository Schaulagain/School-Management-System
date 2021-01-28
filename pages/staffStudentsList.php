<?php
$modules = new DatabaseTable('students');
$title = 'Student List';
$fetch=$modules->findAll();

$content = loadTemplate('../templates/staff/staff_list_students.php' , ['stmt' =>$fetch]);

?>