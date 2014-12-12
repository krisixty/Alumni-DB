<?php
$pg_content = 'main';
require_once('alumni_includes.php');
require_once('pagecontents.php');
do_html_header('');
display_user_menu();
alumni_body();
//display_registration_form();
do_html_footer();
?>