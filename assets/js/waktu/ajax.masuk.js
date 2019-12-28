$(document).ready(function() {
	
});

$("#masukFormId").on("click", function() {
	var emaiUserTxt			= $('#emaiUserId').val();
	var passwordUserTxt		= $('#passwordUserId').val();

	if(
		emaiUserTxt.length !== 0 &&
		passwordUserTxt.length !== 0) {

		console.log('ada')
		
	} else {
		alert('Ada form yang kosong, mohon diisi!');
	}
});