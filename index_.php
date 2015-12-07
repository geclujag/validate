<!doctype html>
<!--[if IE 7 ]>		 <html class="no-js ie ie7 lte7 lte8 lte9" lang="en-US"> <![endif]-->
<!--[if IE 8 ]>		 <html class="no-js ie ie8 lte8 lte9" lang="en-US"> <![endif]-->
<!--[if IE 9 ]>		 <html class="no-js ie ie9 lte9>" lang="en-US"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" lang="en-US"> <!--<![endif]-->
<php>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Am I Registered?</title>
	
		<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
		
		<!-- app-specific/-->
		<script type="text/javascript" src="js/getVoter.js"></script>
		<link rel="stylesheet" type="text/css" href="styles.css">
	
	</head>
	<body>
	
		<div id="appBody">
			<p>Are you registered to vote in Guam elections? 
			All fields are required * 
			</p>
			<div class="form">
				<form name="userInfo">
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
						<input type="button" value="Am I registered?" onClick="get();"></input>
					</p>
				</form>
			</div><!--endof .form-->
			<div id="displayResult"></div><!--endof #displayResult-->
		</div><!--endof #appBody-->
	</body>
</html>
</php>