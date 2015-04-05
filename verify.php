<?php
session_start();
require_once('alumni_includes.php');
require_once('pagecontents.php');
$pg_content = 'verified';


$verification=$_POST['verification'];
$aid=$_POST['AID']; 
//verification emailhes posztok
include('reg_posts.php');

$conn = db_connect();
$result=$conn->query("SELECT * FROM graduate_data WHERE AID='$aid'");

$row=mysqli_fetch_array($result);
$graduate_username = $row['username'];


do_html_admin_header('');
check_valid_officer_user();
	display_login2_message();
	adminMainPage();

		$update_graduate_verification=$conn->query
		("UPDATE graduate_data SET verification='$verification' WHERE AID='$aid'");
		
		if(!$update_graduate_verification)
		{
		throw new Exception ('Could not connect to database server.');
		}
		else
		{
		//verif: yes, no feltételt ide beírni
				try
					{
					send_verification_email($graduate_username);
					}
				catch (Exception $e)
					{
					echo 'Confirmation email could not be sent. Please try again later.';
					}
					
		//alumniMainContent();
		?>
			<form action="verification.php" method="post" id="form1">
			<input name="AID" type="hidden" value="<?php print $aid ?>" />
			<input type="submit" name="Submit" id="Submit" value="Back" />
			</form>
		<?php
		}
			
do_html_footer();
?>





