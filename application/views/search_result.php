
<div class="span10">
    <div class="hero-unit">
        <h1>Pencarian Hadits</h1>
        <?php
        echo '<p>Anda mencari = ' . $terms . '</p>';
        echo "total " . $show->num_rows();

        ?>

        <?php
        foreach ($show->result() as $had) {
            //echo $had->Isi_Arab. "<br/><br/>";
            $highlite_string = highlightTerms($had->Isi_Indonesia, $terms);
            echo '<div>';
            echo '<div>';
            echo '<p><b>' . highlightTerms($had->Isi_Arab, $terms) . '</b><br/>';
            echo '</div>';
            echo '<div>';
            echo '' . $highlite_string . '  <span class="label label-inverse">HR ' . $had->longNama . ' No.' . $had->NoHdt . '</span><br/><br/>';
            echo '</div>';
            echo '</div>';
        }
        ?>
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
