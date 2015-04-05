<?php
session_start();
$lout_sel = 'selected';
$pg_content = 'logout2';
require_once('alumni_includes.php'); 
	$old_user = $_SESSION['valid_user'];
	// ellenőrzi, h be volt-e a user jelentkezve
	unset($_SESSION['valid_user']);
	$result_dest = session_destroy();
	
do_html_admin_header('');
alumniAdminMainContent();
do_html_footer();
