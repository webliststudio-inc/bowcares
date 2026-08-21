//// Filter Artisans ////
//// Filter Tasks ////
function _filterTasks(value) {
    $("#taskContent .tb-row").each(function () {
        var text = $(this).text();
        text.toLowerCase().indexOf(value.toLowerCase()) > -1
            ? $(this).show()
            : $(this).hide();
    });
}



/// Fetch Task Data ///
function _fetchTaskData() {
    const response = {
        data: [
            {
                taskId: "TASK20260805001",
                taskTitle: "Kitchen Faucet Repair",
                customerName: "James Wilson",
                customerEmail: "jameswilson200@gmail.com",
                customerPhoneNumber: "213-555-0123",
                artisanName: "John Smith",
                artisanEmail: "johnsmith12@gmail.com",
                artisanPhoneNumber: "213-555-0156",
                taskDescription: "Diagnose and repair faulty electrical wiring in the living room, replace damaged switches, and inspect roof leaks caused by recent rainfall.",
                serviceType: [
                    "Electrical Repair",
                    "Roofing",
                    "Land Scrapping",
                    "Land Scrapping"
                ],
                createdTime: "2026-08-05 08:30:00",
                statusData: {
                    statusId: "6",
                    statusName: "IN PROGRESS"
                }
            },
            {
                taskId: "TASK20260805002",
                taskTitle: "Electrical Wiring Inspection",
                customerName: "Mary Johnson",
                customerEmail: "jameswilson200@gmail.com",
                customerPhoneNumber: "213-555-0123",
                artisanName: "Samuel George",
                artisanEmail: "samuelgeorge200@gmail.com",
                artisanPhoneNumber: "213-555-0156",
                taskDescription: "Fix leaking kitchen pipes, repaint affected wall surfaces, and install a new gypsum ceiling in the dining area.",
                serviceType: [
                    "Plumbing",
                    "Painting",
                    "Ceiling Installation"
                ],
                createdTime: "2026-08-04 14:20:00",
                statusData: {
                    statusId: "4",
                    statusName: "ASSIGNED"
                }
            },
            {
                taskId: "TASK20260805003",
                taskTitle: "Electrical Panel Inspection & Repair",
                customerName: "David Brown",
                customerEmail: "jdavidbrown200@gmail.com",
                customerPhoneNumber: "213-555-0123",
                artisanName: "Michael Terry",
                artisanEmail: "michealter49@gmail.com",
                artisanPhoneNumber: "213-555-0156",
                taskDescription: "Construct custom kitchen cabinets and repair damaged bathroom plumbing fittings.",
                serviceType: [
                    "Carpentry",
                    "Plumbing"
                ],
                createdTime: "2026-08-03 10:15:05",
                statusData: {
                    statusId: "3",
                    statusName: "PENDING"
                }
            },
            {
                taskId: "TASK20260805005",
                taskTitle: "Electrical Wiring Inspection",
                customerName: "Chris James",
                customerEmail: "chrisjames200@gmail.com",
                customerPhoneNumber: "213-555-0123",
                artisanName: "Kalid Yusuf",
                artisanEmail: "kalidyusuf20@gmail.com",
                artisanPhoneNumber: "213-555-0156",
                taskDescription: "Replace damaged roof sheets, reinforce wooden roof supports, and seal all leak-prone sections.",
                serviceType: [
                    "Roofing"
                ],
                createdTime: "2026-08-03 10:15:10",
                statusData: {
                    statusId: "5",
                    statusName: "COMPLETED"
                }
            }
        ]
    };

    _initFetchTaskData(response.data);
}

/// Render Task Data ///
function _renderTaskData(data, start) {
    return data
        .map((item, i) => {

            const statusClass = item.statusData?.statusName.includes(" ")
            ? item.statusData.statusName.toLowerCase().replace(/\s+/g, "-")
            : item.statusData?.statusName;

            const buttonContext = item.statusData?.statusName === "PENDING"
            ? `<td><button class="btn view-btn" title="Click to assign task" onclick=""> ASSIGN </button></td>`
            : `<td><button class="btn view-btn" title="Click to view task details" onclick=""> VIEW </button></td>`

            return `
                <tr class="tb-row">
                    <td>${start + i + 1}</td>
                    <td class="clickable-td" title="Click to view task details"
                        <div class="text-div">
                            <div class="first-class">${item.taskId}</div>
                        </div>
                    </td>

                    <td>
                        <div class="text-back-div desc-text-back-div">
                            <div class="text-div">
                                <div class="first-class">
                                    ${item.taskTitle}
                                </div>

                                <div class="second-class">
                                    ${item.taskDescription?.length > 100
                                        ? item.taskDescription.substring(0, 100) + '...'
                                        : item.taskDescription
                                    }
                                </div>
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
                        <div class="text-back-div">
                            <div class="icon-div">
                                ${getFirstLettersOfEachWord(item.artisanName)}
                            </div>

                            <div class="text-div">
                                <div class="first-class">
                                    ${item.artisanName}
                                </div>
                                <div class="second-class">
                                    ${item.artisanPhoneNumber}
                                </div>
                                <div class="second-class">
                                    ${item.artisanEmail}
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                    <div class="service-type-div">
                        ${
                            item.serviceType?.slice(0, 2).map(service => `
                                <span class="service-badge"><i class="bi bi-tools"></i> ${service}</span>
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
                                    <i class="bi bi-calendar2-check"></i> ${_formatShortDate(item.createdTime)}
                                </div>

                                <div class="second-class date-item">
                                    <i class="bi bi-clock"></i> ${_formatTime(item.createdTime)}
                                </div>
                            </div>
                        </div>
                    </td>

                    <td>
                        <div class="status-div ${statusClass}">
                            ${item.statusData?.statusName}
                        </div>
                    </td>
                    ${buttonContext}
                </tr>
            `;
        })
        .join("");
}



/// Initialize Fetch Task Data ///
function _initFetchTaskData(data) {
    const paginator = new Paginator(
        data,
        _renderTaskData,
        "taskContentPaginationControls",
        "taskContent",
        10
    );

    __paginatorHandlers["taskContentPaginationControls"] = paginator;
    paginator.renderPage();
}
