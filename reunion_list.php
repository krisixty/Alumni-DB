<?php 
$pg_content = 'graduates';
session_start();
require_once('alumni_includes.php');
require_once('pagecontents.php'); 

do_html_admin_header(); 
check_valid_officer_user();
display_login2_message();
adminMainPage();

$conn = db_connect();
$result_reunion=$conn->query("SELECT * FROM graduate_data INNER JOIN reunion_registration ON graduate_data.AID = reunion_registration.AID LEFT JOIN user ON user.username = graduate_data.username ORDER BY fname");
?>


<table id="myTable" class="tablesorter">

	<thead>
	<tr>
		<th>No.</th>
		<th>Family name</th>
        <th>First name</th>
        <th>Gender</th>
		<!--
		<th>Dob</th>
		<th>Pob country</th>
		<th>Pob city</th>
		<th>Citizenship</th>
		<th>Citizenship 2</th>
		-->
		<th>G. Faculty</th>
        <th>G. Year</th>
		<th>Email</th>
		<th>Welc.R.</th>
		<th>Sight.</th>
		<th>Din.</th>
		<th>Present.</th>
		<th>Meeting</th>
		<th>CME</th>
		<th>Gala</th>
		<th>Pic.</th>
		<th>D1Fee</th>
		<th>D2Fee</th>
		<th>D3Fee</th>
		<th>RegF</th>
		<th>TotalF</th>		
	</tr>
	</thead>
	
	<tbody>	
<?php
	$i=1;
while($sor=mysqli_fetch_array($result_reunion))
	{
	?>
        <tr>
			<td><?php print $i;?></td>
			<td><?php print $sor['fname'];?></td>
			<td><?php print $sor['gname'];?></td>
			<td><?php print $sor['gender'];?></td>
			<!--
			<td><?php // print $sor['dob'];?></td>
			<td><?php // print $sor['pob_country'];?></td>
			<td><?php // print $sor['pob_city'];?></td>
			<td><?php // print $sor['citizenship'];?></td>
			<td><?php // print $sor['citizenship2'];?></td>
			-->
			<td><?php print $sor['grad_faculty'];?></td>
			<td><?php print $sor['grad_year'];?></td>
			<td><?php print $sor['email'];?></td>	
			<td><?php if ($sor['welcome_reception'] == 1) { print 'Yes';} else { print ' ';}?></td>
			<td><?php if ($sor['sightseeing'] == 1) { print 'Yes';} else { print ' ';}?></td>		
			<td><?php if ($sor['dinner'] == 1) { print 'Yes';} else { print ' ';}?></td>
			<td><?php if ($sor['presentations'] == 1) { print 'Yes';} else { print ' ';}?></td>
			<td><?php if ($sor['students_meet'] == 1) { print 'Yes';} else { print ' ';}?></td>
			<td><?php if ($sor['cme_ws'] == 1) { print 'Yes';} else { print ' ';}?></td>
			<td><?php if ($sor['gala_dinner'] == 1) { print 'Yes';} else { print ' ';}?></td>
			<td><?php if ($sor['picnic'] == 1) { print 'Yes';} else { print ' ';}?></td>	
			<td><?php print $sor['dayOneFee'];?></td>
			<td><?php print $sor['dayTwoFee'];?></td>
			<td><?php print $sor['dayThreeFee'];?></td>
			<td><?php print $sor['regFee'];?></td>
			<td><?php print $sor['totalFee'];?></td>			
       </tr>
	<?php
	$i++;
	}
?>
</tbody>
</table>
<?php
require_once('pagecontents.php'); 
do_html_footer();
?>



