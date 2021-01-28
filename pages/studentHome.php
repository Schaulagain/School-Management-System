
<?php
$module = new DatabaseTable('students');
$title = 'Student Home';
$stmt= $module->find('student_id',$_SESSION['sessUserId']);
$content = loadTemplate('../templates/students/student_home_template.php', ['stmt'=>$stmt]);

?>