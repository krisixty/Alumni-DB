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
$result_reunion=$conn->query("SELECT * FROM graduate_data INNER JOIN reunion_family ON graduate_data.AID = reunion_family.AID LEFT JOIN user ON user.username = graduate_data.username ORDER BY fname");
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
        <th>G. Yr.</th>
		<th>Email</th>
		<th>Family Members</th>
		<th>Welc.R.o12</th>
		<th>Welc.R.4-12</th>
		<th>Welc.R.u4</th>
		<th>Sight.o12</th>
		<th>Sight.4-12</th>
		<th>Sight.u4</th>
		<th>Din.o12</th>
		<th>Din.4-12</th>
		<th>Din.u4</th>
		<th>Gala.o12</th>
		<th>Gala.4-12</th>
		<th>Gala.u4</th>
		<th>Pic.o12</th>
		<th>Pic.4-12</th>
		<th>Pic.u4</th>	
		<th>D1Fee</th>
		<th>D2Fee</th>
		<th>D3Fee</th>
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
			<td><?php print $sor['family_members'];?></td>	
			<td><?php print $sor['welcome_memb_o12'];?></td>
			<td><?php print $sor['welcome_memb_412'];?></td>
			<td><?php print $sor['welcome_memb_u4'];?></td>
			<td><?php print $sor['sight_memb_o12'];?></td>
			<td><?php print $sor['sight_memb_412'];?></td>
			<td><?php print $sor['sight_memb_u4'];?></td>
			<td><?php print $sor['dinner_memb_o12'];?></td>
			<td><?php print $sor['dinner_memb_412'];?></td>
			<td><?php print $sor['dinner_memb_u14'];?></td>
			<td><?php print $sor['gdinner_memb_o12'];?></td>
			<td><?php print $sor['gdinner_memb_412'];?></td>
			<td><?php print $sor['gdinner_memb_u14'];?></td>
			<td><?php print $sor['pic_memb_o12'];?></td>
			<td><?php print $sor['pic_memb_412'];?></td>
			<td><?php print $sor['pic_memb_u14'];?></td>
			<td><?php print $sor['dayOneFee'];?></td>
			<td><?php print $sor['dayTwoFee'];?></td>
			<td><?php print $sor['dayThreeFee'];?></td>
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



