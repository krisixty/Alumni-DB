<?php
if ($familyRegistered) {
		$conn = db_connect();
				$username=$_SESSION['valid_user'];
				
				$result=$conn->query("SELECT AID FROM graduate_data WHERE username='$username'");
					$sor=mysqli_fetch_array($result);
					$aid=$sor['AID'];
					
				$result=$conn->query("SELECT * FROM reunion_family WHERE AID='$aid'");
					$sor=mysqli_fetch_array($result);


					$family_members = $sor['family_members'];
				//Day One
					$welcome_memb_o12 = $sor['welcome_memb_o12'];
					$welcome_memb_412 = $sor['welcome_memb_412'];
					$welcome_memb_u4 = $sor['welcome_memb_u4'];
					$sight_memb_o12 = $sor['sight_memb_o12'];
					$sight_memb_412 = $sor['sight_memb_412'];
					$sight_memb_u4 = $sor['sight_memb_u4'];
					$dinner_memb_o12 = $sor['dinner_memb_o12'];
					$dinner_memb_412 = $sor['dinner_memb_412'];
					$dinner_memb_u14 = $sor['dinner_memb_u14'];
				//Day Two
					$gdinner_memb_o12 = $sor['gdinner_memb_o12'];
					$gdinner_memb_412 = $sor['gdinner_memb_412'];
					$gdinner_memb_u14 = $sor['gdinner_memb_u14'];
				//Day Three	
					$pic_memb_o12 = $sor['pic_memb_o12'];
					$pic_memb_412 = $sor['pic_memb_412'];
					$pic_memb_u14 = $sor['pic_memb_u14'];
					
					$dayOneFee = $sor['dayOneFee'];
					$dayOneAtt = $sor['dayOneAtt'];
					$dayTwoFee = $sor['dayTwoFee'];
					$dayTwoAtt = $sor['dayTwoAtt'];
					$dayThreeFee = $sor['dayThreeFee'];
					$dayThreeAtt = $sor['dayThreeAtt'];
					$totalFee = $sor['totalFee'];
}
	
	if ($family_members) {
		echo $family_members.'<br><br>';
	}
	
	if (($welcome_memb_o12) || ($welcome_memb_412) || ($welcome_memb_u4) ||
	($sight_memb_o12) || ($sight_memb_412) || ($sight_memb_u4) ||
	($dinner_memb_o12) || ($dinner_memb_412) || ($dinner_memb_u14)) {
		
		//Day One
		echo $dayOneLng.'<br>';
	}
	
		//Day One, Welcome Reception
		if ( ($welcome_memb_o12) || ($welcome_memb_412) || ($welcome_memb_u4) )  {
			
			echo '<br>'.$welcome_receptionLng.'<br>';
			
				if ($welcome_memb_o12) {
					echo $famMembOver12Lng.' '.$welcome_memb_o12.'<br>';
					}
				if ($welcome_memb_412) {
					echo $famMembBtw412Lng.' '.$welcome_memb_412.'<br>';
					}
				if ($welcome_memb_u4) {
					echo $famMembUnder4Lng.' '.$welcome_memb_u4.'<br>';
				}
		}
		
		//Day One, Sightseeing
		if ( ($sight_memb_o12) || ($sight_memb_412) || ($sight_memb_u4) )  {
			
			echo '<br>'.$sightseeingLng.'<br>';
			
				if ($sight_memb_o12) {
					echo $famMembOver12Lng.' '.$sight_memb_o12.'<br>';
					}
				if ($sight_memb_412) {
					echo $famMembBtw412Lng.' '.$sight_memb_412.'<br>';
					}
				if ($sight_memb_u4) {
					echo $famMembUnder4Lng.' '.$sight_memb_u4.'<br>';
				}
		}
		
		//Day One, Dinner
		if ( ($dinner_memb_o12) || ($dinner_memb_412) || ($dinner_memb_u14) )  {
			
			echo '<br>'.$dinnerLng.'<br>';
			
				if ($dinner_memb_o12) {
					echo $famMembOver12Lng.' '.$dinner_memb_o12.'<br>';
					}
				if ($dinner_memb_412) {
					echo $famMembBtw412Lng.' '.$dinner_memb_412.'<br>';
					}
				if ($dinner_memb_u4) {
					echo $famMembUnder4Lng.' '.$dinner_memb_u4.'<br>';
				}
		}
	
	//Day Two, Gala-dinner	
		if ( ($gdinner_memb_o12) || ($gdinner_memb_412) || ($gdinner_memb_u14) )  {
			
			echo '<br>'.$dayTwoLng.'<br>';
			echo '<br>'.$gala_dinnerLng.'<br>';
			
				if ($gdinner_memb_o12) {
					echo $famMembOver12Lng.' '.$gdinner_memb_o12.'<br>';
					}
				if ($gdinner_memb_412) {
					echo $famMembBtw412Lng.' '.$gdinner_memb_412.'<br>';
					}
				if ($gdinner_memb_u4) {
					echo $famMembUnder4Lng.' '.$gdinner_memb_u4.'<br>';
				}
		}
				
	//Day Three, Picnic
		if ( ($pic_memb_o12) || ($pic_memb_412) || ($pic_memb_u14) )  {
		
			echo '<br>'.$dayThreeLng.'<br>';
			echo '<br>'.$gala_dinnerLng.'<br>';
			
				if ($pic_memb_o12) {
					echo $famMembOver12Lng.' '.$pic_memb_o12.'<br>';
					}
				if ($pic_memb_412) {
					echo $famMembBtw412Lng.' '.$pic_memb_412.'<br>';
					}
				if ($pic_memb_u4) {
					echo $famMembUnder4Lng.' '.$pic_memb_u4.'<br>';
				}
		}

		echo '<br>Total fee for day one: '.$dayOneFee.' EUR for '.$dayOneAtt.' Family Members.<br>';
		echo 'Total fee for day two: '.$dayTwoFee.' EUR for '.$dayTwoAtt.' Family Members.<br>';
		echo 'Total fee for day three: '.$dayThreeFee.' EUR for '.$dayThreeAtt.' Family Members.<br><br>';
		echo 'Total fee calculated: '.$totalFee.' EUR';
?>