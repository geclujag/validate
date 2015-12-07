function get() {
	$.post('AmIRegistered_Control.php', { userFirstName: userInfo.firstName.value, userMiddleName: userInfo.middleName.value,userLastName: userInfo.lastName.value, userDob: userInfo.dob.value, userAddressZip: userInfo.addressZip.value, userIdNum: userInfo.idNum.value },
		function(output) {
			$('#displayResult').html(output).show();
		});

		//this code for debugging only
		var debug_reg_data = {
				userFirstName: userInfo.firstName.value,
				userMiddleName: userInfo.middleName.value, 
				userLastName: userInfo.lastName.value, 
				userDob: userInfo.dob.value,
				userAddressZip: userInfo.addressZip.value,
				userIdNum: userInfo.idNum.value,
		};

		console.log('Debug me...', debug_reg_data,0);
		//end of debugging code

	};