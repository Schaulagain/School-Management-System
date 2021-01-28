<?php
$title = 'My Grades';
$grade=new DatabaseTable('grades');
$findGrade=$grade->find('student_id',$_SESSION['sessUserId']);




$content = loadTemplate('../templates/students/show_grade_template.php',['stmt'=>$findGrade]);

?>
