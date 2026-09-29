function _getActiveArtisanPage(props) {
    const { page = "", divid = "", pageContainer = "getArtisanDetails" } = props;
    _getArtisanPagesActiveLink(divid);
    if (page) {
        _getPage({
            page: page,
            pageContainer: pageContainer,
            url: portalMiddleWareUrl,
        });
    }
}

function _getArtisanPagesActiveLink(divid) {
    $("#artisanDashboard, #artisanTask, #artisanTransactions, #profileDetails, #taskNav").removeClass("active");
    $("#" + divid).addClass("active");
}

//// Filter Artisans ////
function _filtersArtisans(value) {
    $("#artisanContent .tb-row").each(function () {
        var text = $(this).text();
        text.toLowerCase().indexOf(value.toLowerCase()) > -1
            ? $(this).show()
            : $(this).hide();
    });
}

/// Fetch Artisan Data ///
function _fetchArtisanData() {
	try {
		//// call endpoint //////
		_callFetchEndPoints({
			url: `admin/artisans/fetch-artisans`,
			accessKey: true,
		})
		.then((response) => {
            _initFetchArtisanData(response?.data);
		 })
		.catch((error) => {
			_staffValidationCheck(error.response);
			console.error("Error:", error);
			if (error.status==0) {
				_showEmptyState({
					container: "artisanContent",
					message: "Check your internet connection and try again",
                    colspan: 20,
					paginationContainer: "artisanContentPaginationControls",
				});

				_callAjaxError(() => _fetchStaffData(), error.message); // retry if needed
			} else {
				_showEmptyState({
					container: "artisanContent",
					message: error.message,
                    colspan: 20,
					paginationContainer: "artisanContentPaginationControls",
				});
			}
		});
	} catch (error) {
		console.error("Error:", error);
		_callCatchError(() => _fetchArtisanData()); 
  	}
}

/// Render Artisan Data ///
function _renderArtisanData(data, start) {
    return data
        .map(
            (item, i) => {
                const statusClass = item.statusData?.statusName.includes(" ")
                    ? item?.statusData?.statusName.toUpperCase().replace(/\s+/g, "-")
                    : item?.statusData?.statusName;
                
                const availabilityStatusClass = item.availableStatusData?.statusName.includes(" ")
                    ? item?.availableStatusData?.statusName.toUpperCase().replace(/\s+/g, "-")
                    : item?.availableStatusData?.statusName;

        return `
            <tr class="tb-row">
                <td>${start + i + 1}</td>

                <td class="clickable-td" title="Click to view artisan profile"
                    onclick="_fetchEachArtisan('${item?.artisanId}');">

                    <div class="text-back-div">
                        <div class="icon-div">
                            ${getFirstLettersOfEachWord(item?.firstName + " " + item?.lastName)}
                        </div>

                        <div class="text-div">
                            <div class="first-class">
                                ${item?.firstName} ${item?.lastName}
                            </div>

                            <div class="second-class">
                                ${item?.artisanId}
                            </div>
                        </div>
                    </div>
                </td>

                <td>
                    <div class="text-div">
                        <div>${item?.emailAddress}</div>
                        <div>${item?.phoneNumber}</div>
                    </div>
                </td>
                <td>
                    <div class="service-type-div">
                        ${item?.artisanProfessionData?.slice(0, 2).map(profession => `
                                <span class="service-badge"><i class="bi bi-tools"></i> ${profession?.professionName}</span>
                            `).join("")
                    }

                        ${item?.artisanProfessionData?.length > 2
                        ? `<span class="service-badge more">
                                +${item?.artisanProfessionData?.length - 2} more
                            </span>`
                        : ""
                    }
                    </div>
                </td>
                <td>
                    <div class="text-back-div">
                        <div class="text-div">
                            <div class="first-class date-item">
                                <i class="bi bi-calendar2-check"></i>
                                ${item?.lastLoginTime ? _formatShortDate(item.lastLoginTime) : "00-00-00"}
                            </div>

                            <div class="second-class date-item">
                                <i class="bi bi-clock"></i>
                                ${item?.lastLoginTime ? _formatTime(item.lastLoginTime) : "00:00:00"}
                            </div>
                        </div>
                    </div>
                </td>

				<td>
					<div class="status-div ${statusClass}">
						${item?.statusData?.statusName}
					</div>
				</td>

				<td>
					<div class="status-div ${availabilityStatusClass}"">
						${item?.availableStatusData?.statusName}
					</div>
				</td>

                <td>
                    <button class="btn view-btn"
                        title="Click to view artisan profile"
                        onclick="_fetchEachArtisan('${item?.artisanId}');">
                        VIEW
                    </button>
                </td>
            </tr>`
        })
        .join("");
}

/// Initialize Fetch Artisan Data ///
function _initFetchArtisanData(data) {
    const paginator = new Paginator(
        data,
        _renderArtisanData,
        "artisanContentPaginationControls",
        "artisanContent",
        10
    );

    __paginatorHandlers["artisanContentPaginationControls"] = paginator;
    paginator.renderPage();
}

/// Fetch Each Artisan ///
function _fetchEachArtisan(artisanId) {
    $("#get-form-more-div").css({ 'display': 'flex', 'justify-content': 'center', 'align-items': 'center' }).fadeIn(500);
    try {
        //// call endpoint //////
        _callFetchEndPoints({
            url: `admin/artisans/fetch-artisans?artisanId=${artisanId}`,
            accessKey: true,
        })
        .then((response) => {
            sessionStorage.setItem(
                "getEachArtisanDetailsSession",
                JSON.stringify(response?.data?.[0])
            );

            _getForm({
                page: 'artisanProfile',
                url: portalMiddleWareUrl
            });
        })
        .catch((error) => {
            _staffValidationCheck(error.response);
            _alertClose();
            console.error("Error:", error);
            _callAjaxError(() => _fetchEachArtisan(artisanId), error.message); // retry if needed
        });
    } catch (error) {
        _alertClose();
        console.error("Error:", error);
        _callCatchError(() => _fetchEachArtisan(artisanId));
    }
}