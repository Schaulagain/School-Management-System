<?php
$modules = new DatabaseTable('modules');
$title = 'Module Details';
$fetch=$modules->find('module_id',$_GET['mid']);


$content = loadTemplate('../templates/students/student_module_details_template.php' , ['stmt' =>$fetch]);

?>