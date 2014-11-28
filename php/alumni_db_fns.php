<?php
function db_connect() 
	{
	$result=new mysqli('server9.mysql-host.eu','aassdhu1_admin1','Abraxas_1039','aassdhu1_alumni');

	/* change character set to utf8 */
	if (!$result->set_charset("utf8")) 
		{
		/*printf("Error loading character set utf8: %s\n", $result->error);*/
		$result->error;
		} 	
	else 
		{
		/*printf("Current character set: %s\n", $result->character_set_name());*/
		$result->character_set_name();
		}
	
	if(!$result)
		{
		throw new Exception ('Could not connect to database server.');
		}
	else
		{
		return $result;
		}
}
?>