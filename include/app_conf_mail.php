<?php
include 'engmail_data.php';
//angol nyelvű visszajelzés a jelentkezésről: tárgy, szöveg
$engsub = "Confirmation of your University of Szeged Application";
$engmail = "Dear $gname $fname,\n\nThis is a confirmation mail of your following University of Szeged application: 

--This email is an automated notification from the AAS data system of the 
University of Szeged, Hungary, which is unable to receive replies.)--

Your username is $username

Applied program(s):
$medicine
$dentistry 
$pharmacy
$prep

Family name: $fname
First name: $gname
Gender: $gender
Place of Birth: $pob_city, $pob_country 
Date of Birth: $day-$month-$year
Citizenship: $citizen
Citizenship 2 (if any): $citizen2

Mother's maiden name:
Family name: $mfname
Given name: $mgname

Permanent Address: $permadd
Postal code: $add_pc
City: $add_city, Country: $add_country
Phone number: $phone
Proof of Identification: $proof_type, Number: $proof_num

Your first language: $firstlang

High school Leaving Examination: 
$hs_name, $hs_year
$hs_city, $hs_country

Studies following high school graduation(if any):
$studs

I am sending my application package to the: $pack
Name of your local representative (if any): $rep_name

------------------------------------------------------------------------------
Thank you for your interest in studying at the University of Szeged, Hungary.

Your application data are stored in our Academic and Admission System. 
We have received your on-line Application Form; however, in order to complete 
your application, please send the hard copy of the application form along with the 
other required documents to your local representative or if there is not any in your
country, directly to the following address by postal service or a courier company.

University of Szeged
Foreign Students Secretariat 
Dóm tér 12, 
Szeged 6720, HUNGARY


For further information on the application procedure, please contact your local 
representative or our admission team. For the list of representatives please visit 
the following website: http://www.studyhungary.hu

The University of Szeged will only disclose information to the representatives of 
Study Hungary who may contact you.

The University of Szeged will not divulge your personal data for direct marketing purposes.

Should you have any further questions, please do not hesitate to contact our admission officer 
Ms. Katalin E. Fehér at apply.fs@med.u-szeged.hu or at + 36 (62) 342-124

The Team of University of Szeged";  

?>