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
		
	//User Data
	$email=$_POST['email'];
	$username=$_POST['username'];
	$passwd=$_POST['passwd'];
	$passwd2=$_POST['passwd2'];
?>	