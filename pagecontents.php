
<?php
function contentIndex() {
	
	
	global $indexHeaderLng;
	
?>

<h3> <?php print $indexHeaderLng; ?></h3>
<pre>
<img class="pics-in-text" src="img/infoblokk_kedv_final_felso_cmyk_en_ESZA_low_res.jpg">
Dear Graduates,

We have realized our long-standing ambition by founding the Alumni program. Officially organized, it is the first time that our former students will be able to get into contact and keep in touch with one another and the alma mater. With the help of the website, you can share information regarding your careers, its main stages, awards etc. You can also upload photos of yourselves and your experiences in Szeged and revive long-forgotten friendships.

<img class="large-pics-in-text" src="img/graduation.jpg">
<img class="small-pics-in-text" src="img/graduation_small.jpg">

As a part of our program, let us invite you to participate in a bit of a market research – it only takes a few minutes to answer the questions. Your feedback is important to us, including answers to questions such as what kinds of licensing procedures you had to take part in, where you got employed, what kinds of experiences you have acquired after having received your diploma. With the help of your participation, our aim is to enhance the quality of education at our university and to be able to provide future graduate students with the most useful guidance.
 
The inception of the Alumni program is particularly timely because the English Language Medical Program of the University of Szeged is celebrating its 30th anniversary in 2015, on which occasion we are organizing a major meeting between September 18 and 20, 2015. We hope that many of you will be able to make it to Szeged.

We are jointly working with the <a href="http://sumaa.org" target="_blank">Szeged University Medical Alumni Association (SUMAA)</a>. Please visit their website where you can browse interviews and the newsletter distributed regularly – you are sure to find something of interest.

We hope that our initiative will prove to be successful and many of you will be joining the Alumni program.

The Alumni Team
</pre>
<?php
}
?>

<?php
function contentContactUs() {
	
	global $contactHeaderLng;
	
?>
<h3><?php print $contactHeaderLng; ?></h3>
<pre>
Foreign Students' Secretariat
Alumni Team
H-6720 Szeged
Dóm tér 12.
T: +3662546-867
<a href="mailto:alumni.fs@med.u-szeged.hu">alumni.fs@med.u-szeged.hu</a>
</pre>

<?php
}
?>

<?php
function display_login_message() {
?>
	<p>Welcome <?php echo $_SESSION['valid_user'].','; ?> you are logged in to Alumni Database. </p>
	<ul class="main-nav">
	<li><a href="logout.php" class="<?php echo $lout_sel; ?>">Logout</a></li> 
	</ul>
	
<?php
}
?>

<?php
function display_login2_message() {
?>
	<p>Welcome <?php /*echo $_SESSION['valid_officeruser'].',';*/  echo $_SESSION['valid_user'].','; ?> you are logged in to Alumni Database. </p>
	
<?php
}
?>

<?php
function contentMemberPage() {
	//PERSONAL DATA VARIABLES
	global $aid;
	global $verification;
	global $fname;
	global $gname;
	global $dob;
	global $pob_country;
	global $pob_city;
	global $citizenship;
	global $citizenship2;
	global $grad_faculty;
	global $grad_year;
	global $email;
		
	//ADDRESS VARIABLES
	global $permadd;
	global $add_pc;
	global $add_city;
	global $add_country;
	global $phone;
	
	//FORMS FILL VARIABLES
	global $contactsFill;
	global $surveyFill;
	
	//SURVEY VARIABLES
	global $workplace;
	global $position;
	global $title;
	global $other_work;
	global $awards;
	
	//LANGUAGE GLOBALS
	global $memberPageHeaderLng ;
	
	global $memberPagePersonalProfileLng;
	global $memberPagePersonalDataLng ;
	
	global $memberPageDobLng;
	global $memberPagePobLng ;
	global $memberPageCitizenshipLng ;
	
	global $memberPageGradLng ;
	
	global $memberPageIdLng ;
	
	global $memberPageAddressLng ;
	global $memberPagePcLng ;
	global $memberPageCityLng ;
	global $memberPageCountryLng ;
	global $memberPagePhoneLng ;
	global $memberPageEmail_Lng;
	global $memberPageYourContactsLng ;
	global $memberPageContactsLng;
	global $memberPageGiveContactsLng;
	
	global $memberPageProfessionalProfileLng;
	global $memberPageEmploymentLng  ;
	
	global $memberPageWorkPlaceLng;
	global $memberPagePositionLng ;
	global $memberPageTitleLng ;
	global $memberPageOtherWorkLng ;
	global $memberPageAwardsLng ;
	global $memberPageEditLng ;
	global $memberPageSurveyLng ;
	
	global $memberPageParagraphLng ;
	
	

?>
<h3><?php print $memberPageHeaderLng; ?></h3>
<?php 
check_valid_user();

	if ($verification == 'No') {
	?>
<pre>
Thank you for your registration. Since our Alumni Community is a closed group, your data needs to be verified. The verification of your data is going to be confirmed via e-mail approximately within 3 working days. 

Please check back later, as following the verification, you will have access to the profiles of other graduates registered in the system. You will furthermore be able to register to the Alumni Reunion event.

Until then you are welcome to view your <a href="member.php">personal profile</a>, provide us with your <a href="yourcontacts.php">contact information</a> and create <a href="survey.php">professional profile by filling in our Alumni survey</a>. 

The Alumni Team
	<?php
	}
	if ($verification == 'Yes')
	{
	echo '<p>'.'Your account has been verified. You can now use all of the Alumni Database functions. Look for and reestablish the connection with your former classmates and your long-lost acquaintances! Check out what they were up to after their studies and how they are doing now. Spread the word about the community so that more people can enjoy the benefits of the Alumni program.'.'</p>';
	}
	?>

</pre>
<?php print $memberPagePersonalProfileLng; ?>
<fieldset class="text">
	<legend class="text"></legend>
		<fieldset class="text2">
			<legend class="text2"><?php print $memberPagePersonalDataLng; ?></legend>
			<strong><?php echo $gname.' '.$fname; ?></strong><br>
			<?php print $memberPageDobLng; ?> <?php echo $dob; ?><br>
			<?php print $memberPagePobLng; ?> <?php echo $pob_city.', '.$pob_country; ?><br>
			<?php print $memberPageCitizenshipLng; ?> <?php echo $citizenship; ?>
			<?php
			if ($citizenship2) {
				echo ', '.$citizenship2.'<br>';
				}
				else
				{
				echo '<br>';
				}
			?>

			<?php print $memberPageGradLng; ?> <?php echo $grad_faculty.', '.$grad_year; ?><br>
				<?php
				
			?>
			<?php print $memberPageIdLng; ?> <?php echo $aid;?>
		</fieldset>
<?php
	if ($contactsFill)
		{
	?>
		<fieldset class="text2">
			<legend class="text2">Contacts</legend>
			<?php print $memberPageAddressLng; ?> <?php echo $permadd; ?><br>
			<?php print $memberPagePcLng; ?> <?php echo $add_pc; ?><br>
			<?php print $memberPageCityLng; ?> <?php echo $add_city; ?><br>
			<?php print $memberPageCountryLng; ?> <?php echo $add_country; ?><br>
			<?php print $memberPagePhoneLng; ?> <?php echo $phone; ?><br>
			<?php print $memberPageEmail_Lng; ?> <?php echo $email; ?><br>
			<br>
			<strong><a href="yourcontacts.php"><?php print $memberPageYourContactsLng; ?></a></strong>
			<?php
			}
		else
			{
		?>
		<fieldset class="text2">
			<legend class="text2"><?php print $memberPageContactsLng; ?></legend>
			<a href="yourcontacts.php"><?php print $memberPageGiveContactsLng; ?></a>
			<?php
			}
		?>
		</fieldset>
</fieldset>		
		
		
<fieldset class="text">
	<legend class="text"><?php print $memberPageProfessionalProfileLng; ?></legend>	
		<fieldset class="text2">
			<legend class="text2"><?php print $memberPageEmploymentLng; ?></legend>
<?php
	if ($surveyFill) {
	?>

				<?php print $memberPageWorkPlaceLng; ?> <?php echo $workplace;?><br>
				<?php print $memberPagePositionLng; ?> <?php echo $position;?><br>
				<?php print $memberPageTitleLng; ?> <?php echo $title;?><br>
				<?php print $memberPageOtherWorkLng; ?> <?php echo $other_work;?><br>
				<?php print $memberPageAwardsLng; ?> <?php echo $awards;?><br>
				<br>
				<a href="survey_edit.php"><?php print $memberPageEditLng; ?></a>
	</fieldset>	
	<?php
	}
	else {
		?>
		<a href="survey.php"><?php print $memberPageSurveyLng; ?></a>
		<?php
	}
	?>			
</fieldset>	
</fieldset>		
<p><?php print $memberPageParagraphLng; ?>
<?php		
display_public_profile_form();
?></p>
<?php
}
?>




<?php
function contentSurveyPageTop() {
	
	global $surveyHeaderLng;

	//check_valid_user();
?>
<h3><?php print $surveyHeaderLng ;?></h3>
<pre>
Dear Graduate,

We survey our alumni in order to obtain information helpful to the university in program planning and in assisting current students.

--WE CARE WHAT HAPPENS TO OUR GRADUATES
--WE WANT TO KNOW HOW YOU ARE DOING 
--WE WOULD LIKE TO KEEP TRACK OF YOU

It just takes a few moments of your time, however, filling in this questionnaire will bring us up-to-date on your employment and educational status.

Information you provide will:

--REMAIN CONFIDENTIAL
--HELP IF YOU ARE SEEKING EMPLOYMENT
--ASSIST CURRENT STUDENTS AND FUTURE GRADUATES OF UNIVERSITY OF SZEGED

My sincere thanks for your cooperation.

Best regards,
The Alumni Team
</pre>
<?php
}
?>

<?php
function contentSurveyFilledIn() {
	
	global $workplace;
	global $position;
	global $title;
	global $other_work;
	global $awards;
	global $contribute;
	global $opinion;
	global $comment;
	
	global $licensing_exp; //SAME 4 BOTH
		
	//ENGLISH
	global $licensing;
	global $licensing_type;
	global $employment_country;
	global $after_graduation;
	
	//GERMAN
	global $after_phys;
	global $wait;
	global $med_y_n;
	global $grad_place;
	global $grad_yr_germ;
	
	
	global $surveyFill;
	global $survey_type;
	
	//LANGUAGE GLOBALS
	
	global $surveyFilledHeaderLng ;
	global $surveyFilledParagraphLng;
	global $surveyFilledHeader2Lng;
	
	global $surveyFilledEditLng ;
	
	
?>
<p>
<h3><?php print $surveyFilledHeaderLng ;?></h3>
<?php print $surveyFilledParagraphLng; ?></p> 


<fieldset class="text">
<h4><?php print $surveyFilledHeader2Lng; ?></h4>
<p>

<?php
global $span; 
$span = '<span class="question">';

	if ($surveyFill)
		{
		include 'survey_questions.php';
		
		if ($survey_type == 'english') {
			echo $span.$licensingQuestion.'</span><br>'.$licensing.'<br><br>';
			echo $span.$licensing_typeQuestion.'</span><br>'.$licensing_type.'<br><br>';
			echo $span.$licensing_expQuestion.'</span><br>'.$licensing_exp.'<br><br>';
			echo $span.$employment_countryQuestion.'</span><br>'.$employment_country.'<br><br>';
			echo $span.$after_graduationQuestion.'</span><br>'.$after_graduation.'<br><br>';
		}
		
		if ($survey_type == 'german') {
			echo $span.$afterPhysikumQuestion.'</span><br>'.$after_phys.'<br><br>';
			echo $span.$waitSemesterQuestion.'</span><br>'.$wait.'<br><br>';
			echo $span.$medicineYesOrNoQuestion.'</span><br>'.$med_y_n.'<br><br>';
			echo $span.$graduationPlaceQuestion.'</span><br>'.$grad_place.'<br><br>';
			echo $span.$yearQuestion.'</span><br>'.$grad_yr_germ.'<br><br>';
		}
		
		echo $span.$workplaceQuestion.'</span><br>'.$workplace.'<br><br>';
		echo $span.$positionQuestion.'</span><br>'.$position.'<br><br>';
		echo $span.$titleQuestion.'</span><br>'.$title.'<br><br>';
		echo $span.$other_workQuestion.'</span><br>'.$other_work.'<br><br>';
		echo $span.$awardsQuestion.'</span><br>'.$awards.'<br><br>';
		echo $span.$contributeQuestion.'</span><br>'.$contribute.'<br><br>';
		echo $span.$opinionQuestion.'</span><br>'.$opinion.'<br><br>';
		echo $span.$commentQuestion.'</span><br>'.$comment.'<br><br>';
		}	
?>		
</p>
<p><a href="survey_edit.php"><?php print $surveyFilledEditLng; ?></a></p>
</fieldset>		
<?php
}
?>

<?php
function editSurveyTop() {
	
	global $surveyTopHeaderLng;
	
?>
	<h3><?php print $surveyTopHeaderLng; ?></h3>
<?php
}
?>

<?php
function adminMainPage() {
	
	global $mainPageHeaderLng;
	global $mainPageOfficerLng ;
	global $mainPageAddGraduatesLng;
	global $mainPageGraduatesLng;
	global $mainPageGraduatesRegLng;
	global $mainPageSurveyListLng;
	global $mainPageLogoutLng ;
	
	
?>
<h3><?php print $mainPageHeaderLng ; ?></h3>
<p class= "main">
	<a href="officer.php"><?php print $mainPageOfficerLng ; ?></a><br>
	<a href="add_graduate_form.php"><?php print $mainPageAddGraduatesLng ; ?></a><br>
	<a href="graduates.php"><?php print $mainPageGraduatesLng ; ?></a><br>
	<a href="graduates_registered.php"><?php print $mainPageGraduatesRegLng ; ?></a><br>
	<a href="survey_list.php"><?php print $mainPageSurveyListLng; ?></a><br>
	<a href="logout2.php"><?php print $mainPageLogoutLng ; ?></a>
	
</p>	
<?php	
}
?>

<?php
function contentReunionRegistration() {
	
	global $reunionHeaderLng;
	global $reunionParagraph1Lng;
	global $reunionParagraph2Lng;
	global $reunionWeekendLng;
	global $reunionForFamily1Lng;
	global $reunionParagraphNoContacts1Lng;
	global $reunionParagraphNoContacts2Lng;
	global $reunionHereLng;
	global $reunionAlreadyLng;
	global $reunionFamAlreadyLng;
	
	global $verification_result;
	global $contactsFill;
	global $freePlaces;
	global $reunionRegistered;
	global $familyRegistered;
	global $notGraduated;
	
	global $showDayOneFee;
	global $showDayTwoFee;
	global $showDayThreeFee;
	global $reunionRegPrgLng;
	
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
	
	global $dayOneFee;
	global $dayTwoFee;
	global $dayThreeFee;
	global $regFee;
	global $totalFee;
	
	
?>
<h3><?php print $reunionHeaderLng ; ?></h3>

<a href="../../reunion/index.php" target="_blank"><?php print $reunionWeekendLng ; ?></a>
<?php

check_valid_user();

	is_verified();
	if ($verification_result == 'No') {
		?><p><?php print $reunionParagraph1Lng ; ?></p><?php
		}
		
	else {
		is_contactsFilled();
		if ($contactsFill) {
			
			is_ReunionRegistration();
			
				if ($reunionRegistered) {
				
				is_FamilyRegistration();
				
					if (!$familyRegistered) {
					?><p><?php echo $reunionAlreadyLng.'<a href="reunion_registration_family.php">'.$reunionHereLng.'.</a><br><br>'.$reunionRegPrgLng;?></p><?php
					}
					
					if ($familyRegistered) {
					?><p><?php echo $reunionFamAlreadyLng.'<a href="reunion_registration_family.php">'.$reunionHereLng.'.</a><br><br>'.$reunionRegPrgLng;?></p><?php
					}
					
					//reunion events query goes here
				include 'reunion_regstatus.php';
				}
				if (!$reunionRegistered) {
				?><p><?php echo $reunionForFamily1Lng;?></p><?php
				
					isNotGraduated();
					if ($notGraduated) {
						showFees();
					}
					if (!$notGraduated) {
						freePlaces();
						if ($freePlaces !== 0) {
						?><p>The first 100 alumni can attend the reunion for free.<br>
						Remaining free places: <?php print $freePlaces?></p>
						<?php
						}
						else {
						?><!--<p>No more free places left.</p>--><?php
						showFees();
						}
					}
				display_reunion_registration_form();
				}
			}
				
		if (!$contactsFill) {
			?><p>
			<?php echo $reunionParagraphNoContacts1Lng.' '.'<a href="yourcontacts.php">'.$reunionHereLng.'</a> '.$reunionParagraphNoContacts2Lng;?>
			</p><?php
		}
	}
}
?>

<?php
function contentFamilyRegistration() {
	
	global $famHeaderLng;
	global $reunionRegistered;
	global $familyRegistered;
	global $mustFirstYouLng;
	
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
	
	global $famMembersLng1;
	global $famMembersLng2;
	global $famMembersLng3;
		
	global $famMembOver12Lng;
	global $famMembBtw412Lng;
	global $famMembUnder4Lng;
	
	global $dayOneFee;
	global $dayTwoFee;
	global $dayThreeFee;
	global $regFee;
	global $totalFee;
	
?>
	<h3><?php print $famHeaderLng ; ?></h3>
<?php	
		is_ReunionRegistration();
			
			if ($reunionRegistered) {
				
				is_FamilyRegistration();
				
					if (!$familyRegistered) {
					display_family_form();
					}
					
					if ($familyRegistered) {
					//reunion events query goes here
					include 'reunion_family_regstatus.php';
					}
			}
			
			if (!$reunionRegistered) {
				?><p><?php echo $mustFirstYouLng;?></p><?php
				}			
}

?>


<?php
function contentAlumniCommunity() {
	
	global $communityHeaderLng;
	global $communityParagraphLng;
	global $communityShowAll_Lng;
	global $communityShowFilterLng;
	
?>

	<h3><?php print $communityHeaderLng ; ?></h3>
	<p>
		<?php print $communityParagraphLng ; ?><br><br>
		<a href="alumni_community_all.php"><?php print $communityShowAll_Lng;?></a><br>
		<a href="alumni_community_filters.php"><?php print $communityShowFilterLng;?></a><br>	
	</p>
<?php
}
?>

<?php
function contentAlumniMate() {

	//PERSONAL DATA VARIABLES
	global $aid;
	global $verification;
	global $fname;
	global $gname;
	global $grad_faculty;
	global $grad_year;
	global $email;
	
	//SURVEY VARIABLES
	global $workplace;
	global $position;
	global $title;
	global $other_work;
	global $awards;
	
	global $surveyFill;
	
	//LANGUAGE GLOBALS
	
	global $mateHeaderLng ;
	global $matePublicProfileLng ;
	global $matePersonalDataLng;
	global $mateFamilyNameLng ;
	global $mateFirstNameLng ;
	global $mateFacultyLng;
	global $mateGradYearLng ;
	global $mateEmail_Lng ;
	global $mateEmploymentLng ;
	
	global $mateWorkPlaceLng ;
	global $matePositionLng ;
	global $mateTitleLng ;
	global $mateOtherWorkPlaceLng ;
	global $mateAwardsLng ;
	
	global $mateEmptyLng ;
?>
	<h3><?php print $mateHeaderLng;?></h3>

		<fieldset class="text">
			<legend class="text"><?php print $matePublicProfileLng;?></legend>
				<fieldset class="text2">
					<legend class="text2"><?php print $matePersonalDataLng;?></legend>
					<strong><?php echo $gname.' '.$fname; ?></strong><br>
					<?php print $mateFamilyNameLng;?> <?php echo $fname;?><br>
					<?php print $mateFirstNameLng;?> <?php echo $gname;?><br>
					<?php print $mateFacultyLng;?> <?php echo $grad_faculty;?><br>
					<?php print $mateGradYearLng;?> <?php echo $grad_year;?><br>
					<?php print $mateEmail_Lng;?><?php echo $email;?><br>
				</fieldset>	
				
				<fieldset class="text2">
					<legend class="text2"><?php print $mateEmploymentLng;?></legend>
		<?php
				if ($surveyFill) {
				?>
							<?php print $mateWorkPlaceLng;?> <?php echo $workplace;?><br>
							<?php print $matePositionLng;?> <?php echo $position;?><br>
							<?php print $mateTitleLng;?> <?php echo $title;?><br>
							<?php print $mateOtherWorkPlaceLng;?> <?php echo $other_work;?><br>
							<?php print $mateAwardsLng;?> <?php echo $awards;?><br>
				</fieldset>	
			<?php
				}
				else {
				?>
				<?php print $mateEmptyLng;?>
				<?php
			}
			?>			
		</fieldset>	
	
<?php
}
?>

<?php
function contentVerified() {

	global $verifiedHeaderLng;
	global $verifiedParagraphLng;

?>


	<h3><?php print $verifiedHeaderLng ;?></h3>
	<p><?php print $verifiedParagraphLng ;?></p>
	
<?php
}
?>