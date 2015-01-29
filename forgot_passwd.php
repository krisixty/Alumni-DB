<?php
$pass_sel = 'selected';
require_once('alumni_includes.php');
do_html_header('Resetting Password');
$username=$_POST['username'];

	mainContentDivOpen();
			
		?>
		<h3>Reset password</h3>
		<p>  
		<?php  
	if($_SERVER["REQUEST_METHOD"] === "POST") {
        //form submitted

        //check if other form details are correct

        //verify captcha
        //$recaptcha_secret = " ";
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$recaptcha_secret."&response=".$_POST['g-recaptcha-response']);
        $response = json_decode($response, true);
        if($response["success"] === true)
        {
	  
			try
				{
				$password=reset_password($username);
				notify_password($username, $password);
				echo 'Your new password has been emailed to you.<br />';
				}

			catch (Exception $e)
				{
				echo 'Your password could not be reset. Please try again later.';
				}

		        }
        else
        {
            echo "You are a robot";
        }
    }		
	?>			
				</p>
			</div>
		</div>	
		<?php
	
do_html_url('login.php', 'Login');
do_html_footer();
  //}
?>
