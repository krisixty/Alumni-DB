<?php
function contentNews() {
?>
<h3>News</h3>
<p class="main">Reunion Weekend 2015 website launched!</p>
<?php
}
?>

<?php
function contentAccomodation() {
?>
<h3>Accomodation</h3>
<pre>
For your convenience, we have reserved 50 rooms at <a href="http://www.hunguesthotels.hu/en/hotel/szeged/hunguest_hotel_forras/" target="_blank">Hunguest Hotel Forrás****</a> for September 18–20, 2015 for two nights, where the welcome reception and the Saturday evening dinner takes place.

To book a room, please send an e-mail to <a href="mailto:hotelforras@hunguesthotels.com">hotelforras@hunguesthotels.com</a>, indicating the duration of your stay and the number of rooms you wish to reserve. Be sure to book mentioning “Alumni Reunion” to receive the discounted rates below.

Single room: 18.400 HUF/night
Double room: 23.400 HUF/night
Extra bed: 9.500 HUF/night

The prices include accommodation with buffet breakfast, unrestricted access (for the duration of your stay) to the pools of Napfényfürdő Aquapolis Szeged – adjacent to the Hotel – (baths with slides, medical baths, outdoor swimming pools), a daily single time entry to the “Silent Wellness” section of Napfényfürdő Aquapolis Szeged (for the duration of your stay) for a 3-hour-long period, (“Silent Wellness” can only be entered by adults – above 16 – to ensure that Guests are not disturbed). 

Services: Adventure pools, effervescent bath, sauna, infra cabin, steam cabin, salt cabin, tepidarium, aroma cabin, outdoor sauna, WIFI internet access in the rooms, bathrobe, VAT. (On the day of departure, “Silent Wellness” is accessible until 11. a.m. only).

Prices do not include local tax.

Accommodation with breakfast is free of charge for children below 4 years of age.
</pre>
<?php
}
?>

<?php
function contentIndex() {
?>

<h3>About Us</h3>
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
?>
<h3>Contact Us</h3>
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

?>
<h3>Your Alumni Database Account</h3>
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

<fieldset class="text">
	<legend class="text">Personal profile</legend>
		<fieldset class="text2">
			<legend class="text2">Personal data</legend>
			<strong><?php echo $gname.' '.$fname; ?></strong><br>
			Date of birth: <?php echo $dob; ?><br>
			Place of birth: <?php echo $pob_city.', '.$pob_country; ?><br>
			Citizenship: <?php echo $citizenship; ?>
			<?php
			if ($citizenship2) {
				echo ', '.$citizenship2.'<br>';
				}
				else
				{
				echo '<br>';
				}
			?>

			Graduation: <?php echo $grad_faculty.', '.$grad_year; ?><br>
				<?php
				
			?>
			Alumni Database ID number: <?php echo $aid;?>
		</fieldset>
<?php
	if ($contactsFill)
		{
	?>
		<fieldset class="text2">
			<legend class="text2">Contacts</legend>
			Address: <?php echo $permadd; ?><br>
			Postal Code: <?php echo $add_pc; ?><br>
			City: <?php echo $add_city; ?><br>
			Country: <?php echo $add_country; ?><br>
			Phone number: <?php echo $phone; ?><br>
			E-mail: <?php echo $email; ?><br>
			<br>
			<strong><a href="yourcontacts.php">Edit your contacts info</a></strong>
			<?php
			}
		else
			{
		?>
		<fieldset class="text2">
			<legend class="text2">Contacts</legend>
			<a href="yourcontacts.php">Give us your contacts info</a>
			<?php
			}
		?>
		</fieldset>
</fieldset>		
		
		
<fieldset class="text">
	<legend class="text">Professional profile</legend>	
		<fieldset class="text2">
			<legend class="text2">Employment</legend>
<?php
	if ($surveyFill) {
	?>

				Current workplace: <?php echo $workplace;?><br>
				Current position: <?php echo $position;?><br>
				Current title: <?php echo $title;?><br>
				Other workplace(s): <?php echo $other_work;?><br>
				Awards/Honors: <?php echo $awards;?><br>
				<br>
				<a href="survey_edit.php">Edit your professional info</a>
	</fieldset>	
	<?php
	}
	else {
		?>
		<a href="survey.php">Please fill out our survey</a>
		<?php
	}
	?>			
</fieldset>	
</fieldset>		
<p>You can check below what other graduates can see about you under your Alumni Database public profile.
<?php		
display_public_profile_form();
?></p>
<?php
}
?>




<?php
function contentSurveyPageTop() {

	//check_valid_user();
?>
<h3>Alumni Survey</h3>
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
?>
<p>
<h3>Alumni Survey</h3>
Thank you for filling in our questionnaire! We hope to see you at the Alumni Reunion Weekend organized to celebrate the 30th anniversary of the English language Medical Program between the 18-20. of September 2015 in Szeged!</p> 


<fieldset class="text">
<h4>Your Survey Answers</h4>
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
<p><a href="survey_edit.php">Edit your answers</a></p>
</fieldset>		
<?php
}
?>

<?php
function editSurveyTop() {
?>
	<h3>Edit survey answers</h3>
<?php
}
?>

<?php
function adminMainPage() {
?>
<h3>Alumni Database Admin v1.1</h3>
<p class= "main">
	<a href="officer.php">Admin mainpage</a><br>
	<a href="add_graduate_form.php">Add new graduate</a><br>
	<a href="graduates.php">List of office registered graduates</a><br>
	<a href="graduates_registered.php">List of user registered graduates</a><br>
	<a href="logout2.php">Logout</a>
	
</p>	
<?php	
}
?>

<?php
function contentReunionRegistration() {
?>
<h3>Registration for Reunion Weekend 2015</h3>
<?php

check_valid_user();

	if ($verification == 'No') {
		?><p>Please check back later, following the verification of your data.</p><?php
		}
	else {
		?><p>Please check back later, registration to the Reunion Weekend will be open from early spring 2015.</p><?php
	}
	?><a href="../../reunion/index.php" target="_blank">Reunion Weekend 2015 website</a></li><?php
}
?>

<?php
function contentAlumniCommunity() {
	
?>

	<h3>Alumni Community</h3>
	<p>
		Are you looking for your old classmates and friends? Find them with the help of the filter options below!<br><br>
		<a href="alumni_community_all.php">Show all registered graduates</a><br>
		<a href="alumni_community_filters.php">Filter registered graduates</a><br>	
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
?>
	<h3>Alumni Community</h3>

		<fieldset class="text">
			<legend class="text">Public profile</legend>
				<fieldset class="text2">
					<legend class="text2">Personal data</legend>
					<strong><?php echo $gname.' '.$fname; ?></strong><br>
					Family name: <?php echo $fname;?><br>
					First name: <?php echo $gname;?><br>
					Faculty: <?php echo $grad_faculty;?><br>
					Graduation Year: <?php echo $grad_year;?><br>
					E-mail: <?php echo $email;?><br>
				</fieldset>	
				
				<fieldset class="text2">
					<legend class="text2">Employment</legend>
		<?php
				if ($surveyFill) {
				?>
							Current workplace: <?php echo $workplace;?><br>
							Current position: <?php echo $position;?><br>
							Current title: <?php echo $title;?><br>
							Other workplace(s): <?php echo $other_work;?><br>
							Awards/Honors: <?php echo $awards;?><br>
				</fieldset>	
			<?php
				}
				else {
				?>
				This user has not uploaded professional data yet.
				<?php
			}
			?>			
		</fieldset>	
	
<?php
}
?>

<?php
function contentVerified() {
?>
	<h3>Verification Result</h3>
	<p>Verification data updated.</p>
	
<?php
}
?>