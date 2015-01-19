<?php
$comm_sel = "selected";
$pg_content = 'alumni_community';
session_start();
require_once('alumni_includes.php');
require_once('pagecontents.php');

do_html_header('');
check_valid_user();

$conn = db_connect();
$graduates=$conn->query("SELECT * FROM graduate_data ORDER BY fname");


	mainContentDivOpen();

		contentAlumniCommunity();
		
			?><h4>All Registered Graduates</h4><p>
		<table>
			<thead>
				<?php
				display_alumni_mate_table_head();
				?>
			</thead>
			
			<tbody>
			<?php
			while($sor=mysqli_fetch_array($graduates))
				{
				$aid = $sor['AID'];
				$fname = $sor['fname'];
				$gname = $sor['gname'];
				$grad_faculty = $sor['grad_faculty'];
				$grad_year = $sor['grad_year'];
				display_alumni_mate_table_body();		
				}
			?>
			</tbody>
		</table>
			
<?php
	mainContentDivClose();

do_html_footer();
?>