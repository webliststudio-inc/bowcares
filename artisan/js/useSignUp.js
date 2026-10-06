/// next sign up page function ///
function _nextSignUpPage(props) {
	const { page = "", accountType = "" } = props;

	///// Set current sign up page in sessionStorage
	sessionStorage.setItem("currentSignUpPage", page);

	//// Set artisan account type in sessionStorage
	sessionStorage.setItem("artisanAccountType", accountType);

	_getPage({ page: page, className: 'other-pages-ajax-loader', url: artisanMiddleWareUrl });
	if (page === "signUpotpVerificationPage" || page === "artisanAccountTypePage") {
		$(".form-back-div").addClass("center-content");
	} else {
		$(".form-back-div").removeClass("center-content");
	}
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

/// Fetch Availability Toggle ///
function _fetchAvailabilityToggle() {
	try {

		/*
		_callFetchEndPoints({
			url: `site/fetch-availability`,
		})
		.then((response) => {
			_initFetchAvailabilityToggle(response?.data);
		})
		.catch((error) => {
			console.error("Error:", error);
		});
		*/

		//// Dummy Availability Data ////
		const data = [
			{
				dayId: 1,
				dayName: "SUNDAY"
			},
			{
				dayId: 2,
				dayName: "MONDAY"
			},
			{
				dayId: 3,
				dayName: "TUESDAY"
			},
			{
				dayId: 4,
				dayName: "WEDNESDAY"
			},
			{
				dayId: 5,
				dayName: "THURSDAY"
			},
			{
				dayId: 6,
				dayName: "FRIDAY"
			},
			{
				dayId: 7,
				dayName: "SATURDAY"
			}
		];

		_initFetchAvailabilityToggle(data);
	} catch (error) {
		console.error("Error:", error);
	}
}

//// Initialize Fetch Availability Toggle ////
function _initFetchAvailabilityToggle(data) {
	let availabilityHtml = '';
	const artisanBioDataSession = JSON.parse(localStorage.getItem("artisanBioDataSession")) || {};
	const savedAvailabilities = artisanBioDataSession?.availabilities || [];

	for (let i = 0; i < data?.length; i++) {
		const { dayId, dayName } = data[i];

		const isChecked = savedAvailabilities.find(
			item => item?.dayId === dayId
		);

		availabilityHtml += `
			<div class="each-toggle-div time-toggle-div" data-day-id="${dayId}">
				<div class="left-cont">
					<span>${dayName}</span>

					<label for="dayId_${dayId}" class="switch">
						<input 
							type="checkbox"
							class="child artisan-checkbox availability-checkbox"
							id="dayId_${dayId}"
							name="dayId[]"
							data-value="${dayId}"
							${isChecked ? 'checked' : ''}
						>

						<span class="slider"></span>
						<span class="toggle-label">${isChecked ? 'Yes' : 'No'}</span>
					</label>
				</div>

				<div class="time-wrapper">
					<div class="time-input-div">
						<div class="time-input">
							<span class="placeholder">Available From</span>

							<input 
								class="time-textfield start-time"
								type="time"
								id="startTime_${dayId}"
								data-day-id="${dayId}"
								value="${isChecked?.startTime || ''}"
							>
						</div>
						<div class="issueText" id="issue_startTime_${dayId}"></div>
					</div>

					<div class="time-input-div">
						<div class="time-input">
							<span class="placeholder">Available To</span>

							<input 
								class="time-textfield end-time"
								type="time"
								id="endTime_${dayId}"
								data-day-id="${dayId}"
								value="${isChecked?.endTime || ''}"
							>
						</div>
						<div class="issueText" id="issue_endTime_${dayId}"></div>
					</div>
				</div>
			</div>
		`;
	}

	$('#availabilitPageContent').html(availabilityHtml);
	_userRoleCheck();
}

///// Create Artisan Account //// 
function _proceedArtisanSignUp(isResendOtp = false) {
	let artisanBioDataSession = JSON.parse(localStorage.getItem("artisanBioDataSession"));
	accountType = sessionStorage.getItem("artisanAccountType") || "";

	try { 
		////////get all needed values////////////
		let issueCount = 0;
		let fullName = $("#fullName").val()?.trim();
		let mobileNumber = $("#mobileNumber").val()?.trim();
		let homeNumber = $("#homeNumber").val()?.trim();
		let about = $("#about").val()?.trim();
		let emailAddress = $("#emailAddress").val()?.trim();
		let password = $("#createPassword").val()?.trim();
		let confirmPassword = $("#confirmPassword").val()?.trim();
		let address = userEnteredAddress;
		
		// Use session values when resending ///
		if (isResendOtp) {
			fullName = artisanBioDataSession?.fullName;
			mobileNumber = artisanBioDataSession?.mobileNumber;
			homeNumber = artisanBioDataSession?.homeNumber;
			about = artisanBioDataSession?.about;
			emailAddress = artisanBioDataSession?.emailAddress;
			password = artisanBioDataSession?.password;
			confirmPassword = artisanBioDataSession?.confirmPassword;
			address = artisanBioDataSession?.address;
			systemGeneratedAddress = artisanBioDataSession?.systemGeneratedAddress;
		}
		
		//// Get Selected Professions ////
		let selectedProfessions = [];
		$('.artisan-checkbox:checked').each(function () {
			selectedProfessions.push({ professionId: $(this).data('value') });
		});

		//// Get Selected Availability ////
		let selectedAvailabilities = [];
		$('.availability-checkbox:checked').each(function () {
			const dayId = $(this).data('value');
			const startTime = $(`#startTime_${dayId}`).val();
			const endTime = $(`#endTime_${dayId}`).val();

			selectedAvailabilities.push({
				dayId: dayId,
				startTime: startTime,
				endTime: endTime
			});
		});
		
		//// Use session values when resending ///
		if (isResendOtp) {
			selectedProfessions = artisanBioDataSession?.professionIds;
			selectedAvailabilities = artisanBioDataSession?.availabilities;
		}
		

		//// Validate Form Data ////
		if (!isResendOtp) {
			///// empty field validation//////////
			issueCount += _validateEmptyValue("fullName", accountType === 'company' ? 'COMPANY NAME' : "FULL NAME");
			issueCount += _validateEmptyValue("emailAddress", "EMAIL ADDRESS");
			issueCount += _validateEmptyValue("mobileNumber", "MOBILE NUMBER");
			issueCount += _validateEmptyValue("homeNumber", "HOME NUMBER");
			issueCount += _validateEmptyValue("about", accountType === 'company' ? 'ABOUT YOUR COMPANY' : "ABOUT");
			issueCount += _validateEmptyValue("createPassword", "NEW PASSWORD");
			issueCount += _validateEmptyValue("confirmPassword", "CONFIRM PASSWORD");
			issueCount += _validateEmail("emailAddress", "EMAIL ADDRESS");
			issueCount += _validateNumber("mobileNumber", mobileNumber);
			issueCount += _validateNumber("homeNumber", homeNumber);
			issueCount += _validateEmptyValue("destination", accountType === 'company' ? 'COMPANY ADDRESS' : "ADDRESS");

			if (password != confirmPassword) {
				$("#confirmPassword").addClass("issue");
				$("#issue_confirmPassword").html("PASSWORD NOT MATCHED!");
				issueCount++
			}

			//// Check Professions ////
			const checkedProfessions = $('input[name="professionId[]"]:checked').length;
			if (checkedProfessions < 1) {
				$("#issues_professionToggle").html("PROFESSION IS REQUIRED").fadeIn();
				issueCount++
			} else {
				$("#issues_professionToggle").html("");
			}

			//// Check Availability ////
			const checkedAvailabilty = $('input[name="dayId[]"]:checked').length;
			if (checkedAvailabilty < 1) {
				$("#issues_artisanAvailability").html("AVAILABLE DAY IS REQUIRED").fadeIn();
				issueCount++;
			} else {
				$("#issues_artisanAvailability").html("");

				//// Check Availability Time ////
				$('.availability-checkbox:checked').each(function () {
					const dayId = $(this).data('value');
					
					const startTimeInput = $(`#startTime_${dayId}`);
					const endTimeInput = $(`#endTime_${dayId}`);

					const startTimeContainer = startTimeInput.closest(".time-input");
					const endTimeContainer = endTimeInput.closest(".time-input");

					const startTime = startTimeInput.val();
					const endTime = endTimeInput.val();

					//// Check Start Time ////
					if (!startTime) {
						startTimeContainer.addClass("issue");
						$(`#issue_startTime_${dayId}`).html("TIME FROM IS REQUIRED").fadeIn();

						issueCount++;
					} else {
						startTimeContainer.removeClass("issue");
						$(`#issue_startTime_${dayId}`).html("");
					}

					//// Check End Time ////
					if (!endTime) {
						endTimeContainer.addClass("issue");
						$(`#issue_endTime_${dayId}`).html("TIME TO IS REQUIRED").fadeIn();

						issueCount++;
					} else {
						endTimeContainer.removeClass("issue");
						$(`#issue_endTime_${dayId}`).html("");
					}
				});
			}
		}

		if (issueCount > 0) return;

		const formData = {
			fullName,
			mobileNumber,
			homeNumber,
			emailAddress,
			about,
			password,
			confirmPassword,
			professionIds: selectedProfessions,
			address,
			systemGeneratedAddress,
			availabilities: selectedAvailabilities,
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
		const fullName = artisanBioDataSession?.fullName;
		const mobileNumber = artisanBioDataSession?.mobileNumber;
		const homeNumber = artisanBioDataSession?.homeNumber;
		const emailAddress = artisanBioDataSession?.emailAddress;
		const about = artisanBioDataSession?.about
		const password = artisanBioDataSession?.password;
		const confirmPassword = artisanBioDataSession?.confirmPassword;
		const selectedProfessions = artisanBioDataSession?.professionIds || [];
		const selectedAvailabilities = artisanBioDataSession?.availabilities || [];
		const address = artisanBioDataSession?.address;
		const systemGeneratedAddress = artisanBioDataSession?.systemGeneratedAddress;
		
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
			fullName,
			mobileNumber,
			homeNumber,
			emailAddress,
			about,
			password,
			confirmPassword,
			otp,
			professionIds: selectedProfessions,
			address,
			systemGeneratedAddress,
			availabilities: selectedAvailabilities,
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