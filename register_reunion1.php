<?php
session_start();
require_once('pagecontents.php');
require_once('alumni_includes.php');
do_html_header('');
check_valid_user();

$username=$_SESSION['valid_user'];

//Day One
$welcome_reception = $_POST['welcome_reception'];
$sightseeing = $_POST['sightseeing'];
$dinner = $_POST['dinner'];


//Day Two 
$presentations = $_POST['presentations'];
$students_meet = $_POST['students_meet'];
$cme_ws = $_POST['cme_ws'];
$gala_dinner = $_POST['gala_dinner'];

//Day Three
$picnic = $_POST['picnic'];
$acknowledge = $_POST['acknowledge'];
	
$dayOneFee = 0;	
$dayTwoFee = 0;
$dayThreeFee = 0; 
$regFee = 0;
	
if (!$acknowledge){
	mainContentDivOpen();
		?><h3>Registration Failed</h3>
		<p>You must tick the acknowledgement.</p><?php
	mainContentDivClose();	
do_html_footer();
	exit;
}	
	
	isNotGraduated();
	freePlaces();
	
	if (($notGraduated == true) || ($freePlaces == 0)) {
	
		if(isset($welcome_reception) || ($sightseeing) || ($dinner))  {
			$dayOneFee = 34;
			}	
		else {
			$dayOneFee = 0;
			}	
		
		if(isset($presentations) || ($students_meet) || ($cme_ws) || ($gala_dinner))  {
			$dayTwoFee = 90;
			}	
		else {
			$dayTwoFee = 0;
			}
		
		if(isset($picnic))  {
			$dayThreeFee = 14;
			}	
		else {
			$dayThreeFee = 0;
			}
		
		$regFee = 30;	
	}
	$totalFee = $dayOneFee+$dayTwoFee+$dayThreeFee+$regFee;
	

	mainContentDivOpen();
	?><h3>Registered</h3><?php
	
		if ((!$welcome_reception) && (!$sightseeing) && (!$dinner) && (!$presentations) && (!$students_meet) && (!$cme_ws) && (!$gala_dinner) && (!$picnic)) {
			echo 'You have not checked any program!';
			mainContentDivClose();	
			do_html_footer();
			exit;
		}
		
		$conn = db_connect();
		$result=$conn->query("SELECT AID FROM graduate_data WHERE username='$username'");
			$sor=mysqli_fetch_array($result);
			$aid=$sor['AID'];

		$insert_reunion_reg=$conn->query("INSERT INTO reunion_registration (AID, welcome_reception, sightseeing, dinner, presentations, students_meet, cme_ws, gala_dinner, picnic, acknowledge, dayOneFee, dayTwoFee, dayThreeFee, regFee, totalFee) VALUES ('$aid', '$welcome_reception', '$sightseeing', '$dinner', '$presentations', '$cme_ws', '$students_meet', '$gala_dinner', '$picnic', '$acknowledge', '$dayOneFee', '$dayTwoFee', '$dayThreeFee', '$regFee', '$totalFee')");

		/*
			if (!$insert_reunion_reg)
				{
				throw new Exception('Could not register you in database. Please try again later.');
				}
				try
					{
					send_alumni_email($username);
					}
					catch (Exception $e)
					{
					echo 'Confirmation email could not be sent. Please try again later.';
					do_html_footer();
					}*/
		
		include 'reunion_regstatus.php';	
		echo 'Thank you for your registration for Reunion Weekend 2015!<br><br>';
	
	mainContentDivClose();	
do_html_footer();	

