function _completeVerification() {
  _showCustomConfirm({
    title: "Success!",
    message: "Your account has been successfully verified. You can now login to your account.",
    alertType: "success",
    trueActionBtnText: "Okay, Thanks",
    closeOnOverlayClick: false,
  });
}

//// User Role Check /////
function _userRoleCheck(){
	$('.switch input').on('change', function () {
		const label = $(this).next().next(); // Grab the toggle-label span
		label.text($(this).prop('checked') ? 'Yes' : 'No');
	});
}