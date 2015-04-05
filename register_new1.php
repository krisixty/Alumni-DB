<?php
require_once('alumni_includes.php');

    if($_SERVER["REQUEST_METHOD"] === "POST")
    {
        //form submitted

        //check if other form details are correct

        //verify captcha
        //$recaptcha_secret = " ";
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$recaptcha_secret."&response=".$_POST['g-recaptcha-response']);
        $response = json_decode($response, true);
        if($response["success"] === true) {
				
			do_html_header('');


		//Registration posts goes here
			include 'reg_posts.php';
		//Registration post ends here

		//Registration check goes here
			include 'registration_variables.php';
			include 'alumni_regcheck.php';
		//Registration check ends here



		session_start();

			try
				{
					
					if (!filled_out($_POST))
						{
						throw new Exception ('You have not filled the form out correctly. Please go back and try again.');
						
						}
					if (!valid_email($email))
						{
						throw new Exception ('That is not a valid email address. Please go back and try again.');
						}
					if ($passwd!=$passwd2)
						{
						throw new Exception ('The passwords you have entered do not match. Please go back and try again.');
						}
					if ((strlen($passwd)<6)||(strlen($passwd2)>16))
						{
						throw new Exception ('Your password must be between 6 and 16 characters. Please go back and try again.');	
						}
		
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
				}	//END OF TRY

			catch (Exception $e)
					{
					do_html_header('Problem:');	
					echo $e->getMessage();
					do_html_footer();
					exit;
					}


				
        }
        else
        {
            echo "You are a robot";
        }
    }






































?>