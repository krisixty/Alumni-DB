<?php

$welcome_memb_o12 = $_POST['welcome_memb_o12'];
$welcome_memb_412 = $_POST['welcome_memb_412'];
$welcome_memb_u4 = $_POST['welcome_memb_u4'];

$sight_memb_o12 = $_POST['sight_memb_o12'];
$sight_memb_412 = $_POST['sight_memb_412'];
$sight_memb_u4 = $_POST['sight_memb_u4'];

$dinner_memb_o12 = $_POST['dinner_memb_o12'];
$dinner_memb_412 = $_POST['dinner_memb_412'];
$dinner_memb_u14 = $_POST['dinner_memb_u14'];
	
	//20 EUR for over 12, 10 EUR for 4-12
	$dayOneFee = 20 * ($welcome_memb_o12 + $sight_memb_o12 + $dinner_memb_o12) + 10 * ($welcome_memb_412 + $sight_memb_412 + $dinner_memb_412);

$gdinner_memb_o12 = $_POST['gdinner_memb_o12'];
$gdinner_memb_412 = $_POST['gdinner_memb_412'];
$gdinner_memb_u14 = $_POST['gdinner_memb_u14'];

	//36 EUR for over 12, 18 EUR for 4-12	
	$dayTwoFee = 36 * $gdinner_memb_o12 + 18 * $gdinner_memb_412;

$pic_memb_o12 = $_POST['pic_memb_o12'];
$pic_memb_412 = $_POST['pic_memb_412'];
$pic_memb_u14 = $_POST['pic_memb_u14'];

	//10 EUR for over 12, 5 EUR for 4-12
	$dayThreeFee = 10 * $pic_memb_o12 + 5 * $pic_memb_412;

	
echo $dayOneFee.'<br>';
echo $dayTwoFee.'<br>';
echo $dayThreeFee.'<br>';

echo 'Total fee calculated';
echo $dayOneFee + $dayTwoFee + $dayThreeFee;

?>