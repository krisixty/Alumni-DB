<?php
 require_once('alumni_includes.php');
 session_start();
 do_html_header('');
 check_valid_user();
 display_password_form();
 do_html_footer();
?>