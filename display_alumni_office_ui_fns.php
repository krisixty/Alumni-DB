<?php
//ADMIN HEADER
	function do_html_admin_header() {
?>	
<!DOCTYPE html>
<html>
    <head>
	    <title>Alumni Admin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="tablesorter/themes/blue/style.css">
		<link rel="stylesheet" href="css/alumni_admin.css">
		<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="tablesorter/jquery.tablesorter.js"></script> 
		<script>
		$(document).ready(function() 
			{ 
				$("#myTable").tablesorter(); 
			} 
		); 
		</script>
		
    </head>
<body>
<?php
	}
//END OF ADMIN HEADER
?>



<?php
// DISPLAY OFFICER LOGIN FORM

	function display_officer_login_form() {
		
		global $officerHeaderLng;
		global $officerUsernameLng;
		global $officerPwdLng ;
		global $officerLoginLng ;
		global $officerForgotFormLng ;
		
?>
	<h3><?php print $officerHeaderLng; ?></h3>

		<form action="officer.php" method="post">
			<label for="username"><?php print $officerUsernameLng; ?></label>
			<input type="text" id="username" name="username">
			<label for="password" ><?php print $officerPwdLng; ?></label>
			<input type="password" id="password" name="passwd">
			<button type="submit"><?php print $officerLoginLng; ?></button>
			<p><a href='forgot_form.php'><?php print $officerForgotFormLng; ?></a></p>
		 </form>
<?php
	}
// END OF DISPLAY OFFICER LOGIN FORM 
?>




<?php
function alumniAdminMainContent() {
	global $pg_content;

		//mainContentDivOpen();
	
			if ($pg_content == 'login2') {
					display_officer_login_form();
				}	
			if ($pg_content == 'logout2') {
					display_logout_message2();
				}	
			if ($pg_content == 'registration_form_officers') {
					display_officer_registration_form();
				}	
			if ($pg_content == 'verified')	{
					contentVerified();
					adminMainPage();
				}
			if ($pg_content == 'graduates') {
					 
				}
			if ($pg_content == 'graduates_registered') {
					 
				}
			
		//mainContentDivClose();	
}
?>



<?php
// DISPLAY OFFICER REGISTRATION FORM
	function display_officer_registration_form() {
	
	global $displayOfficerHeaderLng;
	
	global $displayOfficerParagraph1Lng;
	global $displayOfficerEmail_Lng ;
	global $displayOfficerUsernameLng;
	global $displayOfficerPwdLng ;
	global $displayOfficerPwd2Lng ;
	
	global $displayOfficerParagraph2Lng  ;
	global $displayOfficerParagraph3Lng ;
	
	global $displayOfficerBtnLng ;
?>
	<h3><?php print $displayOfficerHeaderLng ;?></h3>

		<form method='post' action='register_new2.php'>
		<div class="g-recaptcha" data-sitekey="6LchowQTAAAAAM7LJPHWjgQqsZX6ouepjLqkzMOS"></div>
		<p><?php print $displayOfficerParagraph1Lng ; ?></p>
				
		<fieldset>
					
			<label for="email"><?php print $displayOfficerEmail_Lng; ?></label>
			<input type='email' id="email" name='email' maxlength="100">
			
			<label for="username"><?php print $displayOfficerUsernameLng ; ?></label>
			<input type='text' id="username" name='username' maxlength="16">
			
			<label for="passwd"><?php print $displayOfficerPwdLng ; ?></label>
			<input type='password' id="passwd" name='passwd' maxlength="16">
			
			<label for="passwd2"><?php print $displayOfficerPwd2Lng ; ?></label>
			<input type='password' id="passwd2" name='passwd2' maxlength="16">
			
			<p><?php print $displayOfficerParagraph2Lng ; ?></p>
			<p><?php print $displayOfficerParagraph3Lng ; ?></p>
		
		</fieldset>
			
        <button type="submit"><?php print $displayOfficerBtnLng ; ?></button>
			
		</form>
<?php 
	}
// END OF OFFICER REGISTRATION FORM
?>


<?php
// DISPLAY ADMIN GRADUATE REGISTRATION FORM
	function add_graduate_form() {
		
		global $aid;
		global $o_aid;
		
		global $fname;
		global $gname;
		global $gender;
		global $dob;
		global $pob_country;
		global $pob_city;
		global $citizenship;
		global $citizenship2;
		global $grad_faculty;
		global $grad_year;
		global $email;
		global $diploma_serial;
		global $diploma_qual;
		global $grad_date;
		
		global $diploma_average;
		global $signatory_rector;
		global $signatory_dean;
		global $studies_start;
		global $start_semester;
		//display_menu_icon()
		
		//LANGUAGE GLOBALS
		
		
		global $adminHeaderLng  ;
		global $adminNumberLng ;
		global $adminLegendLng ;
	
		global $adminFnameLng ;
		global $adminGnameLng ;
		global $adminGenderLng;
		global$adminMaleLng ;
		global $adminFemaleLng ;
		
		global $adminDobLng ;
		
		global $adminPobLng ;
		global $adminPobCityLng ;
		
		global $adminPobCountryLng;
		
		global $adminCitizenshipLng ;
		global $adminCitizenship2Lng ;
		
		global $adminNumber2Lng ;
		global $adminLegend2Lng ;
		
		global $adminGradFacultyLng ;
		
		global $adminMedicineLng;
		global $adminPharmacyLng ;
		global $adminDentistryLng ;
		global $adminMed2YearGermanProgLng ;
		global $displayNoDiplomaLng; 
		
		global $adminGradYearLng;
		global $adminYearLng;
		
		global $adminNumber3Lng ;
		global $adminLegend3Lng ;
		
		global $adminEmail_Lng ;
		global $adminDiplomaSerial_Lng ;
		global $adminDiplomaQual_Lng ;
		
		global $adminRiteLng ;
		global $adminCumLaudeLng ;
		global $adminSummaCumLaudeLng ;
		
		global $adminGrad_DateLng ;
		
		global $adminDiplomaAvgLng ;
		global $adminSignatoryRectorLng;
		
		global $adminSignatoryDeanLng;
		
		global $adminStudies_StartLng;
		
		global $adminAcademicYearLng ;
			
		global $adminStartSemesterLng ;
	
		global $adminBtnLng;
		
		global $adminDeleteGraduateLng;
		
		global $pg_content;
		
		
	?>
	  
	  <h3><?php print $adminHeaderLng ; ?></h3>
	  
	<?php  
	if (($pg_content == 'graduate') || ($pg_content == 'add_graduate_form')) {
	?>
		<form method='post' action='add_graduate.php'>
	<?php	
	}	

	if ($pg_content == 'graduate_registered') {
	?>
		<form method='post' action='edit_user_reg_graduate.php'>
	<?php	
	}	
	?>
		
		<fieldset>
		
			<legend><span class="number"><?php print $adminNumberLng ; ?></span><?php print $adminLegendLng ; ?></legend>
			
					<?php  
					if ($pg_content == 'graduate') {
					?>
						<input type="hidden" id="o_aid" name="o_aid" value="<?php print $o_aid;?>" />
					<?php	
					}	

					if ($pg_content == 'graduate_registered') {
					?>
						<input type="hidden" id="AID" name="AID" value="<?php print $aid;?>" />
					<?php	
					}	
					?>
				
				<label for="fname"><?php print $adminFnameLng ; ?></label>
				<input type="text" id="fname" name="fname" maxlength="100" value="<?php print $fname;?>">
				
				<label for="gname"><?php print $adminGnameLng ; ?></label>
				<input type="text" id="gname" name="gname" maxlength="100" value="<?php print $gname;?>">
				
				<label for="gender"><?php print $adminGenderLng ; ?></label>
				<select id="gender" name="gender">
					<option><?php print $gender;?></option>
					<option value="Male"><?php print $adminMaleLng ; ?></option>
					<option value="Female"><?php print $adminFemaleLng ; ?></option>
				</select>
				
				<label for="dob"><?php print $adminDobLng ; ?></label>
				<input type="date" id="dob" name="dob" value="<?php print $dob;?>">
				
				<?php print $adminPobLng ; ?>
				<label for="pob_city"><?php print $adminPobCityLng ; ?></label>
				<input type="text" id="pob_city" name="pob_city" maxlength="50" value="<?php print $pob_city;?>">
				
				<label for="pob_country"><?php print $adminPobCountryLng ; ?></label>
				<select id="pob_country" name="pob_country">
					<option><?php print $pob_country;?></option>
					<?php include 'countries.php';?> 
				</select>		
				
				<label for="citizenship"><?php print $adminCitizenshipLng ; ?></label>
				<select id="citizenship" name="citizenship">
						<option><?php print $citizenship;?></option>
						<?php include 'nationalities.php';?>  
				</select>
				
				<label for="citizenship2"><?php print $adminCitizenship2Lng ; ?></label>
				<select id="citizenship2" name="citizenship2">
						<option><?php print $citizenship2;?></option>
						<?php include 'nationalities.php';?>  
				</select>
			
		</fieldset>	
		
		<fieldset>
		
			<legend><span class="number"><?php print $adminNumber2Lng ; ?></span><?php print $adminLegend2Lng ; ?></legend>
        	
				<label for="grad_faculty"><?php print $adminGradFacultyLng ; ?></label>
				<select id="grad_faculty" name="grad_faculty">
					<option><?php print $grad_faculty;?></option>
					<option value="Medicine"><?php print $adminMedicineLng ; ?></option>
					<option value="Pharmacy"><?php print $adminPharmacyLng ; ?></option>
					<option value="Dentistry"><?php print $adminDentistryLng ; ?></option>
					<option value="Medicine, 2-year German Program"><?php print $adminMed2YearGermanProgLng ; ?></option>
					<option value="not graduated - partial studies"><?php print $displayNoDiplomaLng; ?></option>
					
				</select>
				
				<label for="grad_year"><?php print $adminGradYearLng ; ?></label>
				<select id="grad_year" name="grad_year">
					<option><?php print $grad_year;?></option>
					<option value=""><?php print $adminYearLng ; ?></option>
						<?php
							  $y=date('Y');
							  for($i=$y; $i>1990; $i--) 
									{?>
									<option value="<?php echo $i; ?>"><?php echo $i; ?></option>   
						<?php 		} ?>
				</select>
			
		</fieldset>	
		
		<fieldset>
		
			<legend><span class="number"><?php print $adminNumber3Lng ; ?></span><?php print $adminLegend3Lng ; ?></legend>
			
			<label for="email"><?php print $adminEmail_Lng ; ?></label>
			<input type='email' id="email" name='email' maxlength="100" value="<?php print $email;?>">
			
		<?php
			if (($pg_content == 'graduate') || ($pg_content == 'add_graduate_form')) {
		?>		
			
			<label for="diploma_serial"><?php print $adminDiplomaSerial_Lng ; ?></label>
			<input type="text" id="diploma_serial" name="diploma_serial" maxlength="100" value="<?php print $diploma_serial;?>">
			
			<label for="diploma_qual"><?php print $adminDiplomaQual_Lng ; ?></label>
			<select id="diploma_qual" name="diploma_qual">
					<option><?php print $diploma_qual;?></option>
					<option value="RITE"><?php print $adminRiteLng ; ?></option>
					<option value="CUM LAUDE"><?php print $adminCumLaudeLng ; ?></option>
					<option value="SUMMA CUM LAUDE"><?php print $adminSummaCumLaudeLng ; ?></option>
			</select>
			
			<label for="grad_date"><?php print $adminGrad_DateLng ; ?></label>
			<input type="date" id="grad_date" name="grad_date" value="<?php print $grad_date;?>">
			
			<label for="diploma_average"><?php print $adminDiplomaAvgLng ; ?></label>
			<input type="text" id="diploma_average" name="diploma_average" maxlength="4" value="<?php print $diploma_average;?>">
			
			<label for="signatory_rector"><?php print $adminSignatoryRectorLng ; ?></label>
			<input type="text" id="signatory_rector" name="signatory_rector" maxlength="50" value="<?php print $signatory_rector;?>">
			
			<label for="signatory_dean"><?php print $adminSignatoryDeanLng ; ?></label>
			<input type="text" id="signatory_dean" name="signatory_dean" maxlength="50" value="<?php print $signatory_dean;?>">
			
			<label for="studies_start"><?php print $adminStudies_StartLng ; ?></label>
			<select id="studies_start" name="studies_start">
					<option><?php print $studies_start;?></option>
					<option value=""><?php print $adminAcademicYearLng ; ?></option>
						<?php
							  $y=date('Y')-1;
							  //$per="/";
							  for($i=$y; $i>1984; $i--) 
									{
									$j=$i+1;?>
									<option><?php print $i.'/'.$j;?></option>   
						<?php 		}?>
			</select>
			
			<label for="start_semester"><?php print $adminStartSemesterLng ; ?></label>
			<select id="start_semester" name="start_semester">
					<option><?php print $start_semester;?></option>
					<option value="1">1</option>
					<option value="2">2</option>
			</select>
		
		<legend><span class="number">4</span><?php print $adminDeleteGraduateLng ; ?></legend>
		
			<label for="del_graduate"><?php print $adminDeleteGraduateLng ; ?></label>
			<select id="del_graduate" name="del_graduate">
					<option><?php print $del_graduate;?></option>
					<option value="Yes">Yes</option>
					<option value="No">No</option>
			</select>
		
		
		<?php
			} 
		?>
		
		</fieldset>
			
        <button type="submit"><?php print $adminBtnLng ; ?></button>
			
		</form>
<?php 
	}
// END OF ADMIN GRADUATE REGISTRATION FORM 
?>



<?php
	function display_verification_form() {

	global $aid;
	global $verification;
	global $fname;
	global $gname;
	
	//LANGUAGE GLOBALS
	
	global $verificationLegendLng ;
	global $verificationVerifyLng ;
	global $verificationValue1Lng ;
	global $verificationValue2Lng ;
	global $verificationBtnLng ;
	
?>
      <form action="verify.php" method="post">
       
		<fieldset>
		
			<legend><?php print $verificationLegendLng ; ?></legend>
			
				<label for="verification"><?php print $verificationVerifyLng ; ?></label>
				<select id="verification" name="verification">
					<option><?php print $verification; ?></option>
					<option><?php print $verificationValue1Lng ; ?></option>
					<option><?php print $verificationValue2Lng ; ?></option>	
				</select>
			
		</fieldset>
		
		<input type="hidden" id="AID" name="AID" value="<?php print $aid?>" />	
		<input type="hidden" id="fname" name="fname" value="<?php print $fname?>" />
		<input type="hidden" id="gname" name="gname" value="<?php print $gname?>" />		
        <button type="submit"><?php print $verificationBtnLng ; ?></button>
        
      </form>

<?php	
}
?>



<?php
function display_logout_message2() {
	global $old_user;
	global $result_dest;
	
	//LANGUAGE GLOBALS
	
	global $logout2headerLng;
	global $logout2LoginLng;
?>
	

	<h3><?php print $logout2HeaderLng ; ?></h3>
		<p>
		<?php
		if (!empty($old_user)) 
		{
			if ($result_dest)
			{
			echo 'Logged out.' ?> <a href="login2.php"><?php print $logout2LoginLng ; ?></a> <?php ;
			// ha be volt jelentkezve a user, akkor most már ki van jelentkezve
			//header("Location:login.php");
			}
			else
			{
		   // be volt jelentkezve a user, de nem tud kijelentkezni
			echo 'Could not log you out.<br />';
			}
		}
		else
		{
		  // nem volt bejelentkezve, de valahogy ide került
		  echo 'You were not logged in, and so have not been logged out.<br />';
		  do_html_url('login2.php', 'Login');
		}
	?>
		</p>
<?php
		}
?>	


<?php 
//GRADUATE FILTER FORM

function display_graduate_filter() {

	global $pg_content;
	global $filterFormAction;
	
	global $filterGradFacultyLng;
	global $filterMedicineLng;
	global $filterPharmacyLng;
	global $filterDentistryLng;
	global $filterMed2YearGermanProgLng;
	global $filterBtnLng;
	global $filterNoDiplomaLng;

		if ($pg_content == 'graduates') {
			$filterFormAction = 'graduates.php';
		}
		if ($pg_content == 'graduates_registerd') {
			$filterFormAction = 'graduates_registered.php';
		}
?>
		<form action='<?php print $filterFormAction?>' method='post'>

				<label for="grad_faculty"><?php print $filterGradFacultyLng; ?></label>
				<select id="grad_faculty" name="grad_faculty">
				<option value="">--</option>
					<option><?php print $filterMedicineLng; ?></option>
					<option><?php print $filterPharmacyLng; ?></option>
					<option><?php print $filterDentistryLng; ?></option>
					<option><?php print $filterMed2YearGermanProgLng; ?></option>
					<option><?php print $filterNoDiplomaLng; ?></option>
				</select>
						
				<button type='submit'><?php print $filterBtnLng; ?></button>
				
		</form>
<?php
	}
?>

