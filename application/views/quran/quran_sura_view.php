<div class="col-md-10">
	<h2>Pencarian Quran</h2>
	<hr>
	<div>
		<?php
		$i = 0;
		foreach ( $sura->result_array () as $quran ) {
			$i ++;
			$docid = $quran ['sura_id'];
			?>
			<article>
			<h3 class="panel-title"><?php echo $i;?>. <?php echo $quran ['ayah_text']?>
						</h3>
						<div >
							<?php echo '<p class="arabic">' . $quran["arab_text"] . '</p><br/>'; ?>
						</div>
				<?php
			
			?>
			<a href="#haditsModal<?php echo $i; ?>" role="button"
				class="btn btn-default" data-toggle="modal">View Details</a> <a
				href="#saveNotes" role="button" class="btn btn-primary">Save</a> <br />
			<br />
		</article>
		<?php } ?>
		</div>

	<div id="saveNotes" class="modal hide fade"></div>
	<div class="col-md6"></div>
	<!--/row-->
</div>
<!--/span-->
</div>
<!--/row-->
<hr>
