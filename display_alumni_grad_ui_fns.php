<?php
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
	global $verification_result;
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
			if ($pg_content == 'index1') {
					contentIndex();
				}				
			if ($pg_content == 'member') {
					contentMemberPage();
				}
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
			if ($pg_content == 'reunion_registration_family') {
					contentFamilyRegistration();
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
		<div class="g-recaptcha" data-sitekey="6LchowQTAAAAAM7LJPHWjgQqsZX6ouepjLqkzMOS"></div>
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
					<option value="not graduated - partial studies"><?php print $displayNoDiplomaLng; ?></option>
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
		<div class="g-recaptcha" data-sitekey="6LchowQTAAAAAM7LJPHWjgQqsZX6ouepjLqkzMOS"></div>
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
	function display_reunion_registration_form() {
	
		global $showDayOneFee;
		global $showDayTwoFee;
		global $showDayThreeFee;
		
		//Day One
		global $dayOneLng;
		global $welcome_receptionLng;
		global $sightseeingLng;
		global $dinnerLng;
		//Day Two
		global $dayTwoLng;
		global $presentationsLng;
		global $students_meetLng;
		global $cme_wsLng;
		global $gala_dinnerLng;
		//Day Three
		global $dayThreeLng;
		global $picnicLng;
?>	
		  <form action="register_reunion1.php" method="post">
			
			<p>Check the programs you would like to attend to:</p>
			
			<fieldset>
				<legend><?php echo $dayOneLng;?></legend>
				<?php echo $showDayOneFee; //if not in the first 100 alumni or not graduated just partially studied?>
				<br>
				
				<?php echo $welcome_receptionLng;?>
				<input type="checkbox" name="welcome_reception" value=1 /><br>
				<?php echo $sightseeingLng;?>
				<input type="checkbox" name="sightseeing" id="sightseeing" value=1 /><br>
				<?php echo $dinnerLng;?> 
				<input type="checkbox" name="dinner" id="dinner" value=1 /><br><br>
				
				<legend><?php echo $dayTwoLng;?></legend>
				<?php echo $showDayTwoFee; //if not in the first 100 alumni or not graduated just partially studied?>
				<br>
				
				<?php echo $presentationsLng;?>
				<input type="checkbox" name="presentations" id="presentations" value=1 /><br>
				<?php echo $students_meetLng;?>
				<input type="checkbox" name="students_meet" id="students_meet" value=1 /><br>
				<?php echo $cme_wsLng;?>
				<input type="checkbox" name="cme_ws" id="cme_ws" value=1 /><br>
				<?php echo $gala_dinnerLng;?>
				<input type="checkbox" name="gala_dinner" id="gala_dinner" value=1 /><br><br>
				
				<legend><?php echo $dayThreeLng;?></legend>
				<?php echo $showDayThreeFee; //if not in the first 100 alumni or not graduated just partially studied?>
				<br>
				
				<?php echo $picnicLng;?>
				<input type="checkbox" name="picnic" id="picnic" value=1 /><br><br>
				
				<?php //if not in the first 100 alumni or not graduated just partially studied?>	
				Registration fee (including registration package): 30 EUR
		  
			</fieldset>
				
			<button type="submit">Register</button>
 
		</form>
<?php	
	}
?>



<?php
	function memberNumber() {
		for($i=0; $i<6; $i++) 
			{ ?>
			<option><?php echo $i;?></option>   
	<?php	} 
	}			
?>



<?php
	function display_family_form() {

		global $famHeaderLng;
		global $famLegendLng;
		global $famLabelLng;

		global $famMembersLng1;
		global $famMembersLng2;
		global $famMembersLng3;
						
		global $famMembOver12Lng;
		global $famMembBtw412Lng;
		global $famMembUnder4Lng;
		
		//Day One
		global $dayOneLng;
		global $welcome_receptionLng;
		global $sightseeingLng;
		global $dinnerLng;
		//Day Two
		global $dayTwoLng;
		global $presentationsLng;
		global $students_meetLng;
		global $cme_wsLng;
		global $gala_dinnerLng;
		//Day Three
		global $dayThreeLng;
		global $picnicLng;
?>	
			<form action="register_family.php" method="post" target="_blank">
				
				<fieldset>
					<legend><?php echo $famLegendLng;?></legend>
				
				<label for="family_members"><?php echo $famLabelLng;?></label>
				<textarea id="family_members" name="family_members"></textarea>
				
				<!--	
					<label for="fmember1">1</label>
					<input type="text" id="fmember1" name="fmember1" maxlength="150">
				
					<label for="fmember2">1</label>
					<input type="text" id="fmember2" name="fmember2" maxlength="150">
					
					<label for="fmember3">1</label>
					<input type="text" id="fmember3" name="fmember3" maxlength="150">
					
					<label for="fmember4">1</label>
					<input type="text" id="fmember4" name="fmember4" maxlength="150">
					
					<label for="fmember5">1</label>
					<input type="text" id="fmember5" name="fmember5" maxlength="150">
					
					<label for="fmember6">1</label>
					<input type="text" id="fmember6" name="fmember6" maxlength="150">
				-->
				</fieldset>

				<fieldset>
					<legend><?php echo $dayOneLng; ?></legend>
					<p><?php echo $famMembersLng1; ?></p>
						
						<?php echo $welcome_receptionLng; ?><br>	
							<label for="welcome_memb_o12"><?php echo $famMembOver12Lng; ?></label>
							<select id="welcome_memb_o12" name="welcome_memb_o12">
										<?php memberNumber(); ?>
							</select>
							
							<label for="welcome_memb_412"><?php echo$famMembBtw412Lng; ?></label>
							<select id="welcome_memb_412" name="welcome_memb_412">
										<?php memberNumber(); ?>
							</select>
							
							<label for="welcome_memb_u4"><?php echo $famMembUnder4Lng; ?></label>
							<select id="welcome_memb_u4" name="welcome_memb_u4">
										<?php memberNumber(); ?>
							</select>
						
						<?php echo $sightseeingLng; ?><br>	
							<label for="sight_memb_o12"><?php echo $famMembOver12Lng; ?></label>
							<select id="sight_memb_o12" name="sight_memb_o12">
										<?php memberNumber(); ?>
							</select>
							
							<label for="sight_memb_412"><?php echo $famMembBtw412Lng; ?></label>
							<select id="sight_memb_412" name="sight_memb_412">
										<?php memberNumber(); ?>
							</select>
							
							<label for="sight_memb_u4"><?php echo $famMembUnder4Lng; ?></label>
							<select id="sight_memb_u4" name="sight_memb_u4">
										<?php memberNumber(); ?>
							</select>
						
						<?php echo $dinnerLng; ?><br>	
							<label for="dinner_memb_o12"><?php echo $famMembOver12Lng; ?></label>
							<select id="dinner_memb_o12" name="dinner_memb_o12">
										<?php memberNumber(); ?>
							</select>
							
							<label for="dinner_memb_412"><?php echo $famMembBtw412Lng; ?></label>
							<select id="dinner_memb_412" name="dinner_memb_412">
										<?php memberNumber(); ?>
							</select>
							
							<label for="dinner_memb_u14"><?php echo $famMembUnder4Lng; ?></label>
							<select id="dinner_memb_u14" name="dinner_memb_u14">
										<?php memberNumber(); ?>
							</select>

				</fieldset>

				<fieldset>
				<legend><?php echo $dayTwoLng; ?></legend>
					<p><?php echo $famMembersLng2; ?></p>
					
						<?php echo $gala_dinnerLng; ?><br>
							<label for="gdinner_memb_o12"><?php echo $famMembOver12Lng; ?></label>
							<select id="gdinner_memb_o12" name="gdinner_memb_o12">
										<?php memberNumber(); ?>
							</select>
							
							<label for="gdinner_memb_412"><?php echo $famMembBtw412Lng; ?></label>
							<select id="gdinner_memb_412" name="gdinner_memb_412">
										<?php memberNumber(); ?>
							</select>
							
							<label for="gdinner_memb_u14"><?php echo $famMembUnder4Lng; ?></label>
							<select id="gdinner_memb_u14" name="gdinner_memb_u14">
										<?php memberNumber(); ?>
							</select>
					
				</fieldset>
				
				<fieldset>
				<legend><?php echo $dayThreeLng; ?></legend>
					<p><?php echo $famMembersLng3; ?></p>
					
						<?php echo $picnicLng; ?><br>
							<label for="pic_memb_o12"><?php echo $famMembOver12Lng; ?></label>
							<select id="pic_memb_o12" name="pic_memb_o12">
										<?php memberNumber(); ?>
							</select>
							
							<label for="pic_memb_412"><?php echo$famMembBtw412Lng; ?></label>
							<select id="pic_memb_412" name="pic_memb_412">
										<?php memberNumber(); ?>
							</select>
							
							<label for="pic_memb_u14"><?php echo $famMembUnder4Lng; ?></label>
							<select id="pic_memb_u14" name="pic_memb_u14">
										<?php memberNumber(); ?>
							</select>
					
				</fieldset>
					
				<button type="submit">Register</button>
	 
			</form>
	
<?php
}
?>




