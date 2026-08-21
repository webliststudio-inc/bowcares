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
    const response = {
        data: [
			{
				artisanId: "ARTSIAN2026050821029001",
				firstName: "John",
				lastName: "Smith",
				emailAddress: "john.smith@bowcares.com",
				phoneNumber: "+2348012345678",
				lastLoginTime: "2026-08-03 09:15:22",

				professionData: {
					professionName: "Electrician"
				},

				statusData: {
					statusId: "1",
					statusName: "ACTIVE"
				},

				verificationStatus: "VERIFIED",
				availabilityStatus: "AVAILABLE"
			},

			{
				artisanId: "ARTSIAN2026050821029002",
				firstName: "Samuel",
				lastName: "George",
				emailAddress: "samuel.george@bowcares.com",
				phoneNumber: "+2348023456789",
				lastLoginTime: "2026-08-02 15:42:10",

				professionData: {
					professionName: "Plumber"
				},

				statusData: {
					statusId: "1",
					statusName: "ACTIVE"
				},

				verificationStatus: "PENDING",
				availabilityStatus: "BUSY"
			},

			{
				artisanId: "ARTSIAN2026050821029003",
				firstName: "Michael",
				lastName: "Terry",
				emailAddress: "michael.terry@bowcares.com",
				phoneNumber: "+2348034567890",
				lastLoginTime: "2026-08-01 11:30:00",

				professionData: {
					professionName: "Carpenter"
				},

				verificationStatus: "REJECTED",
				availabilityStatus: "OFFLINE"
			}
		]
    };

    _initFetchArtisanData(response.data);
}

/// Render Artisan Data ///
function _renderArtisanData(data, start) {
    return data
        .map(
            (item, i) => `
            <tr class="tb-row">
                <td>${start + i + 1}</td>

                <td class="clickable-td" title="Click to view artisan profile"
                    onclick="_fetchEachArtisan('${item.artisanId}');">

                    <div class="text-back-div">
                        <div class="image-div">
                            <img src="${websiteUrl}/all-images/images/avatar.jpg"
                                alt="${item.firstName} ${item.lastName}" />
                        </div>

                        <div class="text-div">
                            <div class="first-class">
                                ${item.firstName} ${item.lastName}
                            </div>

                            <div class="second-class">
                                ${item.artisanId}
                            </div>
                        </div>
                    </div>
                </td>

                <td>
                    <div class="text-div">
                        <div>${item.emailAddress}</div>
                        <div>${item.phoneNumber}</div>
                    </div>
                </td>

                <td>${item.professionData?.professionName ?? "N/A"}</td>

                <td>
                    ${item.lastLoginTime ? item.lastLoginTime : "00-00-00 00:00:00"}
                </td>

				<td>
					<div class="status-div ${item.verificationStatus}">
						${item.verificationStatus}
					</div>
				</td>

				<td>
					<div class="status-div ${item.availabilityStatus}">
						${item.availabilityStatus}
					</div>
				</td>

                <td>
                    <button class="btn view-btn"
                        title="Click to view artisan profile"
                        onclick="_fetchEachArtisan('${item.artisanId}');">
                        VIEW
                    </button>
                </td>
            </tr>`
        )
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
    $("#get-form-more-div")
        .css({
            'display': 'flex',
            'justify-content': 'center',
            'align-items': 'center'
        })
        .fadeIn(500);

    try {

        const responses = {
            data: {
                artisanId: artisanId,
                firstName: "John",
                lastName: "Smith",
                emailAddress: "john.adewale@bowcares.com",
                phoneNumber: "+2348012345678",
                createdTime: "2026-07-15 10:25:00",
                lastLoginTime: "2026-08-03 09:15:22",

                professionData: {
                    professionId: "PROF001",
                    professionName: "Electrician"
                },

                statusData: {
                    statusId: "1",
                    statusName: "ACTIVE"
                },

				verificationStatusData: {
					verificationStatusId: "1",
					verificationStatusName: "VERIFIED"
				},

				availabilityStatusData: {
					availabilityStatusId: "1",
					availabilityStatusName: "AVAILABLE"
				},
            }
        };

        sessionStorage.setItem(
            "getEachArtisanDetailsSession",
            JSON.stringify(responses.data)
        );

        _getForm({
            page: 'artisanProfile',
            url: portalMiddleWareUrl
        });

    } catch (error) {
        _alertClose();
        console.error("Error:", error);
        _callCatchError(() => _fetchEachArtisan(artisanId));
    }
}