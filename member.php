<?php
ob_start(); //Turn on output buffering
$memb_sel = 'selected';
$pg_content = 'member';
require_once('alumni_includes.php');
session_start();

@$username=$_POST['username']; //undefined index hibát ad 
@$passwd=$_POST['passwd'];

if (isset($_POST['username'])&&($_POST['passwd'])) //bejelentkezés próba
/*if ($username && $passwd)*/
	{
	try
		{
		login($username, $passwd); // ha benne van az adatbázisban regisztráljs a user id-t
		$_SESSION['valid_user']=$username;
		} 
	catch (Exception $e)	
		{
		do_html_header('Problem:'); //sikertelen bejelentkezés
		//echo 'You could not be logged in. You must be logged in to view this page.';
		do_html_url('login.php', 'Login');
		do_html_footer();
		exit;
		}
	} 
	$username=$_SESSION['valid_user'];
	$conn = db_connect();
	//lekérdezi az AID-t és verificationt a graduate_data táblából
	$result=$conn->query("SELECT * FROM graduate_data WHERE username='$username'");
	$sor=mysqli_fetch_array($result);
	$aid=$sor['AID'];
	$verification=$sor['verification'];
	
	
	$fname=$sor['fname'];
	$gname=$sor['gname'];
	$dob=$sor['dob'];
	$pob_country=$sor['pob_country'];
	$pob_city=$sor['pob_city'];
	$citizenship=$sor['citizenship'];
	$citizenship2=$sor['citizenship2'];

	$grad_faculty=$sor['grad_faculty'];
	$grad_year=$sor['grad_year'];

	//E-mail
	$result_email=$conn->query("SELECT * FROM user WHERE username='$username'");
	$sor=mysqli_fetch_array($result_email);
	$email=$sor['email'];

	
	//CONTACT DATA from GRADUATE_CONTACTS
	$result_contacts=$conn->query("SELECT * FROM graduate_contacts WHERE AID='$aid'");
	$sor=mysqli_fetch_array($result_contacts);
	
		if ($result_contacts->num_rows>0) //vizsgálja, hogy kitöltötte-e már a kapcsolatokat
			{
				$permadd=$sor['permadd'];
				$add_pc=$sor['add_pc'];
				$add_city=$sor['add_city'];
				$add_country=$sor['add_country'];
				$phone=$sor['phone'];
			//echo 'yeee';
			$contactsFill = true;
			} 
		else
			{
			//echo 'noo';
			$contactsFill = false;
			}
			
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
			echo 'noo';
			$surveyFill = false;
			}

	
require_once('pagecontents.php');

do_html_header('');
check_valid_user();
alumniMainContent();
do_html_footer();

?>
