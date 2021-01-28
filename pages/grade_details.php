<?php
$modules = new DatabaseTable('modules');

$title = 'Module Details';
$fet=$modules->find('module_id',$_GET['mid']);

$content = loadTemplate('../templates/staff/grade_details_template.php' , ['stmt' =>$fet]);

?>