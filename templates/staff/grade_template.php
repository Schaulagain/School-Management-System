<div class="row">
	<?php foreach ($stmt as $row) {
	if($row['m_archive']==1){ ?>
	<a href="youtube.com">	
	<div class="col-xs-6 col-md-3">
		<div class="panel panel-default">
			<div class="panel-body easypiechart-panel">
				<div class="easypiechart" ></a><span class="percent"><a href="index.php?page=grade_details&mid=<?php echo $row['module_id']?>"><?php echo $row['module_name']; ?></a></span></div>
			</div>
		</div>
	</div>
<?php  } 
}?>
</div><!--/.row-->
















					
				