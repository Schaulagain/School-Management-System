<?php

$grade= new DatabaseTable('grades');
$val=$grade->find('module_id',$_GET['mid']);

?>
<ul class="timeline">
	<?php foreach($val as $data) {?>
	<li>
		<div class="timeline-panel">
		<div class="timeline-heading">
		<h4 class="timeline-title">
			<?php
			$student=new DatabaseTable('students');
			$stdinfo=$student->find('student_id',$data['student_id']);
			foreach ($stdinfo as $stdinfos) {?>
			<h4>Student Name: <?php echo $stdinfos['student_firstname'].' '.$stdinfos['student_surname'];?></h4>
			<h4>Student Level: <?php 
					  if($stdinfos['level']==1) echo "B1";
					  elseif($stdinfos['level']==2) echo "B2";
					  elseif($stdinfos['level']==3) echo "B3";
					  elseif($stdinfos['level']==4) echo "B4";
					?><br><br></h4>

			<?php }?>

		</h4>

		<h5 class="timeline-title">Current Grade: <?php echo $data['grades'];?></h5>
		<?php 
		$ass=new DatabaseTable('assignments');
		$info=$ass->find('assignment_id',$data['assignment_id']);
		foreach ($info as $key ) {?>
		<h5 class="timeline-title"><?php echo $key['assignment_name']?></h5>
		<h5 class="timeline-title"><?php echo $key['details']?></h5><br>
		<p><a href="../<?php echo $data['grade_file'] ?>" download>Download</a></p>
		<?php }?>
		</div>
		<a href="index.php?page=addGrade&aid=<?php echo $data['grade_id']; ?>">Add/Update grade</a>

		<div class="timeline-body">


		</div>
		</div>
	</li>
<?php } ?>
</ul>
