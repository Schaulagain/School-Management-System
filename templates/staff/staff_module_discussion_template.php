<form role="form" action="" method="POST">
										<div class="input-group">

											<input name="md_ans" id="btn-input" type="text" class="form-control input-md" placeholder="Enter your question here" /><span class="input-group-btn">
												<input type="hidden" name="md_id" value="<?php echo $_GET['qid']; ?>">
												<input type="hidden" name="module_id" value="<?php echo $_GET['mid'] ?>">
												<button class="btn btn-primary btn-md" id="btn-chat" name="ans" >Send Question</button>
										</span></div>
									</form>