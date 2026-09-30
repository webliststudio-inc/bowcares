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

		/*
		_callFetchEndPoints({
			url: `admin/pending-requests/fetch-pending-requests`,
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

				_callAjaxError(() => _fetchPendingRequestsData(), error.message);
			} else {
				_showEmptyState({
					container: "pendingRequestPageContent",
					message: error.message,
					colspan: 20,
					paginationContainer: "pendingRequestPageContentPaginationControls",
				});
			}
		});
		*/

		//// Dummy Pending Request Data //////
		const response = [
			{
				requestId: "REQ-0001",
				customerData: {
					customerId: "CUS-0001",
					fullName: "Michael Johnson",
					phoneNumber: "123-456-7890",
				},
				serviceDescription: "Customer reported persistent leakage from the plumbing system, replacing faulty parts, testing water flow, and ensuring the faucet is fully functional.",
				requestDate: "2026-09-28 10:30:00",
				statusData: {
					statusName: "PENDING"
				}
			},
			{
				requestId: "REQ-0002",
				customerData: {
					customerId: "CUS-0002",
					fullName: "Sarah Williams",
					phoneNumber: "098-765-4321",
				},
				serviceDescription: "Customer reported a leaking pipe under the kitchen sink. The task involves replacing the damaged pipe, checking the surrounding connections, and testing the sink after repair.",
				requestDate: "2026-09-27 14:15:00",
				statusData: {
					statusName: "PENDING"
				}
			},
		];


		//// Initialize Pending Requests //////
		_initFetchPendingRequestsData(response);
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

					<td>
						<div class="text-back-div">
							<div class="text-div">
								<div class="first-class">
									${item?.requestId}
								</div>
							</div>
						</div>
					</td>

					<td class="clickable-td"
						title="Click to view customer profile"
						onclick="_fetchEachCustomer('${item?.customerId}');">

						<div class="text-back-div">
							<div class="icon-div">
								${getFirstLettersOfEachWord(item?.customerData?.fullName)}
							</div>

							<div class="text-div">
								<div class="first-class">
									${item?.customerData?.fullName}
								</div>

								<div class="second-class">
									${item?.customerData?.phoneNumber}
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
									${item?.requestDate
										? _formatShortDate(item.requestDate)
										: "00-00-00"}
								</div>

								<div class="second-class date-item">
									<i class="bi bi-clock"></i>
									${item?.requestDate
										? _formatTime(item.requestDate)
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
							onclick="">
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

/// Fetch Each Customer ///
function _fetchEachCustomer(customerId) {
	$("#get-form-more-div")
		.css({
			"display": "flex",
			"justify-content": "center",
			"align-items": "center"
		})
		.fadeIn(500);

	try {

		//// call endpoint //////

		/*
		_callFetchEndPoints({
			url: `admin/customers/fetch-customers?customerId=${customerId}`,
			accessKey: true,
		})
		.then((response) => {
			sessionStorage.setItem(
				"getEachCustomerDetailsSession",
				JSON.stringify(response?.data?.[0])
			);

			_getForm({
				page: 'customerProfile',
				url: portalMiddleWareUrl
			});
		})
		.catch((error) => {
			_staffValidationCheck(error.response);
			_alertClose();
			console.error("Error:", error);
			_callAjaxError(() => _fetchEachCustomer(customerId), error.message);
		});
		*/

		//// Dummy Customer Data //////
		const response = {
			customerId: "CUS-0001",
			fullName: "Michael Johnson",
			emailAddress: "michael.johnson@gmail.com",
			phoneNumber: "+1 202 555 0145",
			serviceAddress: "123 Main Street, Atlanta, GA",
			systemGeneratedAddress: "123 Main Street, Atlanta, GA",
			serviceDescription: "Kitchen sink is leaking and requires repair.",
			requestDate: "2026-09-28 10:30:00",
			statusData: {
				statusId: 1,
				statusName: "ACTIVE"
			},
		};

		//// Store Customer Details //////
		sessionStorage.setItem(
			"getEachCustomerDetailsSession",
			JSON.stringify(response)
		);

		//// Open Customer Profile //////
		_getForm({
			page: "customerProfile",
			url: portalMiddleWareUrl
		});

	} catch (error) {
		_alertClose();
		console.error("Error:", error);
		_callCatchError(() => _fetchEachCustomer(customerId));
	}
}