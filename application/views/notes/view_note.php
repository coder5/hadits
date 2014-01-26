<!-- only show kitab -->
<div class="col-md-9">
	<div class="jumbotron">
		<h2>
			<a href="<?php echo site_url()?>bookmark">Notes</a>
		</h2>
		<h3>
		<?php echo $note['notes'];?><i class="icon-pencil"></i>
		</h3>
		<article>
			<?php echo '<p>' . $note['tema'] . '</p>  
				<span class="label label-inverse">HR ' . imam_nama($note[field("imam_id")]) .
				' No.<abbr title="'.$note["docid"].'">' . $note[field("no_hdt")] . '</abbr></span>
				<a href="'.site_url().'bab/'.imam_id($note[field("imam_id")]) .'/'.$note[field("kitab_imam_id")] .'"><span class="label label-info label-kitab">Kitab '. $note['kitab_indonesia'] .'</span></a>
				<a href="'.site_url().'tema/'.imam_id($note[field("imam_id")]) .'/'. $note[field("bab_imam_id")] .'"><span class="label label-success label-bab">Bab '. $note['bab_indonesia']. '</span></a>';
				?>
			<a href="#haditsModal" role="button" class="btn" data-toggle="modal">View Details</a>
			<a href="#saveNotes" role="button" class="btn btn-primary">Delete</a>
			<br/><br/>
		</article>
		<div id="haditsModal" class="modal hide fade"
			tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
			aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				<h3 id="myModalLabel">Kitab</h3>
				<h3 id="myModalLabel">Bab</h3>
			</div>
			<div class="modal-body">
				<p class="arabic">
					<?php echo $note[field("isi_arab_gundul")] .'<span class="label label-inverse">HR ' . imam_nama($note[field("imam_id")]) .
			' No.' . $note[field("no_hdt")] . '</span>'; ?>
				</p>
				<p class="isi-indo">
					<?php echo $note[field("isi_indonesia")] .'<span class="label label-inverse">HR ' . imam_nama($note[field("imam_id")]) .
			' No.' . $note[field("no_hdt")] .'</span>'; ?>
				</p>
			</div>
			<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			</div>
		</div>
		<div class="span6"></div>
		<!--/span-->
	</div>
	<!--/row-->
</div>
<!--/span-->
</div>
<!--/row-->
<hr>