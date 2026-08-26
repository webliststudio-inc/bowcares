///// Get Active Pages Tab ////
function _getActivePagesTab(props) {
	const {
        page = '',
		divid = '',
		pageCategory = '', /// optional
		pageContainer='getPagesDetails'
    } = props;
	_getActivePagesTabLink(divid);
	if(page){
		_getPage({page: page, pageContainer: pageContainer, pageCategory: pageCategory, url: portalMiddleWareUrl});
	}
}

/// Get Active Pages Tab Link ///
function _getActivePagesTabLink(divid){
	$('#pageContent, #picturePage, #serviceFaqPage').removeClass('active-li');
	$("#"+divid).addClass('active-li');
}

//// Preview Page Flyer ////
$(function () {
	seoFlyerPreview = {
	UpdatePreview: function (obj) {
		if (!window.FileReader) {
		// Handle browsers that don't support FileReader
		console.error("FileReader is not supported.");
		} else {
		var reader = new FileReader();

		reader.onload = function (e) {
			$('#seoFlyerPreviewPix').prop("src", e.target.result);
		};
		reader.readAsDataURL(obj.files[0]);
		}
	},
	};
});

///// Fetch Each Pages Information ////
function _fetchEachPageContent(pageCategory, pageId) {
	$("#get-form-more-div").css({'display': 'flex','justify-content': 'center','align-items': 'center'}) .fadeIn(500);
	try {
		//// call endpoint //////
		_callFetchEndPoints({
			url: `admin/pages/fetch-page?pageCategory=${pageCategory}&pageId=${pageId}`,
			accessKey: true,
		})
		.then((response) => {
			const data = response?.data?.[0];
			sessionStorage.setItem("useEachPageSession", JSON.stringify(data));
			_getForm({page: 'editPagesForm', pageCategory: pageCategory, url: portalMiddleWareUrl});
		})
		.catch((error) => {
			_staffValidationCheck(error.response);
			console.error("Error:", error);
			if (error.status==0) {
				_callAjaxError(() => _fetchEachPageContent(pageCategory, pageId), error.message); // retry if needed
			} else {
				_showCustomConfirm({
					title: "Unable to Fetch Data",
					message: error.message,
					alertType: "error",
					trueActionBtnText: "OK",
					closeOnOverlayClick: true,
				});
				$("#get-form-more-div").css({'display': 'none'});
			}
		});
	} catch (error) {
		console.error("Error:", error);
		_callCatchError(() => _fetchEachPageContent(pageCategory, pageId));
		$("#get-form-more-div").css({'display': 'none'});
  	}
}

/// Create or Update Page ///
function _createOrUpdatePage(pageCategory){
	useEachPageSession = JSON.parse(sessionStorage.getItem("useEachPageSession"));

	try {
		tinyMCE.triggerSave();

		////////get all needed values////////////
		let issueCount = 0;
		const categoryId = $('#categoryId').val()?.trim();
		const professionId = $('#professionId').val()?.trim();
		const pageTitle = $('#pageTitles').val()?.trim().replace(/['’]/g, '');
		const pageUrl = $('#pageUrl').val()?.trim();
		const seoKeywords = $('#seoKeywords').val()?.trim();
		const seoDescription = $('#seoDescription').val()?.trim().replace(/['’]/g, '');
		const pageContent = $('#pageContentEditor').val()?.trim().replace(/['’]/g, '');
		const location = $('#location').val()?.trim();
		const statusId = $('#statusId').val()?.trim();
		const seoFlyer = $("#seoFlyer").prop("files")[0];
		
		///// empty field validation//////////
		issueCount += _validateEmptyValue("pageTitles", "PAGE TITLE");
		issueCount += _validateEmptyValue("pageUrl", "PAGE URL");
		issueCount += _validateEmptyValue("seoKeywords", "SEO KEYWORDS");
		issueCount += _validateEmptyValue("seoDescription", "SEO DESCRIPTION");
		issueCount += _validateEmptyValue("statusId", "STATUS");
		
		if (pageCategory === 'GALLERY') {
			issueCount += _validateEmptyValue("professionId", "GALLERY CATEGORY");
			issueCount += _validateEmptyValue("location", "LOCATION");
		}

		if (pageCategory === 'BLOG') {
			issueCount += _validateEmptyValue("categoryId", "CATEGORY");
		} 
		
		if (!pageContent) {
			$("#pageContentEditor").addClass("issue");
			$("#issue_pageContentEditor").html("PAGE CONTENT REQUIRED");
			issueCount += 1;
		} else {
			$("#pageContentEditor").removeClass("issue");
			$("#issue_pageContentEditor").html("");
		}

		if (!useEachPageSession){
			if (!seoFlyer) {
				$("#issues_seoFlyer").html("SEO FLYER IS REQUIRED").fadeIn();
				$("#issueBorder").addClass("issue-border");
				issueCount ++
			} else {
				$("#issues_seoFlyer").html("");
				$("#issueBorder").removeClass("issue-border");
			}
		}

		if (issueCount > 0) return;

		// Gather form data //
		const formData = {
			pageCategory,
			pageTitle,
			pageUrl,
            seoKeywords,
            seoDescription,
            pageContent,
            statusId,
			...(pageCategory === "BLOG" && { categoryId }),
			...(pageCategory === "GALLERY" && { location }),
			...(pageCategory === "GALLERY" && { professionId }),
		};

		////// confirm action////
		_showCustomConfirm({
		callback: () => {
			_createOrUpdatePageCallback(formData);
		},
			title: "Are you sure?",
			message: 'Are you sure you want to save? This action is irreversible.',
			alertType: "warning",
			falseActionBtn: true,
			closeOnOverlayClick: true,
		});
	} catch (error) {
		console.error("Error:", error);
		_callCatchError(() => _createOrUpdatePage(pageCategory));
	}
}

/// Create or Update Page Callback ///
function _createOrUpdatePageCallback(formData) {
	useEachPageSession = JSON.parse(sessionStorage.getItem("useEachPageSession"));
	try {
		///// get btn text/////
		const btnText = $("#saveBtn").html();
		_btnDisable("saveBtn", btnText, true);

		let callUrl= useEachPageSession?.pageId ? `admin/pages/update-page?pageCategory=${formData?.pageCategory}&pageId=${useEachPageSession?.pageId}` : `admin/pages/create-page?pageCategory=${formData?.pageCategory}`;
		
		//// call endpoint //////
		_callRawEndPoints({
			url: callUrl,
			formData,
			accessKey: true,
		})
		.then((response) => {
			const message = response.message;
			const fetchData = response?.data; 
			const oldPageUrl = response?.oldPageUrl;
			const newSeoFlyer = fetchData.seoFlyer; 
			const fetchPageCategory = fetchData.pageCategory.toLowerCase();
			const pageId = fetchData.pageId; 
			const pageUrl = fetchData.pageUrl; 
			const pageTitle = fetchData.pageTitle; 
			const seoKeywords = fetchData.seoKeywords; 
			const seoDescription = fetchData.seoDescription; 

			_uploadPagePicture(fetchPageCategory, newSeoFlyer, message);
			_createPagesFolder(fetchPageCategory, pageId, pageUrl, oldPageUrl, pageTitle, seoKeywords, seoDescription, newSeoFlyer, message, btnText);
		})
		.catch((error) => {
			_staffValidationCheck(error.response);
			console.error("Error:", error);
			if (error.status==0) {
				_callAjaxError(() => _createOrUpdatePageCallback(formData), error.message); // retry if needed
				_btnDisable("saveBtn", btnText, false);
			} else {
				_showCustomConfirm({
					title: "Unable to Save Data",
					message: error.message,
					alertType: "error",
					trueActionBtnText: "OK",
					closeOnOverlayClick: true,
				});
				_btnDisable("saveBtn", btnText, false);
			}
		});
	} catch (error) {
		console.error("Error:", error);
		_callCatchError(() => _createOrUpdatePageCallback(formData));
	}
}

//// Upload Page Picture ////
function _uploadPagePicture(fetchPageCategory, newSeoFlyer, message) {
	var seoFlyer = document.getElementById("seoFlyerPreviewPix").src;

	// Only proceed if it's a NEW image (base64)
    if (!seoFlyer.startsWith("data:image")) {
        _showCustomConfirm({
            callback: () => {
                _alertClose();
				_getActivePage({page: `${fetchPageCategory}Page`, divid: `${fetchPageCategory}Page`});
            },
            title: 'Success!',
            message: message,
            alertType: 'success',
            trueActionBtnText: 'OK, Thanks.',
			closeOnOverlayClick: false,
        });
        return;
    }

    const formData = new FormData();
    formData.append("action", "uploadPagePix");
    formData.append("newSeoFlyer", newSeoFlyer);
    formData.append("seoFlyer", seoFlyer);
	formData.append("pageCategory", fetchPageCategory);

	_callFileEndPoints({
		url: portalMiddleWareUrl,
		formData,
		expectJson: false,
	})
    .catch((error) => {
		console.error("Error:", error);
		_callAjaxError(() => _uploadPagePicture(fetchPageCategory, newSeoFlyer), error.message);
    });
}

//// Create Pages Folder ////
function _createPagesFolder(fetchPageCategory, pageId, pageUrl, oldPageUrl, pageTitle, seoKeywords, seoDescription, newSeoFlyer, message, btnText) {

	const formData = new FormData();
    formData.append("action", "createPagesFolder");
	formData.append("pageCategory", fetchPageCategory);
	formData.append("pageId", pageId);
	formData.append("pageUrl", pageUrl);
	formData.append("oldPageUrl", oldPageUrl);
	formData.append("pageTitle", pageTitle);
	formData.append("seoKeywords", seoKeywords);
	formData.append("seoDescription", seoDescription);
	formData.append("newSeoFlyer", newSeoFlyer);

	_callFileEndPoints({
		url: portalMiddleWareUrl,
		formData,
		expectJson: false,
	})
	.then(() => {
		_showCustomConfirm({
			callback: () => {
                _alertClose();
                _getActivePage({page: `${fetchPageCategory}Page`, divid: `${fetchPageCategory}Page`});
            },
			title: 'Success!',
			message: message,
			alertType: 'success',
			trueActionBtnText: 'OK, Thanks.',
			closeOnOverlayClick: false,
		});
		_btnDisable("saveBtn", btnText, false);
	})
    .catch((error) => {
		console.error("Error:", error);
		_callAjaxError(() => _createPagesFolder(fetchPageCategory, pageId, pageUrl, oldPageUrl, pageTitle, seoKeywords, seoDescription, newSeoFlyer, message, btnText), error.message); // retry if needed
    });
}

//// Save Pages Picture ////
function _savePagePictures(pageCategory) {
   try {
		/////Gather form data////
		const formData = new FormData();
		const totalFiles = $('#pagePixArr').get(0).files.length;

		if (totalFiles>0){
			for(var i = 0; i < totalFiles; i++){
				formData.append("pagePixArr[]", $("#pagePixArr").get(0).files[i]);
			}
		}

		////// confirm action////
		_showCustomConfirm({
			callback: () => {
				_savePagePicturesCallback(formData, pageCategory);
			},
			title: "Are you sure?",
			message: 'Are you sure you want to upload? This action is irreversible.',
			alertType: "warning",
			falseActionBtn: true,
			closeOnOverlayClick: true,
		});
	} catch (error) {
		console.error("Error:", error);
		_callCatchError(() => _savePagePictures(pageCategory));
	}
}

//// Save Pages Picture Callback ////
function _savePagePicturesCallback(formData, pageCategory) {
	useEachPageSession = JSON.parse(sessionStorage.getItem("useEachPageSession"));
	const pageId = useEachPageSession?.pageId;
	try {
		_showLoader("Uploading Pictures!. Please wait...");
		
		// send files + publishId to backend
		_callFileEndPoints({
			url: `admin/pages/get-pictures-presigned-links?pageId=${pageId}`,
			formData,
			accessKey: true,
		})
		.then((response) => {
			const message = response?.message;
			const pagePixNames = response?.pagePixNames || "";

			_uploadPagePictures(formData, pagePixNames, message, pageCategory, pageId);
		})
		.catch((error) => {
			_staffValidationCheck(error.response);
			console.error("Error:", error);
			if (error.status==0) {
				_callAjaxError(() => _savePagePicturesCallback(formData, pageCategory), error.message); // retry if needed
				_hideLoader();
			} else {
				_showCustomConfirm({
					title: "Unable to Upload Pictures",
					message: error.message,
					alertType: "error",
					trueActionBtnText: "OK",
					closeOnOverlayClick: true,
				});
				_hideLoader();
			}
		});
	} catch (error) {
		console.error("Error:", error);
		_callCatchError(() => _savePagePicturesCallback(formData, pageCategory));
		_hideLoader();
	}
}

/// Upload Page Pictures ////
function _uploadPagePictures(formData, pagePixNames, message, pageCategory, pageId) {
    formData.append("action", "uploadPagePictures");
    formData.append("pagePixNames", pagePixNames);

	//// Upload Pictures ////
    _callFileEndPoints({
        url: portalMiddleWareUrl,
        formData,
        expectJson: false,
    })
	.then(() => {
		_hideLoader();
        _showCustomConfirm({
			callback: () => {
				_fetchEachPageContent(pageCategory, pageId);
			},
            title: "Success!",
            message: message,
            alertType: "success",
			trueActionBtnText: "OK, Thanks.",
			closeOnOverlayClick: false,
        });
    })
    .catch((error) => {
        console.error("Error:", error);
        _callAjaxError(() => _uploadPagePictures(formData, pagePixNames, message, pageCategory, pageId));
    });
}

//// Delete Page Picture ////
function _deletePagePicture(pageId, sn) {
	_showCustomConfirm({
		callback: () => {
			_deletePagePictureCallback(pageId, sn);
		},
		title: "Are you sure?",
		message: 'Are you sure you want to delete? This action is irreversible.',
		alertType: "warning",
		falseActionBtn: true,
	});
}

//// Delete Page Picture Callback ////
function _deletePagePictureCallback(pageId, sn){
	try {
		///// get btn text/////
		const btnText = $(`#deleteBtn_${sn}`).html();
		_btnDisable(`deleteBtn_${sn}`, btnText, true);
		
		//// call endpoint //////
		_callFetchEndPoints({
			url: `admin/pages/delete-page-picture?pageId=${pageId}&sn=${sn}`,
			accessKey: true,	
		})
		.then((response) => {
			const message = response?.message;
			const oldPagePix = response?.pagePix || "";
			
			_deleteOldPagePictures(oldPagePix, message, sn);
		})
		.catch((error) => {
			_staffValidationCheck(error.response);
			console.error("Error:", error);
			if (error.status==0) {
				_callAjaxError(() => _deletePagePictureCallback(pageId, sn), error.message); // retry if needed
				_btnDisable(`deleteBtn_${sn}`, btnText, false);
			} else {
				_showCustomConfirm({
					title: "Unable to Delete Picture",
					message: error.message,
					alertType: "error",
					trueActionBtnText: "OK",
					closeOnOverlayClick: true,
				});
				_btnDisable(`deleteBtn_${sn}`, btnText, false);
			}
		});
	} catch (error) {
		console.error("Error:", error);
		_callCatchError(() => _deletePagePictureCallback(pageId, sn));
		_btnDisable(`deleteBtn_${sn}`, btnText, false);
	}
}

//// Delete Old Page Pictures ////
function _deleteOldPagePictures(oldPagePix, message, sn) {
	const formData = new FormData();
	formData.append("action", "deleteOldPagePictures");
	formData.append("oldPagePix", oldPagePix);

	_callFileEndPoints({
		url: portalMiddleWareUrl,
		formData,
		expectJson: false,
	})
	.then(() => {
		// Remove from session object
		useEachPageSession.pagePicturesData =
		useEachPageSession.pagePicturesData.filter(
			item => Number(item.sn) !== Number(sn)
		);

		sessionStorage.setItem(
			"useEachPageSession",
			JSON.stringify(useEachPageSession)
		);
		$("#pictureDiv_" + sn).fadeOut(300, function () {
			$(this).remove();
		});
		_showCustomConfirm({
			title: "Success!",
			message: message,
			alertType: "success",
			trueActionBtnText: "OK, Thanks.",
			closeOnOverlayClick: false,
		});
	})
	.catch((error) => {
		console.error("Error:", error);
		_callAjaxError(() => _deleteOldPagePictures(oldPagePix, message, sn));	
	});	
}


//// fetch Page Faq Data ///
function _fetchPageFaqData() {
	$('#pagesFaqContent').html(`
		<div class="content-loading-div">
		<img src="${websiteUrl}/all-images/images/spinner.gif" alt="Loading" />
	</div>`);

	useEachPageSession = JSON.parse(sessionStorage.getItem("useEachPageSession"));
	const pageId = useEachPageSession?.pageId;

	try {
		//// call endpoint //////
		_callFetchEndPoints({
			url: `admin/faq/fetch-faq?faqKey=page&categoryId=${pageId}`,
			accessKey: true,
		})
		.then((response) => {
            _initFetchPageFaqData(response?.data);
		})
		.catch((error) => {
			_staffValidationCheck(error.response);
			console.error("Error:", error);
			if (error.status==0) {
				_showFalseNotification({
					container: "pagesFaqContent",
					message: "Check your internet connection and try again",
				});

				_callAjaxError(() => _fetchPageFaqData(), error.message); // retry if needed
			} else {
				_showEmptyState({
					container: "pagesFaqContent",
					message: error.message,
				});
			}
		});
	} catch (error) {
		console.error("Error:", error);
		_callCatchError(() => _fetchPageFaqData());
  	}
}

//// initiate fetch page faq data ///
function _initFetchPageFaqData(data) {
  	const content = data.map((item, index) => {
    const faqId = `faq${index+1}`; // unique wrapper ID
    const faqNumId = `faq${index+1}num`; // unique expand icon ID
    const faqAnswerId = `faq${index+1}answer`; // unique answer div ID

    return `
		<div class="pages-faq-toggle" id="faq_${item?.faqId}">
			<div class="title-wrapper" onclick="_collapse('${faqId}')">
				<div class="text-back-div">
					<div class="icon-div" title="Delete this qestion" id="deleteFaq_${item?.faqId}" onclick="_deleteFaq('${item?.faqId}');">
						<i class="bi bi-trash3"></i>
					</div>

					<div class="title-text">
						<h3>${item?.faqQuestion}</h3>
					</div>
				</div>
				<div class="expand-div" id="${faqNumId}">
					&nbsp;<i class="bi-plus"></i>&nbsp;
				</div>
			</div>

			<div class="faq-answer-div" id="${faqAnswerId}">
				<p>${item?.faqAnswer}</p>
			</div>
		</div>
    `;
  }).join("");

  $('#pagesFaqContent').html(content);
}

//// create and update page faq ///
function _createPageFaq() {
	useEachPageSession = JSON.parse(sessionStorage.getItem("useEachPageSession"));
	const pageId = useEachPageSession?.pageId;

	try {
		tinyMCE.triggerSave();

		////////get all needed values////////////
		let issueCount = 0;
		const categoryId = pageId;
		const faqKey = "page";
		const faqQuestion = $('#faqQuestion').val().trim();
		const faqAnswer = $('#faqAnswer').val().trim();
		const statusId = 1;
		
		///// empty field validation//////////
		issueCount += _validateEmptyValue("faqQuestion", "FAQ QUESTION");

		$("#faqAnswer").removeClass("issue");
  		$("#issue_faqAnswer").html("");

		if (!faqAnswer) {
			$("#faqAnswer").addClass("issue");
			$("#issue_faqAnswer").html("FAQ ANSWER REQUIRED");
			issueCount++;
		}

		if (issueCount > 0) return;

		// Gather form data //
		const formData = {
			faqKey,
			categoryId,
			faqQuestion,
			faqAnswer,
			statusId,
		};

		////// confirm action////
		_showCustomConfirm({
		callback: () => {
			_savePageFaqCallback(formData);
		},
			title: "Are you sure?",
			message: 'Are you sure you want to save? This action is irreversible.',
			alertType: "warning",
			falseActionBtn: true,
		});
	} catch (error) {
		console.error("Error:", error);
		_callCatchError(() => _createPageFaq());
	}
}

function _savePageFaqCallback(formData) {
	///// get btn text/////
	const btnText = $("#saveFaqBtn").html();
	_btnDisable("saveFaqBtn", btnText, true);

	//// call endpoint //////
	_callRawEndPoints({
		url: `admin/faq/create-faq`,
		formData,
		accessKey: true,
	})
	.then((response) => {
		_clearFieldsValues();
		_showCustomConfirm({
			callback: () => {
				_fetchPageFaqData();
			},
			title: 'Success!',
			message: response?.message,
			alertType: 'success',
			trueActionBtnText: 'OK, Thanks.',
		});
		_btnDisable("saveFaqBtn", btnText, false);
    })
    .catch((error) => {
		_staffValidationCheck(error.response);
		console.error("Error:", error);
		if (error.status==0) {
			_callAjaxError(() => _savePageFaqCallback(formData), error.message); // retry if needed
			_btnDisable("saveFaqBtn", btnText, false);
		} else {
			_actionAlert(error.message, false);
			_btnDisable("saveFaqBtn", btnText, false);
		}
    });
}

/// CLEAR FIELDS VALUES ////
function _clearFieldsValues(){
	$('#faqQuestion').val('');
	tinymce.get('faqAnswer').setContent('');
}

/// DELETE Pages FAQ ////
function _deleteFaq(faqId) {
	_showCustomConfirm({
		callback: () => {
			_deleteFaqCallback(faqId);
		},
		title: "Are you sure?",
		message: 'Are you sure you want to delete this FAQ? This action is irreversible.',
		alertType: "warning",
		falseActionBtn: true,
		closeOnOverlayClick: true,
	});
}

/// DELETE FAQ CALLBACK ////
function _deleteFaqCallback(faqId){
	try {
		///// get btn text/////
		const btnText = $(`#deleteFaq_${faqId}`).html();
		_btnDisable(`deleteFaq_${faqId}`, btnText, true);

		// Count FAQs BEFORE deleting
		const faqCount = $(".pages-faq-toggle").length;

		//// call endpoint //////
		_callFetchEndPoints({
			url: `admin/faq/delete-faq?faqId=${faqId}`,
			accessKey: true,	
		})
		.then((response) => {
			$(`#faq_${faqId}`).fadeOut(300, function () {
				$(this).remove();
			});
			if (faqCount === 1) {
				_fetchPageFaqData();
			}

			_showCustomConfirm({
				title: 'Success!',
				message: response?.message,
				alertType: 'success',
				trueActionBtnText: 'OK, Thanks.',
			});
			_btnDisable(`deleteFaq_${faqId}`, btnText, false);
		})
		.catch((error) => {
			_staffValidationCheck(error.response);
			console.error("Error:", error);
			if (error.status==0) {
				_callAjaxError(() => _deleteFaqCallback(faqId), error.message); // retry if needed
				_btnDisable(`deleteFaq_${faqId}`, btnText, false);
			} else {
				_actionAlert(error.message, false);
				_btnDisable(`deleteFaq_${faqId}`, btnText, false);
			}
      	});
	} catch (error) {
		console.error("Error:", error);
		_callCatchError(() => _deleteFaqCallback(faqId));
		_btnDisable(`deleteFaq_${faqId}`, btnText, false);
	}
}