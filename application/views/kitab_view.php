<!-- only show kitab -->
<div class="col-xs-13 col-sm-10">
	<div class="jumbotron">
		<h2>Kitab <?php echo ucfirst(imam_nama($imam));?>
		</h2>
		<ol>
		<?php
		$i = 1;
		foreach($kitab as $isi_kitab) {
			
			echo '<li><a href="'.site_url().'bab/'.$imam.'/'.$isi_kitab->kitab_imam_id.'">'.$isi_kitab->kitab_indonesia."</a></li>";
		}
		?>
		</ol>
		<p>
			<a class="btn" href="#">View details &raquo;</a>
		</p>
		<div class="col-md-6"></div><!--/span-->
	</div><!--/row-->
</div><!--/span-->
</div><!--/row-->

<hr>
