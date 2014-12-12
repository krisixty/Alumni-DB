<?php

require_once('useful_fns.php');

//$pg_content = 'survey_confirm';

$licensing = trim($_POST['licensing']);
$licensing_type = trim($_POST['licensing_type']);
$licensing_exp = trim($_POST['licensing_exp']);
$employment_country = trim($_POST['employment_country']);
$after_graduation = trim($_POST['after_graduation']);


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

//Test echoes
?>
<p class = "main">

	<?php /*
	echo $licensingQuestion.'<br>'.$licensing.'<br>';
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
	*/?>
	<!--<a href="survey.php">OK</a>-->
</p>



























