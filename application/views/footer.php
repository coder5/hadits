<?php
echo debug();
?>

      <footer>
        <p>&copy; Company 2013</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.10.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/keyboard-arabic.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-transition.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-alert.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-modal.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-tab.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-popover.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-button.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-collapse.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-carousel.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-typeahead.js"></script>
<script type="text/javascript">

$(document).ready(function() {
    $("#btnSubmit").click(function(){
        alert("Jquery Works");
    }); 
    $('#test').click(function() {
    	alert( "testss" );
//     	$(this).find('.content').slideToggle();
    });
    $('.save-notes22').click(function() {
        var docid = $('#docid').val();
        $(this).find("#docid").each(function(){
            alert(docid + " adalah " + $(this).val());
       });
		alert("test no" + docid );
    });
});
// $('.save-notes').click(function() {
// 	var getId = $(this).find("input[name='docid']");
// 	var modal = $(this).find(".modal");
// 	var docid2 = modal.find("input[name='docid']");
// 	$(".modal").each(function(){
// 	var docid = $("input[name^='docid']",this).val();
// 	alert(docid);
// 	});
// 	$(".modal").each(function(){
// 	    $("input[name='docid']", this).each(function() {
//             alert(docid + " adalah " + $(this).val());
// 	    });
// 	});
// });

// $('.buttons').click(function() {
// 	$("div").each(function(){
// 	    $("input[name='te2']", this).each(function() {
// 	       alert($(this).val()); 
// 	    });
// 	    $("select option",this).each(function(){
// 	        // alert($(this).val());
// 	    });
// 	});
// });
function saveNotes(docidPost){
	var docids = $("input[name='docid" + docidPost + "']").val();
	var pIsiIndo = $(".isi-indo"+ docidPost).text();
	var notesPost = $('textarea#notes' + docidPost).val();
	$.post("<?php echo site_url();?>save/save_notes", { docid: docidPost, notes: notesPost } );
	alert("dapat doc" + docids + "notes "+ notesPost);
}
function myFunction()
{
alert("I am an alert box!");
}
</script>
  </body>
</html>



