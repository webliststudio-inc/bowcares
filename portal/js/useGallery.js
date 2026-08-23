/// Get Select Project Stages ///
function _getSelectProjectStages(fieldId) {
	try {
		//// call endpoint //////
		_callFetchEndPoints({
			url: `preset-data/fetch-project-stages?statusId=1`,
			accessKey: true,
		})
		.then((response) => {
			for (let i = 0; i < response.data.length; i++) {
				const id = response.data[i].projectStageId;
				const value = response.data[i].projectStageName;
				$('#searchList_'+ fieldId).append('<li onclick="_clickOption(\'searchList_' + fieldId + '\', \'' + id + '\', \'' + value + '\');">'+ value +'</li>');
			}				
		 })
		.catch((error) => {
			_staffValidationCheck(error.response);
			console.error("Error:", error);
		});
	} catch (error) {
		console.error("Error:", error);
		_actionAlert('An unexpected error occurred. Please try again.', false);
  	}
}

/// Get Select Profession Categories ///
function _getSelectProfessionCategories(fieldId) {
	try {
		//// call endpoint //////
		_callFetchEndPoints({
			url: `admin/settings/profession-management/fetch-professions?statusId=1`,
			accessKey: true,
		})
		.then((response) => {
			for (let i = 0; i < response.data.length; i++) {
				const id = response.data[i].professionId;
				const value = response.data[i].professionName;
				$('#searchList_'+ fieldId).append('<li onclick="_clickOption(\'searchList_' + fieldId + '\', \'' + id + '\', \'' + value + '\');">'+ value +'</li>');
			}				
		 })
		.catch((error) => {
			_staffValidationCheck(error.response);
			console.error("Error:", error);
		});
	} catch (error) {
		console.error("Error:", error);
		_actionAlert('An unexpected error occurred. Please try again.', false);
  	}
}

/// Fetch Gallery Data ///
function _fetchGalleryData() {
	try {
		//// call endpoint //////
		_callFetchEndPoints({
			url: `admin/pages/fetch-page?pageCategory=GALLERY`,
			accessKey: true,
		})
		.then((response) => {
            _initFetchGalleryData(response?.data);
		})
		.catch((error) => {
			_staffValidationCheck(error.response);
			console.error("Error:", error);
			if (error.status==0) {
				_showEmptyState({
					container: "galleryPageContent",
					message: "Check your internet connection and try again",
					paginationContainer: "galleryContentPaginationControls",
				});
				_callAjaxError(() => _fetchGalleryData(), error.message); // retry if needed
			} else {
				_showEmptyState({
					container: "galleryPageContent",
					message: error.message,
					button: `
						<button class="btn" title="ADD NEW GALLERY" onclick="sessionStorage.removeItem('useEachPageSession'); _getForm({page: 'editPagesForm', pageCategory: 'GALLERY', url: portalMiddleWareUrl});">
							<i class="bi-plus-square"></i> ADD NEW GALLERY
						</button>
					`,
					paginationContainer: "galleryContentPaginationControls",
				});
			}
		});
	} catch (error) {
		console.error("Error:", error);
		_callCatchError(() => _fetchGalleryData());
  	}
}

/// Initialize Gallery Data ///
function _renderGalleryData(data) {
  return data.map((item) => `
  	<div class="grid-div">
		<div class="status-div ${item.professionNameData?.professionName}">${item.professionNameData?.professionName}</div>
		<div class="img-div">
			<img src="${galleryPixPath}/${item.seoFlyer}?t=${Date.now()}" alt="${item.pageTitle}" />
		</div>
		<div class="text-div">
			<div class="text-in">
				<div class="text">UPDATED ON: <span>${_fetchFormatDate(item.updatedTime)}</span></div>
				<div class="other-status ${item.statusData?.statusName}">${item.statusData?.statusName}</div>
			</div>
			<h2 title="${item.pageTitle}" onclick="_fetchEachPageContent('${item.pageCategory}', '${item.pageId}');">${item.pageTitle}</h2>
			<p>${item.seoDescription}</p>  
			<div class="bottom-content">
				<div class="category"><i class="bi bi-images"></i> <span>13</span></div>
				<div class="location"><i class="bi bi-geo-alt"></i> <span>${item.location}</span></div>
			</div>
		</div>
	</div>`).join("");
}

//// Initialize Gallery Data Pagination ////
function _initFetchGalleryData(data) {
  const paginator = new Paginator(
    data,
    _renderGalleryData,
    "galleryContentPaginationControls",
    "galleryPageContent",
    8
  );
  __paginatorHandlers["galleryContentPaginationControls"] = paginator;
  paginator.renderPage();
}

//// Filter Gallery Data ////
function _filtersGallery(value) {
  $("#galleryPageContent .grid-div").each(function () {
    var text = $(this).text();
    text.toLowerCase().indexOf(value.toLowerCase()) > -1
      ? $(this).show()
      : $(this).hide();
  });
}