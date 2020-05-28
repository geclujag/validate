<?php

	//create db connection
	$servername = "localhost";
	$username = "dbuser";
	$password = "dbpass";
	$dbname = "valid";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	// echo $_POST['firstName']." ".$_POST['lastName']." ".$_POST['dob']." ".$_POST['postalZip'];


	// Escape special characters, if any
	$userFirstName = $mysqli -> mysql_real_escape_string($_POST['firstName']);
	$userLastName = $mysqli -> mysql_real_escape_string($_POST['lastName']);
	$userName = ucwords(strtolower($userLastName)).", ".ucwords(strtolower($userFirstName));
	$userDob = $mysqli -> mysql_real_escape_string($_POST['dob']);		
	$userPostalZip = $mysqli -> mysql_real_escape_string($_POST['postalZip']);

		//convert userDob to string for search
		$dateVar=date_create($userDob); //create the date
			$thisDate = $dateVar->format('m-d-Y'); //format the date
			$krr = explode('-',$thisDate); //create array from characters of the date
			$thisDate = implode("/",$krr); //recombine characters inserting "/
			//pass $result to $userDobEcho
			$userDobEcho = $thisDate;
 
	// echo 
	// print $userName . " " . $userDobEcho . " " . $userPostalZip . " " . $voterPrecinct;


	// data entry validation		
	if ($userFirstName==NULL)
		echo "* Please enter your first name.<br />";
	if ($userLastName==NULL)
		echo "* Please enter your last name.<br />";
	if ($userDob==NULL)
		echo "* Please enter your date of birth.<br />";
	if ($userPostalZip==NULL)
		echo "* Please enter your mailing address' zip code.";
		
	// match input values to db values
	else
		{
			$conditions = "FROM valid.20200521 WHERE NAME LIKE '$userName%' AND zip = '$userPostalZip' AND dateofbirth = '$userDobEcho' ";

			$voterName = mysql_query("SELECT name $conditions");
			$voterName_num_rows = mysql_num_rows($voterName);
			
			$voterDob = mysql_query("SELECT dateofbirth $conditions");
			$voterDob_num_rows = mysql_num_rows($voterDob);
			
			$voterPostalVillage = mysql_query("SELECT village $conditions");
			$voterPostalVillage_num_rows = mysql_num_rows($voterPostalVillage);
			
			$voterPostalZip = mysql_query("SELECT zip $conditions");
			$voterPostalZip_num_rows = mysql_num_rows($voterPostalZip);
			
			$voterPrecinct = mysql_query("SELECT precinct $conditions");
			$voterPrecinct_num_rows = mysql_num_rows($voterPrecinct);
		

			// if number of rows for $voterName AND $voterDob are == 1, confirm match
			if ($voterName_num_rows>=1 AND $voterDob_num_rows>=1 AND $voterPostalZip_num_rows>=1){

				$voterName = mysql_result($voterName, 0);
				$voterDob = mysql_result($voterDob, 0);
				$voterPostalVillage = mysql_result($voterPostalVillage, 0);
				$voterPostalZip = mysql_result($voterPostalZip, 0);
				$voterPrecinct = mysql_result($voterPrecinct, 0);

				echo "<p>Yes. Our records show that ".ucwords(strtolower($voterName)).", born $userDobEcho and receiving mail in the village of ".ucwords(strtolower($voterPostalVillage))." with zip-code $voterPostalZip, is currently registered to vote at precinct $voterPrecinct.</p>";
			};

			// if number of rows for $voterName AND $voterDob are == 0, deny confirmation match 
			if ($voterName_num_rows==0){
				echo "<p>No. The information you entered does not match our records. ".ucwords(strtolower($userFirstName))." ".ucwords(strtolower($userLastName)).", born $userDobEcho and receiving mail in zip-code $userPostalZip is NOT currently registered to vote in Guam. Please check that your responses are true and correct.</p>";
			};
		}
?>