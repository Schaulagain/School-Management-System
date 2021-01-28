<?php
$announ = new DatabaseTable('anouncements');
$title = 'Archive announcements List';
$fetch=$announ->findAll();
$content = loadTemplate('../templates/staff/staff_announcement_archive_template.php' , ['stmt' =>$fetch]);

?>