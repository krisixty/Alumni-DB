<?php
ob_start(); //Turn on output buffering
$surv_sel = 'selected';
$pg_content = 'survey_edit';
require_once('alumni_includes.php');
session_start();

check_valid_user();
$username=$_SESSION['valid_user'];

$conn = db_connect();
$result=$conn->query("SELECT AID FROM graduate_data WHERE username='$username'");
$sor=mysqli_fetch_array($result);
$aid=$sor['AID'];

$result_survey = $conn->query("SELECT * FROM survey WHERE AID='$aid'");	
$sor=mysqli_fetch_array($result_survey);

	$licensing=$sor['licensing'];
	$licensing_type=$sor['licensing_type'];
	$licensing_exp=$sor['licensing_exp'];
	$employment_country=$sor['employment_country'];
	$after_graduation=$sor['after_graduation'];
	$workplace=$sor['workplace'];
	$position=$sor['position'];
	$title=$sor['title'];
	$other_work=$sor['other_work'];
	$awards=$sor['awards'];
	$contribute=$sor['contribute'];
	$opinion=$sor['opinion'];
	$comment=$sor['comment'];
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
alumniMainContent();
do_html_footer();
?>