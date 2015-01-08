<?php
//ini_set('include_path', '../include'); LOCALHOSTON!
//meghatározza az include könyvtár útvonalát. 
ini_set("include_path", '/home/aassdhu1/public_html/test/alumni/2/include:' . ini_get("include_path")  ); //WEBEN
ob_start(); //Turn on output buffering
require_once('data_valid_fns.php');
require_once('alumni_db_fns.php');
require_once('user_auth_fns.php');
require_once('display_alumni4_fns.php');
require_once('useful_fns.php');
?>