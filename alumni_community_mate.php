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


$aid = $_POST['AID'];

$result_alumni_mate=$conn->query("SELECT * FROM graduate_data WHERE AID='$aid'");
$sor=mysqli_fetch_array($result_alumni_mate);

	//PERSONAL DATA VARIABLES
	$verification = $sor['verification'];
	$fname = $sor['fname'];
	$gname = $sor['gname'];
	$grad_faculty = $sor['grad_faculty'];
	$grad_year = $sor['grad_year'];

	//SURVEY VARIABLES
	$workplace = $sor['workplace'];
	$position = $sor['position'];
	$title = $sor['title'];
	$other_work = $sor['other_work'];
	$awards = $sor['awards'];

	//E-mail
	$mate_user = $sor['username'];
	$result_email=$conn->query("SELECT email FROM user WHERE username='$mate_user'");
	$sor=mysqli_fetch_array($result_email);
	$email=$sor['email'];
	
	
	//SURVEY DATA from SURVEY		
	$result_survey = $conn->query("SELECT * FROM survey WHERE AID='$aid'");	
	$sor=mysqli_fetch_array($result_survey);
	
		if ($result_survey->num_rows>0) //vizsgálja, hogy kitöltötte-e már a surveyt
			{
				$workplace=$sor['workplace'];
				$position=$sor['position'];
				$title=$sor['title'];
				$other_work=$sor['other_work'];
				$awards=$sor['awards'];
			$surveyFill = true;
			} 
		else
			{
			$surveyFill = false;
			}
	
	mainContentDivOpen();
	
	contentAlumniMate();

		//contentAlumniCommunity();
			
	mainContentDivClose();

do_html_footer();
?>