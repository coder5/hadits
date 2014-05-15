<div class="span10">
	<div class="hero-unit">
		<h1><?php echo $imam?></h1>
		<h2>
			Kitab <?php //echo $kitab->Kitab_Indonesia ?> Bab: <?php //echo $bab->Bab_Indonesia ?> 
		</h2>
		<?php
			echo "<code> Took ".$_SESSION['query_exec_time']. ' sec</code><br/>';
			echo '<p class="arabic">'.$hadits->c4isi_arab.'</p>';
			echo '<p>'.$hadits->c5isi_indonesia. '  <span class="label label-inverse">HR ' . imam_nama($hadits->c1imam_id) . ' No.' . $hadits->c2no_hdt . "</span></p>";
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
