<?php

//POSTS
	//Personal Data
	$fname=trim($_POST['fname']); 
		$names=array($fname);
			
		foreach ($names as $name) 
			{ 
			$fname=ucname(("{$name}")); //tömbbe rakja a név elemeit és az ucname funkcióval átalakítja (usefuls_fns.php-ban található)
			}	
			
	$gname=trim($_POST['gname']);
		$names=array($gname);
			
		foreach ($names as $name) 
			{ 
			$gname=ucname(("{$name}")); //tömbbe rakja a név elemeit és az ucname funkcióval átalakítja (usefuls_fns.php-ban található)
			}

	$gender=$_POST['gender'];

	$dob=$_POST['dob'];

	$pob_country=$_POST['pob_country'];

	$pob_city=trim($_POST['pob_city']);
		$names=array($pob_city);
			
		foreach ($names as $name) 
			{ 
			$pob_city=ucname(("{$name}")); //tömbbe rakja a név elemeit és az ucname funkcióval átalakítja (usefuls_fns.php-ban található)
			}		

	$citizenship=trim($_POST['citizenship']);
	$citizenship=str_replace('\' ', '\'', ucwords(str_replace('\'', '\' ', strtolower($citizenship))));
	
	$citizenship2=trim($_POST['citizenship2']);
	$citizenship2=str_replace('\' ', '\'', ucwords(str_replace('\'', '\' ', strtolower($citizenship2))));

	//Graduation Data
	$grad_faculty=$_POST['grad_faculty'];
	$grad_year=$_POST['grad_year'];
		
	//Additional Data
	$email=$_POST['email'];
	$diploma_serial=$_POST['diploma_serial'];
	$diploma_qual=$_POST['diploma_qual'];
	$grad_date=$_POST['grad_date'];
	
	$diploma_average = trim($_POST['diploma_average']);
	
	$signatory_rector = trim($_POST['signatory_rector']);
			$names=array($signatory_rector);
			
		foreach ($names as $name) 
			{ 
			$signatory_rector=ucname(("{$name}")); //tömbbe rakja a név elemeit és az ucname funkcióval átalakítja (usefuls_fns.php-ban található)
			}	
	
	$signatory_dean = trim($_POST['signatory_dean']);
			$names=array($signatory_dean);
			
		foreach ($names as $name) 
			{ 
			$signatory_dean=ucname(("{$name}")); //tömbbe rakja a név elemeit és az ucname funkcióval átalakítja (usefuls_fns.php-ban található)
			}	
	
	$studies_start = $_POST['studies_start'];
	$start_semester = $_POST['start_semester']; 
	
?>	