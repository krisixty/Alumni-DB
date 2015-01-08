<?php
session_start();
//require_once('pagecontents.php');
require_once('alumni_includes.php');

do_html_header('');
check_valid_user();
$username=$_SESSION['valid_user'];

//Survey posts goes here
	$permadd=trim($_POST['permadd']);
	$add_pc=trim($_POST['add_pc']);
	
	$add_city=trim($_POST['add_city']);
	$names=array($add_city);
	
		foreach ($names as $name) 
			{ 
			$add_city=ucname(("{$name}")); //tömbbe rakja a név elemeit és az ucname funkcióval átalakítja (usefuls_fns.php-ban található)
			}
			
	$add_country=$_POST['add_country'];
	$phone = preg_replace("/[^0-9+]/", "", $_POST['phone']); //Eltávolítja a telefonszámból a fölösleges karaktereket. Csak a számokat és a + jelet hagyja meg.

$conn = db_connect();
	
	$result=$conn->query("SELECT AID FROM graduate_data WHERE username='$username'");
	$sor=mysqli_fetch_array($result);
	$aid=$sor['AID'];

	$result_contacts = $conn->query("SELECT * FROM graduate_contacts WHERE AID='$aid'");	
	$sor=mysqli_fetch_array($result_contacts);	
	
if ($result_contacts->num_rows>0) //vizsgálja, hogy adott-e már be jelentkezést
	{
	//UPDATE CONTACTS
	include 'contacts_regcheck.php';
	if ($contactsRegCheck) {
		$update_contacts=$conn->query
		("UPDATE graduate_contacts SET permadd='$permadd', add_pc='$add_pc', add_city='$add_city', add_country='$add_country', phone='$phone' WHERE AID='$aid'");
		header("Location:member.php" );
		}
	} 
else
	{
	//INSERT CONTACTS
	include 'contacts_regcheck.php';
	if ($contactsRegCheck) {
			// FORM VARIABLES INSERTION	
			/*$conn = db_connect();
			//lekérdezi az AID-t a graduate_data táblából
			$result=$conn->query("SELECT AID FROM graduate_data WHERE username='$username'");
			$sor=mysqli_fetch_array($result);
			$aid=$sor['AID'];*/
			$insert_survey=$conn->query("INSERT INTO graduate_contacts (AID, permadd, add_pc, add_city, add_country, phone) VALUES ('$aid', '$permadd', '$add_pc', '$add_city', '$add_country', '$phone')");	
			echo '<h3>'.'Registration successful'.'</h3></p>';
			header("Location:member.php" );
		}
	}	

?>