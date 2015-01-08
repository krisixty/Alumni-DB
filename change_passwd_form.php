<?php
$pass_sel= "selected";
$pg_content = 'change_password_form';
session_start();
require_once('alumni_includes.php');
require_once('pagecontents.php');
do_html_header('');
check_valid_user();
alumniMainContent();
do_html_footer();
?>