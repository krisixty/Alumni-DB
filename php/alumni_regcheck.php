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
		echo $citizenshipLabel.$citizenship.'<br>';
		}
		


	if ((!$fname) || (!$gname) || (!$gender) || (!$pob_country) || (!$pob_city) || 
		(!$dob) || (!$citizenship))
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

