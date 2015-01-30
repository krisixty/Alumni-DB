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
		} 
  else 
		{
    // Your code here to handle a successful verification
	session_start();

		register($username, $email, $passwd);
		$_SESSION['valid_user']=$username;
		
		$conn = db_connect();
		$insert_graduate=$conn->query("INSERT INTO graduate_data (username, fname, gname, gender, dob, pob_country, pob_city, citizenship, citizenship2, grad_faculty, grad_year, verification) VALUES ('$username', '$fname', '$gname', '$gender', '$dob', '$pob_country', '$pob_city', '$citizenship', '$citizenship2', '$grad_faculty', '$grad_year', 'No')");	

		//lekérdezi az AID-t és verificationt a graduate_data táblából
		$result=$conn->query("SELECT * FROM graduate_data WHERE username='$username'");
		$sor=mysqli_fetch_array($result);
		$aid=$sor['AID'];
		$verification=$sor['verification'];
		
		if (!$insert_graduate)
			{
			throw new Exception('Could not register you in database. Please try again later.');
			}
			try
				{
				send_alumni_email($username);
				}
			catch (Exception $e)
				{
				echo 'Confirmation email could not be sent. Please try again later.';
				}
				
			do_html_footer();
			header("Location:member.php" );
	}	 
?>