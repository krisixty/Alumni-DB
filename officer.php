<?php
ob_start(); //Turn on output buffering
$pg_content = 'officer';
require_once('alumni_includes.php');
session_start();

@$username=$_POST['username']; //undefined index hibát ad 
@$passwd=$_POST['passwd'];

if (isset($_POST['username'])&&($_POST['passwd'])) //bejelentkezés próba
/*if ($username && $passwd)*/
	{
	try
		{
		login2($username, $passwd); // ha benne van az adatbázisban regisztráljs a user id-t
		$_SESSION['valid_user']=$username;
		} 
	catch (Exception $e)	
		{
		do_html_admin_header('Problem:'); //sikertelen bejelentkezés
		?><p class="text"><?php
		echo 'You could not be logged in. You must be logged in to view this page.';
		do_html_url('login2.php', 'Login');
		do_html_footer();
		exit;
		}
	} 

	

	
require_once('pagecontents.php');

do_html_admin_header('');
check_valid_officer_user();
	display_login2_message();
	//mainContentDivOpen();
		adminMainPage();
	//mainContentDivClose();
do_html_footer();

?>
