<div class="span10">
	<div class="hero-unit">
		<h1>Pencarian Hadits</h1>
		<?php
		echo '<p class="text-success">Anda Mencari Keyword = "' . $terms . '"</p>';
		//print_r($show);exit;
		//echo "db use". use_db();
		echo "<p class='text-error'>Total Menemukan " . $show->num_rows(). " Hadits</p>";
		echo "<code> Took ".$_SESSION['query_exec_time']. ' sec</code>';
		?>
		<hr>
		<ol>
		<?php
		$i =1;
		foreach ($show->result_array() as $had) {
			$i++;
			//echo $had->Isi_Arab. "<br/><br/>";
			$highlite_string = highlightTerms($had[field("tema")], $terms);
			?>
			<li>
		<div>
			<div>
				<?php echo '<p class="arabic"><b>' . highlightTerms($had[field("isi_arab")], $terms) . '</b><br/>'; ?>
			</div>
			<div>
				<?php echo '' . $highlite_string . '  
			<span class="label label-inverse">HR ' . imam_nama($had[field("imam_id")]) .
			' No.' . $had[field("no_hdt")] . '</span>&nbsp; &nbsp;'.
			'<a href="#haditsModal'.$i.'" role="button" class="btn" data-toggle="modal">View Details</a>'.'<br/><br/>'; ?>
				<?php
				// <a href="'. site_url().'manual/hadits/'.imam_id($had[field("imam_id")])."/".$had[field("no_hdt")].'" class="btn btn-small ">'. 'View Detail &raquo;' .'</a>'
				//              echo '<blockquote><small>HR ' . imam_nama($had[field("imam_id")]) .
//             ' No.' . $had[field("no_hdt")] . '</small></blockquote>&nbsp; &nbsp;<a href="'. site_url().'manual/hadits/'.imam_id($had[field("imam_id")])."/".$had[field("no_hdt")].'" class="btn btn-small ">'. 'View Detail &raquo;' .'</a>'  .'<br/><br/>'; ?>
			</div>
		</div>
		</li>
		<hr />
		<div id="haditsModal<?php echo $i;?>" class="modal hide fade"
			tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
			aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-hidden="true">�</button>
				<h3 id="myModalLabel">Kitab</h3>
				<h3 id="myModalLabel">Bab</h3>
			</div>
			<div class="modal-body">
				<p>
					<?php echo highlightTerms($had[field("isi_indonesia")], $terms) .'<span class="label label-inverse">HR ' . imam_nama($had[field("imam_id")]) .
			' No.' . $had[field("no_hdt")] . '</span>'; ?>
				</p>
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
				<button class="btn btn-primary">Save changes</button>
			</div>
		</div>
		<?php } ?>
		</ol>
		<div class="span6"></div>
		<!--/span-->
	</div>
	<!--/row-->
</div>
<!--/span-->
</div>
<!--/row-->

<hr>
