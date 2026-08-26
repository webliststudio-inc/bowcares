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

///// Create Artisan Account //// 
function _artisanSignUp() {
	try { 
		////////get all needed values////////////
		let issueCount = 0;
		const firstName = $("#firstName").val()?.trim();
		const lastName = $("#lastName").val()?.trim();
		const phoneNumber = $("#phoneNumber").val()?.trim();
		const emailAddress = $("#emailAddress").val()?.trim();
		const password = $("#createPassword").val()?.trim();
		const cpassword = $("#confirmPassword").val()?.trim();

		let selectedProfessions = [];
		$('.exam-checkbox:checked').each(function() {
			selectedProfessions.push({ professionId: $(this).data('value') });
		});

		
		///// empty field validation//////////
		issueCount += _validateEmptyValue("firstName", "FIRST NAME");
		issueCount += _validateEmptyValue("lastName", "LAST NAME");
		issueCount += _validateEmptyValue("emailAddress", "EMAIL ADDRESS");
		issueCount += _validateEmptyValue("phoneNumber", "MOBILE NUMBER");
		issueCount += _validateEmptyValue("createPassword", "NEW PASSWORD");
		issueCount += _validateEmptyValue("confirmPassword", "CONFIRM PASSWORD");
		issueCount += _validateEmail("emailAddress", emailAddress);
		issueCount += _validateNumber("phoneNumber", phoneNumber);

		if (password != cpassword) {
			$("#confirmPassword").addClass("issue");
			$("#issue_confirmPassword").html("PASSWORD NOT MATCHED!");
			issueCount ++
		}

		const checkedProfessions = $('input[name="professionId[]"]:checked').length;

		if (checkedProfessions < 1) {
			$("#issues_professionToggle").html("PROFESSION IS REQUIRED").fadeIn();
			issueCount ++
		} else {
			$("#issues_professionToggle").html("");
		}

		if (issueCount > 0) return;

		// Gather form data
		const formData = {
			firstName,
			lastName,
			emailAddress,
			phoneNumber,
			password,
			cpassword,
			professions: selectedProfessions,
		};

   		_artisanSignUpCallback(formData);
  	} catch (error) {
		console.error("Error:", error);
		_callCatchError(() => _artisanSignUp());
  	}
}

//// Proceed Artisan Sign Up Callback ////////
function _artisanSignUpCallback(formData) {
    ///// get btn text /////
    const btnText = $("#signUpBtn").html();
    _btnDisable("signUpBtn", btnText, true);

    ///// call endpoint //////
    _callRawEndPoints({
      url: `artisan/auth/sign-up`,
      formData,
    })
    .then((response) => {
        sessionStorage.setItem("artisanLoginData", JSON.stringify(response?.data));
        _actionAlert(response?.message, true);
        window.location.href = artisanVerificationUrl;
    })
    .catch((error) => {
        console.error("Error:", error);
        if (error.status == 0) {
            _callAjaxError(() => _artisanSignUpCallback(formData), error.message);
            _btnDisable("signUpBtn", btnText, false);
        } else {
            _showCustomConfirm({
                title: "Unable to Sign Up!",
                message: error.message,
                alertType: "error",
                trueActionBtnText: "OK",
                closeOnOverlayClick: true,
            });
            _btnDisable("signUpBtn", btnText, false);
        }
    });
}