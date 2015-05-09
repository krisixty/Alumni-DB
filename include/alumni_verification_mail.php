<?php


/*Contacts :
Permanent Address: $permadd
Postal code: $add_pc
City: $add_city, Country: $add_country
Phone number: $phone
*/

//angol nyelvű visszajelzés a jelentkezésről: tárgy, szöveg
$subject = "Confirmation of your University of Szeged Alumni Database Registration";
$body = "Dear $gname $fname,\n\n

Thank you for your registration to the University of Szeged Alumni Database.
Your account has been verified. Now you can use all of the Alumni Database functions. 
Log into the system, look for your former classmates and your long-lost acquaintances. Check out what they were up to after their studies and how they are doing now. Spread the word about the community and our Reunion Weekend so that more people can enjoy the benefits of the Alumni program.

Your data registered in the system:
Username: $username
Alumni Database ID number: $aid

Family name: $fname
First name: $gname
Gender: $gender
Date of Birth: $dob
Place of Birth: $pob_city, $pob_country 
Citizenship: $citizenship
Citizenship 2 (if any): $citizenship2

Graduation: $grad_faculty, $grad_year

E-mail: $email

Should you have questions, feel free to contact us:
Foreign Students' Secretariat
Anita Takács
Alumni Coordinator
H-6720 Szeged
Dóm tér 12.
T: +3662546-867
alumni.fs@med.u-szeged.hu
www.alumni.szegedmed.hu
www.szegedmed.hu

------------------------------------------------------------------------------
This email is an automated notification from the Alumni Database of the University of Szeged, Hungary, which is unable to receive replies.";  

?>