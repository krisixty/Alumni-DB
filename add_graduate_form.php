<?php
$pg_content = 'add_graduate_form';
session_start();
require_once('alumni_includes.php');
require_once('pagecontents.php');

do_html_header('');
check_valid_officer_user();
	mainContentDivOpen();
	adminMainPage();
		add_graduate_form();
	mainContentDivClose();
do_html_footer();
?>