<?php
session_start();
$pg_content = 'graduate_registered';
require_once('alumni_includes.php');
require_once('pagecontents.php'); 

		$aid=$_POST['AID']; 
		$conn = db_connect();
		$result=$conn->query("SELECT * FROM graduate_data WHERE AID='$aid'");
		$sor=mysqli_fetch_array($result);

		
		$fname = $sor['fname'];
		$gname = $sor['gname'];
		$gender=$sor['gender'];
		$dob=$sor['dob'];
		$pob_country=$sor['pob_country'];
		$pob_city=$sor['pob_city'];
		$citizenship=$sor['citizenship'];
		$citizenship2=$sor['citizenship2'];
		$grad_faculty=$sor['grad_faculty'];
		$grad_year=$sor['grad_year'];
		$diploma_serial=$sor['diploma_serial'];
		$diploma_qual=$sor['diploma_qual'];
		$grad_date=$sor['grad_date'];
		
		
		$graduate_username = $sor['username'];
		
		$result_email=$conn->query("SELECT email FROM user WHERE username='$graduate_username'");
		$e_sor=mysqli_fetch_array($result_email);
		
		$email=$e_sor['email'];	
		
		$diploma_average = $sor['diploma_average'];
		$signatory_rector = $sor['signatory_rector'];
		$signatory_dean = $sor['signatory_dean'];
		$studies_start = $sor['studies_start'];
		$start_semester = $sor['start_semester']; 

do_html_admin_header('');
check_valid_officer_user();
	display_login2_message();
	//mainContentDivOpen();
	adminMainPage();
		add_graduate_form();
	//mainContentDivClose();
do_html_footer();
?>





