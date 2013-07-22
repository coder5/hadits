<div class="span10">
	<div class="hero-unit">
		<h1><?php echo $imam?></h1>
		<h2>
			 Kitab: 
			 <a class="btn btn-large btn-primary"> <?php echo $kitab->kitab_indonesia ?></a> 
		</h2>
		<h2>Bab :</h2>
		<ol>
		<?php
		last_kitab($kitab->kitab_indonesia);
		$i = 1;
		foreach($bab as $isi_bab) {
			echo '<li><a href="'.site_url(). 'manual/tema/'.$imam.'/'.$isi_bab->bab_imam_id.'">'.$isi_bab->bab_indonesia."</a></li>";
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
