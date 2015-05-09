<?php 
$pg_content = 'graduates_registered';
session_start();
require_once('alumni_includes.php');
require_once('pagecontents.php'); 

do_html_admin_header(); 
check_valid_officer_user();
display_login2_message();
adminMainPage();

$conn = db_connect();

//functiont csinálni belőle:
display_graduate_filter();

$grad_faculty = $_POST['grad_faculty'];

if ($grad_faculty) {
$graduates=$conn->query("SELECT * FROM graduate_data INNER JOIN user ON graduate_data.username = user.username WHERE grad_faculty = '$grad_faculty' ORDER BY fname");
}
else {
	$graduates=$conn->query("SELECT * FROM graduate_data INNER JOIN user ON graduate_data.username = user.username ORDER BY fname");
}
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
		<th>Email</th>
		<th>Verified</th>
		<th>Verification</th>

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
		<td><?php print $sor['email'];?></td>
		<td><?php print $sor['verification'];?></td>
	
        <td>
<form action="verification.php" method="post" id="form1">
<input type="hidden" id="AID" name="AID" value="<?php print $sor['AID']?>" />
<input type="submit" name="Submit" id="Submit" value="Verfication" />
</form></td>

        <td>
<form action="graduate_registered.php" method="post" id="form1">
<input type="hidden" id="AID" name="AID" value="<?php print $sor['AID']?>" />
<input type="submit" name="Submit" id="Submit" value="+" />
</form></td>


       </tr>
	<?php
	}
?>
</tbody>
</table>
<?php 
do_html_footer();
?>




