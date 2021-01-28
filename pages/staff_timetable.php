<?php
$time = new DatabaseTable('timetable');
$title = 'Time Table';
$fetch=$time->findAll();

$content = loadTemplate('../templates/staff/staff_timetable_template.php' , ['time' =>$fetch]);

?>