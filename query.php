<?php
$conn = db_connect();
		$result=$conn->query("SELECT AID FROM graduate_data WHERE username='$username'");
			$sor=mysqli_fetch_array($result);
			$aid=$sor['AID'];
			
		$result=$conn->query("SELECT * FROM reunion_registration WHERE AID='$aid'");
			$sor=mysqli_fetch_array($result);

$welcome_reception=$sor['welcome_reception'];
$sightseeing=$sor['sightseeing'];
$dinner=$sor['dinner'];	

$presentations=$sor['presentations'];	
$students_meet=$sor['students_meet'];	
$cme_ws=$sor['cme_ws'];	
$gala_dinner=$sor['gala_dinner'];
	
$picnic=$sor['picnic'];	
?>