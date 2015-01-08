<?php
$pass_sel = 'selected';
session_start();
require_once('alumni_includes.php');
require_once('pagecontents.php');
do_html_header('Changing password');
 
// create short variable names
$old_passwd = $_POST['old_passwd'];
$new_passwd = $_POST['new_passwd'];
$new_passwd2 = $_POST['new_passwd2'];

	try {
		
	check_valid_user();
		
	mainContentDivOpen();
		
		?>
		<h3>Change password</h3>
		<p>
		<?php 
		if (!filled_out($_POST))
			{
			throw new Exception('You have not filled out the form completely. Please try again.');
			}
		if ($new_passwd!=$new_passwd2)
			{
			throw new Exception('Passwords entered were not the same.  Not changed.');
			}
		if (strlen($new_passwd)>16 || strlen($new_passwd)<6)
			{
			throw new Exception('New password must be between 6 and 16 characters.  Try again.');
			}
		// attempt update
		change_password($_SESSION['valid_user'], $old_passwd, $new_passwd);
		echo 'Password changed.';
		?>
		</p>
		<?php 
		}
	  
	catch (Exception $e) {
		echo $e->getMessage();
		}
		
	mainContentDivClose();

do_html_footer();
?>