<?php
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
		echo $dateOfBirthLabel;
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
		echo $citizenshipLabel.$citizen.'<br>';
		}

	if (!$permadd)
		{
		echo $permanentAddressLabel.$fieldIsRequired.'<br>';	
		}
	else
		{
		echo $permanentAddressLabel.$permadd.'<br>';
		}

	if (!$add_pc)
		{
		echo $postalCodeLabel.$fieldIsRequired.'<br>';	
		}
	else
		{
		echo $postalCodeLabel.$add_pc.'<br>';
		}

	if (!$add_city)
		{
		echo $addressCityLabel.$fieldIsRequired.'<br>';	
		}
	else
		{
		echo $addressCityLabel.$add_city.'<br>';
		}

	if (!$add_country)
		{
		echo $addressCountryLabel.$fieldIsRequired.'<br>';	
		}
	else
		{
		echo $addressCountryLabel.$add_country.'<br>';
		}

	if (!$phone)
		{
		echo $phoneNumberLabel.$fieldIsRequired.'<br>';	
		}
	else
		{
		echo $phoneNumberLabel.$phone.'<br>';
		}
		
		
	if (!$email)
		{
		echo $emailLabel.$fieldIsRequired.'<br>';	
		}
	else
		{
		echo $emailLabel.$email.'<br>';
		}	
		


	if ((!$fname) || (!$gname) || (!$gender) || (!$pob_country) || (!$pob_city) || 
		(!$dob) || (!$citizenship) || (!$permadd) || (!$add_pc) ||
		(!$add_city) || (!$add_country) || (!$phone) || (!$email))
		{
		echo '<h3>'.'Registration failed!'.'</h3>';
		/*do_html_footer();*/
		exit;
		}
	else
		{
		echo '<h3>'.'Registration successful';
		/*display_confirmation();*/
		}	

?>

