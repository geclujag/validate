<?php
	
	mysql_connect("localhost", "dbuser", "dbpass");

	$userFirstName = mysql_real_escape_string($_POST['userFirstName']);
	$userLastName = mysql_real_escape_string($_POST['userLastName']);
	$userName = ucwords(strtolower($userLastName)).", ".ucwords(strtolower($userFirstName));
	$userDob = mysql_real_escape_string($_POST['userDob']);		
	$userPostalZip = mysql_real_escape_string($_POST['userPostalZip']);

		//convert userDob to string for search
		$dateVar=date_create($userDob); //create the date
			$thisDate = $dateVar->format('m-d-Y'); //format the date
			$krr = explode('-',$thisDate); //create array from characters of the date
			$thisDate = implode("/",$krr); //recombine characters inserting "/
			//pass $result to $userDobEcho
			$userDobEcho = $thisDate;
		
	if ($userFirstName==NULL)
		echo "* Please enter your first name.<br />";
	if ($userLastName==NULL)
		echo "* Please enter your last name.<br />";
	if ($userDob==NULL)
		echo "* Please enter your date of birth.<br />";
	if ($userPostalZip==NULL)
		echo "* Please enter your mailing address' zip code.";
		

	else
		{
			$conditions = "FROM onreg.2015_05 WHERE reg_name LIKE '$userName%' AND reg_zip = '$userPostalZip' AND reg_dob = '$userDobEcho'";

			$voterName = mysql_query("SELECT reg_name $conditions");
			$voterName_num_rows = mysql_num_rows($voterName);
			
			$voterDob = mysql_query("SELECT reg_dob $conditions");
			$voterDob_num_rows = mysql_num_rows($voterDob);
			
			$voterPostalVillage = mysql_query("SELECT reg_village $conditions");
			$voterPostalVillage_num_rows = mysql_num_rows($voterPostalVillage);
			
			$voterPostalZip = mysql_query("SELECT reg_zip $conditions");
			$voterPostalZip_num_rows = mysql_num_rows($voterPostalZip);
			
			$voterPrecinct = mysql_query("SELECT reg_precinct $conditions");
			$voterPrecinct_num_rows = mysql_num_rows($voterPrecinct);
		

			// if number of rows for $voterName AND $voterDob are == 1, 
			if ($voterName_num_rows>=1 AND $voterDob_num_rows>=1 AND $voterPostalZip_num_rows>=1){

				$voterName = mysql_result($voterName, 0);
				$voterDob = mysql_result($voterDob, 0);
				$voterPostalVillage = mysql_result($voterPostalVillage, 0);
				$voterPostalZip = mysql_result($voterPostalZip, 0);
				$voterPrecinct = mysql_result($voterPrecinct, 0);

				echo "<p>Yes. Our records show that ".ucwords(strtolower($voterName)).", born $userDobEcho and receiving mail in the village of ".ucwords(strtolower($voterPostalVillage))." with zip-code $voterPostalZip, is currently registered to vote at precinct $voterPrecinct.</p>";
			};

			if ($voterName_num_rows==0){
				echo "<p>No. The information you entered does not match our records. ".ucwords(strtolower($userFirstName))." ".ucwords(strtolower($userLastName)).", born $userDobEcho and receiving mail in zip-code $userPostalZip is NOT currently registered to vote in Guam. Please check that your responses are true and correct.</p>";
			};
		}
?>