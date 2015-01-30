<?php
require_once('alumni_includes.php');
//session_start();
//do_html_header('');
//check_valid_user();
//display_officer_menu();
//$username=$_SESSION['valid_user'];



$aid=$_POST['AID']; 
$conn = db_connect();
$result=$conn->query("SELECT * FROM graduate_data WHERE AID='$aid'");
$sor=mysqli_fetch_array($result);

$fname = $sor['fname'];
$gname = $sor['gname'];
$gender=$sor['gender'];
$dob=$sor['dob'];
$pob_country=$sor['pob_country'];
$pob_city=$sor['pob_city'];
$citizenship=$sor['citizenship'];
$citizenship2=$sor['citizenship2'];
$grad_faculty=$sor['grad_faculty'];
$grad_year=$sor['grad_year'];
$verification=$sor['verification'];

do_html_header('');
?>
<p class="main">	
<?php

	// Labels
		include 'registration_variables.php';

		echo $aid.'<br>';
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
		
	// Verification status
		echo 'Verified? '.$verification.'<br>';
	
?>
</p>
      <form action="verify.php" method="post">
       
		<fieldset>
		
			<legend>Verification</legend>
			
				<label for="verification">Verify</label>
				<select id="verification" name="verification">
					<option><?php print $verification; ?></option>
					<option>Yes</option>
					<option>No</option>	
				</select>
			
		</fieldset>
		
		<input type="hidden" id="AID" name="AID" value="<?php print $aid?>" />		
        <button type="submit">Verify graduate</button>
        
      </form>
<?php
do_html_footer();
?>





