<?php
//ini_set('include_path', '../include'); LOCALHOSTON!
//meghatározza az include könyvtár útvonalát. 
ini_set("include_path", '/home/ocskonet/include/test:' . ini_get("include_path")  ); //WEBEN
ob_start(); //Turn on output buffering
require_once('data_valid_fns.php');
require_once('alumni_db_fns.php');
require_once('user_auth_fns.php');
require_once('display_alumni_grad_ui_fns.php');
require_once('display_alumni_office_ui_fns.php');
require_once('useful_fns.php');

include 'alumniLangEn.php';

?>

