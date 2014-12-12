<?php
ob_start(); //Turn on output buffering
$pg_content = 'yourcontacts';
require_once('alumni_includes.php');
session_start();

check_valid_user();
$username=$_SESSION['valid_user'];

$conn = db_connect();
$result=$conn->query("SELECT AID FROM graduate_data WHERE username='$username'");
$sor=mysqli_fetch_array($result);
$aid=$sor['AID'];

$result_contacts = $conn->query("SELECT * FROM graduate_contacts WHERE AID='$aid'");	
$sor=mysqli_fetch_array($result_contacts);
$permadd=$sor['permadd'];
$add_pc=$sor['add_pc'];
$add_city=$sor['add_city'];
$add_country=$sor['add_country'];
$phone=$sor['phone'];
/*
if ($result_contacts->num_rows>0) //vizsgálja, hogy adott-e már be jelentkezést
	{
	//$pg_content = 'yourcontacts';
	echo 'yeee';
	//$contactsFill = 'yes';
	} 
else
	{
	$pg_content = 'yourcontacts';
	//echo 'noo';
	//$contactsFill = 'no';
	}
*/
require_once('pagecontents.php');
do_html_header('');
display_user_menu();
alumni_body();
do_html_footer();
?>