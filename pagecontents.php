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
function contentAbout() {
?>
<h3>About Us</h3>
<!--<p class="main">Alumni adatbankról pár szóban.</p>-->
<pre>
Dear Graduates,
We have realized our long-standing ambition by founding the Alumni program. Officially organized, it is the first time that our former students will be able to get into contact and keep in touch with one another and the alma mater. With the help of the website, you can share information regarding your careers, its main stages, awards etc. You can also upload photos of yourselves and your experiences in Szeged and revive long-forgotten friendships.

As a part of our program, let us invite you to participate in a bit of a market research – it only takes a few minutes to answer the questions. Your feedback is important to us, including answers to questions such as what kinds of licensing procedures you had to take part in, where you got employed, what kinds of experiences you have acquired after having received your diploma. With the help of your participation, our aim is to enhance the quality of education at our university and to be able to provide future graduate students with the most useful guidance.
 
The inception of the Alumni program is particularly timely because the English Language Medical Program of the University of Szeged is celebrating its 30th anniversary in 2015, on which occasion we are organizing a major meeting between September 18 and 20, 2015. We hope that many of you will be able to make it to Szeged.

We are jointly working with the Szeged University Medical Alumni Association (SUMAA). Please visit our website where you can browse interviews and the newsletter distributed regularly – you are sure to find something of interest.

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
<p class="main">Tel.: English Office: (+36) 62/545-458 | German Office: (+36) 62/546-865</p>
<p class="main">Fax: (+36) 62/545-028 | Address: Hungary 6720 Szeged, Dóm tér 12.</p>
<p class="main">office.fs@med.u-szeged.hu</p>
<?php
}
?>

<?php
function contentMemberPage() {
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
	
	global $permadd;
	global $add_pc;
	global $add_city;
	global $add_country;
	global $phone;
	
	global $contactsFill;
?>
<h3>Your Alumni Databank Account</h3>
<?php check_valid_user();?>
<p class="main">Your Alumni Databank ID number is <?php echo $aid;?>.</p>
<p class="main">Your personal data is
<?php
	if ($verification == 'N') {
	?>
		not verified yet.
	<?php
	}
?>

<?php
	if ($contactsFill)
		{
	?>
		<p class="main"><?php echo $fname.' '.$gname.'<br>'.
		$dob.' '.$pob_city.' '.$pob_country.'<br>'.
		$citizenship.'<br>'.
		'Graduation: '.$grad_faculty.', '.$grad_year;?></p>
		<p class="main">Contacts:<br>
		<?php echo $permadd.' '.$add_pc.'<br>'. 
		$add_city.', '.$add_country.'<br>'.
		$phone;?>
		</p>

		<p class="main"><a href="yourcontacts.php">Edit your contacts info</a></p>
		<?php
		}
	else
		{
	?>
		<p class="main"><a href="yourcontacts.php">Give us your contacts info</a></p>
		<?php
		}
	?>
		
<p class="main">
Thank you for your registration to our Alumni databank. <br>
After the verification of your data –appr. within 3 workdays- you will be informed via e-mail about the activation of your account.<br>
Until then you are welcome to fill out our <a href="survey.php">Alumni questionnaire</a>.<br>
We highly appreciate your cooperation in advance.<br>
<br>
The Alumni Team
</p>

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
	global $licensing;
	global $licensing_type;
	global $licensing_exp;
	global $employment_country;
	global $after_graduation;
	global $workplace;
	global $position;
	global $title;
	global $other_work;
	global $awards;
	global $contribute;
	global $opinion;
	global $comment;
	
	global $surveyFill;
	//check_valid_user();
?>
<p class="main">
Thank you for filling in our questionnaire! We hope to see you at the Alumni Reunion Weekend organized to celebrate the 30th anniversary of the English language Medical Program between the 18-20. of September 2015 in Szeged!</p> 
<p class="main">
For more information go directly to our <a href="http://szegedmed.hu" target="_blank">website</a>, our <a href="https://www.linkedin.com/groups/Szeged-University-Medical-Alumni-Association-6663708/about?report%2Esuccess=wfYwey9x_vDJSupNXsg1N65PA9qU9Vhzo4c4fywdI9xE44HFPya15swP53hapENqWjZzGAJPIIEAIAHSWOlIFtsVzjzNV8gSQXHzOpKzXXAaXF4VZyOq42GdI8ExV8hVWGa1V0LI5kVtFytIKy414AMPAFZaXFCSPsc1V57ldO-tqkE-P5tddH3AfpZt5j4Iv9-q3TrPIIEC42ZIbjmq32Md99AxX4C1ItuDkt2" target="_blank">LinkedIn</a> or <a href="https://www.facebook.com/szegedalumni" target="_blank">Facebook</a> page.
</p>
<h3>Your Survey Answers</h3>
<p class="main">

<?php
	if ($surveyFill)
		{
		include 'survey_questions.php';
		echo $licensingQuestion.'<br>'.$licensing.'<br><br>';
		echo $licensing_typeQuestion.'<br>'.$licensing_type.'<br><br>';
		echo $licensing_expQuestion.'<br>'.$licensing_exp.'<br><br>';
		echo $employment_countryQuestion.'<br>'.$employment_country.'<br><br>';
		echo $after_graduationQuestion.'<br>'.$after_graduation.'<br><br>';
		echo $workplaceQuestion.'<br>'.$workplace.'<br><br>';
		echo $positionQuestion.'<br>'.$position.'<br><br>';
		echo $titleQuestion.'<br>'.$title.'<br><br>';
		echo $other_workQuestion.'<br>'.$other_work.'<br><br>';
		echo $awardsQuestion.'<br>'.$awards.'<br><br>';
		echo $contributeQuestion.'<br>'.$contribute.'<br><br>';
		echo $opinionQuestion.'<br>'.$opinion.'<br><br>';
		echo $commentQuestion.'<br>'.$comment.'<br><br>';
		}	
?>		
</p>
<p class="main"><a href="survey_edit.php">Edit your answers</a></p>		
<?php
}
?>

<?php
function adminMainPage() {
?>
<h3>Alumni databank Admin v1.0</h3>
<p class= "main">
	<a href="main.php">Admin mainpage</a><br>
	<a href="add_graduate_form.php">Add new graduate</a><br>
	<a href="graduates.php">List of graduates</a>
</p>	
<?php	
}

