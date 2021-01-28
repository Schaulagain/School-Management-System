<?php
$concern = new DataBaseTable('concerns');
$title = 'My Mails';	

$fetch = $concern->findAll();
$content = loadTemplate('../templates/students/student_letter_template.php' , ['stmt'=>$fetch]);





?>