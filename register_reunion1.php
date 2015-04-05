<?php
$welcome_reception = $_POST['welcome_reception'];
$sightseeing = $_POST['$sightseeing'];
$dinner = $_POST['dinner'];
$presentations = $_POST['presentations'];
$students_meet = $_POST['students_meet'];
$cme_ws = $_POST['cme_ws'];
$gala_dinner = $_POST['gala_dinner'];
$picnic = $_POST['picnic'];


if(isset($welcome_reception) && 
   $welcome_reception == 1) 
{
    echo "Need wheelchair access.";
}
else
{
    echo "Do not Need wheelchair access.";
} 