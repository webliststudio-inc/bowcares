function _completeVerification() {
  _showCustomConfirm({
    title: "Success!",
    message: "Your account has been successfully verified. You can now login to your account.",
    alertType: "success",
    trueActionBtnText: "Okay, Thanks",
    closeOnOverlayClick: false,
  });
}

/// Fetch Profession Toggle ///
function _fetchProfessionToggle() {
	try {
		_callFetchEndPoints({
		url: `site/fetch-professions`,
		})
		.then((response) => {
			_initFetchProfessionToggle(response?.data);
		})
		.catch((error) => {
			console.error("Error:", error);
		});
	} catch (error) {
		console.error("Error:", error);
	}
}

//// Initialize Fetch Profession Toggle ////
function _initFetchProfessionToggle(data) {
    let professionHtml = '';
	for (let i = 0; i < data?.length; i++) {
		const {professionId, professionName} = data[i];

		professionHtml += `
        <div class="each-toggle-div">
            <span>${professionName}</span>
            <label for="professionId_${professionId}" class="switch">
                <input type="checkbox" class="child exam-checkbox" id="professionId_${professionId}" name="professionId[]" data-value="${professionId}">
                <span class="slider"></span>
                <span class="toggle-label">No</span>
            </label>
        </div>`;
	}
	$('#professionToggleContent').html(professionHtml);
	_userRoleCheck();
}