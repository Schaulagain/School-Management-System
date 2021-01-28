<?php
$announce = new DataBaseTable('anouncements');
$anno = new DataBaseTable('anouncements');
$title = 'Announcements List';
$fetch = $announce->findAll();
$here = $anno->findAll();
$content = loadTemplate('../templates/students/student_announcement_template.php' , ['stmt'=>$fetch , 'st'=>$here]);





?>