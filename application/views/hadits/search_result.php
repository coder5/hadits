<div class="col-md-10">
	<h2>Pencarian Hadits</h2>
		<?php
		echo '<div class="alert alert-success">Anda Mencari Keyword = "' . $terms . '"</div>';
		// print_r($show);exit;
		// echo "db use". use_db();
		echo '<div class="alert alert-info">Total Menemukan ' . $show->num_rows() . ' Hadits</div>';
		echo "<code> Took " . $_SESSION['query_exec_time'] . ' sec</code>';
		?>
		<hr>
	<ul class="list-unstyled">
		<?php
		$i = 0;
		foreach ($show->result_array() as $had) {
			$i ++;
			$docid = $had['docid'];
			// echo $had->Isi_Arab. "<br/><br/>";
			$highlite_string = highlightTerms($had[field("tema")], $terms);
			?>
			<li>
			<article>
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title"><?php echo $i;?>. <a
								href="<?php echo  site_url () . 'tema/' . imam_id ( $had [field ( "imam_id" )] ) . '/' . $had [field ( "bab_imam_id" )] ;?>"
								class="tooltip-bab"
								title="<?php echo  $had ['bab_indonesia'] ?>">Bab <?php echo $had ['bab_indonesia']?></a>
						</h3>
					</div>
					<div class="panel-body">
						<div>
							<?php echo '<p class="arabic"><b>' . highlightTerms($had[field("isi_arab")], $terms) . '</b><br/>'; ?>
						</div>
				<?php
			echo '<p>' . $highlite_string . '</p>  
			<span class="label label-danger">HR ' . imam_nama($had[field("imam_id")]) . ' No.<a href="#" data-toogle="tooltip" class="tooltip-docid" title="' . $had["docid"] . '">' . $had[field("no_hdt")] . '</a></span>
			<a href="' . site_url() . 'bab/' . imam_id($had[field("imam_id")]) . '/' . $had[field("kitab_imam_id")] . '" class="tooltip-kitab" title="' . $had['kitab_indonesia'] . '"><span class="label label-success label-kitab">Kitab ' . $had['kitab_indonesia'] . '</span></a>';
			
			?>
			<a href="#haditsModal<?php echo $i; ?>" role="button"
							class="btn btn-default" data-toggle="modal">View Details</a> <a
							href="#saveNotes" role="button" class="btn btn-primary">Save</a>
						<br /> <br />
					</div>
				</div>
			</article>
		</li>
		<div id="haditsModal<?php echo $i;?>" class="modal fade" tabindex="-1"
			role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"
							aria-hidden="true">x</button>
						<h3 id="myModalLabel">Hadits Details</h3>
					</div>
					<div class="modal-body">
						<h4 class="text-info">Kitab <?php echo $had['kitab_indonesia']?></h3>
							<h4 class="text-success">Bab <?php echo $had['bab_indonesia']?></h3>
								<p class="arabic">
					<?php
			echo highlightTerms($had[field("isi_arab_gundul")], $terms) . '<span class="label label-danger">HR ' . imam_nama($had[field("imam_id")]) . ' No.' . $had[field("no_hdt")] . '</span>';
			?>
				</p>
								<p class="isi-indo<?php echo $docid ?>">
					<?php
			echo highlightTerms($had[field("isi_indonesia")], $terms) . '<span class="label label-danger">HR ' . imam_nama($had[field("imam_id")]) . ' No.' . $had[field("no_hdt")] . '</span>';
			?>
				</p>
					
					</div>
					<div class="modal-footer">
						<input type="hidden" name="docid<?php echo $docid;?>" id="docid"
							value="<?php echo $had['docid']?>">
						<textarea id="notes<?php echo $docid ?>"
							placeholder="Writes Your Notes to Save"></textarea>
						<button class="btn btn-default" data-dismiss="modal"
							aria-hidden="true">Close</button>
						<button onclick="saveNotes('<?php echo $docid ?>')"
							class="btn btn-primary save-notes">Save changes</button>
					</div>
				</div>
			</div>
		</div>
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
