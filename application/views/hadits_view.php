<div class="span10">
	<div class="hero-unit">
		<h1><?php echo $imam?></h1>
		<h2>
			Kitab <?php //echo $kitab->Kitab_Indonesia ?> Bab: <?php //echo $bab->Bab_Indonesia ?> 
		</h2>
		<?php
		$i = 1;
			echo '<p>'.$hadits->isi_indonesia. '  <span class="label label-inverse">HR ' . imam_nama($hadits->imam_id) . ' No.' . $hadits->no_hdt . "</span></p>";
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
