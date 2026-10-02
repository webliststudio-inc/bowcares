//// Filter Pending Requests ////
function _filtersPendingRequests(value) {
    $("#pendingRequestPageContent .tb-row").each(function () {
        var text = $(this).text();
        text.toLowerCase().indexOf(value.toLowerCase()) > -1
            ? $(this).show()
            : $(this).hide();
    });
}

/// Fetch Pending Requests Data ///
function _fetchPendingRequestData() {
	try {
		//// call endpoint //////
		_callFetchEndPoints({
			url: `admin/service-request/fetch-service-requests`,
			accessKey: true,
		})
		.then((response) => {
			_initFetchPendingRequestsData(response?.data);
		})
		.catch((error) => {
			_staffValidationCheck(error.response);
			console.error("Error:", error);

			if (error.status == 0) {
				_showEmptyState({
					container: "pendingRequestPageContent",
					message: "Check your internet connection and try again",
					colspan: 20,
					paginationContainer: "pendingRequestPageContentPaginationControls",
				});

				_callAjaxError(() => _fetchPendingRequestData(), error.message);
			} else {
				_showEmptyState({
					container: "pendingRequestPageContent",
					message: error.message,
					colspan: 20,
					paginationContainer: "pendingRequestPageContentPaginationControls",
				});
			}
		});
	} catch (error) {
		console.error("Error:", error);
		_callCatchError(() => _fetchPendingRequestData());
	}
}

/// Render Pending Requests Data ///
function _renderPendingRequestsData(data, start) {
	return data
		.map((item, i) => {
			const statusClass = item?.statusData?.statusName
				?.toUpperCase()
				.replace(/\s+/g, "-");

			return `
				<tr class="tb-row">
					<td>${start + i + 1}</td>

					<td class="clickable-td"
						title="Attend to pending request"
						onclick="_proccedAttendCustomer('${item?.serviceRequestId}')">
						<div class="text-back-div">
							<div class="text-div">
								<div class="first-class">
									${item?.serviceRequestId}
								</div>
							</div>
						</div>
					</td>

					<td>

						<div class="text-back-div">
							<div class="icon-div">
								${getFirstLettersOfEachWord(item?.customerData?.[0]?.fullName)}
							</div>

							<div class="text-div">
								<div class="first-class">
									${item?.customerData?.[0]?.fullName}
								</div>

								<div class="second-class">
									${item?.customerData?.[0]?.phoneNumber}
								</div>
							</div>
						</div>
					</td>

					<td>
						<div class="text-back-div desc-text-back-div">
							<div class="text-div">
								<div class="second-class">
									${item?.serviceDescription?.length > 100
										? item.serviceDescription.substring(0, 100) + "..."
										: item?.serviceDescription
									}
								</div>
							</div>
						</div>
					</td>

					<td>
						<div class="text-back-div">
							<div class="text-div">

								<div class="first-class date-item">
									<i class="bi bi-calendar2-check"></i>
									${item?.createdTime
										? _formatShortDate(item.createdTime)
										: "00-00-00"}
								</div>

								<div class="second-class date-item">
									<i class="bi bi-clock"></i>
									${item?.createdTime
										? _formatTime(item.createdTime)
										: "00:00:00"}
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
						<button class="btn view-btn"
							title="Attend to pending request"
							onclick="_proccedAttendCustomer('${item?.serviceRequestId}')">
							ATTEND
						</button>
					</td>
				</tr>
			`;
		})
		.join("");
}

/// Initialize Pending Requests Data ///
function _initFetchPendingRequestsData(data) {
	const paginator = new Paginator(
		data,
		_renderPendingRequestsData,
		"pendingRequestPageContentPaginationControls",
		"pendingRequestPageContent",
		10
	);

	__paginatorHandlers["pendingRequestPageContentPaginationControls"] = paginator;
	paginator.renderPage();
}

/// Attend to Pending Request ///
function _proccedAttendCustomer(serviceRequestId) {
	$("#get-form-more-div")
		.css({
			"display": "flex",
			"justify-content": "center",
			"align-items": "center"
		})
		.fadeIn(500);

	try {
		//// call endpoint //////
		_callFetchEndPoints({
			url: `admin/service-request/fetch-service-requests?serviceRequestId=${serviceRequestId}`,
			accessKey: true,
		})
		.then((response) => {
			sessionStorage.setItem(
				"getEachServiceRequestSession",
				JSON.stringify(response?.data?.[0])
			);

			_getForm({
				page: 'invoiceReg',
				url: portalMiddleWareUrl
			});
		})
		.catch((error) => {
			_staffValidationCheck(error.response);
			_alertClose();
			console.error("Error:", error);
			_callAjaxError(() => _proccedAttendCustomer(serviceRequestId), error.message);
		});
	} catch (error) {
		_alertClose();
		console.error("Error:", error);
		_callCatchError(() => _proccedAttendCustomer(serviceRequestId));
	}
}