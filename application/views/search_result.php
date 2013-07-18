
<div class="span10">
    <div class="hero-unit">
        <h1>Pencarian Hadits</h1>
        <?php
        echo '<p>Anda mencari = ' . $terms . '</p>';
        //print_r($show);exit;
        //echo "db use". use_db();
        echo "total " . $show->num_rows();
		echo " Took ".$_SESSION['query_exec_time']. ' sec';
        ?>
		<hr>
        <?php
        foreach ($show->result() as $had) {
            //echo $had->Isi_Arab. "<br/><br/>";
            $highlite_string = highlightTerms($had->tema, $terms);
            ?>
            <div>
            <div>
            <?php echo '<p><b>' . highlightTerms($had->isi_arab, $terms) . '</b><br/>'; ?>
            </div>
            <div>
            <?php echo '' . $highlite_string . '  <span class="label label-inverse">HR ' . imam_nama($had->imam_id) . 
            ' No.' . $had->no_hdt . '</span>&nbsp; &nbsp;<a href="'. site_url().'manual/hadits/'.$had->imam_id."/".$had->no_hdt.'" class="btn btn-small ">'. 'View Detail' .'</a>'  .'<br/><br/>'; ?>
            </div>
            </div>
            <hr>
        <?php } ?>
        <p>
            <a class="btn" href="#">View details &raquo;</a>
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
