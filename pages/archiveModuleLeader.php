
<?php
$ledear = new DatabaseTable('module_leaders');
$title = 'Archive staff List';
$fetch=$ledear->findAll();
$content = loadTemplate('../templates/admin/archive_module_leader_template.php' , ['stmt' =>$fetch]);

?>