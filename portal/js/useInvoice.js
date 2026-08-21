//// Filter Invoice ////
function _filterInvoices(value) {
    $("#invoiceContent .tb-row").each(function () {
        var text = $(this).text();

        text.toLowerCase().indexOf(value.toLowerCase()) > -1
            ? $(this).show()
            : $(this).hide();
    });
}

function _showNewCustomerForm() {
    $("#newCustomerForm").css("display", "flex").hide().slideDown(400);
    $("#customerName").focus();
    $("#existingCustomerForm").hide();
}

function _closeNewCustomerForm() {
    $("#newCustomerForm").hide();
    $("#existingCustomerForm").css("display", "flex").hide().slideDown(400);
}

/// Fetch Invoice Data ///
function _fetchInvoiceData() {
    const response = {
        data: [
            {
                invoiceId: "INV20260805001",
                taskId: "TASK20260805001",
                customerName: "James Wilson",
                customerEmail: "jameswilson200@gmail.com",
                customerPhoneNumber: "213-555-0123",
                amount: 850.00,
                serviceType: [
                    "Electrical Repair",
                    "Roofing",
                    "Land Scrapping"
                ],
                createdTime: "2026-08-05 08:30:00",
                statusData: {
                    statusId: "1",
                    statusName: "PAID"
                }
            },
            {
                invoiceId: "INV20260805002",
                taskId: "TASK20260805002",
                customerName: "Mary Johnson",
                customerEmail: "maryjohnson@gmail.com",
                customerPhoneNumber: "213-555-0123",
                amount: 1200.00,
                serviceType: [
                    "Plumbing",
                    "Painting"
                ],
                createdTime: "2026-08-04 14:20:00",
                statusData: {
                    statusId: "2",
                    statusName: "PENDING"
                }
            },
            {
                invoiceId: "INV20260805003",
                taskId: "TASK20260805003",
                customerName: "David Brown",
                customerEmail: "davidbrown@gmail.com",
                customerPhoneNumber: "213-555-0123",
                amount: 650.00,
                serviceType: [
                    "Carpentry",
                    "Plumbing"
                ],
                createdTime: "2026-08-03 10:15:05",
                statusData: {
                    statusId: "1",
                    statusName: "PAID"
                }
            }
        ]
    };

    _initFetchInvoiceData(response.data);
}

/// Render Invoice Data ///
function _renderInvoiceData(data, start) {
    return data
        .map((item, i) => {

            const statusClass = item.statusData?.statusName.includes(" ")
                ? item.statusData.statusName.toLowerCase().replace(/\s+/g, "-")
                : item.statusData?.statusName;

            return `
                <tr class="tb-row">
                    <td>${start + i + 1}</td>

                    <td>
                        <div class="text-div">
                            <div class="first-class">
                                ${item.invoiceId}
                            </div>
                        </div>
                    </td>

                    <td>
                        <div class="text-div">
                            <div class="first-class">
                                ${item.taskId}
                            </div>
                        </div>
                    </td>

                    <td>
                        <div class="text-back-div">
                            <div class="icon-div">
                                ${getFirstLettersOfEachWord(item.customerName)}
                            </div>

                            <div class="text-div">
                                <div class="first-class">
                                    ${item.customerName}
                                </div>

                                <div class="second-class">
                                    ${item.customerPhoneNumber}
                                </div>

                                <div class="second-class">
                                    ${item.customerEmail}
                                </div>
                            </div>
                        </div>
                    </td>

                    <td>
                        <div class="amount-div">
                            $${Number(item.amount).toLocaleString()}
                        </div>
                    </td>

                    <td>
                        <div class="service-type-div">
                            ${
                                item.serviceType?.slice(0, 2).map(service => `
                                    <span class="service-badge">
                                        <i class="bi bi-tools"></i> ${service}
                                    </span>
                                `).join("")
                            }

                            ${
                                item.serviceType?.length > 2
                                    ? `<span class="service-badge more">
                                        +${item.serviceType.length - 2} more
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
                                    ${_formatShortDate(item.createdTime)}
                                </div>

                                <div class="second-class date-item">
                                    <i class="bi bi-clock"></i>
                                    ${_formatTime(item.createdTime)}
                                </div>
                            </div>
                        </div>
                    </td>

                    <td>
                        <div class="status-div ${statusClass}">
                            ${item.statusData?.statusName}
                        </div>
                    </td>

                    <td>
                        <button class="btn view-btn"
                            title="Click to view invoice details">
                            VIEW
                        </button>
                    </td>
                </tr>
            `;
        })
        .join("");
}

/// Initialize Invoice Task Data ///
function _initFetchInvoiceData(data) {
    const paginator = new Paginator(
        data,
        _renderInvoiceData,
        "invoiceContentPaginationControls",
        "invoiceContent",
        10
    );

    __paginatorHandlers["invoiceContentPaginationControls"] = paginator;
    paginator.renderPage();
}