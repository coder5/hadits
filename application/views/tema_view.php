<div class="span10">
	<div class="hero-unit">
		<h1><?php echo $imam?></h1>
		<h2>
			Kitab <?php //echo $kitab->Kitab_Indonesia ?> Bab: <?php echo $bab->Bab_Indonesia ?> 
		</h2>
		<?php
		$i = 1;
		foreach($hadits as $isi_hadits) {
			echo '<p>'. $i++ ." ". $isi_hadits->Tema_Indonesia.'<a class="btn"  href="'.site_url() .'/manual/hadits/'. $imam .'/'. $isi_hadits->NoHdt .'/">View Detail</a></p>';
		}
		?>
		<p>
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
