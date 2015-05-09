<?php   

ini_set("include_path", '/home/ocskonet/include:' . ini_get("include_path")  ); //WEBEN
ob_start();
require_once('alumni_db_fns.php');

$com_sel="selected";
$pg_content="coming";
include 'display_reunion.php';
require_once 'rpagecontents.php';

$conn = db_connect();
$result_reunion=$conn->query("SELECT * FROM graduate_data INNER JOIN reunion_registration ON graduate_data.AID = reunion_registration.AID ORDER BY fname");

do_html_header('');

	reunionDivOpen();
	
		contentComing();
	
		?><h4>They are coming:</h4>
			<br>
			<table class="community">
				<thead>
					<tr>
						<th>First name</th>
						<th>Family name</th>
						<th>Faculty</th>
						<th>Year</th>	
					</tr>
				</thead>
				
			<tbody>	
	<?php
		//$i=1;
	while($sor=mysqli_fetch_array($result_reunion))
		{
		?>
			<tr>
				<!--<td><?php //print $i;?></td>-->
				<td><?php print $sor['gname'];?></td>
				<td><?php print $sor['fname'];?></td>
				<td><?php print $sor['grad_faculty'];?></td>
				<td><?php print $sor['grad_year'];?></td>
		   </tr>
		<?php
		//$i++;
		}
	?>
	</tbody>
	</table>

			
<?php
	
	reunionDivClose();

do_html_footer();
?>	
