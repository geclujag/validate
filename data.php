<?php

	mysql_connect("localhost", "dbuser", "dbuser");

	$userFirstName = mysql_real_escape_string($_POST['userFirstName']);
	$userMiddleName = mysql_real_escape_string($_POST['userMiddleName']);
	$userLastName = mysql_real_escape_string($_POST['userLastName']);
	$userDob = mysql_real_escape_string($_POST['userDob']);
			//format to echo
			$userDobEcho = DateTime::CreateFromFormat('m/d/Y', $userDob);
	$userPostalZip = mysql_real_escape_string($_POST['userPostalZip']);
	$userID_num = mysql_real_escape_string($_POST['userID_num']);
		
	if ($userFirstName==NULL)
		echo "* Please enter your first name.<br />";
	if ($userMiddleName==NULL)
		echo "* Please enter your middle name.<br />";
	if ($userLastName==NULL)
		echo "* Please enter your last name.<br />";
	if ($userDob==NULL)
		echo "* Please enter your date of birth.<br />";
	if ($userPostalZip==NULL)
		echo "* Please enter the zip code on your license.<br />";
	if ($userID_num==NULL)
		echo "* Please enter your Guam drivers' license number.";
		
	else
		{
			$conditions = "FROM drivers.2015_12d WHERE last_name IS '$userLastName' AND WHERE middle_name IS '$userMiddleName' AND WHERE first_name IS '$userFirstName' AND reg_dob LIKE '%$userDobEcho%' AND reg_zip LIKE '%$userPostalZip%'";

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
		

		if ($voterName_num_rows==0 AND $voterDob_num_rows==0)
			echo "Sorry. The information you entered does not match our records. ".ucwords(strtolower($userFirstName))." ".ucwords(strtolower($userLastName)). ", born ".$userDobEcho. " and receiving mail in zip-code $userPostalZip is NOT currently registered to vote in Guam. Please check that your responses are true and correct.";
		else
			{
				$voterName = mysql_result($voterName, 0);
				$voterDob = mysql_result($voterDob, 0);
				// format for echo
				$voterDobEcho = DateTime::CreateFromFormat('m/d/y', $voterDob);
				$voterPostalVillage = mysql_result($voterPostalVillage, 0);
				$voterPostalZip = mysql_result($voterPostalZip, 0);
				$voterPrecinct = mysql_result($voterPrecinct, 0);
				echo "YES. ".ucwords(strtolower($voterName)).", born $voterDob and receiving mail in the village of ".ucwords(strtolower($voterPostalVillage))." - with zip-code $voterPostalZip, IS currently registered to vote at precinct $voterPrecinct.";
			}
		}

?>