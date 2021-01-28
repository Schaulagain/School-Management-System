<?php
$time = new DatabaseTable('timetable');
$title = 'Time Table';
$fetch=$time->findAll();

$content = loadTemplate('../templates/students/student_timetable_template.php' , ['time' =>$fetch]);

?>