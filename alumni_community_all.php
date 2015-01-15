<?php
$comm_sel = "selected";
$pg_content = 'alumni_community';
session_start();
require_once('alumni_includes.php');
require_once('pagecontents.php');

do_html_header('');
check_valid_user();

$conn = db_connect();
$graduates=$conn->query("SELECT * FROM graduate_data ORDER BY fname");


	mainContentDivOpen();

		contentAlumniCommunity();
		
			?><h4>All Registered Graduates</h4><p><?php
			while($sor=mysqli_fetch_array($graduates))
				{
					print $sor['fname'].' ';
					print $sor['gname'].' - ';
					print $sor['grad_faculty'].' ' ;
					print $sor['grad_year'].'<br>';
				}
			?></p><?php
	mainContentDivClose();

do_html_footer();
?>