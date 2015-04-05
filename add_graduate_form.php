<?php
session_start();
$pg_content = 'add_graduate_form';
require_once('alumni_includes.php');
require_once('pagecontents.php');

do_html_admin_header('');
check_valid_officer_user();
	display_login2_message();
	//mainContentDivOpen();
	adminMainPage();
		add_graduate_form();
	//mainContentDivClose();
do_html_footer();
?>