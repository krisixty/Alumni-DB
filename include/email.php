<?php  
error_reporting(E_ALL & ~E_STRICT); /*Strict errort nem írja ki*/
require_once 'Mail.php';  
  
$from    = "sztekhok@gmail.com";  
/*$to      = "sixty.kri@gmail.com";  */
$subject = "New Alumni DB password";  
$body    = "Dear $username,\n\nThis is to inform you that your University of Szeged Alumni Databank password has been changed to $password ";  
  
/* SMTP server name, port, user/passwd */  
$smtpinfo["host"] = "ssl://smtp.gmail.com";  
$smtpinfo["port"] = "465";  
$smtpinfo["auth"] = true;  
$smtpinfo["username"] = "sztekhok@gmail.com";  
$smtpinfo["password"] = "englishprogram";  
  
$headers = array ('From' => $from,'To' => $to,'Subject' => $subject);  
$smtp = &Mail::factory('smtp', $smtpinfo );  


  
$mail = $smtp->send($to, $headers, $body);  
  
if (PEAR::isError($mail)) {  
  echo("<p>" . $mail->getMessage() . "</p>");  
 } else {  
  echo("<p>Message successfully sent!</p>");  
 }  
?>  