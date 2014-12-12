<html>
<body> <!-- the body tag is required or the CAPTCHA may not show on some browsers -->
<!-- your HTML content -->

<form method="post" action="register_new.php">
<?php	
require_once('alumni_includes.php');

	include 'reg_posts.php';

/*
$email=$_POST['email'];
$username=$_POST['username'];
$passwd=$_POST['passwd'];
$passwd2=$_POST['passwd2'];
*/
?>
	<input name="fname" type="hidden" value="<?php print $fname?>" />
	<input name="gname" type="hidden" value="<?php print $gname?>" />
	<input name="gender" type="hidden" value="<?php print $gender?>" />
	<input name="dob" type="hidden" value="<?php print $dob?>" />
	<input name="pob_country" type="hidden" value="<?php print $pob_country?>" />
	<input name="pob_city" type="hidden" value="<?php print $pob_city?>" />
	<input name="citizenship" type="hidden" value="<?php print $citizenship?>" />
	<input name="citizenship2" type="hidden" value="<?php print $citizenship2?>" />

	<input name="grad_faculty" type="hidden" value="<?php print $grad_faculty?>" />
	<input name="grad_year" type="hidden" value="<?php print $grad_year?>" />

	<input name="email" type="hidden" value="<?php print $email?>" />
	<input name="username" type="hidden" value="<?php print $username?>" /> 
	<input name="passwd" type="hidden" value="<?php print $passwd?>" /> 
	<input name="passwd2" type="hidden" value="<?php print $passwd2?>" />  
 <?php
require_once('recaptchalib.php');
include 'capkeys.php';
echo recaptcha_get_html($publickey);
?>
<input type="submit" name="Submit" id="Submit" value="Submit" />
</form>
</body>
</html>