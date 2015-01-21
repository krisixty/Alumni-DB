<?php
ob_start(); //Turn on output buffering
$surv_sel = 'selected';
$pg_content = 'survey_edit';
require_once('alumni_includes.php');
session_start();

check_valid_user();
$username=$_SESSION['valid_user'];

$conn = db_connect();

$result_faculty = $conn->query("SELECT grad_faculty FROM graduate_data WHERE username='$username'");
$sor=mysqli_fetch_array($result_faculty);
	
	//ENLGISH OR GERMAN PROGRAM SURVEY
	$grad_faculty = $sor['grad_faculty'];

	if ($grad_faculty == "Medicine, 2-year German Program") {
		$survey_type = 'german';
	}
	else {
		$survey_type = 'english';
	}


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
*/		if ($result_survey->num_rows>0) //vizsgálja, hogy kitöltötte-e már a kérdőívet
			{

				$workplace = $sor['workplace'];
				$position = $sor['position'];
				$title = $sor['title'];
				$other_work = $sor['other_work'];
				$awards = $sor['awards'];
				$contribute = $sor['contribute'];
				$opinion = $sor['opinion'];
				$comment = $sor['comment'];
				
				$licensing_exp = $sor['licensing_exp'];
				
				if ($survey_type == 'english') {
					$licensing = $sor['licensing'];
					$licensing_type = $sor['licensing_type'];
					$employment_country = $sor['employment_country'];
					$after_graduation = $sor['after_graduation'];
				}
				
				if ($survey_type == 'german') {
					$after_phys = $sor['after_phys'];
					$wait = $sor['wait'];
					$med_y_n = $sor['med_y_n'];
					$grad_place = $sor['grad_place'];
					$grad_yr_germ = $sor['grad_yr_germ'];
				}
				
			} 
			
require_once('pagecontents.php');
do_html_header('');
alumniMainContent();
do_html_footer();
?>