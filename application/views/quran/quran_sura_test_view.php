<div class="col-md-10">
	<h2>Pencarian Quran</h2>
	<hr>
	<div>
		<?php
		$i = 0;
		foreach ( $sura->result_array () as $quran ) {
			$i ++;
			$docid = $quran ['sura'];
			?>
			<article>
				<div>
					<?php echo '<p class="arabic">' . $quran["text"] . '</p>'; ?>
				</div>
				<?php
			
			?>
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
