<?php
ob_start(); //Turn on output buffering
$pg_content = 'survey';
require_once('alumni_includes.php');
session_start();

check_valid_user();
$username=$_SESSION['valid_user'];

$conn = db_connect();
$result = $conn->query("SELECT * FROM applicants WHERE username='$username'");

$result=$conn->query("SELECT AID FROM graduate_data WHERE username='$username'");
	$sor=mysqli_fetch_array($result);
	$aid=$sor['AID'];	
	
	//SURVEY DATA from SURVEY
	$result_survey = $conn->query("SELECT * FROM survey WHERE AID='$aid'");	
	$sor=mysqli_fetch_array($result_survey);
	
		if ($result_survey->num_rows>0) //vizsgálja, hogy kitöltötte-e már a kérdőívet
			{
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
			//echo 'yeee';
			$surveyFill = true;
			$pg_content = 'survey_filled';
			} 
		else
			{
			//echo 'noo';
			$surveyFill = false;
			}
	
require_once('pagecontents.php');
do_html_header('');
display_user_menu();
alumni_body();
do_html_footer();
?>