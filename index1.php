<?php
$ind_sel = 'selected';
$pg_content = 'index1';
session_start();
require_once('alumni_includes.php');
require_once('pagecontents.php');
do_html_header('');
check_valid_user();
alumniMainContent();
do_html_footer();
?>