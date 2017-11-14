<?php echo $this->session->logged_in; ?>

<div class="row">
	<div class="col-sm-4">
		<div class="panel panel-default panel-left">
			<div class="panel-heading"><h3>Applications</h3></div>
			<div class="panel-body">
				<ul>
				<?php 
					foreach ($applications as $application) {
						echo '<li><a>'.$application->course_name.'</a></li>';
					}
				?>
				</ul>
			</div>
		</div>		
	</div>
	<div class="col-sm-4">
		<div class="panel panel-default">
			<div class="panel-heading"><h3>Documents</h3></div>
			<div class="panel-body">
				<ul>
					<li><a>Document 1</a></li>
					<li><a>Document 2</a></li>
					<li><a>Document 3</a></li>
				</ul>
			</div>
		</div>			
	</div>
	<div class="col-sm-4">
		<div class="panel panel-default panel-right">
			<div class="panel-heading"><h3>Something Else</h3></div>
			<div class="panel-body">
				<ul>
					<li><a>Something Else 1</a></li>
				</ul>
			</div>
		</div>		
	</div>
</div>