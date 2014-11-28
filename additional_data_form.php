<?php
require_once('php/alumni_includes.php');

alumni_header();
alumni_menu();
?>
	 <!-- Main body -->

     <div class="icon-menu">
        <i class="fa fa-bars"></i>
        Menu
	</div>

	<!-- Registration form -->
      <form action="php/register.php" method="post">
       
        <h1>Alumni DB Registration</h1>
		
		<fieldset>
		
			<legend><span class="number">1</span>Your personal data</legend>
        	
				<label for="fname">Family Name:</label>
				<input type="text" id="fname" name="fname">
				
				<label for="gname">Given Name:</label>
				<input type="text" id="gname" name="gname">
				
				<label for="gender">Gender:</label>
				<select id="gender" name="gender">
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
				
				<label for="dob">Date of Birth:</label>
				<input type="date" id="dob" name="dob">
				
				Place of Birth:
				<label for="pob_city">City:</label>
				<input type="text" id="pob_city" name="pob_city">
				
				<label for="pob_country">Country:</label>
				<input type="text" id="pob_country" name="pob_country">
				
				<label for="citizenship">Citizenship</label>
				<select id="citizenship" name="citizenship">
						<?php include 'nationalities.php';?>  
				</select>
			
		</fieldset>	
		
		<fieldset>
		
			<legend><span class="number">2</span>Contacts</legend>
			
				Permanent Address:
				<label for="permadd">Street No\Street Name\PO.Box.</label>
				<input type="text" id="permadd" name="permadd">
				
				<label for="add_pc">Postal Code (If you don't have postal code write '-')</label>
				<input type="text" id="add_pc" name="add_pc">
				
				<label for="add_city">City:</label>
				<input type="text" id="add_city" name="add_city">
				
				<label for="add_country">Country:</label>
				<select id="add_country" name="add_country">
						<?php include 'countries.php';?>
				</select>
				
				<label for="phone">Phone number:</label>
				<input type="text" id="phone" name="phone">
				
				<label for="email">Email:</label>
				<input type="email" id="email" name="email">
		
		</fieldset>
			
        <button type="submit">Register</button>
        
      </form>
      <a href="survey.html" target="_blank">Survey</a>
	  
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="script/script.js"></script>  
    </body>
</html>









