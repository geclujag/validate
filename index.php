<!DOCTYPE html>
<html>
	<head>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
		<link rel="stylesheet" type="text/css" href="styles/styles.css">	

	</head>
	<body>
		<div id="appBody">
			<p>Are you registered to vote in Guam elections? 
			All fields are required * 
			</p>
			<div class="form">
				<form name="userInfo" action="evaluate_input.php" method="post">
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
						<input type="submit" value="Am I registered?" ></input>
					</span>
				</form>
			</div><!--endof .form-->
		</div><!--endof #appBody-->
	</body>
</html>