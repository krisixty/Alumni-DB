<?php
$comm_sel = "selected";
$pg_content = 'alumni_community';
session_start();
require_once('alumni_includes.php');
require_once('pagecontents.php');

do_html_header('');
check_valid_user();



$grad_faculty = $_POST['grad_faculty'];
$grad_year = $_POST['grad_year'];
$citizenship = $_POST['citizenship'];

$conn = db_connect();


if($grad_faculty) {
	$graduates=$conn->query("SELECT * FROM graduate_data WHERE grad_faculty = '$grad_faculty' ORDER BY fname");
}

if($grad_year) {
	$graduates=$conn->query("SELECT * FROM graduate_data WHERE grad_year = '$grad_year' ORDER BY fname");
	}	
	
if($citizenship) {
	$graduates=$conn->query("SELECT * FROM graduate_data WHERE citizenship = '$citizenship' ORDER BY fname");
	
		if ($graduates->num_rows==0) {
		$graduates=$conn->query("SELECT * FROM graduate_data WHERE citizenship2 = '$citizenship' ORDER BY fname");
		} 
	
	}
/*	
	if ($graduates->num_rows>0) {
		$graduates=$conn->query("SELECT * FROM graduate_data WHERE citizenship2 = '$citizenship' ORDER BY fname");
		} 
	}	
*/	
if(($grad_year) && ($grad_faculty))  {
	$graduates=$conn->query("SELECT * FROM graduate_data WHERE grad_faculty = '$grad_faculty' AND grad_year = '$grad_year' ORDER BY fname");
	}

if(($grad_year)  && ($citizenship))  {
	$graduates=$conn->query("SELECT * FROM graduate_data WHERE grad_year = '$grad_year' AND citizenship = '$citizenship' ORDER BY fname");
	}	
	
if(($grad_faculty) && ($citizenship))  {
	$graduates=$conn->query("SELECT * FROM graduate_data WHERE grad_faculty = '$grad_faculty' AND citizenship = '$citizenship' ORDER BY fname");
	}	

if(($grad_year) && ($grad_faculty) && ($citizenship))  {
	$graduates=$conn->query("SELECT * FROM graduate_data WHERE grad_faculty = '$grad_faculty' AND grad_year = '$grad_year' AND citizenship = '$citizenship' ORDER BY fname");
	}
		
		
		/*
if($and_or == 'or') { 

	if(isset($grad_faculty)) {
		$graduates=$conn->query("SELECT * FROM graduate_data WHERE grad_faculty === '$grad_faculty' ORDER BY fname");
		
		if(isset($grad_year)) {
			$graduates=$conn->query("SELECT * FROM graduate_data WHERE grad_faculty = '$grad_faculty' OR grad_year = '$grad_year' ORDER BY fname");
		}
		
	if(isset($grad_year)) {
		$graduates=$conn->query("SELECT * FROM graduate_data WHERE grad_year = '$grad_year' ORDER BY fname");
		}	
		
	}
}	

if($and_or == 'and') { 


		
		if(isset($grad_year)) {
			$graduates=$conn->query("SELECT * FROM graduate_data WHERE grad_faculty = '$grad_faculty' AND grad_year = '$grad_year' ORDER BY fname");
		}
		
	if(isset($grad_year)) {
		$graduates=$conn->query("SELECT * FROM graduate_data WHERE grad_year = '$grad_year' ORDER BY fname");
		}		
		
	}
}
*/

	mainContentDivOpen();

		contentAlumniCommunity();
		
			?><h4>All Registered Graduates</h4><p><?php
			
			while($sor=mysqli_fetch_array($graduates))
				{
					print $sor['fname'].' ';
					print $sor['gname'].' - ';
					print $sor['grad_faculty'].' ' ;
					print $sor['grad_year'].'<br>';
				}
			?></p><?php
			
			
			$var = '';

// This will evaluate to TRUE so the text will be printed.
if ($var) {
    echo "This var is set so I will print.";
}
else
{
	echo 'not set';
}
			
	mainContentDivClose();

do_html_footer();
?>