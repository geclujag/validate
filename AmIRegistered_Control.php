<?php
	
	mysql_connect("localhost", "dbuser", "dbpass", "valid");

	$userFirstName = mysql_real_escape_string($_POST['userFirstName']);
	$userMiddleName = mysql_real_escape_string($_POST['userMiddleName']);
	$userLastName = mysql_real_escape_string($_POST['userLastName']);
	// $userName = ucwords(strtolower($userLastName)).", ".ucwords(strtolower($userFirstName));
	$userDob = mysql_real_escape_string($_POST['userDob']);		
	$userAddressZip = mysql_real_escape_string($_POST['userAddressZip']);
	$userIdNum = mysql_real_escape_string($_POST['userIdNum']);

		//convert userDob to string for search
		$dateVar=date_create($userDob); //create the date
			$thisDate = $dateVar->format('m-d-Y'); //format the date
			$krr = explode('-',$thisDate); //create array from characters of the date
			$thisDate = implode("/",$krr); //recombine characters inserting "/
			//pass $result to $userDobEcho
			$userDobEcho = $thisDate;
		
	if ($userFirstName==NULL)
		echo "* Please enter your first name.<br />";
	if ($userMiddleName==NULL)
		echo "* Please enter your middle name.<br />";
	if ($userLastName==NULL)
		echo "* Please enter your last name.<br />";
	if ($userDob==NULL)
		echo "* Please enter your date of birth.<br />";
	if ($userAddressZip==NULL)
		echo "* Please enter the zip code from your ID.<br />";
	if ($userIdNum==NULL)
		echo "* Please enter your ID number.";
		

	else
		{
			$conditions = "FROM valid.2015_12d WHERE first_name = '$userFirstName' AND middle_name = '$userMiddleName' AND last_name = '$userLastName' AND ID_num = '$userIdNum' AND address_zip = '$userAddressZip' AND dob = '$userDobEcho' ";

			$validFirstName = mysql_query("SELECT first_name $conditions");
			$validFirstName_num_rows = mysql_num_rows($validFirstName);
			
			$validMiddleName = mysql_query("SELECT middle_name $conditions");
			$validMiddleName_num_rows = mysql_num_rows($validMiddleName);

			$validLastName = mysql_query("SELECT last_name $conditions");
			$validLastName_num_rows = mysql_num_rows($validLastName);

			$validDob = mysql_query("SELECT dob $conditions");
			$validDob_num_rows = mysql_num_rows($validDob);
			
			$validAddressZip = mysql_query("SELECT address_zip $conditions");
			$validAddressZip_num_rows = mysql_num_rows($validAddressZip);
			
			$validIdNum = mysql_query("SELECT ID_num $conditions");
			$validIdNum_num_rows = mysql_num_rows($validIdNum);


			// if number of 'validated' rows are > 0, affirmative messege 
			if ($validFirstName_num_rows>0 AND 
				$validMiddleName_num_rows>0 AND 
				$validLastName_num_rows>0 AND 
				$validDob_num_rows>0 AND 
				$validAddressZip_num_rows>0 AND
				$validIdNum_num_rows>0){

				$validFirstName = mysql_result($validFirstName, 0);
				$validMiddleName = mysql_result($validMiddleName, 0);
				$validLastName = mysql_result($validLastName, 0);
				$validDob = mysql_result($validDob, 0);
				$validAddressZip = mysql_result($validAddressZip, 0);
				$validIdNum = mysql_result($validIdNum, 0);

				echo "<p>Yes. Our records show that $userFirstName $userMiddleName $userLastName, born $userDobEcho with a Guam zip code of $validAddressZip, has the ID# $validIdNum.</p>";
			};

			// if number of validated rows are == 0, negative message

			if ($validFirstName_num_rows==0){
				echo "<p>No. The information you entered does not match our records. $userFirstName $userMiddleName $userLastName, born $userDobEcho and receiving mail in zip-code $userAddressZip does not have either a valid Drivers License or a valid Guam Identification card.</p><p style='color:red; font-size:0.6em;'>Please check that your responses are true and correct. If you would like to register; OR if you believe that our records are inaccurate and you would like to update your record, please contact our office for assistance.</p>";
			};
	};
?>