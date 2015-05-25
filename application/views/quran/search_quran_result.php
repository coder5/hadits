<div class="col-md-10">
	<h2>Pencarian Quran</h2>
		<?php
		echo '<div class="alert alert-success">Anda Mencari Keyword = "' . $terms . '"</div>';
		// print_r($show);exit;
		// echo "db use". use_db();
		echo '<div class="alert alert-info">Total Menemukan ' . $show->num_rows() . ' Quran</div>';
		echo "<code> Took " . $_SESSION['query_exec_time'] . ' sec</code>';
		?>
		<hr>
	<ul class="list-unstyled">
		<?php
		$i = 0;
		foreach ($show->result_array() as $quran) {
			$i ++;
			$docid = $quran['sura_id'];
			// echo $had->Isi_Arab. "<br/><br/>";
			$highlite_string = highlightTerms($quran["ayah_text"], $terms);
			?>
			<li>
			<article>
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title"><?php echo $i;?>. <?php echo $quran ['ayah_text']?>
						</h3>
					</div>
					<div class="panel-body">
						<div>
							<?php echo '<p class="arabic">' . highlightTerms($quran["arab_text"], $terms) . '</p><br/>'; ?>
						</div>
				<?php
			
			?>
			<a href="#haditsModal<?php echo $i; ?>" role="button"
							class="btn btn-default" data-toggle="modal">View Details</a> <a
							href="#saveNotes" role="button" class="btn btn-primary">Save</a>
						<br /> <br />
					</div>
				</div>
			</article>
		</li>
		
		<?php } ?>
		</ul>
	<div id="saveNotes" class="modal hide fade"></div>
	<div class="col-md6"></div>
	<!--/row-->
</div>
<!--/span-->
</div>
<!--/row-->

<hr>
