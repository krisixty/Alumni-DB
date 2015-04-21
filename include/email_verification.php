<?php  
error_reporting(E_ALL & ~E_STRICT); /*Strict errort nem írja ki*/
require_once 'Mail.php';  
  
//verification emailhes posztok

$from = "alumni-confirmation@aas-szegedmed.hu";  
$conn = db_connect();

$verification=$_POST['verification'];
		
			if ($verification == 'Yes') {
								//emailhez adatok
						$result=$conn->query("SELECT * FROM graduate_data WHERE username='$graduate_username'");
						$sor=mysqli_fetch_array($result);
						$aid=$sor['AID'];
						$username=$sor['username'];
						$fname=$sor['fname'];
						$gname=$sor['gname'];
						$gender=$sor['gender'];
						$dob=$sor['dob'];
						$pob_country=$sor['pob_country'];
						$pob_city=$sor['pob_city'];
						$citizenship=$sor['citizenship'];
						$citizenship2=$sor['citizenship2'];

						$grad_faculty=$sor['grad_faculty'];
						$grad_year=$sor['grad_year'];

						//E-mail
						$result_email=$conn->query("SELECT * FROM user WHERE username='$username'");
						$sor=mysqli_fetch_array($result_email);
						$email=$sor['email'];

						//CONTACT DATA from GRADUATE_CONTACTS
						$result_contacts=$conn->query("SELECT * FROM graduate_contacts WHERE AID='$aid'");
						$sor=mysqli_fetch_array($result_contacts);
				
						if ($result_contacts->num_rows>0) //vizsgálja, hogy kitöltötte-e már a kapcsolatokat
							{
								$permadd=$sor['permadd'];
								$add_pc=$sor['add_pc'];
								$add_city=$sor['add_city'];
								$add_country=$sor['add_country'];
								$phone=$sor['phone'];
							}
				include 'alumni_verification_mail.php';
			}
			else {
				$result=$conn->query("SELECT * FROM graduate_data WHERE username='$graduate_username'");
						$sor=mysqli_fetch_array($result);
						$aid=$sor['AID'];
						
						$fname=$sor['fname'];
						$gname=$sor['gname'];
				include 'alumni_not_verified_mail.php';
			}		

  
/* SMTP server name, port, user/passwd */
include 'email_smtp.php';  


$headers = array ('Content-Type' => 'text/plain; charset="utf-8"', 'From' => $from,'To' => $to,'Subject' => $subject, 'Content-Transfer-Encoding' => '8bit');
//$headers = array ('From' => $from,'To' => $to,'Subject' => $subject);  
$smtp = &Mail::factory('smtp', $smtpinfo );  

$to2=', alumni.fs@med.u-szeged.hu';
$to3=', sixty.kri@gmail.com';
@$to=$to.$to2.$to3;
  
$mail = $smtp->send($to, $headers, $body);  
  
if (PEAR::isError($mail)) {  
  echo("<p>" . $mail->getMessage() . "</p>");  
 } else {  
  echo("<p>A confirmation email of the graduate's data verification has been sent to the graduate's e-mail address.</p>");  
 }  
?>  