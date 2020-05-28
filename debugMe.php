<?php

// to use this script, insert the following line of code into the last line of 'voterApp.php' file and uncomment it.
// require "debugMe.php";

//echo result
	echo "<p>";
		echo "You entered the following data...<br/><br/>";
		echo "First name = ".$userFirstName."<br />";
		echo "Last name = ".$userLastName."<br />";
		echo "DOB entered = ".$userDob."<br />";
		echo "Postal code = ".$userPostalZip."<br /><br />";
			// convert to name lookup
			echo "Name reformatted for search as = $userName <br />";
	echo "</p>";

	//convert date to string from userDob to userDobEcho
	echo "<p>";
		echo "DOB reformatted = ".$thisDate."<br/>";
		echo "DOB reformatted as a string = ".$thisDate."<br/>";
		echo "DOB passed to userDobEcho as = ".$userDobEcho."<br /><br/>";
	echo "</p>";
	//echo result

	// SHow number of rows found for each variable
	echo "<p>";
		echo "Counting rows...<br /><br />";
		echo "Rows w/ ".$userLastName.", ".$userFirstName." = ".$voterName_num_rows.". <br/>";
		echo "Rows w/ ".$userDobEcho." = ".$voterDob_num_rows.".<br/>";
		echo "Rows w/ ".$userPostalZip." = ".$voterPostalZip_num_rows;
	echo "</p>";
	