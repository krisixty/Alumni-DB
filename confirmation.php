<?php
//echo 'Email küldés kikapcsolva';


try
	{
	send_alumni_email($username);
	}

catch (Exception $e)
	{
	echo 'Confirmation email could not be sent. Please try again later.';
	}

?>
