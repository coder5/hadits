<div class="span10">
	<div class="hero-unit">
		<h1>
			<?php echo ucfirst($imam);?>
		</h1>
		<h2>
			Kitab
			<?php echo last_kitab() ?>
			Bab:
			<?php echo $last_bab; ?>
		</h2>
		<ol>
			<?php
			$i = 1;
			echo " <code>Took ".$_SESSION['query_exec_time']. ' sec</code>';
			foreach($hadits->result_array() as $isi_hadits) {
				$i++;
				echo '<li>'. $isi_hadits[field("tema")].
				'<a href="#haditsModal'.$i.'" role="button" class="btn" data-toggle="modal">View Details</a></li>
					<hr class="divider"/>';
				//'<a class="btn"  href="'.site_url() .'manual/hadits/'. $imam .'/'. $isi_hadits[field("no_hdt")] .'/">View Detail &raquo;</a></li>';
				?>
			<div id="haditsModal<?php echo $i;?>" class="modal hide fade"
				tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
				aria-hidden="true">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
						aria-hidden="true">x</button>
					<h3 id="myModalLabel">Kitab</h3>
					<h3 id="myModalLabel">Bab <?php echo $last_bab; ?></h3>
				</div>
				<div class="modal-body">
					<p>
						<?php echo $isi_hadits[field("isi_indonesia")] .'<span class="label label-inverse">HR ' . $imam .
			' No.' . $isi_hadits[field("no_hdt")] . '</span>'; ?>
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
