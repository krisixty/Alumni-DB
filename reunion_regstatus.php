<?php

if ($reunionRegistered) {
		$conn = db_connect();
				$username=$_SESSION['valid_user'];
				
				$result=$conn->query("SELECT AID FROM graduate_data WHERE username='$username'");
					$sor=mysqli_fetch_array($result);
					$aid=$sor['AID'];
					
				$result=$conn->query("SELECT * FROM reunion_registration WHERE AID='$aid'");
					$sor=mysqli_fetch_array($result);

						$welcome_reception = $sor['welcome_reception'];
						$sightseeing = $sor['sightseeing'];
						$dinner = $sor['dinner'];	

						$presentations = $sor['presentations'];	
						$students_meet = $sor['students_meet'];	
						$cme_ws = $sor['cme_ws'];	
						$gala_dinner = $sor['gala_dinner'];
						
						$picnic = $sor['picnic'];	
						
						$dayOneFee = $sor['dayOneFee'];
						$dayTwoFee = $sor['dayTwoFee'];
						$dayThreeFee = $sor['dayThreeFee'];
						$regFee = $sor['regFee'];
						$totalFee = $sor['totalFee'];
						
						
		}				


		//Day One
		if (($welcome_reception) || ($sightseeing) || ($dinner)) {
			
			echo $dayOneLng.'<br>';
		
				if ($welcome_reception) {
					echo $welcome_receptionLng.'<br>';
					}
				if ($sightseeing) {
					echo $sightseeingLng.'<br>';
					}
				if ($dinner) {
					echo $dinnerLng.'<br>';
				}
		}
	
		//Day Two
		if (($presentations) || ($students_meet) || ($cme_ws) || ($gala_dinner)) {
			echo '<br>'.$dayTwoLng.'<br>';
			
				if ($presentations) {
					echo $presentationsLng.'<br>';
					}
				if ($students_meet) {
					echo $students_meetLng.'<br>';
					}
				if ($cme_ws) {
					echo $cme_wsLng.'<br>';
					}
				if ($gala_dinner) {
					echo $gala_dinnerLng.'<br>';
					}
		}
		
		//Day Three
		if ($picnic) {
			echo '<br>'.$dayThreeLng.'<br>';
				echo $picnicLng.'<br><br>';
				}
		
		echo 'Fee for day one: '.$dayOneFee.' EUR<br>';
		echo 'Fee for day two: '.$dayTwoFee.' EUR<br>';
		echo 'Fee for day three: '.$dayThreeFee.' EUR<br>';
		echo 'Registration fee: '.$regFee.' EUR<br>';
		echo 'Total fee calculated: '.$totalFee.' EUR<br><br>';

?>