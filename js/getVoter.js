function get() {
	$('data_test.php', { userFirstName: userInfo.firstName, userLastName: userInfo.lastName, userDob: userInfo.dob, userPostalZip: userInfo.postalZip },
		function(output) {
			$('#displayResult').html(output).show();
		});

		//this code for debugging only
		var debug_reg_data = {
				userFirstName: userInfo.firstName,
				userLastName: userInfo.lastName, 
				userDob: userInfo.dob,
				userPostalZip: userInfo.postalZip,
		};

		console.log('Debug me...', debug_reg_data,0);
		//end of debugging code

	};