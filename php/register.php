<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
//ob_start(); //Turn on output buffering
require_once('alumni_includes.php');
//session_start();
//do_html_header('');
//check_valid_user();
$conn = db_connect();


//Kötőjel után is nagybetű + sztringtisztításért felelős FUNCTION

	function ucname($string) {
		$string =ucwords(strtolower($string));

		foreach (array('-', '\'') as $delimiter) {
		  if (strpos($string, $delimiter)!==false) {
			$string =implode($delimiter, array_map('ucfirst', explode($delimiter, $string)));
		  }
		}
		return $string;
	}


//POSTS
	$fname=trim($_POST['fname']); 
		$names=array($fname);
			
		foreach ($names as $name) 
			{ 
			$fname=ucname(("{$name}")); //tömbbe rakja a név elemeit és az ucname funkcióval átalakítja (usefuls_fns.php-ban található)
			}	
			
	$gname=trim($_POST['gname']);
		$names=array($gname);
			
		foreach ($names as $name) 
			{ 
			$gname=ucname(("{$name}")); //tömbbe rakja a név elemeit és az ucname funkcióval átalakítja (usefuls_fns.php-ban található)
			}

	$gender=$_POST['gender'];

	$dob=$_POST['dob'];

	$pob_country=$_POST['pob_country'];

	$pob_city=trim($_POST['pob_city']);
		$names=array($pob_city);
			
		foreach ($names as $name) 
			{ 
			$pob_city=ucname(("{$name}")); //tömbbe rakja a név elemeit és az ucname funkcióval átalakítja (usefuls_fns.php-ban található)
			}		

	$citizenship=trim($_POST['citizenship']);
	$citizenship=str_replace('\' ', '\'', ucwords(str_replace('\'', '\' ', strtolower($citizenship))));

//	$permadd=trim($_POST['permadd']);
//	$add_pc=trim($_POST['add_pc']);

/*	$add_city=trim($_POST['add_city']);
		$names=array($add_city);
			
		foreach ($names as $name) 
			{ 
			$add_city=ucname(("{$name}")); //tömbbe rakja a név elemeit és az ucname funkcióval átalakítja (usefuls_fns.php-ban található)
			}
*/

//	$add_country=$_POST['add_country'];

//	$phone = preg_replace("/[^0-9+]/", "", $_POST['phone']); //Eltávolítja a telefonszámból a fölösleges karaktereket. Csak a számokat és a + jelet hagyja meg.
	
//	$email= $_POST['email'];
	

//REGCHECK
	include 'registration_variables.php';
	include 'alumni_regcheck.php';

//DATABASE INSERTIONS
	
//$appdate=date('Ymd');
//$username=$_SESSION['valid_user'];

$username = 'altest'.date('Ymd');



$insert_graduate=$conn->query("INSERT INTO graduate_data 
(username, fname, gname, gender, dob, pob_country, pob_city, citizenship) 

VALUES 
('$username', '$fname', '$gname', '$gender', '$dob', '$pob_country', '$pob_city', '$citizenship')");


 	

?>	