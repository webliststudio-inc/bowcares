function _getActiveCustomerPage(props) {
    const { page = "", divid = "", pageContainer = "getCustomerDetails" } = props;
    _getCustomerPagesActiveLink(divid);
    if (page) {
        _getPage({
            page: page,
            pageContainer: pageContainer,
            url: portalMiddleWareUrl,
        });
    }
}

function _getCustomerPagesActiveLink(divid) {
    $("#customerProfileDetails").removeClass("active");
    $("#" + divid).addClass("active");
}

//// Filter Customers ////
function _filtersCustomers(value) {
    $("#customerPageContent .tb-row").each(function () {
        var text = $(this).text();
        text.toLowerCase().indexOf(value.toLowerCase()) > -1
            ? $(this).show()
            : $(this).hide();
    });
}

/// Fetch Customer Data ///
function _fetchCustomersData() {
	try {
		//// call endpoint //////
		_callFetchEndPoints({
			url: `admin/customers/fetch-customers`,
			accessKey: true,
		})
		.then((response) => {
			_initFetchCustomerData(response?.data);
		})
		.catch((error) => {
			_staffValidationCheck(error.response);
			console.error("Error:", error);

			if (error.status == 0) {
				_showEmptyState({
					container: "customerPageContent",
					message: "Check your internet connection and try again",
					colspan: 20,
					paginationContainer: "customerPageContentPaginationControls",
				});
				_callAjaxError(() => _fetchCustomersData(), error.message);
			} else {
				_showEmptyState({
					container: "customerPageContent",
					message: error.message,
					colspan: 20,
					paginationContainer: "customerPageContentPaginationControls",
				});
			}
		});
	} catch (error) {
		console.error("Error:", error);
		_callCatchError(() => _fetchCustomersData());
	}
}

/// Render Customer Data ///
function _renderCustomerData(data, start) {
	return data
		.map((item, i) => {
			const statusClass = item?.statusData?.statusName?.toUpperCase().replace(/\s+/g, "-");

			return `
				<tr class="tb-row">
					<td>${start + i + 1}</td>
					<td class="clickable-td"
						title="Click to view customer profile"
						onclick="_fetchEachCustomer('${item?.customerId}');">

						<div class="text-back-div">
												<div class="icon-div">
								${getFirstLettersOfEachWord(
									item?.fullName
								)}
							</div>

							<div class="text-div">
								<div class="first-class">
									${item?.fullName}
								</div>

								<div class="second-class">
									${item?.customerId}
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
						<div class="text-back-div">
							<div class="text-div">
								<div class="first-class date-item">
									<i class="bi bi-calendar2-check"></i>
									${item?.updatedTime
										? _formatShortDate(item.updatedTime)
										: "00-00-00"}
								</div>

								<div class="second-class date-item">
									<i class="bi bi-clock"></i>
									${item?.updatedTime
										? _formatTime(item.updatedTime)
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
							title="Click to view customer profile"
							onclick="_fetchEachCustomer('${item?.customerId}');">
							VIEW
						</button>
					</td>
				</tr>
			`;
		})
		.join("");
}

/// Initialize Fetch Customer Data ///
function _initFetchCustomerData(data) {
	const paginator = new Paginator(
		data,
		_renderCustomerData,
		"customerContentPaginationControls",
		"customerPageContent",
		10
	);

	__paginatorHandlers["customerContentPaginationControls"] = paginator;
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
	} catch (error) {
		_alertClose();
		console.error("Error:", error);
		_callCatchError(() => _fetchEachCustomer(customerId));
	}
}