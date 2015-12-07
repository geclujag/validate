<!DOCTYPE html>
<html>
	<head>

		<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
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
						Your date of birth: <input  id="datepicker" type="date" name="dob"></input>
						</p>
					</span>
					<span>
						<p>
						AND your mailing address zip code: <input type="text" name="postalZip"></input>
						</p>
					</span>
					<span>
						<input type="button" value="Am I registered?" onClick="get();" onkeydown="(event)";></input>
					</span>
				</form>
			</div><!--endof .form-->
			<br/>
			<div id="displayResult"></div><!--endof #displayResult-->
			<br/>			
		</div><!--endof #appBody-->
	</body>
</html>