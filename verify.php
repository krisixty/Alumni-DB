<?php
require_once('alumni_includes.php');
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
		$update_graduate_verification=$conn->query
		("UPDATE graduate_data SET verification='$verification' WHERE AID='$aid'");
		echo '<p class="main">Data updated'.'</p>'.'<p class="main">'.'<a href="graduates_registered.php">OK</a>'.'</p>';
do_html_footer();
?>





