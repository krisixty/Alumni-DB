<?php	

		
		//Contacts Form Labels
		$fieldIsRequired = "Field is required! ";

		$permanentAdressLabel = "Street No\Street Name\PO.Box.: ";
		$addressPostalCodeLabel = "Postal Code (If you don't have postal code write '-'): ";
		$addressCityLabel = "City: ";
		$addressCountryLabel = "Country: ";
		$phoneNumberLabel = "Phone number: ";

		//Contact Form Regcheck
		?>
		<p class="main">
		<?php
		
		if (!$permadd) 
			{
			echo $permanentAdressLabel.$fieldIsRequired.'<br>';
			}
		else 
			{
			echo $permanentAdressLabel.$permadd.'<br>';
			}	
			
			
		if (!$add_pc) 
			{
			echo $addressPostalCodeLabel.$fieldIsRequired.'<br>';
			}	
		else 
			{
			echo $addressPostalCodeLabel.$add_pc.'<br>';
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
			
		if ((!$permadd)||(!$add_pc)||(!$add_city)||(!$add_country)||(!$phone)) {
			echo '<h3>'.'Registration failed! Please fill in all the required fields!'.'</h3></p>';
			$contactsRegCheck = false;
			do_html_footer();
			exit;	
			}
		else 
			{
			$contactsRegCheck = true;
			}	
?>			