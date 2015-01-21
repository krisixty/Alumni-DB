<?php

require_once('useful_fns.php');

//$pg_content = 'survey_confirm';




$workplace = trim($_POST['workplace']);
		$names=array($workplace);
		foreach ($names as $name) 
			{ 
			$workplace=ucname(("{$name}")); //tömbbe rakja a név elemeit és az ucname funkcióval átalakítja (usefuls_fns.php-ban található)
			}

$position = trim($_POST['position']);
		$names=array($position);
		foreach ($names as $name) 
			{ 
			$position=ucname(("{$name}")); //tömbbe rakja a név elemeit és az ucname funkcióval átalakítja (usefuls_fns.php-ban található)
			}
			
$title = trim($_POST['title']);
		$names=array($title);
		foreach ($names as $name) 
			{ 
			$title=ucname(("{$name}")); //tömbbe rakja a név elemeit és az ucname funkcióval átalakítja (usefuls_fns.php-ban található)
			}


$other_work = trim($_POST['other_work']);
$awards = trim($_POST['awards']);
$contribute = trim($_POST['contribute']);
$opinion = trim($_POST['opinion']);
$comment = trim($_POST['comment']);

//ENGLISH
	$licensing = trim($_POST['licensing']);
	$licensing_type = trim($_POST['licensing_type']);
	$licensing_exp = trim($_POST['licensing_exp']);
	$employment_country = trim($_POST['employment_country']);
	$after_graduation = trim($_POST['after_graduation']);
	
//GERMAN
	$after_phys = trim($_POST['after_phys']);
	$wait = trim($_POST['wait']);
	$med_y_n = trim($_POST['med_y_n']);
	$grad_place = trim($_POST['grad_place']);
	$grad_yr_germ = trim($_POST['grad_yr_germ']);	
?>




























