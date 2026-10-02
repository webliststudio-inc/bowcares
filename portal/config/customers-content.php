<?php if ($page == 'customerPage') { ?>
    <div class="page-title-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="title-div">
            <div>
                <div class="icon-div"><i class="bi bi-people"></i></div>
            </div>
            <div class="text-div">
                <h3>Customers</h3>
                <p>Manage customer information, view account details, and keep track of customer activities to ensure smooth and organized service delivery.</p>
            </div>
        </div>

        <div class="btn-div">
            <div class="search-div">
                <input type="text" onkeyup="_filtersCustomers(this.value);" placeholder="Search Customer Here...">
                <i class="bi bi-search"></i>
            </div>
        </div>
    </div>

    <div class="main-content-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="tables-content-div">
            <div class="content-title">
                <div class="title">
                    <i class="bi bi-people"></i>
                    <p>Customers</p>
                </div>
            </div>

            <div class="inner-table-content">
                <div class="table-div animated fadeIn">
                    <table class="table" cellspacing="0" style="width:100%">
                        <thead>
                            <tr class="tb-col">
                                <th>sn</th>
                                <th>Customer Name</th>
                                <th>Contact</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody id="customerPageContent">
                            <script>
                                _fetchCustomersData();
                            </script>

                            <tr>
                                <td colspan="20">
                                    <div class="content-loading-div">
                                        <img src="<?php echo $websiteUrl ?>/all-images/images/spinner.gif" alt="Loading" />
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- Pagination -->
                    <div id="customerContentPaginationControls" class="pagination-div"></div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if ($page == 'customerProfile') { ?>
    <script>
        getEachCustomerDetailsSession = JSON.parse(sessionStorage.getItem("getEachCustomerDetailsSession"));
    </script>

    <div class="user-profile-div" data-aos="fade-left" data-aos-duration="900">
        <div class="form-title-div">
            <div class="title-div">
                <div class="icon-div"><i class="bi bi-person-check-fill"></i></div>
                <h3 id="pageTitle">CUSTOMER'S PROFILE</h3>
            </div>
            <div class="btn-div">
                <button class="btn" title="Close" onclick="_alertClose(<?php echo $modalLayer ?>);">
                    <i class="bi bi-x-lg"></i> Close
                </button>
            </div>
        </div>

        <div class="profile-content-div">
            <div class="bg-img">
                <div class="mini-profile">
                    <label>
                        <div class="img-div" id="">
                            <img src="<?php echo $websiteUrl ?>/all-images/images/avatar.jpg" alt="Profile Image">
                        </div>
                    </label>

                    <div class="text-back-div">
                        <div class="inner-text">
                            <div class="text-div">
                                <div class="name" id="fullName">
                                    <script>
                                        $("#fullName").html(getEachCustomerDetailsSession?.fullName);
                                    </script>
                                </div>

                                <div class="text">
                                    <div>
                                        <div id="statusBtn" class="status-btn"><span id="statusName"></span></div>
                                    </div>
                                    | Email:
                                    <strong id="emailAddress">
                                        <script>
                                            $("#emailAddress").html(getEachCustomerDetailsSession?.emailAddress);
                                        </script>
                                    </strong>
                                </div>

                                <script>
                                    $(document).ready(function() {
                                        const statusName = getEachCustomerDetailsSession?.statusData?.statusName;
                                        $("#statusName").html(statusName);
                                        $("#statusBtn").addClass(statusName);
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nav-div">
                <div class="div-in">
                    <ul>
                        <li class="active" title="My Profile" id="customerProfileDetails" onclick="_getActiveCustomerPage({divid:'customerProfileDetails', page: 'customerProfileDetails', url: portalMiddleWareUrl});"><i class="bi-person-bounding-box"></i> Customer Profile</li>
                    </ul>
                </div>
            </div>

            <div class="field-back-div">
                <div class="field-inner-div" id="getCustomerDetails">
                    <script>
                        _getActiveCustomerPage({
                            divid: 'customerProfileDetails',
                            page: 'customerProfileDetails',
                            url: portalMiddleWareUrl
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<!-- For Customers Modal Pages -->
<?php if ($page == 'customerProfileDetails') { ?>
    <div class="main-content-div dash-main-content-div">
        <div class="tables-content-div">
            <div class="content-title">
                <div class="title">
                    <i class="bi bi-people"></i>
                    <p>Customer Basic Information</p>
                </div>
            </div>

            <div class="inner-table-content colum-table-content">
                <div class="text_field_container col-3" id="fullName_container">
                    <script>
                    textField({
                        id: 'fullName',
                        title: 'Full Name',
                        value: getEachCustomerDetailsSession?.fullName ?? ''
                    });
                    </script>
                </div>

                <div class="text_field_container col-3" id="emailAddress_container">
                    <script>
                    textField({
                        id: 'emailAddress',
                        title: 'Email Address',
                        type: 'email',
                        value: getEachCustomerDetailsSession?.emailAddress ?? ''
                    });
                    </script>
                </div> 

                <div class="text_field_container col-3" id="phoneNumber_container">
                    <script>
                    textField({
                        id: 'phoneNumber',
                        title: 'Phone Number',
                        type: 'tel',
                        value: getEachCustomerDetailsSession?.phoneNumber ?? '',
                    });
                    </script>
                </div>
            </div>
        </div>
    </div>

    <div class="main-content-div dash-main-content-div">
        <div class="tables-content-div">
            <div class="content-title">
                <div class="title">
                    <i class="bi bi-people"></i>
                    <p>Customer Account Information</p>
                </div>
            </div>

            <div class="inner-table-content colum-table-content">
                <div class="text_field_container col-1" id="staffId_container">
                    <script>
                    textField({
                        id: 'staffId',
                        title: 'Staff ID',
                        readonly: true,
                        value: getEachCustomerDetailsSession?.customerId ?? ''
                    });
                    </script>
                </div>

                <div class="text_field_container col-1" id="createdTime_container">
                    <script>
                    textField({
                        id: 'createdTime',
                        title: 'Date Of Registration',
                        readonly: true,
                        value: getEachCustomerDetailsSession?.createdTime ?? ''
                    });
                    </script>
                </div>

                <div class="text_field_container col-2" id="statusId_container">
                    <script>
                    selectField({
                        id: 'statusId',
                        title: 'Select Status',
                        fieldValue: getEachCustomerDetailsSession?.statusData?.statusId ?? '',
                        fieldLabel: getEachCustomerDetailsSession?.statusData?.statusName ?? ''
                    });
                    _getSelectStatusId('statusId', '1,2');
                    </script>
                </div>
            </div>
        </div>
    </div>
<?php } ?>