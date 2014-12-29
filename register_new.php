<?php
require_once('alumni_includes.php');

do_html_header('');


	//Registration posts goes here
		include 'reg_posts.php';
	//Registration post ends here

	//Registration check goes here
		include 'registration_variables.php';
		include 'alumni_regcheck.php';
	//Registration check ends here


  require_once('recaptchalib.php');
  include 'capkeys.php';
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } else 
  {
    // Your code here to handle a successful verification
	

session_start();

	register($username, $email, $passwd);
	$_SESSION['valid_user']=$username;
	
	//	do_html_header('Registration successful');
	//	display_application_info();
	//	do_html_url('aas.php', 'Go to the application form and submit your application.');
	
	$conn = db_connect();
	$insert_graduate=$conn->query("INSERT INTO graduate_data (username, fname, gname, gender, dob, pob_country, pob_city, citizenship, citizenship2, grad_faculty, grad_year, verification) VALUES ('$username', '$fname', '$gname', '$gender', '$dob', '$pob_country', '$pob_city', '$citizenship', '$citizenship2', '$grad_faculty', '$grad_year', 'No')");	

	//lekérdezi az AID-t és verificationt a graduate_data táblából
	$result=$conn->query("SELECT * FROM graduate_data WHERE username='$username'");
	$sor=mysqli_fetch_array($result);
	$aid=$sor['AID'];
	$verification=$sor['verification'];
	/*
	//Kettős állampolgárság
	if($citizenship2)
	{
	//lekérdezi az AID-t a graduate_data táblából
	$aid_q=$conn->query("SELECT AID FROM graduate_data WHERE username='$username'");
	$sor=mysqli_fetch_array($aid_q);
	$aid=$sor['AID'];
	$insert_citizenship2= $conn->query("INSERT INTO citizenship2 (AID, citizenship2) VALUES ('$aid', '$citizenship2')");
	}
	*/
	do_html_footer();

	}	 
?>