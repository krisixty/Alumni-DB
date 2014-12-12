<?php
require_once('alumni_includes.php');

do_html_header('');

	//Registration posts goes here
		include 'add_grad_posts.php';
	//Registration post ends here

	//Registration test goes here
		include 'registration_variables.php';
		
	
	$o_aid=$_POST['o_aid'];	
	
	//SURVEY DATA from SURVEY
	$conn = db_connect();
	$result_o_aid = $conn->query("SELECT * FROM graduate_officedata WHERE o_aid='$o_aid'");	
	$sor=mysqli_fetch_array($result_o_aid);
	
	if ($result_o_aid->num_rows>0)	
		{
		$update_graduate_officedata=$conn->query
		("UPDATE graduate_officedata SET fname='$fname', gname='$gname', gender='$gender', dob='$dob', pob_country='$pob_country', pob_city='$pob_city', citizenship='$citizenship',  citizenship2='$citizenship2', grad_faculty='$grad_faculty', grad_year='$grad_year', diploma_serial='$diploma_serial', diploma_qual='$diploma_qual', grad_date='$grad_date', email='$email', diploma_average='$diploma_average', signatory_rector='$signatory_rector', signatory_dean='$signatory_dean', studies_start='$studies_start', start_semester='$start_semester' WHERE o_aid='$o_aid'");
		echo 'Data updated'.'<br>';
		}
	else 
		{
	$insert_graduate=$conn->query("INSERT INTO graduate_officedata (fname, gname, gender, dob, pob_country, pob_city, citizenship, citizenship2, grad_faculty, grad_year, diploma_serial, diploma_qual, grad_date, email, diploma_average, signatory_rector, signatory_dean, studies_start, start_semester) VALUES ('$fname', '$gname', '$gender', '$dob', '$pob_country', '$pob_city', '$citizenship', '$citizenship2', '$grad_faculty', '$grad_year', '$diploma_serial', '$diploma_qual', '$grad_date', '$email', '$diploma_average', '$signatory_rector', '$signatory_dean', '$studies_start', '$start_semester')");	
		echo 'Data inserted'.'<br>';
		}
?>
<p class="main">	
<?php
	//Personal data variables
		echo $familyNameLabel.$fname.'<br>';
		echo $firstNameLabel.$gname.'<br>';
		echo $genderLabel.$gender.'<br>';
		echo $dateOfBirthLabel.$dob.'<br>';
		echo $placeOfBirthCountryLabel.$pob_country.'<br>';
		echo $placeOfBirthCityLabel.$pob_city.'<br>';
		echo $citizenshipLabel.$citizenship.'<br>';
		echo $citizenship2Label.$citizenship2.'<br>';
	
	//Graduation data variables
		echo $graduationFacultyLabel.$grad_faculty.'<br>';
		echo $graduationYearLabel.$grad_year.'<br>';
		
	//Additional data variables
		echo $diplomaSerialLabel.$diploma_serial.'<br>';
		echo $diplomaQualLabel.$diploma_qual.'<br>';
		echo $gradDateLabel.$grad_date.'<br>';
		echo $emailLabel.$email.'<br><br>';
		
		echo $diplomaAverageLabel.$diploma_average.'<br>';
		echo $signatoryRectorLabel.$signatory_rector.'<br>';
		echo $signatoryDeanLabel.$signatory_dean.'<br>';
		echo $studiesStartLabel.$studies_start.'<br>';
		echo $startSemesterLabel.$start_semester.'<br>';
		?>
		
		<p class="main">
		<a href="add_graduate_form.php">Add new graduate</a><br>
		<a href="graduates.php">List of graduates</a><br>
		<a href="main.php">Main menu</a>
		</p>
		
		<form action="graduate.php" method="post" id="form1">
		<input name="o_aid" type="hidden" value="<?php print $o_aid ?>" />
		<input type="submit" name="Submit" id="Submit" value="Back" />
		</form>
		

</p>		
<?php
do_html_footer();		 
?>