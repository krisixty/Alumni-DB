<?php   
$ind_sel="selected";
$pg_content="index";
include 'display_alumni4_fns.php';
require_once 'pagecontents.php';
do_html_header('');
?>
<div class="grid-container">
		<div class="grid-12">
		<?php contentIndex(); ?>
		</div>
</div>	


<?php
do_html_footer();
?>