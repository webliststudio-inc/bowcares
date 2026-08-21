<?php if ($page == 'invoicePage') { ?>
    <div class="page-title-div" data-aos="fade-in" data-aos-duration="1500">
    <div class="title-div">
        <div>
            <div class="icon-div"><i class="bi bi-receipt"></i></div>
        </div>

        <div class="text-div">
            <h3>Invoices</h3>
            <p>Manage customer invoices, monitor payment status, track outstanding balances, and maintain accurate billing records.</p>
        </div>
    </div>

    <div class="btn-div">
        <div class="search-div">
            <input type="text" onkeyup="_filterInvoices(this.value);" placeholder="Search Invoice Here...">
            <i class="bi bi-search"></i>
        </div>

        <button class="btn" title="CREATE NEW INVOICE"
            onclick="_getForm({page: 'invoiceReg', url: portalMiddleWareUrl});">
            <i class="bi bi-plus-square"></i> CREATE INVOICE
        </button>
    </div>
</div>

<div class="main-content-div" data-aos="fade-in" data-aos-duration="1500">
    <div class="tables-content-div">
        <div class="content-title">
            <div class="title">
                <i class="bi bi-receipt"></i>
                <p>Invoices</p>
            </div>
        </div>

        <div class="inner-table-content">
            <div class="table-div animated fadeIn">
                <table class="table" cellspacing="0" style="width:100%">
                    <thead>
                        <tr class="tb-col">
                            <th>SN</th>
                            <th>Invoice ID</th>
                            <th>Task ID</th>
                            <th>Customer</th>
                            <th>Amount</th>
                            <th>Service Type</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody id="invoiceContent">
                        <script>
                            _fetchInvoiceData();
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
                <div id="invoiceContentPaginationControls" class="pagination-div"></div>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<?php if ($page == 'invoiceReg') { ?>
    <div class="slide-form-div" data-aos="fade-left" data-aos-duration="900">
        <div class="form-title-div">
            <div class="title-div">
                <div class="icon-div">
                    <i class="bi bi-list-task"></i>
                </div>
                <h3>CREATE NEW INVOICE</h3>
            </div>

            <div class="btn-div">
                <button class="btn" title="Close" onclick="_alertClose(<?php echo $modalLayer ?>);">
                    <i class="bi bi-x-lg"></i> Close
                </button>
            </div>
        </div>

        <div class="container-back-div">
            <div class="form-notification">
                <p>
                    Create a new invoice by providing the required customer, service, and payment details.
                    Ensure all information is accurate before submitting the invoice.
                </p>
            </div>

            <div class="main-content-div form-main-content-div">
                <div class="tables-content-div form-table-content-div">
                    <div class="content-title">
                        <div class="title">
                            <i class="bi bi-person-lines-fill"></i>
                            <p>Customer Contact Information</p>
                        </div>
                    </div>

                    <div class="form-container" id="existingCustomerForm">
                        <div class="text_field_container" id="customerId_container">
                            <script>
                                selectField({
                                    id: 'customerId',
                                    title: 'Select Existing Customer'
                                });
                            </script>
                        </div>

                        <div class="customer-divider">
                            <span>OR</span>
                        </div>
                        
                        <div class="instruction-container">
                            <p class="customer-helper-text">
                                Use this option if the customer does not already exist in the system.
                            </p>

                            <button
                                type="button"
                                title="Add New Customer"
                                class="customer-btn"
                                onclick="_showNewCustomerForm()">
                                <i class="bi bi-person-plus-fill"></i>
                                Add New Customer
                            </button>
                        </div>
                    </div>

                    <div class="form-container new-customer-form" id="newCustomerForm">
                        <div class="new-customer-badge">
                            <span>Fill in the customer information to continue.</span>
                            <button title="Remove" class="close-btn" onclick="_closeNewCustomerForm()"><i class="bi bi-trash3"></i></button>
                        </div>

                        <div class="text_field_container" id="customerName_container">
                            <script>
                                textField({
                                    id: 'customerName',
                                    title: 'Customer Name'
                                });
                            </script>
                        </div>

                        <div class="text_field_container" id="customerEmail_container">
                            <script>
                                textField({
                                    id: 'customerEmail',
                                    title: 'Customer Email',
                                    type: 'email'
                                });
                            </script>
                        </div>

                        <div class="text_field_container" id="customerPhone_container">
                            <script>
                                textField({
                                    id: 'customerPhone',
                                    title: 'Customer Phone Number',
                                    type: 'tel',
                                    onKeyPressFunction: 'isNumberCheck(event);'
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-content-div form-main-content-div">
                <div class="tables-content-div form-table-content-div">
                    <div class="content-title">
                        <div class="title">
                            <i class="bi bi-list-task"></i>
                            <p>Task Information</p>
                        </div>
                    </div>

                    <div class="form-container">
                        <div class="text_field_container" id="taskTitle_container">
                            <script>
                                textField({
                                    id: 'taskTitle',
                                    title: 'Task Title'
                                });
                            </script>
                        </div>

                        <div class="text_area_container" id="taskDescription_container">
                            <script>
                                textField({
                                    id: 'taskDescription',
                                    title: 'Task Description',
                                    type: 'textarea',
                                });
                            </script>
                        </div>

                        <div class="text_field_container" id="amount_container">
                            <script>
                                textField({
                                    id: 'amount',
                                    title: 'Amount',
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-content-div form-main-content-div">
                <div class="tables-content-div form-table-content-div">
                    <div class="content-title">
                        <div class="title">
                            <i class="bi bi-tools"></i>
                            <p>Service Type</p>
                        </div>
                    </div>

                    <div class="form-container">
                        <div class="permission-form-back-div">
                            <div class="title-div">
                                <p>Use the toggles below to enable or disable service type. Switching
                                    to "Yes" makes
                                    the service type available for artisan job assignments.
                                </p>
                            </div>

                            <div class="permission-toggle-div">
                                <div class="toggle-title">Available Professions</div>
                                <div class="fetch-toggle" id="professionToggle">
                                    <div class="each-toggle-div">
                                        <span>Carpentry</span>
                                        <label for="profession_1" class="switch">
                                            <input type="checkbox" class="child profession-checkbox"
                                                id="profession_1" name="professionId[]" data-value="1">
                                            <span class="slider"></span>
                                            <span class="toggle-label">No</span>
                                        </label>
                                    </div>

                                    <div class="each-toggle-div">
                                        <span>Plumbing</span>
                                        <label for="profession_2" class="switch">
                                            <input type="checkbox" class="child profession-checkbox"
                                                id="profession_2" name="professionId[]" data-value="2">
                                            <span class="slider"></span>
                                            <span class="toggle-label">No</span>
                                        </label>
                                    </div>

                                    <div class="each-toggle-div">
                                        <span>Electrical</span>
                                        <label for="profession_3" class="switch">
                                            <input type="checkbox" class="child profession-checkbox"
                                                id="profession_3" name="professionId[]" data-value="3">
                                            <span class="slider"></span>
                                            <span class="toggle-label">No</span>
                                        </label>
                                    </div>

                                    <div class="each-toggle-div">
                                        <span>HVAC Technician</span>
                                        <label for="profession_4" class="switch">
                                            <input type="checkbox" class="child profession-checkbox"
                                                id="profession_4" name="professionId[]" data-value="4">
                                            <span class="slider"></span>
                                            <span class="toggle-label">No</span>
                                        </label>
                                    </div>

                                    <div class="each-toggle-div">
                                        <span>Painting</span>
                                        <label for="profession_5" class="switch">
                                            <input type="checkbox" class="child profession-checkbox"
                                                id="profession_5" name="professionId[]" data-value="5">
                                            <span class="slider"></span>
                                            <span class="toggle-label">No</span>
                                        </label>
                                    </div>

                                    <div class="each-toggle-div">
                                        <span>Roofing</span>
                                        <label for="profession_6" class="switch">
                                            <input type="checkbox" class="child profession-checkbox"
                                                id="profession_6" name="professionId[]" data-value="6">
                                            <span class="slider"></span>
                                            <span class="toggle-label">No</span>
                                        </label>
                                    </div>

                                    <div class="each-toggle-div">
                                        <span>Welding</span>
                                        <label for="profession_7" class="switch">
                                            <input type="checkbox" class="child profession-checkbox"
                                                id="profession_7" name="professionId[]" data-value="7">
                                            <span class="slider"></span>
                                            <span class="toggle-label">No</span>
                                        </label>
                                    </div>

                                    <div class="each-toggle-div">
                                        <span>Masonry</span>
                                        <label for="profession_8" class="switch">
                                            <input type="checkbox" class="child profession-checkbox"
                                                id="profession_8" name="professionId[]" data-value="8">
                                            <span class="slider"></span>
                                            <span class="toggle-label">No</span>
                                        </label>
                                    </div>

                                    <div class="each-toggle-div">
                                        <span>Flooring Installation</span>
                                        <label for="profession_9" class="switch">
                                            <input type="checkbox" class="child profession-checkbox"
                                                id="profession_9" name="professionId[]" data-value="9">
                                            <span class="slider"></span>
                                            <span class="toggle-label">No</span>
                                        </label>
                                    </div>

                                    <div class="each-toggle-div">
                                        <span>Appliance Repair</span>
                                        <label for="profession_10" class="switch">
                                            <input type="checkbox" class="child profession-checkbox"
                                                id="profession_10" name="professionId[]" data-value="10">
                                            <span class="slider"></span>
                                            <span class="toggle-label">No</span>
                                        </label>
                                    </div>

                                    <div class="each-toggle-div">
                                        <span>Handyman Services</span>
                                        <label for="profession_11" class="switch">
                                            <input type="checkbox" class="child profession-checkbox"
                                                id="profession_11" name="professionId[]" data-value="11">
                                            <span class="slider"></span>
                                            <span class="toggle-label">No</span>
                                        </label>
                                    </div>

                                    <div class="each-toggle-div">
                                        <span>Landscaping</span>
                                        <label for="profession_12" class="switch">
                                            <input type="checkbox" class="child profession-checkbox"
                                                id="profession_12" name="professionId[]" data-value="12">
                                            <span class="slider"></span>
                                            <span class="toggle-label">No</span>
                                        </label>
                                    </div>

                                    <div class="each-toggle-div">
                                        <span>Drywall Installation</span>
                                        <label for="profession_13" class="switch">
                                            <input type="checkbox" class="child profession-checkbox"
                                                id="profession_13" name="professionId[]" data-value="13">
                                            <span class="slider"></span>
                                            <span class="toggle-label">No</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    _userRoleCheck();
                </script>
            </div>

            <div class="main-content-div form-main-content-div">
                <div class="tables-content-div form-table-content-div">
                    <div class="content-title">
                        <div class="title">
                            <i class="bi bi-geo-alt"></i>
                            <p>Location Information</p>
                        </div>
                    </div>

                    <div class="form-container">
                        <div class="text_field_container" id="serviceAddress_container">
                            <script>
                                textField({
                                    id: 'serviceAddress',
                                    title: 'Service Address'
                                });
                            </script>
                        </div>

                        <div class="text_field_container" id="city_container">
                            <script>
                                textField({
                                    id: 'city',
                                    title: 'City'
                                });
                            </script>
                        </div>

                        <div class="text_field_container" id="state_container">
                            <script>
                                textField({
                                    id: 'state',
                                    title: 'State'
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>       

            <div class="btn-div">
                <button class="btn" title="SUBMIT INVOICE" id="submitBtn" onclick="">
                    <i class="bi bi-check-lg"></i>
                    SUBMIT INVOICE
                </button>
            </div>
        </div>
    </div>
<?php } ?>