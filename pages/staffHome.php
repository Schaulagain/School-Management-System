<?php
$module = new DatabaseTable('module_leaders');
$title = 'Staff home';
$stmt= $module->find('staff_id',$_SESSION['sessUserId']);
$content = loadTemplate('../templates/staff/staff_home_template.php', ['stmt'=>$stmt]);

?>