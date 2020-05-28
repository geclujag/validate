<!doctype html>
<?php
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Am I Registered to Vote?</title>
<link href="styles/alpha.css" rel="stylesheet" type="text/css">
<link href="styles/boilerplate.css" rel="stylesheet" type="text/css">
<link href="styles/atMedia.css" rel="stylesheet" type="text/css">
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/getVoter.js"></script>
<!-- //To learn more about the conditional comments around the html tags at the top of the file:paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither. Do the following if you're using your customized build of modernizr (http://www.modernizr.com/): 
// insert the link to your js here 

// <!-- remove the link below to the html5 shiv add the /"no-js" class to the html tags at the top you can also remove the link to respond.min.js if you included the MQ Polyfill in your modernizr build -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
//<script src="../../respond.min.js"></script>
</head>

<body>
	<div class="gridContainer clearfix">
    	<div id="content" class="fluid ">

		<div id="appBody">
			<h2>Am I registered to vote in Guam elections?</h2>
			<p> 
			Updated as of April 21, 2020. All fields are required.
			</p>
			<div class="form" id="searcharea">
				<form name="userInfo" action="data_test.php" method="post">
					<span>
						<p>
						<input type="text" name="firstName" placeholder="First name"></input>
						</p> 
						<p><input type="text" name="lastName" placeholder="Last name" ></input>
						</p>
					</span>
					<span>
						<p>
						Enter your date of birth below:</p>
						<p><input type="date" name="dob" id="datepicker" ></input>
						</p>
					</span>
					<span>
						<p>
						<input type="text" name="postalZip" placeholder="Zip/Postal Code (mail)" ></input>
						<input type="submit" value="Am I registered?"></input>
						</p>
					</span>
				</form>
			</div><!--endof .form-->
			<br/>
			<div id="displayResult"></div><!--endof #displayResult-->
			<br/>			
		</div><!--endof #appBody-->
        
        </div><!--end #content-->
        
	</div><!-- endof .gridContainer clearfix -->
</body>
<?
</html>