<?php
$modules = new DatabaseTable('modules');
$title = 'Attendence';
$fetch=$modules->find('staff_id',$_SESSION['sessUserId']);

$content = loadTemplate('../templates/staff/attendence_template.php' , ['stmt' =>$fetch]);

?>