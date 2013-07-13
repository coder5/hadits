<!-- only show kitab -->
<div class="span10">
	<div class="hero-unit">
		<h1>
			Kitab
			<?php echo $imam?>
		</h1>
		<?php
		$i = 1;
		foreach($kitab as $isi_kitab) {
			echo '<p><a href="'.site_url().'manual/bab/'.$imam.'/'.$isi_kitab->kitab_imam_id.'">'.$i++." ".$isi_kitab->kitab_indonesia."</a></p>";
		}
		?>
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
