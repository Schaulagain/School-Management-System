<div class="col-md-6">
				<div class="panel panel-default ">
					<div class="panel-heading">
						FAQs	
					</div>
					<?php foreach ($stmt as $stmts) {?>
					<div class="panel-body timeline-container">
						<ul class="timeline">
							<li>
								<div class="timeline-badge primary"><em class="glyphicon glyphicon-link"></em></div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4 class="timeline-title">Question: <?php echo $stmts['faq_ques']; ?></h4>
									</div>
									<div class="timeline-body">
										<p>Answer: <?php echo $stmts['faq_ans']; ?></p>
									</div>
									
									<form role="form" action="" method="POST">
										<div class="input-group">

											<input name="faq_ans" id="btn-input" type="text" class="form-control input-md" placeholder="Enter your answer here" /><span class="input-group-btn">
												<input type="hidden" name="faq_id" value="<?php echo $stmts['faq_id'] ?>">
												<button class="btn btn-primary btn-md" id="btn-chat" name="ans" >Answer</button>
										</span></div>
									</form


								</div>
							</li>
						</ul>
					</div>
				<?php } ?>
				</div>
			</div><!--/.col-->