<?php
session_start();
require_once('alumni_includes.php');
require_once('pagecontents.php'); 


	//Registration posts goes here
		include 'add_grad_posts.php';
	//Registration post ends here

	//Registration test goes here
		include 'registration_variables.php';
		
	$aid=$_POST['AID'];	

do_html_admin_header('');
check_valid_officer_user();
	display_login2_message();
	//mainContentDivOpen();
	adminMainPage();
	

	//SURVEY DATA from SURVEY
		$conn = db_connect();
		$result_aid = $conn->query("SELECT * FROM graduate_data WHERE AID='$aid'");	
		$sor=mysqli_fetch_array($result_aid);
		
		$graduate_username = $sor['username'];
		
		if ($result_aid->num_rows>0)	
			{
			$update_graduate_data=$conn->query
			("UPDATE graduate_data SET fname='$fname', gname='$gname', gender='$gender', dob='$dob', pob_country='$pob_country', pob_city='$pob_city', citizenship='$citizenship',  citizenship2='$citizenship2', grad_faculty='$grad_faculty', grad_year='$grad_year' WHERE AID='$aid'");
			
			$update_email=$conn->query
			("UPDATE user SET email='$email' WHERE username='$graduate_username'");
			
			echo 'Data updated'.'<br>';
			
			}
		/* //Nem kell, mert ebben az adattáblában nem lehet olyan, aki nem saját kezűleg regisztrált
		else 
			{
		$insert_graduate=$conn->query("INSERT INTO graduate_officedata (fname, gname, gender, dob, pob_country, pob_city, citizenship, citizenship2, grad_faculty, grad_year, diploma_serial, diploma_qual, grad_date, email) VALUES ('$fname', '$gname', '$gender', '$dob', '$pob_country', '$pob_city', '$citizenship', '$citizenship2', '$grad_faculty', '$grad_year', '$email')");	
			echo 'Data inserted'.'<br>';
			}
		*/	

	//Personal data variables
		echo $familyNameLabel.$fname.'<br>';
		echo $firstNameLabel.$gname.'<br>';
		echo $genderLabel.$gender.'<br>';
		echo $dateOfBirthLabel.$dob.'<br>';
		echo $placeOfBirthCountryLabel.$pob_country.'<br>';
		echo $placeOfBirthCityLabel.$pob_city.'<br>';
		echo $citizenshipLabel.$citizenship.'<br>';
		echo $citizenship2Label.$citizenship2.'<br>';
	
	//Graduation data variables
		echo $graduationFacultyLabel.$grad_faculty.'<br>';
		echo $graduationYearLabel.$grad_year.'<br>';
		
	//Additional data variables
		echo $emailLabel.$email.'<br><br>';
		
		?>
		<form action="graduate_registered.php" method="post" id="form1">
		<input name="AID" type="hidden" value="<?php print $aid ?>" />
		<input type="submit" name="Submit" id="Submit" value="Back" />
		</form>
		

	
<?php
	//mainContentDivClose();
do_html_footer();	 
?>