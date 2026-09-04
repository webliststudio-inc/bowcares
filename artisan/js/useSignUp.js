/// next sign up page function ///
function _nextSignUpPage(props) {
	const { page = "" } = props;
	sessionStorage.setItem("currentSignUpPage", page);
	_getPage({ page: page, className: 'other-pages-ajax-loader', url: artisanMiddleWareUrl });
	page === "signUpotpVerificationPage"
    ? $(".form-back-div").addClass("center-content")
    : $(".form-back-div").removeClass("center-content");
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
    const artisanBioDataSession = JSON.parse(
        localStorage.getItem("artisanBioDataSession")
    );
	const savedProfessionIds = artisanBioDataSession?.professionIds || [];
	
    for (let i = 0; i < data?.length; i++) {
        const { professionId, professionName } = data[i];
        const isChecked = savedProfessionIds.some(
            item => String(item.professionId) === String(professionId)
        );

        professionHtml += `
            <div class="each-toggle-div">
                <span>${professionName}</span>
                <label for="professionId_${professionId}" class="switch">
                    <input 
                        type="checkbox"
                        class="child artisan-checkbox"
                        id="professionId_${professionId}"
                        name="professionId[]"
                        data-value="${professionId}"
                        ${isChecked ? 'checked' : ''}
                    >
                    <span class="slider"></span>
                    <span class="toggle-label">${isChecked ? 'Yes' : 'No'}</span>
                </label>
            </div>`;
    }
    $('#professionToggleContent').html(professionHtml);
    _userRoleCheck();
}

///// Create Artisan Account //// 
function _proceedArtisanSignUp(isResendOtp = false) {
	let artisanBioDataSession = JSON.parse(localStorage.getItem("artisanBioDataSession"));

	try { 
		////////get all needed values////////////
		let issueCount = 0;
		let firstName = $("#firstName").val()?.trim();
		let lastName = $("#lastName").val()?.trim();
		let phoneNumber = $("#phoneNumber").val()?.trim();
		let emailAddress = $("#emailAddress").val()?.trim();
		let password = $("#createPassword").val()?.trim();
		let confirmPassword = $("#confirmPassword").val()?.trim();

		// Use session values when resending ///
		if (isResendOtp) {
			firstName = artisanBioDataSession?.firstName;
			lastName = artisanBioDataSession?.lastName;
			phoneNumber = artisanBioDataSession?.phoneNumber;
			emailAddress = artisanBioDataSession?.emailAddress;
			password = artisanBioDataSession?.password;
			confirmPassword = artisanBioDataSession?.confirmPassword;
		}
		
		let selectedProfessions = [];
		$('.artisan-checkbox:checked').each(function () {
			selectedProfessions.push({ professionId: $(this).data('value') });
		});
		
		if (isResendOtp) {
			selectedProfessions = artisanBioDataSession?.professionIds;
		}
		
		if (!isResendOtp) {
			///// empty field validation//////////
			issueCount += _validateEmptyValue("firstName", "FIRST NAME");
			issueCount += _validateEmptyValue("lastName", "LAST NAME");
			issueCount += _validateEmptyValue("emailAddress", "EMAIL ADDRESS");
			issueCount += _validateEmptyValue("phoneNumber", "MOBILE NUMBER");
			issueCount += _validateEmptyValue("createPassword", "NEW PASSWORD");
			issueCount += _validateEmptyValue("confirmPassword", "CONFIRM PASSWORD");
			issueCount += _validateEmail("emailAddress", "EMAIL ADDRESS");
			issueCount += _validateNumber("phoneNumber", phoneNumber);

			if (password != confirmPassword) {
				$("#confirmPassword").addClass("issue");
				$("#issue_confirmPassword").html("PASSWORD NOT MATCHED!");
				issueCount++
			}

			const checkedProfessions = $('input[name="professionId[]"]:checked').length;

			if (checkedProfessions < 1) {
				$("#issues_professionToggle").html("PROFESSION IS REQUIRED").fadeIn();
				issueCount++
			} else {
				$("#issues_professionToggle").html("");
			}
		}

		if (issueCount > 0) return;

		const formData = {
			firstName,
			lastName,
			emailAddress,
			phoneNumber,
			password,
			confirmPassword,
			professionIds: selectedProfessions,
		};

        /// Set the Artisan Bio data in session ///
        localStorage.setItem(
        "artisanBioDataSession",
        JSON.stringify(formData)
        );

        //// Get Next Page ////
        _proceedArtisanSignUpCallback(formData, isResendOtp);
  	} catch (error) {
		console.error("Error:", error);
		_callCatchError(() => _proceedArtisanSignUp(isResendOtp = false));
  	}
}

//// Proceed Artisan Sign Up Callback ////////
function _proceedArtisanSignUpCallback(formData, isResendOtp) {
	///// get btn text /////
	let btnText = "";
   	if (!isResendOtp) {
      btnText = $("#signUpBtn").html();
      _btnDisable("signUpBtn", btnText, true);
    } else {
      _showLoader("Resending OTP... Please wait...");
    }

    ///// call endpoint //////
    _callRawEndPoints({
      url: `artisan/auth/sign-up-verification`,
      formData,
    })
    .then((response) => {
		_actionAlert(response?.message, true);
		if (!isResendOtp) {
			_nextSignUpPage({ page: 'signUpotpVerificationPage' });
		} else {
			_hideLoader();
			_actionAlert(response?.message, true);
			_counDownOtp(180);
		}
    })
    .catch((error) => {
        console.error("Error:", error);
		if (error.status == 0) {
			if (!isResendOtp) {
            	_callAjaxError(() => _proceedArtisanSignUpCallback(formData), error.message);
				_btnDisable("signUpBtn", btnText, false);
			} else {
				_actionAlert('Check your internet connection and try again', false);
				_hideLoader();
        	}
		} else {
			if (!isResendOtp) {
				_showCustomConfirm({
					title: "Unable to Sign Up!",
					message: error.message,
					alertType: "error",
					trueActionBtnText: "OK",
					closeOnOverlayClick: true,
				});
				_btnDisable("signUpBtn", btnText, false);
			} else {
				_actionAlert(error.message, false);
				_hideLoader();
			}
        }
    });
}

//// Complete Artisan Sign Up ////////
function _completeArtisanSignUp() {
	try {
		artisanBioDataSession = JSON.parse(localStorage.getItem("artisanBioDataSession")) || {};
		const firstName = artisanBioDataSession?.firstName;
		const lastName = artisanBioDataSession?.lastName;
		const emailAddress = artisanBioDataSession?.emailAddress;
		const phoneNumber = artisanBioDataSession?.phoneNumber;
		const password = artisanBioDataSession?.password;
		const confirmPassword = artisanBioDataSession?.confirmPassword;
		const selectedProfessions = artisanBioDataSession?.professionIds || [];
		
       	let issueCount = 0;
		const otp = $("#otp").val().trim();

		///// empty field validation//////////
		if (!otp) {
			$("#otp_box .otp_text_field").addClass("issue");
			$('#issue_otp').html('USER ERROR! OTP REQUIRED');
			issueCount++;
		} else if (otp.length < 6 || !/^\d+$/.test(otp)) {
			$("#otp_box .otp_text_field").addClass("issue");
			$('#issue_otp').html('USER ERROR! OTP must be a 6-digit number');
			issueCount++;
		} else {
			$("#otp_box .otp_text_field").removeClass("issue");
			$('#issue_otp').html('');
		}

		if (issueCount > 0) return;

		// Gather form data
		const formData = {
			firstName,
			lastName,
			emailAddress,
			phoneNumber,
			password,
			confirmPassword,
			otp,
			professionIds: selectedProfessions,
		};

		///// complete sign//////////
    	_completeArtisanSignUpCallback(formData);
    } catch (error) {
        console.error("Error:", error);
        _callCatchError(() => _completeArtisanSignUp());
    }
}

//// Complete Artisan Sign Up Callback ////////
function _completeArtisanSignUpCallback(formData) {
    ///// get btn text /////
    const btnText = $("#verifyBtn").html();
    _btnDisable("verifyBtn", btnText, true);

    ///// call endpoint //////
    _callRawEndPoints({
      url: `artisan/auth/sign-up`,
      formData,
    })
	.then((response) => {
		_clearAllSession();
		_showCustomConfirm({
			callback: () => {
				window.location.replace(artisanSignUpUrl); 
			},
			title: "Success!",
			message: response?.message,
			alertType: "success",
			trueActionBtnText: "Continue to Dashboard",
			closeOnOverlayClick: false,
		});
    })
    .catch((error) => {
        console.error("Error:", error);
        if (error.status == 0) {
            _callAjaxError(() => _completeArtisanSignUpCallback(formData), error.message);
            _btnDisable("verifyBtn", btnText, false);
        } else {
            _showCustomConfirm({
				title: "Invalid OTP!",
				message: error.message,
				alertType: "error",
				trueActionBtnText: "OK",
				closeOnOverlayClick: true,
			});
			_btnDisable("verifyBtn", btnText, false);
        }
    });
}

//// Clear All Session Storage ///
function _clearAllSession() {
    localStorage.clear();
    sessionStorage.clear();
}