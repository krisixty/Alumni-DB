<?php
session_start();
$reun_sel = "selected";
$pg_content = "reunion_registration_family";
require_once('alumni_includes.php');
require_once('pagecontents.php');

do_html_header('');
check_valid_user();
alumniMainContent();
do_html_footer();
?>