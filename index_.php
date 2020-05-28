<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>Am I Registered?</title>
	
		<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
		
		<!-- app-specific/-->
		<script type="text/javascript" src="js/getVoter.js"></script>
		<link rel="stylesheet" type="text/css" href="styles/styles.css">
	</head>
	
	<body>

		<?php
			<div id="appBody">
				print "<p>Are you registered to vote in Guam elections? ",
				print "All fields are required * ",
				print "</p>";
				<div class="form">
					<form name="userInfo" action="AmIRegistered_Data.php" method="post">
						<span>
							<p>
							Your first name: <input type="text" name="firstName"></input> and last name: <input type="text" name="lastName"></input>
							</p>
						</span>
						<span>
							<p>
							Your date of birth: <input type="date" name="dob" id="datepicker"></input>
							</p>
						</span>
						<span>
							<p>
							AND your mailing address zip code: <input type="text" name="postalZip"></input>
							</p>
						</span>
						<p>
							<input type="submit" value="Am I registered?"></input>
						</p>
					</form>
				</div><!--endof .form-->
				<div id="displayResult"></div><!--endof #displayResult-->
			</div><!--endof #appBody-->
		?>

	</body>
</html>