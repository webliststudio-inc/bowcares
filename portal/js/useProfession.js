/// Profession Search Filter ////
function _filtersProfession(value) {
  $("#professionContent .tb-row").each(function () {
    var text = $(this).text();
    text.toLowerCase().indexOf(value.toLowerCase()) > -1
      ? $(this).show()
      : $(this).hide();
  });
}

//// Preview Page Flyer ////
$(function () {
	professionImagePixPreview = {
	UpdatePreview: function (obj) {
		if (!window.FileReader) {
		// Handle browsers that don't support FileReader
		console.error("FileReader is not supported.");
		} else {
		var reader = new FileReader();

		reader.onload = function (e) {
			$('#professionImagePreview').prop("src", e.target.result);
		};
		reader.readAsDataURL(obj.files[0]);
		}
	},
	};
});

//// Preview Page Flyer ////
$(function () {
	professionIconPixPreview = {
	UpdatePreview: function (obj) {
		if (!window.FileReader) {
		// Handle browsers that don't support FileReader
		console.error("FileReader is not supported.");
		} else {
		var reader = new FileReader();

		reader.onload = function (e) {
			$('#professionIconPreview').prop("src", e.target.result);
		};
		reader.readAsDataURL(obj.files[0]);
		}
	},
	};
});

/// Create And Update Profession ////
function _addAndUpdateProfession() {
	useEachProfessionSession = JSON.parse(sessionStorage.getItem("useEachProfessionSession"));
	try {
		//////// get all needed values ////////////
		let issueCount = 0;
		const professionName = $('#professionName').val().trim();
		const professionDescription = $('#professionDescription').val()?.trim().replace(/['’]/g, '');
		const statusId = $('#statusId').val().trim();
		const professionImage = $("#professionImage").prop("files")[0];

		///// empty field validation //////////
		issueCount += _validateEmptyValue("professionName", "PROFESSION NAME");
		issueCount += _validateEmptyValue("professionDescription", "PROFESSION DESCRIPTION");
		issueCount += _validateEmptyValue("statusId", "STATUS");

		if (!useEachProfessionSession){
			if (!professionImage) {
				$("#issues_professionImage").html("IMAGE IS REQUIRED").fadeIn();
				$("#issueBorder").addClass("issue-border");
				issueCount ++
			} else {
				$("#issues_professionImage").html("");
				$("#issueBorder").removeClass("issue-border");
			}
		}

		if (issueCount > 0) return;

		// Gather form data //
		const formData = {
			professionName,
			professionDescription,
			statusId,
		};

		////// confirm action //////
		_showCustomConfirm({
			callback: () => {
				_saveAddAndUpdateProfessionCallback(formData);
			},
			title: "Are you sure?",
			message: 'Are you sure you want to submit? This action is irreversible.',
			alertType: "warning",
			falseActionBtn: true,
			closeOnOverlayClick: true,
		});
	} catch (error) {
		console.error("Error:", error);
		_callCatchError(() => _addAndUpdateProfession());
	}
}

/// Create And Update Profession Call Back ////
function _saveAddAndUpdateProfessionCallback(formData) {
	let useEachProfessionSession = JSON.parse(sessionStorage.getItem("useEachProfessionSession"));

	///// get btn text /////
	const btnText = $("#submitBtn").html();
	_btnDisable("submitBtn", btnText, true);

	let callUrl = useEachProfessionSession?.professionId
		? `admin/settings/profession-management/update-profession?professionId=${useEachProfessionSession?.professionId}`
		: `admin/settings/profession-management/create-profession`;

	//// call endpoint //////
	_callRawEndPoints({
		url: callUrl,
		formData,
		accessKey: true,
	})
	.then((response) => {
		const message = response?.message;
		const newProfessionImage = response?.data?.professionImage;

		_uploadProfessionImage(newProfessionImage, message, btnText);
	})
	.catch((error) => {
		_staffValidationCheck(error.response);
		console.error("Error:", error);

		if (error.status == 0) {
			_callAjaxError(() => _saveAddAndUpdateProfessionCallback(formData, error.message));
			_btnDisable("submitBtn", btnText, false);
		} else {
			_showCustomConfirm({
				title: "Unable to Create Profession",
				message: error.message,
				alertType: "error",
				trueActionBtnText: "OK",
				closeOnOverlayClick: true,
			});
			_btnDisable("submitBtn", btnText, false);
		}
	});
}

//// Upload Profession Image ////
function _uploadProfessionImage(newProfessionImage, message, btnText) {
	var professionImage = document.getElementById("professionImagePreview").src;

	// Only proceed if it's a NEW image (base64)
    if (!professionImage.startsWith("data:image")) {
        _showCustomConfirm({
			callback: () => {
				_alertClose();
				_getPage({page: 'professionManagement', url: portalMiddleWareUrl});
			},
			title: 'Success!',
			message: message,
			alertType: 'success',
			trueActionBtnText: 'OK, Thanks.',
			closeOnOverlayClick: false,
		});
		_btnDisable("submitBtn", btnText, false);
        return;
    }

    const formData = new FormData();
    formData.append("action", "uploadProfessionImagePix");
    formData.append("newProfessionImage", newProfessionImage);
    formData.append("professionImage", professionImage);

	_callFileEndPoints({
		url: portalMiddleWareUrl,
		formData,
		expectJson: false,
	})
	.then(() => {
		_showCustomConfirm({
			callback: () => {
				_alertClose();
				_getPage({page: 'professionManagement', url: portalMiddleWareUrl});
			},
			title: 'Success!',
			message: message,
			alertType: 'success',
			trueActionBtnText: 'OK, Thanks.',
			closeOnOverlayClick: false,
		});
		_btnDisable("submitBtn", btnText, false);
	})
	.catch((error) => {
		console.error("Error:", error);
		_callAjaxError(() => _uploadProfessionImage(newProfessionImage, message, btnText), error.message);
    });
}

/// Fetch Profession Data ////
function _fetchProfessionData() {
	try {
		_callFetchEndPoints({
			url: `admin/settings/profession-management/fetch-professions`,
			accessKey: true,
		})
		.then((response) => {
			_initProfessionData(response.data);
		})
		.catch((error) => {
			_staffValidationCheck(error.response);
			console.error("Error:", error);

			if (error.status == 0) {
				_showEmptyState({
					container: "professionContent",
					message: "Check your internet connection and try again",
					colspan: 20,
					paginationContainer: "professionContentPaginationControls",
				});
				_callAjaxError(() => _fetchProfessionData(), error.message);
			} else {
				_showEmptyState({
					container: "professionContent",
					message: error.message,
					colspan: 20,
					button: `
						<button class="btn" title="ADD NEW PROFESSION" onclick="sessionStorage.removeItem('useEachProfessionSession'); _getForm({page: 'professionReg', url: portalMiddleWareUrl});">
							<i class="bi-plus-square"></i> ADD NEW PROFESSION
						</button>
					`,
					paginationContainer: "professionContentPaginationControls",
				});
			}
		});
	} catch (error) {
		console.error("Error:", error);
		_callCatchError(() => _fetchProfessionData());
	}
}

/// Render Fetch Profession Data ////
function _renderProfessionData(data) {
	return data
		.map(
			(item) => `
			<div class="service-div">
				<div class="status-div ${item.statusData?.statusName}">${item.statusData?.statusName}</div>
				<div class="image-div">
					<img src="${websiteUrl}/uploaded_files/gallery/Electrician-Installing.jpeg"
                                alt="${item?.professionName}" />
				</div>

				<div class="service-icon-div">
					<img src="${professionPixPath}/${item?.professionImage}?t=${new Date().getTime()}"
						alt="${item?.professionName}">
				</div>

				<div class="text-div">
					<h3>${item?.professionName}</h3>
					<p>
						${item?.professionDescription?.substring(0, 80) || ''}
						${item?.professionDescription?.length > 80 ? '...' : ''}
					</p>

					<div class="btn-div">
						<button title="Edit Profession" class="btn" onclick="_fetchEachProfession('${item.professionId}')"><i class="bi bi-pencil-square"></i> Edit</button>
					</div>
				</div>
			</div>`
		)
		.join("");
}

/// Initialize Profession Data ////
function _initProfessionData(professionData) {
	const paginator = new Paginator(
		professionData,
		_renderProfessionData,
		"professionContentPaginationControls",
		"professionContent",
		10
	);
	__paginatorHandlers["professionContent"] = paginator;
	paginator.renderPage();
}

/// Fetch Each Profession ////
function _fetchEachProfession(professionId) {
	$("#get-form-more-div")
		.css({'display': 'flex', 'justify-content': 'center', 'align-items': 'center'})
		.fadeIn(500);

	try {
		//// call endpoint //////
		_callFetchEndPoints({
			url: `admin/settings/profession-management/fetch-professions?professionId=${professionId}`,
			accessKey: true,
		})
		.then((response) => {
			sessionStorage.setItem("useEachProfessionSession", JSON.stringify(response.data[0]));
			_getForm({page: 'professionReg', url: portalMiddleWareUrl});
		})
		.catch((error) => {
			_staffValidationCheck(error.response);
			_alertClose();
			console.error("Error:", error);
			_callAjaxError(() => _fetchEachProfession(professionId), error.message);
		});
	} catch (error) {
		_alertClose();
		console.error("Error:", error);
		_callCatchError(() => _fetchEachProfession(professionId));
	}
}