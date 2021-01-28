<?php
$modules = new DatabaseTable('modules');
$title = 'Module List';
$fetch=$modules->find('staff_id',$_SESSION['sessUserId']);

$content = loadTemplate('../templates/staff/staff_module_template.php' , ['stmt' =>$fetch]);

?>