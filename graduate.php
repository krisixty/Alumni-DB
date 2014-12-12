<?php
require_once('alumni_includes.php');
//session_start();
//do_html_header('');
//check_valid_user();
//display_officer_menu();
//$username=$_SESSION['valid_user'];



$o_aid=$_POST['o_aid']; 
$conn = db_connect();
$result=$conn->query("SELECT * FROM graduate_officedata WHERE o_aid='$o_aid'");
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
$email=$sor['email'];	
$diploma_average = $sor['diploma_average'];
$signatory_rector = $sor['signatory_rector'];
$signatory_dean = $sor['signatory_dean'];
$studies_start = $sor['studies_start'];
$start_semester = $sor['start_semester']; 

do_html_header('');
add_graduate_form();
do_html_footer();
?>





