﻿<?php
	//global $userNameLng;
	
	include 'alumniLangEn.php';
	//include 'alumniLangHunGYTK.php';

?>


<?php
/*
-- P A G E   D I S P L A Y   E L E M E N T S --

-- PRINT HTML HEADING --
*/
	function do_html_heading($heading) {
		
		
?>
		<p><?php echo $heading;?></p>
<?php
	}
// END OF HTML HEADING
?>



<?php
// OUTPUT URL AS LINK AND BR 

	function do_html_URL($url, $name) {
		
		global $urlHeaderLng ;
?>
		<div class="grid-container">
			<div class="grid-9">
			<h3><?php print $urlHeaderLng ; ?><a href="<?php echo $url;?>"><?php echo $name;?></a></h3>
			</div>
		 </div>
<?php
	}
// END OF OUTPUT URL AS LINK AND BR
?>

<?php
function do_html_header() {
	
	global $mainTitleLng;
	global $mainHeaderLng;
	global $mainParagraphLng;
	global $mainSpanLng;

?>
<!DOCTYPE html>
<html>
<head>
	<title><?php print $mainTitleLng ; ?></title>
	<meta name="viewport" content="width=device-width">
	<!--<meta content="True" name="HandheldFriendly">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1">-->
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/alumni4_style.css">
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
	<header class="main-header">
	<h1><?php print $mainHeaderLng ; ?></h1>
	<p class="header"><?php print $mainParagraphLng ; ?> <span class="header-s"><?php print $mainSpanLng ; ?></span></p>
<!--
<img class="students" src="img/logo2.jpg">
<img class="students" src="img/szegedmed_students_02.jpg">
<img class="students" src="img/szegedmed_students_03.jpg">
<img class="students" src="img/szegedmed_students_04.jpg">
<img class="students" src="img/szegedmed_students_05.jpg">
-->
		<div class="grid-container">
			<?php display_links() ?>
		</div>
	</header>
<?php
}
?>

<?php
function main_banner() {
	global $bannerHeaderLng ;
?>
	<div class="main-banner">
		<h1><?php print $bannerHeaderLng ; ?></h1>
	</div>
<?php
}
?>

<?php
function display_links() {
 	global $ind_sel;
	global $memb_sel;
	global $comm_sel;
	global $surv_sel;
	global $log_sel;
	global $reg_sel;
	global $cont_sel;
	global $reun_sel;
	global $lout_sel;
	global $pass_sel;
	global $verification_result;
	global $pg_content;
	
	//LANGUAGE GLOBALS
	
	global $linkHomeLng;
	global $linkAlumniLng;
	global $linkCommunityLng ;
	global $linkSurveyLng ;
	global $linkReunionRegLng;
	global $linkContactLng ;
	global $linkPwdLng ;
	
	
	global $linkHome2Lng;
	global $linkLoginLng;
	global $linkRegisterLng;
	global $linkReunionLng ;
	global $linkContactUsLng;
	
	
	//Ezt átírni. check_valid_officer_user feltételre
	if (($pg_content == 'officer') || ($pg_content == 'add_graduate_form') || ($pg_content == 'verification') || ($pg_content == 'verified') || ($pg_content == 'graduate') || ($pg_content == 'graduate_registered')){
		return true;
		exit;
	}
	else {
?>
		<ul class="grid-12 main-nav">
						<?php
				if (isset($_SESSION['valid_user'])) {
					?>
					<li><a href="index1.php" class="<?php echo $ind_sel; ?>"><?php print $linkHomeLng ; ?></a></li>
					<li><a href="member.php" class="<?php echo $memb_sel; ?>"><?php print $linkAlumniLng ; ?></a></li>
						<?php
						is_verified();
						if ($verification_result == 'Yes')	{
						?>
							<li><a href="alumni_community.php" class="<?php echo $comm_sel; ?>"><?php print $linkCommunityLng ; ?></a></li>
						<?php
						}
						?>
					<li><a href="survey.php" class="<?php echo $surv_sel; ?>"><?php print $linkSurveyLng ; ?></a></li>
					<li><a href="reunion_registration.php" class="<?php echo $reun_sel; ?>"><?php print $linkReunionRegLng ; ?></a></li> 
					<li><a href="contact_us1.php" class="<?php echo $cont_sel; ?>"><?php print $linkContactLng ; ?></a></li>
					<li><a href="change_passwd_form.php" class="<?php echo $pass_sel; ?>"><?php print $linkPwdLng ; ?></a></li>
					<?php		
					}	
				else {
					?>
					<li><a href="index.php" class="<?php echo $ind_sel; ?>"><?php print $linkHome2Lng ; ?></a></li>
					<li><a href="login.php" class="<?php echo $log_sel; ?>"><?php print $linkLoginLng ; ?></a></li> 
					<li><a href="register_form.php" class="<?php echo $reg_sel; ?>"><?php print $linkRegisterLng ; ?></a></li> 
					<li><a href="../../reunion/index.php" target="_blank"><?php print $linkReunionLng ; ?></a></li>
					<li><a href="contact_us.php" class="<?php echo $cont_sel; ?>"><?php print $linkContactUsLng ; ?></a></li>
					<?php
				}
				?>
		</ul>
<?php
	}
}
?>

<?php
function display_secondary_nav() {
	global $secondaryTrailerLng;
	global $secondaryJoinLng;
	global $secondarySumaaLng;
	
?>
		<ul class="secondary-nav">
			<li><a href="#" target="_blank"><?php print $secondaryTrailerLng ; ?></a></li>
			<li><a href="../alumni/2/index.php" target="_blank"><?php print $secondaryJoinLng ; ?></a></li>
			<li><a href="http://sumaa.org" target="_blank"><?php print $secondarySumaaLng ; ?></a></li>
		</ul>

<?php
}
?>

<?php
function mainContentDivOpen() {
?>
	<div class="grid-container">
		<div class="grid-9 main-content">
<?php
}
?>

<?php
function mainContentDivClose() {
?>
		</div>
		<?php second_column(); ?>
	</div>	
<?php
}
?>

<?php
function second_column() {
?>
		<div class="grid-3">
		<h3><br></h3>
		<?php
			if (isset($_SESSION['valid_user']))
				{
				display_login_message();
				}	
		?>		
		</div>
<?php
}
?>

<?php
function alumniMainContent() {
	global $pg_content;

		mainContentDivOpen();
	
			if ($pg_content == 'login') {
					display_login_form();
				}
			if ($pg_content == 'login2') {
					display_officer_login_form();
				}	
			if ($pg_content == 'logout') {
					display_logout_message();
				}
			if ($pg_content == 'logout2') {
					display_logout_message2();
				}	
			if ($pg_content == 'registration_form') {
					display_registration_form();
				}
			if ($pg_content == 'registration_form_officers') {
					display_officer_registration_form();
				}	
			if ($pg_content == 'contact_us1') {
					contentContactUs();
				}
			if ($pg_content == 'contact_us') {
					contentContactUs();
				}
			if ($pg_content == 'faq') {
					contentFAQ();
				}	
			/*	
			if ($pg_content == 'index') {
					contentIndex();
				}	
			*/	
			if ($pg_content == 'index1') {
					contentIndex();
				}				
			if ($pg_content == 'member') {
					contentMemberPage();
				}
			/*	
			if ($pg_content == 'officer') {
					adminMainPage();
				}	
			*/	
			if ($pg_content == 'alumni_community') {
					contentAlumniCommunity();
				}	
			if ($pg_content == 'yourcontacts') {
					display_contacts_form();
				}	
			if ($pg_content == 'survey') {
					contentSurveyPageTop();
					display_survey_form();
				}		
			if ($pg_content == 'survey_filled') {
					contentSurveyFilledIn();
				}
			if ($pg_content == 'survey_edit') {
					editSurveyTop();
					display_survey_form();
				}	
			if ($pg_content == 'reunion_registration') {
					contentReunionRegistration(); 
				}		
			if ($pg_content == 'forgot_form') {
					display_forgot_form(); 
				}	
			if ($pg_content == 'change_password_form') {
					display_change_password_form(); 
				}
			if ($pg_content == 'verified')	{
					contentVerified();
					adminMainPage();
			}
				
			/*if ($pg_content == 'add_graduate_form') {
					add_graduate_form();
					}*/
			if ($pg_content == 'graduates') {
					 
					}
			if ($pg_content == 'graduates_registered') {
					 
					}
			
			mainContentDivClose();	
}
?>

<?php
function do_html_footer() {
 // print an HTML footer
	global $footerLng;
	global $footerNameLng;

?>

	<footer class="main-footer">
		        <p><?php print $footerLng; ?> <a href="http://aas-szegedmed.hu/kristof" target="_blank"><?php print $footerNameLng; ?></a></p>
	</footer>
</body>
</html>
<?php
}
?>

<?php
// F O R M S

// DISPLAY LOGIN FORM
	function display_login_form() {

		global $loginHeaderLng;
		global $userNameLng;
		global $passWordLng;
		global $loginBtnLng;
		global $registerFormLng;
		global $forgotFormLng;
		
	?>
	

	<h3><?php print $loginHeaderLng; ?></h3>
	
		<form action="member.php" method="post">
			<label for="username"><?php print $userNameLng; ?></label>
			<input type="text" id="username" name="username">
			<label for="password" ><?php print $passWordLng; ?></label>
			<input type="password" id="password" name="passwd">
			<button type="submit"><?php print $loginBtnLng; ?></button>
			<p><a href='register_form.php'><?php print $registerFormLng; ?></a></p>
			<p><a href='forgot_form.php'><?php print $forgotFormLng; ?></a></p>
		 </form>
<?php
	}
// END OF DISPLAY LOGIN FORM 
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
// DISPLAY REGISTRATION FORM
	function display_registration_form() {
	
	global $fname;
	
	global $displayHeaderLng;
	global $displayParagraph1Lng;
	global $displayNumberLng;
	global $displayLegendLng;
	global $displayFamilyLng;
	global $displayFirstNameLng;
	global $displayGenderLng;
	global $displayMaleLng;
	global $displayFemaleLng;
	global $displayDobLng;
	global $displayPobLng;
	global $displayPobCityLng;
	global $displayPobCountryLng;
	global $displayCitizenShipLng;
	global $displayCitizenShip2Lng;
	
	global $displayNumber2Lng;
	global $displayLegend2Lng;
	global $displayGradFacultyLng;
	global $displayMedicineLng;
	global $displayPharmacyLng;
	global $displayDentistryLng;
	global $displayMed2YearGermanProgLng;
	global $displayNoDiplomaLng; 
	global $displayGradYearLng;
	global $display_YearLng;
	
	global $displayNumber3Lng;
	global $displayLegend3Lng;
	global $displayEmail_Lng;
	global $displayUserNameLng;
	global $displayPwdLng;
	global $displayPwd2Lng;
	global $displayParagraph2Lng;
	global $displayParagraph3Lng;
	
	global $displayBtnLng;
		
?>
	<h3><?php print $displayHeaderLng; ?></h3>
	
		<!-- <form method='post' action='cap.php'> -->
		<form method='post' action='register_new.php'>
		<div class="g-recaptcha" data-sitekey="6LcCIwETAAAAAAmD81230bbhvTFoASR9a9NG3X-_"></div>
		<p><?php print $displayParagraph1Lng; ?></p>
			
		<fieldset>
		
			<legend><span class="number"><?php print $displayNumberLng; ?></span><?php print $displayLegendLng; ?></legend>
        	
				<label for="fname"><?php print $displayFamilyLng; ?></label>
				<input type="text" id="fname" name="fname" maxlength="100" value="<?php print $fname;?>">
				
				<label for="gname"><?php print $displayFirstNameLng; ?></label>
				<input type="text" id="gname" name="gname" maxlength="100">
				
				<label for="gender"><?php print $displayGenderLng; ?></label>
				<select id="gender" name="gender">
					<option value="Male"><?php print $displayMaleLng; ?></option>
					<option value="Female"><?php print $displayFemaleLng; ?></option>
				</select>
				
				<label for="dob"><?php print $displayDobLng; ?></label>
				<input type="date" id="dob" name="dob">
				
				<?php print $displayPobLng; ?>
				<label for="pob_city"><?php print $displayPobCityLng; ?></label>
				<input type="text" id="pob_city" name="pob_city" maxlength="50">
				
				<label for="pob_country"><?php print $displayPobCountryLng; ?></label>
				<select id="pob_country" name="pob_country">
						<?php include 'countries.php';?> 
				</select>		
				
				<label for="citizenship"><?php print $displayCitizenShipLng; ?></label>
				<select id="citizenship" name="citizenship">
						<?php include 'nationalities.php';?>  
				</select>
				
				<label for="citizenship2"><?php print $displayCitizenShip2Lng; ?></label>
				<select id="citizenship2" name="citizenship2">
						<?php include 'nationalities.php';?>  
				</select>
			
		</fieldset>	
		
		<fieldset>
		
			<legend><span class="number"><?php print $displayNumber2Lng; ?></span><?php print $displayLegend2Lng; ?></legend>
        	
				<label for="grad_faculty"><?php print $displayGradFacultyLng; ?></label>
				<select id="grad_faculty" name="grad_faculty">
					<option value="Medicine"><?php print $displayMedicineLng; ?></option>
					<option value="Pharmacy"><?php print $displayPharmacyLng; ?></option>
					<option value="Dentistry"><?php print $displayDentistryLng; ?></option>
					<option value="Medicine, 2-year German Program"><?php print $displayMed2YearGermanProgLng; ?></option>
					<option><?php print $displayNoDiplomaLng; ?></option>
				</select>
				
				<label for="grad_year"><?php print $displayGradYearLng; ?></label>
				<select id="grad_year" name="grad_year">
					<option value=""><?php print $display_YearLng; ?></option>
						<?php
							  $y=date('Y');
							  for($i=$y; $i>1990; $i--) 
									{?>
									<option value="<?php echo $i; ?>"><?php echo $i; ?></option>   
						<?php 		} ?>
				</select>
			
		</fieldset>	
		
		<fieldset>
		
			<legend><span class="number"><?php print $displayNumber3Lng; ?></span><?php print $displayLegend3Lng; ?></legend>
			
			<label for="email"><?php print $displayEmail_Lng; ?></label>
			<input type='email' id="email" name='email' maxlength="100">
			
			<label for="username"><?php print $displayUserNameLng; ?></label>
			<input type='text' id="username" name='username' maxlength="16">
			
			<label for="passwd"><?php print $displayPwdLng ;?></label>
			<input type='password' id="passwd" name='passwd' maxlength="16">
			
			<label for="passwd2"><?php print $displayPwd2Lng ;?></label>
			<input type='password' id="passwd2" name='passwd2' maxlength="16">
			
			<p><?php print $displayParagraph2Lng ;?></p>
			<p><?php print $displayParagraph3Lng ;?></p>
		
		</fieldset>
			
        <button type="submit"><?php print $displayBtnLng ;?></button>
			
		</form>
<?php 
	}
// END OF REGISTRATION FORM
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
		<div class="g-recaptcha" data-sitekey="6LcCIwETAAAAAAmD81230bbhvTFoASR9a9NG3X-_"></div>
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
// DISPLAY SURVEY FORM
	function display_survey_form() {
	
		global $workplace;
		global $position;
		global $title;
		global $other_work;
		global $awards;
		global $contribute;
		global $opinion;
		global $comment;
		
		global $survey_type;
		
		
		//LANGUAGE GLOBALS
		global $surveyNumberLng;
		global $surveyLegendLng;
		global $surveyWorkLng ;
		
		global $surveyWorkPlaceLng ;
		global $surveyPositionLng ;	
		global $surveyTitleLng ;
		
		global $surveyOtherWorkLng ;
		global $surveyAwardsLng ;

		global $surveyNumber2Lng ;
		global $surveyLegend2Lng ;
		
		global $surveyNumber3Lng ;
		global $surveyLegend3Lng ;
		
		global $surveyContributeLng ;
		global $surveyOpinionLng ;
		
		global $surveyCommentLng;
		global $surveyButtonLng;
		

?>
	<!--Survey form -->
      <form action="register_survey.php" method="post">
			
		<fieldset>
		
			<legend><span class="number"><?php print $surveyNumberLng ; ?></span><?php print $surveyLegendLng ; ?></legend>
			
				<?php 	
					if ($survey_type == 'english') {
					english_survey_after_uni();
					}
					if ($survey_type == 'german') {
					german_survey_after_uni();
					}
				?>
				
				
				<?php print $surveyWorkLng ; ?>	
				<label for="workplace"><?php print $surveyWorkPlaceLng ; ?></label>
				<input type="text" id="workplace" name="workplace" maxlength="200" value="<?php print $workplace;?>">
				<label for="position"><?php print $surveyPositionLng ; ?></label>
				<input type="text" id="position" name="position" maxlength="50" value="<?php print $position;?>">
				<label for="title"><?php print $surveyTitleLng ; ?></label>
				<input type="text" id="title" name="title" maxlength="50" value="<?php print $title;?>">
				
				<label for="other_work"><?php print $surveyOtherWorkLng ; ?></label>
				<textarea id="other_work" name="other_work"><?php print $other_work;?></textarea>
				
				<label for="awards"><?php print $surveyAwardsLng ; ?></label>
				<textarea id="awards" name="awards"><?php print $awards;?></textarea>
				
		</fieldset>	
		
		<fieldset>
		
			<legend><span class="number"><?php print $surveyNumber2Lng ; ?></span><?php print $surveyLegend2Lng ; ?></legend>
			
				<?php 	
					if ($survey_type == 'english') {
					english_survey_licencing();
					}
					if ($survey_type == 'german') {
					german_survey_licencing();
					}
				?>
			
		</fieldset>	
		
		<fieldset>
		
			<legend><span class="number"><?php print $surveyNumber3Lng ; ?></span><?php print $surveyLegend3Lng ; ?></legend>
			
				<label for="contribute"><?php print $surveyContributeLng ; ?></label>
				<textarea id="contribute" name="contribute"><?php print $contribute;?></textarea>
        	
				<label for="opinion"><?php print $surveyOpinionLng ; ?></label>
				<textarea id="opinion" name="opinion"><?php print $opinion;?></textarea>
				
				<label for="comment"><?php print $surveyCommentLng ; ?></label>
				<textarea id="comment" name="comment"><?php print $comment;?></textarea>
				
		</fieldset>		
				
        <button type="submit"><?php print $surveyButtonLng ; ?></button>
        
      </form>
<?php
}
// END OF SURVEY FORM
?>

<?php
// DISPLAY ENGLISH SURVEY AFTER UNIVERSITY
	function english_survey_after_uni() {

		global $employment_country;
		global $after_graduation;
		
		//LANGUAGE GLOBALS
		
		global $englishSurveyEmploymentCountryLng ;
		global $englishSurveyAfterGradLng;
	
		global $englishSurveyPhdLng ;
		global $englishSurveyResidencyLng ;
		global $englishSurveyOtherLng ;
		
	
?>
				<label for="employment_country"><?php print $englishSurveyEmploymentCountryLng ; ?></label>
				<select id="employment_country" name="employment_country">
				<option> <?php print $employment_country;?></option>
					<?php include 'countries.php';?> 
				</select>
				
				<label for="after_graduation"><?php print $englishSurveyAfterGradLng ; ?></label>
				<select id="after_graduation" name="after_graduation">
				<option> <?php print $after_graduation;?></option>
					<option value="PhD"><?php print $englishSurveyPhdLng ; ?></option>
					<option value="Residency"><?php print $englishSurveyResidencyLng ; ?></option>
					<option value="Other"><?php print $englishSurveyOtherLng ; ?></option>
				</select>

<?php
}
// END OF GERMAN SURVEY AFTER UNIVERSITY
?>			

<?php 
// DISPLAY ENGLSIH SURVEY LICENCING
	function english_survey_licencing() {
	
		global $licensing;
		global $licensing_type;
		global $licensing_exp;
		
		//LANGUAGE FORM
		
		global $englishLicencing_LicensingLng ;
		global $englishLicencingValue1Lng ;
		global $englishLicencingValue2Lng ;
		
		global $englishLicencingTypeLng ;
		global $englishLicencingExpLng ;
	
?>			
	
				<label for="licensing"><?php print $englishLicencing_LicensingLng ; ?></label>
				<select id="licensing" name="licensing">
					<option> <?php print $licensing;?></option>
					<option value="Yes"><?php print $englishLicencingValue1Lng ; ?></option>
					<option value="No"><?php print $englishLicencingValue2Lng ; ?></option>
				</select>
			
				<label for="licensing_type"><?php print $englishLicencingTypeLng ; ?></label>
				<input type="text" id="licensing_type" name="licensing_type" value="<?php print $licensing_type;?>">
				
				<label for="licensing_exp"><?php print $englishLicencingExpLng ; ?></label>
				<textarea id="licensing_exp" name="licensing_exp"><?php print $licensing_exp;?></textarea>
	
<?php
}
// END OF ENGLISH SURVEY LICENCING
?>


<?php 
// DISPLAY GERMAN SURVEY AFTER UNIVERSITY
	function german_survey_after_uni() {
	
		global $after_phys;
		global $wait;
		global $med_y_n;
		global $grad_place;
		global $grad_yr_germ;
		
		//GLOBALS LANGUAGE
		
		global $germanSurveyAfterPhysikumLng ;
	
		global $germanSurveyWaitLng;
		
		global $germanSurveyMedLng ;
		
		global $germanSurveyValue1Lng;
		global $germanSurveyValue2Lng ;
		
		global $germanSurveyGradPlaceLng ;
		global $germanSurveyGradYearLng ;
		
		
		
?>			
				<label for="after_physikum"><?php print $germanSurveyAfterPhysikumLng ; ?></label>
				<input type="text" id="after_phys" name="after_phys" maxlength="200" value="<?php print $after_phys;?>">
				
				<label for="wait"><?php print $germanSurveyWaitLng ; ?></label>
				<input type="text" id="wait" name="wait" maxlength="2" value="<?php print $wait;?>">
				
				<label for="med_y_n"><?php print $germanSurveyMedLng ; ?></label>
				<select id="med_y_n" name="med_y_n">
				<option> <?php print $med_y_n;?></option>
					<option value="Yes"><?php print $germanSurveyValue1Lng ; ?></option>
					<option value="No"><?php print $germanSurveyValue2Lng ; ?></option>
				</select>
				
				<label for="grad_place"><?php print $germanSurveyGradPlaceLng ; ?></label>
				<input type="text" id="grad_place" name="grad_place" maxlength="200" value="<?php print $grad_place;?>">
				
				<label for="grad_yr_germ"><?php print $germanSurveyGradYearLng ; ?></label>
				<input type="text" id="grad_yr_germ" name="grad_yr_germ" maxlength="4" value="<?php print $grad_yr_germ;?>">
<?php
}
// END OF GERMAN SURVEY AFTER UNIVERSITY
?>


<?php
// GERMAN SURVEY LICENCING 
	function german_survey_licencing() {

		global $licensing_exp;
		
		
		//LANGUAGE GLOBALS
		
		global $germanLicensingExpLng;
		
?>
				<label for="licensing_exp"><?php print $germanLicensingExpLng ; ?></label>
				<textarea id="licensing_exp" name="licensing_exp"><?php print $licensing_exp;?></textarea>
<?php
}
// END OF GERMAN SURVEY lICENCING
?>



<?php
// DISPLAY CONTACTS FORM
function display_contacts_form() {
	
	global $permadd;
	global $add_pc;
	global $add_city;
	global $add_country;
	global $phone;
	
	//LANGUAGE GLOBALS
	
	global $contactsHeaderLng ;
	
	global $contactsFieldSetLng;
	global $contactsPermAddLng ;
	global $contactsAddPcLng ;
	global $contactsAddCityLng ;
	global $contactsAddCountryLng;
	global $contactsPhoneLng ;
	global $contactsBtnLng ;
?>
	
	<h3><?php print $contactsHeaderLng ; ?></h3>

      <form action="register_contacts.php" method="post">
		
		<fieldset>
					
				<?php print $contactsFieldSetLng ; ?>
				<label for="permadd"><?php print $contactsPermAddLng ; ?></label>
				<input type="text" id="permadd" name="permadd" maxlength="100" value="<?php print $permadd; ?>">
				
				<label for="add_pc"><?php print $contactsAddPcLng ; ?></label>
				<input type="text" id="add_pc" name="add_pc" maxlength="20" value="<?php print $add_pc; ?>">
				
				<label for="add_city"><?php print $contactsAddCityLng ; ?></label>
				<input type="text" id="add_city" name="add_city" maxlength="50" value="<?php print $add_city; ?>">
				
				<label for="add_country"><?php print $contactsAddCountryLng ; ?></label>
				<select id="add_country" name="add_country">
					<option><?php print $add_country; ?></option>
					<?php include 'countries.php';?>
				</select>
				
				<label for="phone"><?php print $contactsPhoneLng ; ?></label>
				<input type="text" id="phone" name="phone" maxlength="20" value="<?php print $phone; ?>">
				
		</fieldset>
			
        <button type="submit"><?php print $contactsBtnLng ; ?></button>
        
      </form>
<?php
}
// END OF CONTACTS FORM
?>


<?php
// DISPLAY CHANGE PASSWORD FORM
	function display_change_password_form() {
	
	//LANGUAGE GLOBALS
	
	global $changePwdHeaderLng ;
	global $changePwdOldPwdLng ;
	global $changePwdNewPwdLng ;
	global $changePwdNewPwd2Lng;
	global $changePwdBtnLng ;
?>
	<h3><?php print $changePwdHeaderLng ; ?></h3>

		<form action='change_passwd.php' method='post'>
			<label for="old_passwd"><?php print $changePwdOldPwdLng ; ?></label>
			<input type='password' id='old_passwd' name='old_passwd' size=16 maxlength=16>
			<label for="new_passwd"><?php print $changePwdNewPwdLng ; ?></label>
			<input type='password' id='new_passwd' name='new_passwd' size=16 maxlength=16>
			<label for="new_passwd2"><?php print $changePwdNewPwd2Lng ; ?></label>
			<input type='password' id='new_passwd2' name='new_passwd2' size=16 maxlength=16>
			<button type='submit'><?php print $changePwdBtnLng ; ?></button>
		</form>	
<?php
}
?>


<?php 
// DISPLAY FORGOT PASSWORD FORM 
// display HTML form to reset and email password
	function display_forgot_form() {
	
	
	global $forgotHeaderLng;
	global $forgotUsernameLng;
	global $forgotBtnLng ;
?>
	<h3><?php print $forgotHeaderLng ; ?></h3>
	
		<form action='forgot_passwd.php' method='post'>
		<div class="g-recaptcha" data-sitekey="6LcCIwETAAAAAAmD81230bbhvTFoASR9a9NG3X-_"></div>
			<label for="username"><?php print $forgotUsernameLng ; ?></label>
			<input type='text' id="username" name='username' size=16 maxlength=16></td></tr>
			<button type='submit'><?php print $forgotBtnLng ; ?></button>
		</form>	
<?php
}
// END OF FORGOT FORM
?>


<?php
function display_logout_message() {
	global $old_user;
	global $result_dest;
	
	//LANGUAGE GLOBALS
	global $logoutHeaderLng;
	global $logoutLoginLng;
	
?>
	

	<h3><?php print $logoutHeaderLng ; ?></h3>
		<p>
		<?php
		if (!empty($old_user)) 
		{
			if ($result_dest)
			{
			echo 'Logged out.' ?> <a href="login.php"><?php print $logoutLoginLng ; ?></a> <?php ;
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
		  do_html_url('login.php', 'Login');
		}
	?>
		</p>
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

<?php function display_filter_form() {
	
	global $filterHeaderLng ;
	global $filterGradFacultyLng;
	global $filterMedicineLng ;
	global $filterPharmacyLng ;
	global $filterDentistryLng;
	global $filterMed2YearGermanProgLng;
	global $filterNoDiplomaLng;
	global $filterGradYearLng;
	global $filterYearLng;
	global $filterCitizenshipLng ;
	global $filterBtnLng;
	
	
?>
	
	<h4><?php print $filterHeaderLng ; ?></h4>	
	
		<form action='alumni_community_result.php' method='post'>

				<label for="grad_faculty"><?php print $filterGradFacultyLng ; ?></label>
				<select id="grad_faculty" name="grad_faculty">
				<option value="">--</option>
					<option value="Medicine"><?php print $filterMedicineLng ; ?></option>
					<option value="Pharmacy"><?php print $filterPharmacyLng ; ?></option>
					<option value="Dentistry"><?php print $filterDentistryLng ; ?></option>
					<option value="Medicine, 2-year German Program"><?php print $filterMed2YearGermanProgLng ; ?></option>
					<option><?php print $filterNoDiplomaLng;?></option>
				</select>
						
				<label for="grad_year"><?php print $filterGradYearLng ; ?></label>
				<select id="grad_year" name="grad_year">
					<option value=""><?php print $filterYearLng ; ?></option>
						<?php
							  $y=date('Y');
							  for($i=$y; $i>1990; $i--) 
									{?>
									<option value="<?php echo $i; ?>"><?php echo $i; ?></option>   
						<?php 		} ?>
				</select>
				
				<label for="citizenship"><?php print $filterCitizenshipLng ; ?></label>
				<select id="citizenship" name="citizenship">
					<?php include 'nationalities.php';?> 
				</select>
				
				<button type='submit'><?php print $filterBtnLng ; ?></button>
				
		</form>
<?php
}
?>

<?php
function display_alumni_mate_table_body() {

	global $aid;
	global $fname;
	global $gname;
	global $grad_faculty;
	global $grad_year;
	
	
	//LANGUAGE GLOBALS
	
	
	
	
?>

				<tr>
					<td><?php print $fname;?></td>
					<td><?php print $gname;?></td>
					<td><?php print $grad_faculty;?></td>
					<td><?php print $grad_year;?></td>
					<td>
						<form class="grad-details-form" action="alumni_community_mate.php" method="post" id="form1">
						<input type="hidden" id="AID" name="AID" value="<?php print $aid;?>" />
						<button class="grad-details-button" type='submit'>></button>
						</form>
					</td>	
				</tr>
				
<?php
}
?>

<?php
function display_alumni_mate_table_head() {

	global $tableFamilyNameLng  ;
	global $tableFirstNameLng ;
	global $tableFacultyLng ;
	global $tableYearLng ;
	global $tableDetailsLng ;
	
	
?>
			<tr>
				<th><?php print $tableFamilyNameLng ; ?></th>
				<th><?php print $tableFirstNameLng ; ?></th>
				<th><?php print $tableFacultyLng ; ?></th>
				<th><?php print $tableYearLng ; ?></th>
				<th><?php print $tableDetailsLng ; ?></th>
			</tr>
<?php
}
?>

<?php function display_public_profile_form() {

	global $aid;
	
	//LANGUAGE GLOBALS
	
	global $profileBtnLng;
?>

		<form action="alumni_community_mate.php" method="post" id="form1">	
				<input type="hidden" id="AID" name="AID" value="<?php print $aid;?>" />
				<button type='submit'><?php print $profileBtnLng ; ?></button>	
		</form>
<?php
}
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




