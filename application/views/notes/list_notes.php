<!-- only show kitab -->
<div class="span10">
	<div class="hero-unit">
		<h1>
			Notes
			<?php //echo $imam?>
		</h1>
		<ol>
		<?php
		$i = 1;
		foreach($lists->result() as $notes) {
			echo '<li>'.$notes->notes.'</li>';
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
