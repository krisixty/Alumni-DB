<?php
session_start();
require_once('pagecontents.php');
require_once('alumni_includes.php');
do_html_header('');
check_valid_user();

$username=$_SESSION['valid_user'];

$family_members = $_POST['family_members'];
//Day One
$welcome_memb_o12 = $_POST['welcome_memb_o12'];
$welcome_memb_412 = $_POST['welcome_memb_412'];
$welcome_memb_u4 = $_POST['welcome_memb_u4'];

$sight_memb_o12 = $_POST['sight_memb_o12'];
$sight_memb_412 = $_POST['sight_memb_412'];
$sight_memb_u4 = $_POST['sight_memb_u4'];

$dinner_memb_o12 = $_POST['dinner_memb_o12'];
$dinner_memb_412 = $_POST['dinner_memb_412'];
$dinner_memb_u14 = $_POST['dinner_memb_u14'];
	
	//34 EUR for over 12, 17 EUR for 4-12
	//$dayOneAtt = $welcome_memb_o12 + $welcome_memb_412 + $welcome_memb_u4 + $sight_memb_o12 + $sight_memb_412 + $sight_memb_u4 + $dinner_memb_o12 + $dinner_memb_412 + $dinner_memb_u14;
	if (($welcome_memb_o12) || ($sight_memb_o12) || ($dinner_memb_o12)) {
		$over12Fee = 34 * max(array($welcome_memb_o12, $sight_memb_o12, $dinner_memb_o12)); //multiplies daily fee with maximum o12 member number
	}
	else {
		$over12Fee = 0;
	}
	
	if (($welcome_memb_412) || ($sight_memb_412) || ($dinner_memb_412)) {
		$btw412Fee = 17 * max(array($welcome_memb_412, $sight_memb_412, $dinner_memb_412)); //multiplies daily fee with maximum btw412 member number
	}
	else {
		$btw412Fee = 0;
	}
	
	$dayOneFee = $over12Fee + $btw412Fee;
	
//Day Two
$gdinner_memb_o12 = $_POST['gdinner_memb_o12'];
$gdinner_memb_412 = $_POST['gdinner_memb_412'];
$gdinner_memb_u14 = $_POST['gdinner_memb_u14'];

	//54 EUR for over 12, 27 EUR for 4-12	
	//$dayTwoAtt = $gdinner_memb_o12 + $gdinner_memb_412 + $gdinner_memb_u14;
	$dayTwoFee = 54 * $gdinner_memb_o12 + 27 * $gdinner_memb_412;

//Day Three	
$pic_memb_o12 = $_POST['pic_memb_o12'];
$pic_memb_412 = $_POST['pic_memb_412'];
$pic_memb_u14 = $_POST['pic_memb_u14'];

	//14 EUR for over 12, 7 EUR for 4-12
	//$dayThreeAtt = $pic_memb_o12 + $pic_memb_412 + $pic_memb_u14;
	$dayThreeFee = 14 * $pic_memb_o12 + 7 * $pic_memb_412;

$totalFee = $dayOneFee + $dayTwoFee + $dayThreeFee;	
	
$conn = db_connect();

$result=$conn->query("SELECT AID FROM graduate_data WHERE username='$username'");
	$sor=mysqli_fetch_array($result);
	$aid=$sor['AID'];

	//$insert_family_reg=$conn->query("INSERT INTO reunion_family (AID, family_members, welcome_memb_o12, welcome_memb_412, welcome_memb_u4, sight_memb_o12, sight_memb_412, sight_memb_u4, dinner_memb_o12, dinner_memb_412, dinner_memb_u14, gdinner_memb_o12, gdinner_memb_412, gdinner_memb_u14, pic_memb_o12, pic_memb_412, pic_memb_u14, dayOneFee, dayOneAtt, dayTwoFee, dayTwoAtt, dayThreeFee, dayThreeAtt, totalFee) VALUES ('$aid', '$family_members', '$welcome_memb_o12', '$welcome_memb_412', '$welcome_memb_u4', '$sight_memb_o12', '$sight_memb_412', '$sight_memb_u4', '$dinner_memb_o12', '$dinner_memb_412', '$dinner_memb_u14', '$gdinner_memb_o12', '$gdinner_memb_412', '$gdinner_memb_u14', '$pic_memb_o12', '$pic_memb_412', '$pic_memb_u14', '$dayOneFee', '$dayOneAtt', '$dayTwoFee', '$dayTwoAtt', '$dayThreeFee', '$dayThreeAtt', '$totalFee')");
$insert_family_reg=$conn->query("INSERT INTO reunion_family (AID, family_members, welcome_memb_o12, welcome_memb_412, welcome_memb_u4, sight_memb_o12, sight_memb_412, sight_memb_u4, dinner_memb_o12, dinner_memb_412, dinner_memb_u14, gdinner_memb_o12, gdinner_memb_412, gdinner_memb_u14, pic_memb_o12, pic_memb_412, pic_memb_u14, dayOneFee, dayTwoFee, dayThreeFee, totalFee) VALUES ('$aid', '$family_members', '$welcome_memb_o12', '$welcome_memb_412', '$welcome_memb_u4', '$sight_memb_o12', '$sight_memb_412', '$sight_memb_u4', '$dinner_memb_o12', '$dinner_memb_412', '$dinner_memb_u14', '$gdinner_memb_o12', '$gdinner_memb_412', '$gdinner_memb_u14', '$pic_memb_o12', '$pic_memb_412', '$pic_memb_u14', '$dayOneFee', '$dayTwoFee', '$dayThreeFee', '$totalFee')");

	mainContentDivOpen();
	?><h3>Registered Family Members</h3><?php
	
	
				if (!$insert_family_reg)
				{
				throw new Exception('Could not register you in database. Please try again later.');
				}
				try
					{
					include 'reunion_family_regstatus.php';	
					/*echo '<br>'.max(array($welcome_memb_o12, $sight_memb_o12, $dinner_memb_o12));
					echo '<br>'.max(array($welcome_memb_412, $sight_memb_412, $dinner_memb_412));*/
					echo 'Thank you for registering your family members for Reunion Weekend 2015!<br><br>';
					send_family_email($username);
					}
					catch (Exception $e)
					{
					echo 'Confirmation email could not be sent. Please try again later.';
					do_html_footer();
					}
	
	

	mainContentDivClose();	
do_html_footer();	
	
?>
























