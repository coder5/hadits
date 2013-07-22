<div class="span10">
	<div class="hero-unit">
		<h1><?php echo $imam?></h1>
		<h2>
			Kitab <?php //echo $kitab->Kitab_Indonesia ?> Bab: <?php echo $bab->bab_indonesia ?> 
		</h2>
		<?php
		$i = 1;
		echo " <code>Took ".$_SESSION['query_exec_time']. ' sec</code>';
		foreach($hadits as $isi_hadits) {
			echo '<p>'. $i++ ." ". $isi_hadits->c3tema.'<a class="btn"  href="'.site_url() .'manual/hadits/'. $imam .'/'. $isi_hadits->c2no_hdt .'/">View Detail</a></p>';
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
