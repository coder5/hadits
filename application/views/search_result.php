
<div class="span10">
    <div class="hero-unit">
        <h1>Pencarian Hadits</h1>
        <?php
        echo '<p>Anda mencari = ' . $terms . '</p>';
        //print_r($show);exit;
        //echo "db use". use_db();
        echo "total " . $show->num_rows();
		echo "<code> Took ".$_SESSION['query_exec_time']. ' sec</code>';
        ?>
		<hr>
        <?php
        foreach ($show->result_array() as $had) {
            //echo $had->Isi_Arab. "<br/><br/>";
            $highlite_string = highlightTerms($had[field("tema")], $terms);
            ?>
            <div>
            <div>
            <?php echo '<p class="arabic"><b>' . highlightTerms($had[field("isi_arab")], $terms) . '</b><br/>'; ?>
            </div>
            <div>
            <?php echo '' . $highlite_string . '  <span class="label label-inverse">HR ' . imam_nama($had[field("imam_id")]) . 
            ' No.' . $had[field("no_hdt")] . '</span>&nbsp; &nbsp;<a href="'. site_url().'manual/hadits/'.imam_id($had[field("imam_id")])."/".$had[field("no_hdt")].'" class="btn btn-small ">'. 'View Detail &raquo;' .'</a>'  .'<br/><br/>'; ?>
            </div>
            </div>
            <hr>
        <?php } ?>
        <div class="span6"></div>
        <!--/span-->
    </div>
    <!--/row-->
</div>
<!--/span-->
</div>
<!--/row-->

<hr>
