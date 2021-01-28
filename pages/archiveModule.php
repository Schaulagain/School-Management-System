<?php
$mod = new DatabaseTable('modules');
$title = 'Archive modules List';
$fetch=$mod->findAll();
$content = loadTemplate('../templates/admin/archive_module_template.php' , ['stmt' =>$fetch]);

?>