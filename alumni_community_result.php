<?php
$comm_sel = "selected";
$pg_content = 'alumni_community';
session_start();
require_once('alumni_includes.php');
require_once('pagecontents.php');

do_html_header('');
check_valid_user();



$grad_faculty = $_POST['grad_faculty'];
$grad_year = $_POST['grad_year'];
$citizenship = $_POST['citizenship'];

$conn = db_connect();


if($grad_faculty) {
	$graduates=$conn->query("SELECT * FROM graduate_data WHERE grad_faculty = '$grad_faculty' ORDER BY fname");
}

if($grad_year) {
	$graduates=$conn->query("SELECT * FROM graduate_data WHERE grad_year = '$grad_year' ORDER BY fname");
	}	
	
if($citizenship) {
	$graduates=$conn->query("SELECT * FROM graduate_data WHERE citizenship = '$citizenship' ORDER BY fname");
	
		if ($graduates->num_rows==0) {
		$graduates=$conn->query("SELECT * FROM graduate_data WHERE citizenship2 = '$citizenship' ORDER BY fname");
		} 
	
	}

if(($grad_year) && ($grad_faculty))  {
	$graduates=$conn->query("SELECT * FROM graduate_data WHERE grad_faculty = '$grad_faculty' AND grad_year = '$grad_year' ORDER BY fname");
	}

if(($grad_year)  && ($citizenship))  {
	$graduates=$conn->query("SELECT * FROM graduate_data WHERE grad_year = '$grad_year' AND citizenship = '$citizenship' ORDER BY fname");
	
		if ($graduates->num_rows==0) {
			$graduates=$conn->query("SELECT * FROM graduate_data WHERE grad_year = '$grad_year' AND citizenship2 = '$citizenship' ORDER BY fname");
			} 
	}	
	
if(($grad_faculty) && ($citizenship))  {
	$graduates=$conn->query("SELECT * FROM graduate_data WHERE grad_faculty = '$grad_faculty' AND citizenship = '$citizenship' ORDER BY fname");
		
		if ($graduates->num_rows==0) {
			$graduates=$conn->query("SELECT * FROM graduate_data WHERE grad_faculty = '$grad_faculty' AND citizenship2 = '$citizenship' ORDER BY fname");
			} 
	}	

if(($grad_year) && ($grad_faculty) && ($citizenship))  {
	$graduates=$conn->query("SELECT * FROM graduate_data WHERE grad_faculty = '$grad_faculty' AND grad_year = '$grad_year' AND citizenship = '$citizenship' ORDER BY fname");
		
		if ($graduates->num_rows==0) {
			$graduates=$conn->query("SELECT * FROM graduate_data WHERE grad_faculty = '$grad_faculty' AND grad_year = '$grad_year' AND citizenship2 = '$citizenship' ORDER BY fname");
			} 
	}
		
if((!$grad_year) && (!$grad_faculty) && (!$citizenship)) {
	header("Location:alumni_community_all.php" );
}

	mainContentDivOpen();

		contentAlumniCommunity();
		
			?><h4>Filtered Registered Graduates</h4>
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