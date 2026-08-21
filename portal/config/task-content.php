<?php if ($page == 'taskPage') { ?>
    <div class="page-title-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="title-div">
            <div>
                <div class="icon-div"><i class="bi bi-list-task"></i></div>
            </div>

            <div class="text-div">
                <h3>Tasks</h3>
                <p>Manage service requests, assign tasks to artisans, monitor progress, track completion status, and ensure timely service delivery.</p>
            </div>
        </div>

        <div class="btn-div">
            <div class="search-div">
                <input type="text" onkeyup="_filterTasks(this.value);" placeholder="Search Task Here...">
                <i class="bi bi-search"></i>
            </div>
            <button class="btn" title="ADD NEW TASK" onclick="_getForm({page: 'taskReg', url: portalMiddleWareUrl});">
                <i class="bi-plus-square"></i> ADD NEW TASK
            </button>
        </div>
    </div>

    <div class="main-content-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="tables-content-div">
            <div class="content-title">
                <div class="title">
                    <i class="bi bi-list-task"></i>
                    <p>Tasks</p>
                </div>
            </div>

            <div class="inner-table-content">
                <div class="table-div animated fadeIn">
                    <table class="table" cellspacing="0" style="width:100%">
                        <thead>
                            <tr class="tb-col">
                                <th>SN</th>
                                <th>Task ID</th>
                                <th>Description</th>
                                <th>Customer</th>
                                <th>Assigned Artisan</th>
                                <th>Service Type</th>
                                <th>Date Created</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody id="taskContent">
                            <script>
                                _fetchTaskData();
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
                    <div id="taskContentPaginationControls" class="pagination-div"></div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if ($page == 'taskReg') { ?>
    <div class="slide-form-div" data-aos="fade-left" data-aos-duration="900">
        <div class="form-title-div">
            <div class="title-div">
                <div class="icon-div">
                    <i class="bi bi-list-task"></i>
                </div>
                <h3>CREATE NEW TASK</h3>
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
                    You are about to create a new task request. Please complete the form below
                    with accurate information before assigning the task to an artisan.
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

                    <div class="form-container">

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
                    </div>
                </div>
            </div>

            <div class="main-content-div form-main-content-div">
                <div class="tables-content-div form-table-content-div">
                    <div class="content-title">
                        <div class="title">
                            <i class="bi bi-person-workspace"></i>
                            <p>Assignment Information</p>
                        </div>
                    </div>

                    <div class="form-container">

                        <div class="text_field_container" id="artisanId_container">
                            <script>
                                selectField({
                                    id: 'artisanId',
                                    title: 'Assign Artisan'
                                });
                            </script>
                        </div>

                        <div class="text_field_container" id="statusId_container">
                            <script>
                                selectField({
                                    id: 'statusId',
                                    title: 'Task Status'
                                });
                            </script>
                        </div>

                        <div class="text_field_container" id="scheduledDate_container">
                            <script>
                                textField({
                                    id: 'scheduledDate',
                                    title: 'Scheduled Date',
                                    type: 'date'
                                });
                            </script>
                        </div>

                        <div class="text_field_container" id="scheduledTime_container">
                            <script>
                                textField({
                                    id: 'scheduledTime',
                                    title: 'Scheduled Time',
                                    type: 'time'
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
                <button class="btn" title="UPDATE TASK" id="submitBtn" onclick="_createTask();">
                    <i class="bi bi-check-lg"></i>
                    UPDATE TASK
                </button>
            </div>
        </div>
    </div>
<?php } ?>