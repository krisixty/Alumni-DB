<?php 
$pg_content = 'graduates';
session_start();
require_once('alumni_includes.php');
?>
<!DOCTYPE html>
<html>
    <head>
	    <title>Graduates</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="tablesorter/themes/blue/style.css">
		<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="tablesorter/jquery.tablesorter.js"></script> 
		<script>
		$(document).ready(function() 
			{ 
				$("#myTable").tablesorter(); 
			} 
		); 
		</script>
		
    </head>
<body>
<?php
require_once('pagecontents.php'); 
check_valid_officer_user();
display_login_message();
//alumni_body();
adminMainPage();
$conn = db_connect();
$graduates=$conn->query("SELECT * FROM graduate_officedata ORDER BY fname");
?>


<table id="myTable" class="tablesorter">

	<thead>
	<tr>
        <th>Family name</th>
        <th>First name</th>
        <th>Gender</th>
		<th>Dob</th>
		<th>Pob country</th>
		<th>Pob city</th>
		<th>Citizenship</th>
		<th>Citizenship 2</th>
		<th>Grad. faculty</th>
        <th>Grad. year</th>
		<th>Diploma serial</th>
		<th>Diploma qual.</th>
		<th>Grad. date</th>
		<th>E-mail</th>	
		<th>Dipl. avg.</th>
		<th>Sign. rector</th>
		<th>Sign. dean</th>
		<th>Stud. start a.yr.</th>
		<th>sem.</th>

	</tr>
	</thead>
	
	<tbody>	
<?php
while($sor=mysqli_fetch_array($graduates))
	{
	?>
        <tr>
        <td><?php print $sor['fname'];?></td>
        <td><?php print $sor['gname'];?></td>
        <td><?php print $sor['gender'];?></td>
		<td><?php print $sor['dob'];?></td>
		<td><?php print $sor['pob_country'];?></td>
		<td><?php print $sor['pob_city'];?></td>
		<td><?php print $sor['citizenship'];?></td>
		<td><?php print $sor['citizenship2'];?></td>
		<td><?php print $sor['grad_faculty'];?></td>
		<td><?php print $sor['grad_year'];?></td>
		<td><?php print $sor['diploma_serial'];?></td>
		<td><?php print $sor['diploma_qual'];?></td>
		<td><?php print $sor['grad_date'];?></td>
		<td><?php print $sor['email'];?></td>
		<td><?php print $sor['diploma_average'];?></td>
		<td><?php print $sor['signatory_rector'];?></td>
		<td><?php print $sor['signatory_dean'];?></td>
		<td><?php print $sor['studies_start'];?></td>
		<td><?php print $sor['start_semester'];?></td>
		
        <td>
<form action="graduate.php" method="post" id="form1">
<input type="hidden" id="o_aid" name="o_aid" value="<?php print $sor['o_aid']?>" />
<input type="submit" name="Submit" id="Submit" value="+" />
</form></td>
       </tr>
	<?php
	}
?>
</tbody>
</table>
<?php 
require_once('pagecontents.php'); 
adminMainPage();
?>
</body>
</html>




