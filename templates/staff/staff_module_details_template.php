<?php
$txt= new DatabaseTable('module_activites');
$get=$txt->find('module_id',$_GET['mid']);

$ass= new DatabaseTable('assignments');
$value=$ass->find('module_id',$_GET['mid']);

?>

<div class="row">
			<div class="col-lg-12"><h2><?php foreach ($stmt as $modules) { echo $modules['module_name'];}?></h2></div>
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-body tabs">
						<ul class="nav nav-pills">
							<li class="active"><a href="#tab1" data-toggle="tab">About Module</a></li>
							<li><a href="#tab2" data-toggle="tab">Module Activites </a></li>
							<li><a href="#tab3" data-toggle="tab">Assessment</a></li>
							<li><a href="#tab4" data-toggle="tab">Module Discussion</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane fade in active" id="pilltab1">
								<div class="tab-content">
							<div class="tab-pane fade in active" id="tab1">
							
								<div class="panel-body"><div class="panel panel-default articles">
								
								<div class="panel-body articles-container">
									<div class="article border-bottom">
											<div class="col-xs-12">
												<div class="row">
													<div class="col-xs-10 col-md-10">
														<p>Module Name: <?php echo $modules['module_name']; ?><br><br>
															Level: <?php 
															  if($modules['module_level']==1) echo "B1";
															  elseif($modules['module_level']==2) echo "B2";
															  elseif($modules['module_level']==3) echo "B3";
															  elseif($modules['module_level']==4) echo "B4";
															?><br><br>
															Exam Structure: <?php echo $modules['exam_structure']; ?><br><br>
															Merit Points: <?php echo $modules['merits_point']; ?><br><br>
													</div>
												</div>
											</div>
											<div class="clear"></div>
										</div><!--End .article-->
									</div>
								</div><!--End .articles-->
					
							</div>
							</div>
							<div class="tab-pane fade" id="tab2"><!--panel body-->
								<div class="panel-body">
										<div class="alert bg-info" ><a href="index.php?page=addContent&mid=<?php echo $modules['module_id'];?>">Add Content</a></a></div>	
					
								<div class="panel-heading">	Study Materials
								<span class="pull-right clickable panel-toggle panel-button-tab-left"></span></div>
								<div class="panel-body timeline-container">
								<?php  
								foreach ($get as $row) {?>
								<ul class="timeline">

									<li>
										<div class="timeline-panel">
											<div class="timeline-heading">
												<h4 class="timeline-title"><?php  echo $row['mda_title']?></h4><br>
												<h5 class="timeline-title"><?php  echo $row['mda_desc']?></h5>
											</div>
											<div class="timeline-body">
												<p><a href="../<?php echo $row['mda_file'] ?>" download>Download</a></p>	
												
											</div>
											
										</div>
									</li>
								</ul>
							
								
								<?php }?>

								</div>
								</div>
								
								</div>
								<div class="tab-pane fade" id="tab3"><!--panel body-->
								<div class="panel-body">
										<div class="alert bg-info" ><a href="index.php?page=addAssessment&mid=<?php echo $modules['module_id'];?>">Add Assessment</a></div>	
					
								<div class="panel-heading">
								<span class="pull-right clickable panel-toggle panel-button-tab-left"></span></div>
								<div class="panel-body timeline-container">
								<?php  
								foreach ($value as $values) {?>
								<ul class="timeline">

									<li>
										<div class="timeline-panel">
											<div class="timeline-heading">
												<h4 class="timeline-title"><?php  echo $values['assignment_name']?></h4>
												<h5 class="timeline-title"><?php  echo $values['details']?></h5>
												<h6 class="timeline-title">Issue Date: <?php  echo $values['issue_date']?></h6>
												<h6 class="timeline-title">Due date: <?php  echo $values['due_date']?></h6>
												<h6 class="timeline-title">Submission status: <?php if($values['approve']==1) echo "Enabled";
												 													 elseif($values['approve']==0) echo "Disabled";
												  ?></h6>

											</div>
											<div class="timeline-body">
												<p><a href="../<?php echo $values['assignment_file'] ?>" download>Download</a></p>
											<form action="" method="POST">
												<div class="form-group">
													<label>Assignemet Status</label>
													<select  name="approve" class="form-control">
														<option value="1">Enable</option>
														<option value="0">Disable</option>
													</select><br>
												</div>
												<input type="hidden" name="assignment_id" value="<?php echo $values['assignment_id']?>">
												<input type="submit" name="Submit" value="approve">
											</form>
																
											</div>
										</div>
									</li>
								</ul>
								<?php }?>

								</div>
								</div>
								</div>
								<div class="tab-pane fade" id="tab4"><!--panel body-->
								<div class="panel-body">
					
								<div class="panel-heading"></div>
								<div class="panel-body timeline-container">
								<?php 
								$discuss=new DatabaseTable('module_discussion');
								$getD=$discuss->find('module_id',$_GET['mid']);

								foreach ($getD as $getDs) {?>
									<div class="panel-body timeline-container">
										<ul class="timeline">
											<li>
												<div class="timeline-badge primary"><em class="glyphicon glyphicon-link"></em></div>
												<div class="timeline-panel">
													<div class="timeline-heading">
														<h4 class="timeline-title">Question: <?php echo $getDs['md_ques']; ?></h4>
														<h5>Asked BY: 
															<?php 
															$std=new DatabaseTable('students');
															$fstd=$std->find('student_id',$getDs['student_id']);
															foreach ($fstd as $fstds) {
																echo $fstds['student_firstname'].' '.$fstds['student_surname'];
															}
															?>

														</h5>


													</div>
													<div class="timeline-body">
														<p>Answer: <?php echo $getDs['md_ans']; ?></p>
													</div>
													
												<div class="alert bg-info" ><a href="index.php?page=addAnswerDi&qid=<?php echo$getDs['md_id'] ?>&mid=<?php echo $modules['module_id'];?>">Add Answer</a></a></div>


												</div>
											</li>
										</ul>
									</div>
								<?php } ?>

								</div>
								</div>
								</div>
								</div>

							</div>

							
						
				</div><!--/.panel-->
			</div><!-- /.col-->
		</div><!-- /.row -->
	</div><!--/.col-->