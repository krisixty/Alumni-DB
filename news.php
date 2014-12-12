<?php
$pg_content = 'news';
session_start();
require_once('alumni_includes.php');
require_once('pagecontents.php');

do_html_header('');
check_valid_user();
display_user_menu();
alumni_body();
do_html_footer();
?>