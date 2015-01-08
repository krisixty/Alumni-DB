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
?>
		<div class="grid-container">
			<div class="grid-9">
			<h3>You are not logged in! <a href="<?php echo $url;?>"><?php echo $name;?></a></h3>
			</div>
		 </div>
<?php
	}
// END OF OUTPUT URL AS LINK AND BR
?>

<?php
function do_html_header() {
 // print an HTML header

?>
<!DOCTYPE html>
<html>
<head>
	<title>AlumniDB_TestSession4</title>
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/alumni4_style.css">
</head>
<body>
	<header class="main-header">
	<h1>UNIVERSITY OF SZEGED Alumni Databank</h1>
	<p class="header">Faculty of Medicine, Faculty of Dentistry, Faculty of Pharmacy
	Foreign Language Programs</p>
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
?>
	<div class="main-banner">
		<h1>Lorem</h1>
	</div>
<?php
}
?>

<?php
function display_links() {
 	global $ind_sel;
	global $memb_sel;
	global $surv_sel;
	global $log_sel;
	global $reg_sel;
	global $cont_sel;
	global $reun_sel;
	global $lout_sel;
	global $pass_sel;

?>
		<ul class="grid-12 main-nav">
						<?php
				if (isset($_SESSION['valid_user']))
					{
					?>
					<li><a href="index1.php" class="<?php echo $ind_sel; ?>">Home</a></li>
					<li><a href="member.php" class="<?php echo $memb_sel; ?>">My Alumni</a></li>
					<li><a href="survey.php" class="<?php echo $surv_sel; ?>">Survey</a></li>
					<li><a href="reunion_registration.php" class="<?php echo $reun_sel; ?>">Reunion Weekend Registration</a></li> 
					<li><a href="contact_us1.php" class="<?php echo $cont_sel; ?>">Contact Us</a></li>
					<li><a href="change_passwd_form.php" class="<?php echo $pass_sel; ?>">Password</a></li>
					<li><a href="logout.php" class="<?php echo $lout_sel; ?>">Logout</a></li> 
					<?php
					}	
				else {
					?>
					<li><a href="index.php" class="<?php echo $ind_sel; ?>">Home</a></li>
					<li><a href="login.php" class="<?php echo $log_sel; ?>">Login</a></li> 
					<li><a href="register_form.php" class="<?php echo $reg_sel; ?>">Register</a></li> 
					<li><a href="../../reunion/index.php" target="_blank">Reunion 2015</a></li>
					<li><a href="contact_us.php" class="<?php echo $cont_sel; ?>">Contact Us</a></li>
					<?php
				}
				?>
		</ul>
<?php
}
?>

<?php
function display_secondary_nav() {
?>
		<ul class="secondary-nav">
			<li><a href="#" target="_blank">Trailer</a></li>
			<li><a href="../alumni/2/index.php" target="_blank">Join our Alumni Community</a></li>
			<li><a href="http://sumaa.org" target="_blank">SUMAA</a></li>
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
			if ($pg_content == 'logout') {
					display_logout_message();
				}
			if ($pg_content == 'registration_form') {
					display_registration_form();
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
			
			mainContentDivClose();	
}
?>

<?php
function do_html_footer()
 // print an HTML footer
{
?>

	<footer class="main-footer">
		        <p>University Szeged Foreign Language Programs - Alumni Databank &copy; <a href="http://aas-szegedmed.hu/kristof" target="_blank">Kristóf Szilágyi</a> 2014-2015</p>
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
?>
	<h3>Login</h3>
	
		<form action="member.php" method="post">
			<label for="username">Username</label>
			<input type="text" id="username" name="username">
			<label for="password" >Password</label>
			<input type="password" id="password" name="passwd">
			<button type="submit">Login</button>
			<p><a href='register_form.php'>Create an Alumni DB account.</a></p>
			<p><a href='forgot_form.php'>Forgot your password?</a></p>
		 </form>
<?php
	}
// END OF DISPLAY LOGIN FORM 
?>

<?php
// DISPLAY OFFICER LOGIN FORM

	function display_officer_login_form() {
		
		display_menu_icon();
?>
		<form action="officer.php" method="post">
			<label for="username">Username</label>
			<input type="text" id="username" name="username">
			<label for="password" >Password</label>
			<input type="password" id="password" name="passwd">
			<button type="submit">Login</button>
			<p><a href='forgot_form.php'>Forgot your password?</a></p>
		 </form>
<?php
	}
// END OF DISPLAY OFFICER LOGIN FORM 
?>

<?php
// DISPLAY REGISTRATION FORM
	function display_registration_form() {
?>
	<h3>Register</h3>
	
		<form method='post' action='cap.php'>
		<p>Create a user account:</p>
			
		<fieldset>
		
			<legend><span class="number">1</span>Personal data</legend>
        	
				<label for="fname">Family Name:</label>
				<input type="text" id="fname" name="fname" maxlength="100">
				
				<label for="gname">Given Name:</label>
				<input type="text" id="gname" name="gname" maxlength="100">
				
				<label for="gender">Gender:</label>
				<select id="gender" name="gender">
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
				
				<label for="dob">Date of Birth:</label>
				<input type="date" id="dob" name="dob">
				
				Place of Birth:
				<label for="pob_city">City:</label>
				<input type="text" id="pob_city" name="pob_city" maxlength="50">
				
				<label for="pob_country">Country:</label>
				<select id="pob_country" name="pob_country">
						<?php include 'countries.php';?> 
				</select>		
				
				<label for="citizenship">Citizenship</label>
				<select id="citizenship" name="citizenship">
						<?php include 'nationalities.php';?>  
				</select>
				
				<label for="citizenship2">Citizenship 2 (if any)</label>
				<select id="citizenship2" name="citizenship2">
						<?php include 'nationalities.php';?>  
				</select>
			
		</fieldset>	
		
		<fieldset>
		
			<legend><span class="number">2</span>Information Regarding Graduation</legend>
        	
				<label for="grad_faculty">Which Faculty have you graduated from?</label>
				<select id="grad_faculty" name="grad_faculty">
					<option value="Medicine">Medicine</option>
					<option value="Pharmacy">Pharmacy</option>
					<option value="Dentistry">Dentistry</option>
					<option value="Medicine, 2-year German Program">Medicine, 2-year German Program</option>
				</select>
				
				<label for="grad_year">Year of graduation/Physikum:</label>
				<select id="grad_year" name="grad_year">
					<option value="">-- year --</option>
						<?php
							  $y=date('Y');
							  for($i=$y; $i>1990; $i--) 
									{?>
									<option value="<?php echo $i; ?>"><?php echo $i; ?></option>   
						<?php 		} ?>
				</select>
			
		</fieldset>	
		
		<fieldset>
		
			<legend><span class="number">3</span>User data</legend>
			
			<label for="email">Email address:</label>
			<input type='email' id="email" name='email' maxlength="100">
			
			<label for="username">Preferred username*:</label>
			<input type='text' id="username" name='username' maxlength="16">
			
			<label for="passwd">Password**:</label>
			<input type='password' id="passwd" name='passwd' maxlength="16">
			
			<label for="passwd2">Confirm password:</label>
			<input type='password' id="passwd2" name='passwd2' maxlength="16">
			
			<p>*max 16 chars</p>
			<p>**between 6 and 16 chars</p>
		
		</fieldset>
			
        <button type="submit">Register</button>
			
		</form>
<?php 
	}
// END OF REGISTRATION FORM
?>

<?php
// DISPLAY OFFICER REGISTRATION FORM
	function display_officer_registration_form() {
		
		display_menu_icon();
	?>
	  
		<form method='post' action='cap_officers.php'>
			<p>Create a user account:</p>
			
			<h1>Academic officer user registration</h1>
		
		<fieldset>
					
			<label for="email">Email address:</label>
			<input type='email' id="email" name='email' maxlength="100">
			
			<label for="username">Preferred username*:</label>
			<input type='text' id="username" name='username' maxlength="16">
			
			<label for="passwd">Password**:</label>
			<input type='password' id="passwd" name='passwd' maxlength="16">
			
			<label for="passwd2">Confirm password:</label>
			<input type='password' id="passwd2" name='passwd2' maxlength="16">
			
			<p>*max 16 chars</p>
			<p>**between 6 and 16 chars</p>
		
		</fieldset>
			
        <button type="submit">Register</button>
			
		</form>
<?php 
	}
// END OF OFFICER REGISTRATION FORM
?>


<?php
// DISPLAY ADMIN GRADUATE REGISTRATION FORM
	function add_graduate_form() {
		
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

		//display_menu_icon();
	?>
	  
		<form method='post' action='add_graduate.php'>
			<p>Add new graduate to Alumni DB:</p>
			
			<h1>Graduate Registration</h1>
		
		<fieldset>
		
			<legend><span class="number">1</span>Personal data</legend>
			
				<input type="hidden" id="o_aid" name="o_aid" value="<?php print $o_aid;?>" />
        	
				<label for="fname">Family Name:</label>
				<input type="text" id="fname" name="fname" maxlength="100" value="<?php print $fname;?>">
				
				<label for="gname">Given Name:</label>
				<input type="text" id="gname" name="gname" maxlength="100" value="<?php print $gname;?>">
				
				<label for="gender">Gender:</label>
				<select id="gender" name="gender">
					<option><?php print $gender;?></option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
				
				<label for="dob">Date of Birth:</label>
				<input type="date" id="dob" name="dob" value="<?php print $dob;?>">
				
				Place of Birth:
				<label for="pob_city">City:</label>
				<input type="text" id="pob_city" name="pob_city" maxlength="50" value="<?php print $pob_city;?>">
				
				<label for="pob_country">Country:</label>
				<select id="pob_country" name="pob_country">
					<option><?php print $pob_country;?></option>
					<?php include 'countries.php';?> 
				</select>		
				
				<label for="citizenship">Citizenship</label>
				<select id="citizenship" name="citizenship">
						<option><?php print $citizenship;?></option>
						<?php include 'nationalities.php';?>  
				</select>
				
				<label for="citizenship2">Citizenship 2 (if any)</label>
				<select id="citizenship2" name="citizenship2">
						<option><?php print $citizenship2;?></option>
						<?php include 'nationalities.php';?>  
				</select>
			
		</fieldset>	
		
		<fieldset>
		
			<legend><span class="number">2</span>Information Regarding Graduation</legend>
        	
				<label for="grad_faculty">Which Faculty have you graduated from?</label>
				<select id="grad_faculty" name="grad_faculty">
					<option><?php print $grad_faculty;?></option>
					<option value="Medicine">Medicine</option>
					<option value="Pharmacy">Pharmacy</option>
					<option value="Dentistry">Dentistry</option>
				</select>
				
				<label for="grad_year">Year of graduation:</label>
				<select id="grad_year" name="grad_year">
					<option><?php print $grad_year;?></option>
					<option value="">-- year --</option>
						<?php
							  $y=date('Y');
							  for($i=$y; $i>1990; $i--) 
									{?>
									<option value="<?php echo $i; ?>"><?php echo $i; ?></option>   
						<?php 		} ?>
				</select>
			
		</fieldset>	
		
		<fieldset>
		
			<legend><span class="number">3</span>Additional data</legend>
			
			<label for="email">Email address:</label>
			<input type='email' id="email" name='email' maxlength="100" value="<?php print $email;?>">
			
			<label for="diploma_serial">Diploma serial number</label>
			<input type="text" id="diploma_serial" name="diploma_serial" maxlength="100" value="<?php print $diploma_serial;?>">
			
			<label for="diploma_qual">Diploma qualification</label>
			<select id="diploma_qual" name="diploma_qual">
					<option><?php print $diploma_qual;?></option>
					<option value="RITE">RITE</option>
					<option value="CUM LAUDE">CUM LAUDE</option>
					<option value="SUMMA CUM LAUDE">SUMMA CUM LAUDE</option>
			</select>
			
			<label for="grad_date">Graduation date</label>
			<input type="date" id="grad_date" name="grad_date" value="<?php print $grad_date;?>">
			
			<label for="diploma_average">Diploma average</label>
			<input type="text" id="diploma_average" name="diploma_average" maxlength="4" value="<?php print $diploma_average;?>">
			
			<label for="signatory_rector">Signatory Rector</label>
			<input type="text" id="signatory_rector" name="signatory_rector" maxlength="50" value="<?php print $signatory_rector;?>">
			
			<label for="signatory_dean">Signatory Dean</label>
			<input type="text" id="signatory_dean" name="signatory_dean" maxlength="50" value="<?php print $signatory_dean;?>">
			
			<label for="studies_start">Beginning of studies (Year)</label>
			<select id="studies_start" name="studies_start">
					<option><?php print $studies_start;?></option>
					<option value="">-- academic year --</option>
						<?php
							  $y=date('Y')-6;
							  //$per="/";
							  for($i=$y; $i>1990; $i--) 
									{
									$j=$i+1;?>
									<option><?php print $i.'/'.$j;?></option>   
						<?php 		}?>
			</select>
			
			<label for="start_semester">(Semester)</label>
			<select id="start_semester" name="start_semester">
					<option><?php print $start_semester;?></option>
					<option value="1">1</option>
					<option value="2">2</option>
			</select>
		
		
		</fieldset>
			
        <button type="submit">Register</button>
			
		</form>
<?php 
	}
// END OF ADMIN GRADUATE REGISTRATION FORM 
?>


<?php 
// DISPLAY SURVEY FORM
	function display_survey_form() {
	
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

?>
	<!--Survey form -->
      <form action="register_survey.php" method="post">
			
		<fieldset>
		
			<legend><span class="number">1</span>Further Studies / Employment – professional profile, public information</legend>
			
				<label for="employment_country">Which was your country of choice you sought employment in after graduation?</label>
				<select id="employment_country" name="employment_country">
				<option> <?php print $employment_country;?></option>
					<?php include 'countries.php';?> 
				</select>
				
				<label for="after_graduation">Activities after graduation</label>
				<select id="after_graduation" name="after_graduation">
				<option> <?php print $after_graduation;?></option>
					<option value="PhD">PhD</option>
					<option value="Residency">Residency</option>
					<option value="Other">Other</option>
				</select>
				
				Where do you work at the moment? 
				<label for="workplace">Workplace:</label>
				<input type="text" id="workplace" name="workplace" maxlength="200" value="<?php print $workplace;?>">
				<label for="position">Position:</label>
				<input type="text" id="position" name="position" maxlength="50" value="<?php print $position;?>">
				<label for="title">Title:</label>
				<input type="text" id="title" name="title" maxlength="50" value="<?php print $title;?>">
				
				<label for="other_work">Other workplaces after graduation:</label>
				<textarea id="other_work" name="other_work"><?php print $other_work;?></textarea>
				
				<label for="awards">What awards/honors have you received during your medical career?</label>
				<textarea id="awards" name="awards"><?php print $awards;?></textarea>
				
		</fieldset>	
		
		<fieldset>
		
			<legend><span class="number">2</span>Licensing Process – for ALUMNI Team use only</legend>
			
				<label for="licensing">Did you have to take part in any licensing process?</label>
				<select id="licensing" name="licensing">
					<option> <?php print $licensing;?></option>
					<option value="Yes">Yes</option>
					<option value="No">No</option>
				</select>
			
				<label for="licensing_type">If yes, in which licensing process did you take part?</label>
				<input type="text" id="licensing_type" name="licensing_type" value="<?php print $licensing_type;?>">
				
				<label for="licensing_exp">What were your experiences?</label>
				<textarea id="licensing_exp" name="licensing_exp"><?php print $licensing_exp;?></textarea>
			
		</fieldset>	
		
		<fieldset>
		
			<legend><span class="number">3</span>Comments on the Szeged Experience – for ALUMNI Team use only</legend>
			
				<label for="contribute">How has the University of Szeged contributed to your life?</label>
				<textarea id="contribute" name="contribute"><?php print $contribute;?></textarea>
        	
				<label for="opinion">What are the strengths and weaknesses of the program in your opinion?</label>
				<textarea id="opinion" name="opinion"><?php print $opinion;?></textarea>
				
				<label for="comment">If you have any comments that you would like to make about any areas not covered in this survey, please do so now.</label>
				<textarea id="comment" name="comment"><?php print $comment;?></textarea>
				
		</fieldset>		
				
        <button type="submit">Submit</button>
        
      </form>
<?php
}
// END OF SURVEY FORM
?>

<?php
// DISPLAY CONTACTS FORM
function display_contacts_form() {
	
	global $permadd;
	global $add_pc;
	global $add_city;
	global $add_country;
	global $phone;
?>
	
	<h3>Contacts</h3>

      <form action="register_contacts.php" method="post">
		
		<fieldset>
					
				Permanent Address:
				<label for="permadd">Street No\Street Name\PO.Box.</label>
				<input type="text" id="permadd" name="permadd" maxlength="100" value="<?php print $permadd; ?>">
				
				<label for="add_pc">Postal Code (If you don't have postal code write '-')</label>
				<input type="text" id="add_pc" name="add_pc" maxlength="20" value="<?php print $add_pc; ?>">
				
				<label for="add_city">City:</label>
				<input type="text" id="add_city" name="add_city" maxlength="50" value="<?php print $add_city; ?>">
				
				<label for="add_country">Country:</label>
				<select id="add_country" name="add_country">
					<option><?php print $add_country; ?></option>
					<?php include 'countries.php';?>
				</select>
				
				<label for="phone">Phone number:</label>
				<input type="text" id="phone" name="phone" maxlength="20" value="<?php print $phone; ?>">
				
		</fieldset>
			
        <button type="submit">Submit</button>
        
      </form>
<?php
}
// END OF CONTACTS FORM
?>


<?php
// DISPLAY CHANGE PASSWORD FORM
	function display_change_password_form() {
?>
	<h3>Change password</h3>

		<form action='change_passwd.php' method='post'>
			<label for="old_passwd">Old password:</label>
			<input type='password' id='old_passwd' name='old_passwd' size=16 maxlength=16>
			<label for="new_passwd">New password:</label>
			<input type='password' id='new_passwd' name='new_passwd' size=16 maxlength=16>
			<label for="new_passwd2">Repeat new password:</label>
			<input type='password' id='new_passwd2' name='new_passwd2' size=16 maxlength=16>
			<button type='submit'>Change password</button>
		</form>	
<?php
}
?>


<?php 
// DISPLAY FORGOT PASSWORD FORM 
// display HTML form to reset and email password
	function display_forgot_form() {
?>
	<h3>Reset password</h3>
	
		<form action='cap2.php' method='post'>
			<label for="username">Enter your username:</label>
			<input type='text' id="username" name='username' size=16 maxlength=16></td></tr>
			<button type='submit'>Reset password</button>
		</form>	
<?php
}
// END OF FORGOT FORM
?>


<?php
function display_logout_message() {
	global $old_user;
	global $result_dest;
?>
	

	<h3>Logout</h3>
		<p>
		<?php
		if (!empty($old_user)) 
		{
			if ($result_dest)
			{
			echo 'Logged out.' ?> <a href="login.php">Log in</a> <?php ;
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

