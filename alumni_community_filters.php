<?php
$comm_sel = "selected";
$pg_content = 'alumni_community';
session_start();
require_once('alumni_includes.php');
require_once('pagecontents.php');

do_html_header('');
check_valid_user();

$conn = db_connect();
$graduates=$conn->query("SELECT * FROM graduate_data ORDER BY fname");


	mainContentDivOpen();

		contentAlumniCommunity();
		
			display_filter_form();
			
	mainContentDivClose();

do_html_footer();
?>