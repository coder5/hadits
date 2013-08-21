<div class="span10">
	<div class="hero-unit">
		<h2>Bab <?php echo ucfirst(imam_nama($imam));?></h2>
		<h3 class="text-success">
			 Kitab <?php echo $kitab->kitab_indonesia ?> 
		</h3>
		<h3 class="text-info">Judul Bab</h3>
		<ol>
		<?php
		last_kitab($kitab->kitab_indonesia);
		$i = 1;
		foreach($bab as $isi_bab) {
			echo '<li><a href="'.site_url(). 'tema/'.$imam.'/'.$isi_bab->bab_imam_id.'">'.$isi_bab->bab_indonesia."</a></li>";
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
