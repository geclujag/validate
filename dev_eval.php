<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/floating-labels/">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563dr2">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.5/examples/floating-labels/floating-labels.css" rel="stylesheet">

    <title>Are you Registered?</title>
  </head>
  <body>

  	<div class="container">

  <?php

	//create db connection
	$servername = "localhost";
	$username = "dbuser";
	$password = "devpass";
	$dbname = "webcache_apps";

	// Create connection
	$mysqli = new mysqli($servername, $username, $password, $dbname);

	/* check connection */
	if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}

	// echo "<div><p>Display variables passed from voterApp.php: <br/>".$_POST['firstName']." ".$_POST['lastName']." ".$_POST['dob']." ".$_POST['postalZip']."</p></div><br/>";

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
 
 	// echo "<div><p>Display variables after cleaning special characters and formatting: <br/>".$userName . " " . $userDobEcho . " " . $userPostalZip."</p></div><br/>";

	//echo "<p>TEST POINTER </p><br>";

	// form validation		
	if ($userFirstName==NULL)
		echo "* Please enter your first name.<br />";
	if ($userLastName==NULL)
		echo "* Please enter your last name.<br />";
	if ($userDob==NULL)
		echo "* Please enter your date of birth.<br />";
	if ($userPostalZip==NULL)
		echo "* Please enter your mailing address' zip code.";

// 	// Perform query

	$conditions = " FROM $dbname.voters_20200521 WHERE DATEOFBIRTH = '$userDobEcho' AND name like '$userName%' ";

	if ($results = $mysqli -> query("SELECT NAME, DATEOFBIRTH, PRECINCT FROM $dbname.voters_20200521 WHERE DATEOFBIRTH = '$userDobEcho' AND name like '$userName%' ORDER by REGNUM")) {

	    /* fetch object array */
	    while ($row = $results->fetch_array(MYSQLI_ASSOC)) {
	        printf ("<img class=mb-4 src=\"https:\/\/gec.guam.gov/validate/images/logo-wht-back.png\" width=176 height=174>
				<h1 class=h3 mb-3 font-weight-normal> Yes. %s, born %s\n is registered in precinct %s.", $row["NAME"], $row["DATEOFBIRTH"], $row["PRECINCT"])."</h1>";
	    };

	if($results->num_rows === 0)
	    {
	        echo "<img class=mb-4&quot src=\"https:\/\/gec.guam.gov/validate/images/logo-wht-back.png\"; alt= width=176 height=174>
				<h1 class=h3 mb-3 font-weight-normal>
					Sorry. $userName, born $userDobEcho and receiving mail at $userPostalZip is not registered to vote in Guam.
				</h1>";
	    };
	// 	    /* free result set */
		    $result->close();
	};


	$mysqli->close();
?>

</div>
</body>