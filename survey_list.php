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
$surveys=$conn->query("SELECT * FROM graduate_data INNER JOIN survey ON graduate_data.AID = survey.AID ORDER BY fname");
?>


<table id="myTable" class="tablesorter">

	<thead>
	<tr>
		<th>AID</th>
		<th>Family name</th>
		<th>First name</th>
		<th>licensing</th>
		<th>licensing_type</th>
		<th>licensing_exp</th>
		<th>employment_country</th>
		<th>after_graduation</th>
		<th>workplace</th>
		<th>position</th>
		<th>title</th>
		<th>other_work</th>
		<th>awards</th>
		<th>contribute</th>
		<th>opinion</th>
		<th>comment</th>
		<th>after_phys</th>
		<th>wait</th>
		<th>med_y_n</th>
		<th>grad_place</th>
		<th>grad_yr_germ</th>
	</tr>
	</thead>
	
	<tbody>	
<?php
while($sor=mysqli_fetch_array($surveys))
	{
	?>
        <tr>
			<td><?php print $sor['AID'];?></td>
			<td><?php print $sor['fname'];?></td>
			<td><?php print $sor['gname'];?></td>
			<td><?php print $sor['licensing'];?></td>
			<td><?php print $sor['licensing_type'];?></td>
			<td><?php print $sor['licensing_exp'];?></td>
			<td><?php print $sor['employment_country'];?></td>
			<td><?php print $sor['after_graduation'];?></td>
			<td><?php print $sor['workplace'];?></td>
			<td><?php print $sor['position'];?></td>
			<td><?php print $sor['title'];?></td>
			<td><?php print $sor['other_work'];?></td>
			<td><?php print $sor['awards'];?></td>
			<td><?php print $sor['contribute'];?></td>
			<td><?php print $sor['opinion'];?></td>
			<td><?php print $sor['comment'];?></td>
			<td><?php print $sor['after_phys'];?></td>
			<td><?php print $sor['wait'];?></td>
			<td><?php print $sor['med_y_n'];?></td>
			<td><?php print $sor['grad_place'];?></td>
			<td><?php print $sor['grad_yr_germ'];?></td>		
       </tr>
	<?php
	}
?>
</tbody>
</table>
<?php
require_once('pagecontents.php'); 
do_html_footer();
?>



