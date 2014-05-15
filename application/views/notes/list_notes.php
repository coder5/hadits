<!-- only show kitab -->
<div class="col-md-9">
	<div class="jumbotron">
		<h2>
			Notes
		</h2>
		<ol>
		<?php
		$i = 1;
		foreach($lists->result() as $notes) {
			echo '<li><a href="'.site_url().'save/view_note/'.$notes->note_id.'">'.$notes->notes.'</a></li>';
		}
		?>
		</ol>
		<p>
			<a class="btn" href="#">View details &raquo;</a>
		</p>
		<div class="span6"></div>
		<!--/span-->
	</div>
	<!--/row-->
</div>
<!--/span-->
</div>
<!--/row-->

<hr>
