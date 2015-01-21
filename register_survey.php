<?php
session_start();
//require_once('pagecontents.php');
require_once('alumni_includes.php');

do_html_header('');
check_valid_user();

$username=$_SESSION['valid_user'];

//Survey posts goes here
	include 'survey_questions.php';
	include 'survey_posts.php';


	
$conn = db_connect();

//lekérdezi az AID-t és verificationt a graduate_data táblából
	$result=$conn->query("SELECT AID FROM graduate_data WHERE username='$username'");
	$sor=mysqli_fetch_array($result);
	$aid=$sor['AID'];
	
	$result_survey = $conn->query("SELECT * FROM survey WHERE AID='$aid'");	
	$sor=mysqli_fetch_array($result_survey);	

if ($result_survey->num_rows>0) 
	{
	$update_survey=$conn->query
	("UPDATE survey SET licensing='$licensing', licensing_type='$licensing_type', licensing_exp='$licensing_exp', employment_country='$employment_country', after_graduation='$after_graduation', workplace='$workplace', position='$position',  title='$title', other_work='$other_work', awards='$awards', contribute='$contribute', opinion='$opinion', comment='$comment', after_phys='$after_phys', wait='$wait', med_y_n='$med_y_n', grad_place='$grad_place', grad_yr_germ='$grad_yr_germ' WHERE AID='$aid'");
	header("Location:survey.php" );
	}
else
	{
	$insert_survey=$conn->query("INSERT INTO survey (AID, licensing, licensing_type, licensing_exp, employment_country, after_graduation, workplace, position, title, other_work, awards, contribute, opinion, comment, after_phys) VALUES ('$aid', '$licensing', '$licensing_type', '$licensing_exp', '$employment_country', '$after_graduation', '$workplace', '$position', '$title', '$other_work', '$awards', '$contribute', '$opinion', '$comment', '$after_phys', '$wait', '$med_y_n', '$grad_place', '$grad_yr_germ')");
	header("Location:survey.php" );
	}

?>