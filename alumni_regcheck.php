<?php
mainContentDivOpen();
?>
<h3>Registration Check</h3>
<p>
<?php
//Personal data check
	if (!$fname)
		{
		echo $familyNameLabel.$fieldIsRequired.'<br>';	
		}
	else
		{
		echo $familyNameLabel.$fname.'<br>';
		}
		

	if (!$gname)
		{
		echo $firstNameLabel.$fieldIsRequired.'<br>';	
		}
	else
		{
		echo $firstNameLabel.$gname.'<br>';
		}
	
	
	if (!$gender)
		{
		echo $genderLabel.$fieldIsRequired.'<br>';	
		}
	else
		{
		echo $genderLabel.$gender.'<br>';
		}
		
	if (!$dob)
		{
		echo $dateOfBirthLabel.$fieldIsRequired.'<br>';	
		}
	else
		{
		echo $dateOfBirthLabel.$dob.'<br>';
		}	

	if (!$pob_city)
		{
		echo $placeOfBirthCityLabel.$fieldIsRequired.'<br>';	
		}
	else
		{
		echo $placeOfBirthCityLabel.$pob_city.'<br>';
		}	
		
	if (!$pob_country)
		{
		echo $placeOfBirthCountryLabel.$fieldIsRequired.'<br>';	
		}
	else
		{
		echo $placeOfBirthCountryLabel.$pob_country.'<br>';
		}

	if (!$citizenship)
		{
		echo $citizenshipLabel.$fieldIsRequired.'<br>';	
		}
	else
		{
		echo $citizenshipLabel.$citizenship.'<br>';
		}
		
	if ($citizenship2)
		{
		echo $citizenship2Label.$citizenship2.'<br>';
		}

//Graduation data check
	if (!$grad_faculty)
		{
		echo $graduationFacultyLabel.$fieldIsRequired.'<br>';	
		}
	else
		{
		echo $graduationFacultyLabel.$grad_faculty.'<br>';
		}

	if (!$grad_year)
		{
		echo $graduationYearLabel.$fieldIsRequired.'<br>';	
		}
	else
		{
		echo $graduationYearLabel.$grad_year.'<br>';
		}

		
		
//User data check
	if (!$email)
		{
		echo $emailLabel.$fieldIsRequired.'<br>';
		}
	else
		{
		echo $emailLabel.$email.'<br>';
		}
	
	if (!$username)
		{
		echo $usernameLabel.$fieldIsRequired.'<br>';
		}
	else
		{
		echo $usernameLabel.$username.'<br>';
		}	
		
	if (!$passwd)
		{
		echo $passwdLabel.$fieldIsRequired.'<br>';
		}
	else
		{
			if ($passwd!==$passwd2)
			{
				echo $passwdLabel.'The passwords you have entered do not match.'.'<br>';
				$passwd = false;
			}
			else if ((strlen($passwd)<6)||(strlen($passwd2)>16))
			{
				echo $passwdLabel.'Your password must be between 6 and 16 characters.'.'<br>';	
				$passwd = false;
			}
			else {
				echo $passwdLabel.'filled'.'<br>';
			}
		}		
		
	if (!$passwd2)
		{
		echo $passwd2Label.$fieldIsRequired.'<br>';
		}
	else
		{
		echo $passwd2Label.'filled'.'<br>';
		}		
?>
</p>		
<?php	

	if ((!$fname) || (!$gname) || (!$gender) || (!$pob_country) || (!$pob_city) || 
		(!$dob) || (!$citizenship) || (!$grad_faculty) || (!$grad_year) || (!$email) || (!$username) || (!$passwd) || (!$passwd2)) 
		{
		echo '<h3>'.'Registration failed! Please fill in all the required fields!'.'</h3></p>';
		mainContentDivClose();
		do_html_footer();
		exit;
		}
	else
		{
		mainContentDivClose();
		}	

?>

