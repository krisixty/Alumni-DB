<?php
session_start();
//require_once('pagecontents.php');
require_once('alumni_includes.php');

//do_html_header('');
check_valid_user();
$username=$_SESSION['valid_user'];

//Day One
$welcome_reception = $_POST['welcome_reception'];
$sightseeing = $_POST['sightseeing'];
$dinner = $_POST['dinner'];

	
	
	
	if(isset($welcome_reception) || ($sightseeing) || ($dinner))  {
		$dayOneFee = 20;
		}	
	else {
		$dayOneFee = 0;
		}	 


//Day Two 
$presentations = $_POST['presentations'];
$students_meet = $_POST['students_meet'];
$cme_ws = $_POST['cme_ws'];
$gala_dinner = $_POST['gala_dinner'];

	$dayOneFee = 60*($welcome_reception + $sightseeing + $dinner);

//Day Three
$picnic = $_POST['picnic'];

//if not in the first 100 alumni or not graduated just partially studied
echo 'Total fee for day one: '.$dayOneFee.' EUR<br>';
echo 'Total fee for day two: '.$dayTwoFee.' EUR<br>';
echo 'Total fee for day three: '.$dayThreeFee.' EUR<br>';
echo 'Total fee calculated: '.$totalFee.' EUR';

$conn = db_connect();

$result=$conn->query("SELECT AID FROM graduate_data WHERE username='$username'");
	$sor=mysqli_fetch_array($result);
	$aid=$sor['AID'];


$insert_reunion_reg=$conn->query("INSERT INTO reunion_registration (AID, welcome_reception, sightseeing, dinner, presentations, students_meet, cme_ws, gala_dinner, picnic, dayOneFee, dayTwoFee, dayThreeFee, totalFee) VALUES ('$aid', '$welcome_reception', '$sightseeing', '$dinner', '$presentations', '$cme_ws', '$students_meet', '$gala_dinner', '$picnic', '$dayOneFee', '$dayTwoFee', '$dayThreeFee', '$totalFee')");