<?php

	//create db connection
	$servername = "localhost";
	$username = "dbuser";
	$password = "dbpass";
	$dbname = "webcache_apps";

	// Create connection
	$mysqli = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	/* check connection */
	if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}

	echo "<div><p>Display variables passed from voterApp.php: <br/>".$_POST['firstName']." ".$_POST['lastName']." ".$_POST['dob']." ".$_POST['postalZip']."</p></div><br/>";

	// Escape special characters, if any
	$userFirstName = $mysqli->real_escape_string($_POST['firstName']);
	$userLastName = $mysqli->real_escape_string($_POST['lastName']);
	$userName = strtoupper($userLastName).", ".strtoupper($userFirstName);
	$userDob = $mysqli->real_escape_string($_POST['dob']);		
	$userPostalZip = $mysqli->real_escape_string($_POST['postalZip']);

		//convert userDob to string for search
		$dateVar=date_create($userDob); //create the date
			$thisDate = $dateVar->format('m-d-Y'); //format the date
			$krr = explode('-',$thisDate); //create array from characters of the date
			$thisDate = implode("/",$krr); //recombine characters inserting "/
			//pass $result to $userDobEcho
			$userDobEcho = $thisDate;
 
	// echo 
	echo "<div><p>Display variables after cleaning special characters and formatting: <br/>".$userName . " " . $userDobEcho . " " . $userPostalZip."</p></div><br/>";

	echo "TEST POINTER <br/>";

	// form validation		
	if ($userFirstName==NULL)
		echo "* Please enter your first name.<br />";
	if ($userLastName==NULL)
		echo "* Please enter your last name.<br />";
	if ($userDob==NULL)
		echo "* Please enter your date of birth.<br />";
	if ($userPostalZip==NULL)
		echo "* Please enter your mailing address' zip code.";
	
	// Perform query
	if ($result = $mysqli -> query("SELECT name, village, zipcode, precinct FROM $dbname.voters_20200521 WHERE DATEOFBIRTH = '$userDobEcho' AND name like '$userName%' ")) {

			$voterName = $mysqli -> query("SELECT name FROM $dbname.voters_20200521 WHERE DATEOFBIRTH = '$userDobEcho' AND name like '$userName%' ");
			
			$voterDob = $userDobEcho;
			
			$voterPostalVillage = $mysqli -> query("SELECT village FROM $dbname.voters_20200521 WHERE DATEOFBIRTH = '$userDobEcho' AND name like '$userName%' ");
			
			$voterPostalZip = $mysqli -> query("SELECT zipcode FROM $dbname.voters_20200521 WHERE DATEOFBIRTH = '$userDobEcho' AND name like '$userName%' ");
			
			$voterPrecinct = $mysqli -> query("SELECT precinct FROM $dbname.voters_20200521 WHERE DATEOFBIRTH = '$userDobEcho' AND name like '$userName%' ");

	  		echo "<p>Yes. ".$voterName.", born " .$userDobEcho. " and receiving mail in the village of ".$voterPostalVillage." with zipcode ". $voterPostalZip. ", is currently registered to vote at precinct ".$voterPrecinct;."</p>";

	    /* free result set */
	    $result->close();
	};

echo "TEST POINTER <br/>";

  			//$conditions = " FROM $dbname.voters_20200521 WHERE DATEOFBIRTH = '$userDobEcho' AND name like '$userName%' ";

			$voterName = $mysqli -> query("SELECT name FROM $dbname.voters_20200521 WHERE DATEOFBIRTH = '$userDobEcho' AND name like '$userName%' ;");
			echo $voterName;
			
			$voterDob = $userDobEcho;
			// $voterDob_num_rows = mysqli_num_rows($voterDob);
			
			$voterPostalVillage = $mysqli -> query("SELECT village FROM $dbname.voters_20200521 WHERE DATEOFBIRTH = '$userDobEcho' AND name like '$userName%' ");
			// $voterPostalVillage_num_rows = mysqli_num_rows($voterPostalVillage);
			
			$voterPostalZip = $mysqli -> query("SELECT zipcode FROM $dbname.voters_20200521 WHERE DATEOFBIRTH = '$userDobEcho' AND name like '$userName%' ");
			// $voterPostalZip_num_rows = mysqli_num_rows($voterPostalZip);
			
			$voterPrecinct = $mysqli -> query("SELECT precinct FROM $dbname.voters_20200521 WHERE DATEOFBIRTH = '$userDobEcho' AND name like '$userName%' ");
			// $voterPrecinct_num_rows = mysqli_num_rows($voterPrecinct);

			// $voterName = mysqli_result($voterName, 0);
			// $voterDob = mysqli_result($voterDob, 0);
			// $voterPostalVillage = mysqli_result($voterPostalVillage, 0);
			// $voterPostalZip = mysqli_result($voterPostalZip, 0);
			// $voterPrecinct = mysqli_result($voterPrecinct, 0);

			echo "<p>Yes. ".$voterName.", born " .$userDobEcho. "and receiving mail in the village of ".$voterPostalVillage." with zipcode ". $voterPostalZip. ", is currently registered to vote at precinct $voterPrecinct.</p>";


	// match input values to db values
	//else {

			// 	echo "<p>No. The information you entered does not match our records. ".$userFirstName." ".$userLastName.", born $userDobEcho and receiving mail at zipcode $userPostalZip is NOT currently registered to vote in Guam. Please check that your responses are true and correct.</p>";
			// };

	$mysqli->close();
?>