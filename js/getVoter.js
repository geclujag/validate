function get() {
	$('data_test.php', { userFirstName: userInfo.firstName, userLastName: userInfo.lastName, userDob: userInfo.dob, userAddressZip: userInfo.addressZip },
		function(output) {
			$('#displayResult').html(output).show();
		});

		//this code for debugging only
		var debug_reg_data = {
				userFirstName: userInfo.firstName,
				userLastName: userInfo.lastName, 
				userDob: userInfo.dob,
				userAddressZip: userInfo.addressZip,
		};

		console.log('Debug me...', debug_reg_data,0);
		//end of debugging code

	};