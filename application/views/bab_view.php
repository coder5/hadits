<div class="span10">
	<div class="hero-unit">
		<h1><?php echo $imam?></h1>
		<h2>
			 Kitab <?php echo $kitab->Kitab_Indonesia ?> 
		</h2>
		<h2>Bab :</h2>
		<?php
		$i = 1;
		foreach($bab as $isi_bab) {
			echo '<p><a href="'.site_url().'/manual/tema/'.$imam.'/'.$isi_bab->ID_Bab.'">'.$i++." ".$isi_bab->Bab_Indonesia."</a></p>";
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
