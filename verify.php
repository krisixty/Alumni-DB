<?php
session_start();
require_once('alumni_includes.php');
require_once('pagecontents.php');
$pg_content = 'verified';
//session_start();
//do_html_header('');
//check_valid_user();
//display_officer_menu();
//$username=$_SESSION['valid_user'];



$verification=$_POST['verification'];
$aid=$_POST['AID']; 
$conn = db_connect();
$result=$conn->query("SELECT * FROM graduate_data WHERE AID='$aid'");

do_html_header('');
check_valid_officer_user();

		$update_graduate_verification=$conn->query
		("UPDATE graduate_data SET verification='$verification' WHERE AID='$aid'");
		
		if(!$update_graduate_verification)
		{
		throw new Exception ('Could not connect to database server.');
		}
		else
		{
		alumniMainContent();
		}
			
do_html_footer();
?>





