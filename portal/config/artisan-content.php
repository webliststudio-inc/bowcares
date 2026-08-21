<?php if ($page == 'artisanPage') { ?>
    <div class="page-title-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="title-div">
            <div>
                <div class="icon-div"><i class="bi bi-tools"></i></div>
            </div>
            <div class="text-div">
                <h3>Artisans</h3>
                <p>Manage artisan accounts with ease. Monitor activities, verify profiles, assign professions, and ensure
                    quality service delivery across the platform.</p>
            </div>
        </div>

        <div class="btn-div">
            <div class="search-div">
                <input type="text" onkeyup="_filtersArtisans(this.value);" placeholder="Search Artisan Here...">
                <i class="bi bi-search"></i>
            </div>
        </div>
    </div>

    <div class="main-content-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="tables-content-div">
            <div class="content-title">
                <div class="title">
                    <i class="bi bi-tools"></i>
                    <p>Artisans</p>
                </div>
            </div>

            <div class="inner-table-content">
                <div class="table-div animated fadeIn">
                    <table class="table" cellspacing="0" style="width:100%">
                        <thead>
                            <tr class="tb-col">
                                <th>SN</th>
                                <th>Artisan Name</th>
                                <th>Contact</th>
                                <th>Profession</th>
                                <th>Last Login</th>
                                <th>Status</th>
                                <th>Availability Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody id="artisanContent">
                            <script>
                            _fetchArtisanData();
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
                    <div id="artisanContentPaginationControls" class="pagination-div"></div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if ($page == 'artisanProfile') { ?>
    <script>
    getEachArtisanDetailsSession = JSON.parse(sessionStorage.getItem("getEachArtisanDetailsSession"));
    </script>

    <div class="user-profile-div" data-aos="fade-left" data-aos-duration="900">
        <div class="form-title-div">
            <div class="title-div">
                <div class="icon-div"><i class="bi bi-person-workspace"></i></div>
                <h3 id="pageTitle">ARTISAN PROFILE</h3>
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
                        <div class="img-div">
                            <img src="<?php echo $websiteUrl ?>/all-images/images/avatar.jpg" alt="Artisan Profile">
                        </div>
                    </label>

                    <div class="text-back-div">
                        <div class="inner-text">
                            <div class="text-div">

                                <div class="name" id="fullNames">
                                    <script>
                                    $("#fullNames").html(
                                        getEachArtisanDetailsSession?.firstName +
                                        " " +
                                        getEachArtisanDetailsSession?.lastName
                                    );
                                    </script>
                                </div>

                                <div class="text">
                                    <div>
                                        <div id="statusBtn" class="status-btn">
                                            <span id="statusName"></span>
                                        </div>
                                    </div>

                                    | LAST LOGIN DATE:

                                    <strong id="lastLoginTime">
                                        <script>
                                        $("#lastLoginTime").html(
                                            getEachArtisanDetailsSession?.lastLoginTime ?
                                            getEachArtisanDetailsSession?.lastLoginTime :
                                            "00-00-00 00:00:00"
                                        );
                                        </script>
                                    </strong>
                                </div>

                                <script>
                                $(document).ready(function() {
                                    const statusName =
                                        getEachArtisanDetailsSession?.statusData?.statusName;

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
                        <li class="active" title="Artisan Dashboard" id="artisanDashboard"
                            onclick="_getActiveArtisanPage({divid:'artisanDashboard', page:'artisanDashboard', url: portalMiddleWareUrl});">
                            <i class="bi bi-speedometer2"></i>
                            Dashboard
                        </li>
                        <li title="Artisan Task" id="taskNav">
                            <i class="bi bi-list-check"></i>
                            Task
                            <ul class="ul-expand animated fadeIn">
                            <li title="Pending Task" id="taskNav" onclick="_getActiveArtisanPage({divid:'taskNav', page:'pendingTask', url: portalMiddleWareUrl});">
                                <i class="bi bi-clock-history"></i> Pending Task
                            </li>

                            <li title="Ongoing Task" id="taskNav" onclick="_getActiveArtisanPage({divid:'taskNav', page:'ongoingTask', url: portalMiddleWareUrl});">
                                <i class="bi bi-tools"></i> Ongoing Task
                            </li>

                            <li title="Completed Task" id="taskNav" onclick="_getActiveArtisanPage({divid:'taskNav', page:'completedTask', url: portalMiddleWareUrl});">
                                <i class="bi bi-check-circle-fill"></i> Completed Task
                            </li>
                        </ul>
                        </li>
                        <li title="Artisan Transactions" id="artisanTransactions"
                            onclick="_getActiveArtisanPage({divid:'artisanTransactions', page:'artisanTransactions', url: portalMiddleWareUrl});">
                            <i class="bi bi-cash-stack"></i>
                            Transactions
                        </li>
                        <li title="Artisan Profile" id="profileDetails"
                            onclick="_getActiveArtisanPage({divid:'profileDetails', page:'profileDetails', url: portalMiddleWareUrl});">
                            <i class="bi bi-person-workspace"></i>
                            Profile
                        </li>
                    </ul>
                </div>
            </div>

            <div class="field-back-div">
                <div class="field-inner-div" id="getArtisanDetails" data-aos="fade-in" data-aos-duration="1500">
                    <script>
                    _getActiveArtisanPage({
                        divid: 'artisanDashboard',
                        page: 'artisanDashboard',
                        url: portalMiddleWareUrl
                    });
                    </script>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<!-- For Artisan Modal Pages -->
<?php if ($page == 'artisanDashboard') { ?>
    <div class="artisian-dashboard" data-aos="fade-in" data-aos-duration="1500">
        <div class="artisan-statistics-back-div">
            <div class="artisan-statistics-div" title="Tasks Awaiting Action" id="taskNav" onclick="_getActiveArtisanPage({divid:'taskNav', page:'pendingTask', url: portalMiddleWareUrl});">
                <div class="artisan-statistics-inner-div">
                    <div class="icon-div">
                        <i class="bi bi-hourglass-split"></i>
                    </div>

                    <div class="artisan-statistics-text">
                        <h4>Pending Tasks</h4>
                        <span>Awaiting your action</span>
                        <h2 id="pendingTasksCount">8</h2>
                    </div>
                </div>
            </div>

            <div class="artisan-statistics-div" title="Tasks Currently In Progress" id="taskNav" onclick="_getActiveArtisanPage({divid:'taskNav', page:'ongoingTask', url: portalMiddleWareUrl});">
                <div class="artisan-statistics-inner-div">
                    <div class="icon-div secondary">
                        <i class="bi bi-tools"></i>
                    </div>

                    <div class="artisan-statistics-text">
                        <h4>Ongoing Tasks</h4>
                        <span>Currently in progress</span>
                        <h2 id="ongoingTasksCount">5</h2>
                    </div>
                </div>
            </div>

            <div class="artisan-statistics-div" title="Successfully Completed Tasks" id="taskNav" onclick="_getActiveArtisanPage({divid:'taskNav', page:'completedTask', url: portalMiddleWareUrl});">
                <div class="artisan-statistics-inner-div">
                    <div class="icon-div active">
                        <i class="bi bi-check-circle"></i>
                    </div>

                    <div class="artisan-statistics-text">
                        <h4>Completed Tasks</h4>
                        <span>Successfully completed</span>
                        <h2 id="completedTasksCount">24</h2>
                    </div>
                </div>
            </div>

            <div class="artisan-statistics-div" title="Available Earnings" id="taskNav">
                <div class="artisan-statistics-inner-div">
                    <div class="icon-div secondary">
                        <i class="bi bi-wallet2"></i>
                    </div>

                    <div class="artisan-statistics-text">
                        <h4>Payout Balance</h4>
                        <span>Total Payout Balance</span>
                        <h2 id="payoutBalance">
                            <strong>$</strong>850,000
                        </h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-content-div dash-main-content-div">
            <div class="tables-content-div">
                <div class="content-title">
                    <div class="title">
                        <i class="bi bi-list-check"></i>
                        <p>Pending Task</p>
                    </div>
                </div>

                <div class="inner-table-content">
                    <div class="task-container">
                        <div class="task-card">
                            <div class="task-card-top">
                                <div class="task-details">
                                    <div class="icon-div secondary">
                                        <i class="bi bi-tools"></i>
                                    </div>

                                    <div class="content">
                                        <h3>Kitchen Faucet Repair</h3>
                                        <p class="task-id">
                                            ID:
                                            <span>
                                            #BC-2026-00123</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="task-status pending">
                                    Pending
                                </div>
                            </div>

                            <div class="task-summary">
                                Customer reported persistent leakage from the kitchen faucet,
                                resulting in excessive water wastage and reduced water pressure.
                                Initial assessment suggests a damaged valve and worn-out internal
                                components. Task involves inspecting the plumbing system,
                                replacing faulty parts where necessary, testing water flow,
                                and ensuring the faucet is fully functional before completion.
                            </div>

                            <div class="task-meta">
                                <div class="task-location">
                                    <i class="bi bi-geo-alt"></i>
                                    Texas, USA
                                </div>

                                <div class="task-date">
                                    <i class="bi bi-calendar-event"></i>
                                    Aug 05, 2026
                                </div>
                            </div>

                            <div class="task-actions">
                                <button title="Commence Task" class="task-btn commence-btn">
                                   <i class="bi bi-tools"></i> Commence Task
                                </button>
                            </div>
                        </div>

                        <div class="task-card">
                            <div class="task-card-top">
                                <div class="task-details">
                                    <div class="icon-div secondary">
                                        <i class="bi bi-tools"></i>
                                    </div>

                                    <div class="content">
                                        <h3>Electrical Wiring Inspection</h3>
                                        <p class="task-id">
                                            ID:
                                            <span>
                                            #BC-2026-00124</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="task-status pending">
                                    Pending
                                </div>
                            </div>

                            <div class="task-summary">
                                Customer reported recurring electrical faults affecting the living room,
                                including frequent power interruptions, flickering lights, and occasional
                                burning smells from nearby wall sockets. Preliminary inspection suggests
                                damaged wiring, loose electrical connections, and possible overload issues
                                within the circuit. The assigned artisan is required to carry out a
                                comprehensive diagnostic assessment of the affected electrical system,
                                identify faulty components, replace damaged wires and connectors where
                                necessary, secure all loose connections, and ensure compliance with
                                electrical safety standards. Upon completion, the entire circuit should
                                be tested for stability, functionality, and safe operation to prevent
                                future electrical failures and guarantee uninterrupted power supply to
                                the customer’s living area.
                            </div>

                            <div class="task-meta">
                                <div class="task-location">
                                    <i class="bi bi-geo-alt"></i>
                                    Texas, USA
                                </div>

                                <div class="task-date">
                                    <i class="bi bi-calendar-event"></i>
                                    Aug 05, 2026
                                </div>
                            </div>

                            <div class="task-actions">
                                <button title="Commence Task" class="task-btn commence-btn">
                                    <i class="bi bi-tools"></i> Commence Task
                                </button>
                            </div>
                        </div>

                        <div class="task-card">
                            <div class="task-card-top">
                                <div class="task-details">
                                    <div class="icon-div secondary">
                                        <i class="bi bi-tools"></i>
                                    </div>

                                    <div class="content">
                                        <h3>Electrical Panel Inspection & Repair</h3>
                                        <p class="task-id">
                                            ID:
                                            <span>
                                            #BC-2026-00125</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="task-status pending">
                                    Pending
                                </div>
                            </div>

                            <div class="task-summary">
                                Customer reported repeated circuit breaker trips and occasional power
                                fluctuations affecting multiple rooms within the property. Initial
                                assessment indicates potential overload issues, loose electrical
                                connections, or faulty breaker components within the main distribution
                                panel. The assigned technician is required to conduct a comprehensive
                                inspection of the electrical panel, identify damaged or worn-out
                                components, tighten loose connections, replace defective breakers if
                                necessary, and perform safety tests to ensure stable and reliable
                                power distribution throughout the building.
                            </div>

                            <div class="task-meta">
                                <div class="task-location">
                                    <i class="bi bi-geo-alt"></i>
                                    Houston, Texas, USA
                                </div>

                                <div class="task-date">
                                    <i class="bi bi-calendar-event"></i>
                                    Aug 06, 2026
                                </div>
                            </div>

                            <div class="task-actions">
                                <button title="Commence Task" class="task-btn commence-btn">
                                    <i class="bi bi-tools"></i> Commence Task
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if ($page == 'profileDetails') { ?>
    <div class="main-content-div dash-main-content-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="tables-content-div">
            <div class="content-title">
                <div class="title">
                    <i class="bi bi-person-workspace"></i>
                    <p>Artisan Basic Information</p>
                </div>
            </div>

            <div class="inner-table-content colum-table-content">
                <div class="text_field_container col-3" id="updateFirstName_container">
                    <script>
                    textField({
                        id: 'updateFirstName',
                        title: 'First Name',
                        value: getEachArtisanDetailsSession?.firstName ?? ''
                    });
                    </script>
                </div>

                <div class="text_field_container col-3" id="updateLastName_container">
                    <script>
                    textField({
                        id: 'updateLastName',
                        title: 'Last Name',
                        value: getEachArtisanDetailsSession?.lastName ?? ''
                    });
                    </script>
                </div>

                <div class="text_field_container col-3" id="updateEmailAddress_container">
                    <script>
                    textField({
                        id: 'updateEmailAddress',
                        title: 'Email Address',
                        type: 'email',
                        value: getEachArtisanDetailsSession?.emailAddress ?? ''
                    });
                    </script>
                </div>

                <div class="text_field_container col-2" id="updatePhoneNumber_container">
                    <script>
                    textField({
                        id: 'updatePhoneNumber',
                        title: 'Phone Number',
                        type: 'tel',
                        value: getEachArtisanDetailsSession?.phoneNumber ?? '',
                        onKeyPressFunction: 'isNumberCheck(event);'
                    });
                    </script>
                </div>
            </div>
        </div>
    </div>

    <div class="main-content-div dash-main-content-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="tables-content-div">
            <div class="content-title">
                <div class="title">
                    <i class="bi bi-person-badge"></i>
                    <p>Artisan Account Information</p>
                </div>
            </div>

            <div class="inner-table-content colum-table-content">
                <div class="text_field_container col-3" id="artisanId_container">
                    <script>
                    textField({
                        id: 'artisanId',
                        title: 'Artisan ID',
                        readonly: true,
                        value: getEachArtisanDetailsSession?.artisanId ?? ''
                    });
                    </script>
                </div>

                <div class="text_field_container col-3" id="createdTime_container">
                    <script>
                    textField({
                        id: 'createdTime',
                        title: 'Date Of Registration',
                        readonly: true,
                        value: getEachArtisanDetailsSession?.createdTime ?? ''
                    });
                    </script>
                </div>

                <div class="text_field_container col-3" id="lastLogin_container">
                    <script>
                    textField({
                        id: 'lastLogin',
                        title: 'Last Login Date',
                        readonly: true,
                        value: getEachArtisanDetailsSession?.lastLoginTime ?? ''
                    });
                    </script>
                </div>
            </div>
        </div>
    </div>

    <div class="main-content-div dash-main-content-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="tables-content-div">
            <div class="content-title">
                <div class="title">
                    <i class="bi bi-tools"></i>
                    <p>Professional Information</p>
                </div>
            </div>

            <div class="inner-table-content colum-table-content">

                <div class="text_field_container col-1" id="updateProfessionId_container">
                    <script>
                    selectField({
                        id: 'updateProfessionId',
                        title: 'Select Profession',
                        fieldValue: getEachArtisanDetailsSession?.professionData?.professionId ?? '',
                        fieldLabel: getEachArtisanDetailsSession?.professionData?.professionName ?? ''
                    });
                    </script>
                </div>

                <div class="text_field_container col-1" id="updateVerificationStatus_container">
                    <script>
                    selectField({
                        id: 'updateVerificationStatus',
                        title: 'Verification Status',
                        fieldValue: getEachArtisanDetailsSession?.verificationStatusData?.verificationStatusId ??
                            '',
                        fieldLabel: getEachArtisanDetailsSession?.verificationStatusData?.verificationStatusName ??
                            ''
                    });
                    </script>
                </div>

                <div class="text_field_container col-2" id="updateAvailabilityStatus_container">
                    <script>
                    selectField({
                        id: 'updateAvailabilityStatus',
                        title: 'Availability Status',
                        fieldValue: getEachArtisanDetailsSession?.availabilityStatusData?.availabilityStatusId ??
                            '',
                        fieldLabel: getEachArtisanDetailsSession?.availabilityStatusData?.availabilityStatusName ??
                            ''
                    });
                    </script>
                </div>
            </div>
        </div>
    </div>

    <div class="form-bottom-btn-div">
        <button class="btn" title="UPDATE ARTISAN PROFILE" id="updateBtn" onclick="">
            UPDATE PROFILE <i class="bi-check"></i>
        </button>
    </div>
<?php } ?>

<?php if ($page == 'pendingTask') { ?>
    <div class="artisian-dashboard" data-aos="fade-in" data-aos-duration="1500">
        <div class="main-content-div dash-main-content-div">
            <div class="tables-content-div">
                <div class="content-title">
                    <div class="title">
                        <i class="bi bi-list-check"></i>
                        <p>Pending Task</p>
                    </div>
                </div>

                <div class="inner-table-content">
                    <div class="task-container">
                        <div class="task-card">
                            <div class="task-card-top">
                                <div class="task-details">
                                    <div class="icon-div secondary">
                                        <i class="bi bi-tools"></i>
                                    </div>

                                    <div class="content">
                                        <h3>Kitchen Faucet Repair</h3>
                                        <p class="task-id">
                                            ID:
                                            <span>
                                            #BC-2026-00123</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="task-status pending">
                                    Pending
                                </div>
                            </div>

                            <div class="task-summary">
                                Customer reported persistent leakage from the kitchen faucet,
                                resulting in excessive water wastage and reduced water pressure.
                                Initial assessment suggests a damaged valve and worn-out internal
                                components. Task involves inspecting the plumbing system,
                                replacing faulty parts where necessary, testing water flow,
                                and ensuring the faucet is fully functional before completion.
                            </div>

                            <div class="task-meta">
                                <div class="task-location">
                                    <i class="bi bi-geo-alt"></i>
                                    Texas, USA
                                </div>

                                <div class="task-date">
                                    <i class="bi bi-calendar-event"></i>
                                    Aug 05, 2026
                                </div>
                            </div>

                            <div class="task-actions">
                                <button title="Commence Task" class="task-btn commence-btn">
                                    <i class="bi bi-tools"></i> Commence Task
                                </button>
                            </div>
                        </div>

                        <div class="task-card">
                            <div class="task-card-top">
                                <div class="task-details">
                                    <div class="icon-div secondary">
                                        <i class="bi bi-tools"></i>
                                    </div>

                                    <div class="content">
                                        <h3>Electrical Wiring Inspection</h3>
                                        <p class="task-id">
                                            ID:
                                            <span>
                                            #BC-2026-00124</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="task-status pending">
                                    Pending
                                </div>
                            </div>

                            <div class="task-summary">
                                Customer reported recurring electrical faults affecting the living room,
                                including frequent power interruptions, flickering lights, and occasional
                                burning smells from nearby wall sockets. Preliminary inspection suggests
                                damaged wiring, loose electrical connections, and possible overload issues
                                within the circuit. The assigned artisan is required to carry out a
                                comprehensive diagnostic assessment of the affected electrical system,
                                identify faulty components, replace damaged wires and connectors where
                                necessary, secure all loose connections, and ensure compliance with
                                electrical safety standards. Upon completion, the entire circuit should
                                be tested for stability, functionality, and safe operation to prevent
                                future electrical failures and guarantee uninterrupted power supply to
                                the customer’s living area.
                            </div>

                            <div class="task-meta">
                                <div class="task-location">
                                    <i class="bi bi-geo-alt"></i>
                                    Texas, USA
                                </div>

                                <div class="task-date">
                                    <i class="bi bi-calendar-event"></i>
                                    Aug 05, 2026
                                </div>
                            </div>

                            <div class="task-actions">
                                <button title="Commence Task" class="task-btn commence-btn">
                                    <i class="bi bi-tools"></i> Commence Task
                                </button>
                            </div>
                        </div>

                        <div class="task-card">
                            <div class="task-card-top">
                                <div class="task-details">
                                    <div class="icon-div secondary">
                                        <i class="bi bi-tools"></i>
                                    </div>

                                    <div class="content">
                                        <h3>Electrical Panel Inspection & Repair</h3>
                                        <p class="task-id">
                                            ID:
                                            <span>
                                            #BC-2026-00125</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="task-status pending">
                                    Pending
                                </div>
                            </div>

                            <div class="task-summary">
                                Customer reported repeated circuit breaker trips and occasional power
                                fluctuations affecting multiple rooms within the property. Initial
                                assessment indicates potential overload issues, loose electrical
                                connections, or faulty breaker components within the main distribution
                                panel. The assigned technician is required to conduct a comprehensive
                                inspection of the electrical panel, identify damaged or worn-out
                                components, tighten loose connections, replace defective breakers if
                                necessary, and perform safety tests to ensure stable and reliable
                                power distribution throughout the building.
                            </div>

                            <div class="task-meta">
                                <div class="task-location">
                                    <i class="bi bi-geo-alt"></i>
                                    Houston, Texas, USA
                                </div>

                                <div class="task-date">
                                    <i class="bi bi-calendar-event"></i>
                                    Aug 06, 2026
                                </div>
                            </div>

                            <div class="task-actions">
                                <button title="Commence Task" class="task-btn commence-btn">
                                    <i class="bi bi-tools"></i> Commence Task
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if ($page == 'ongoingTask') { ?>
    <div class="artisian-dashboard" data-aos="fade-in" data-aos-duration="1500">
        <div class="main-content-div dash-main-content-div">
            <div class="tables-content-div">
                <div class="content-title">
                    <div class="title">
                        <i class="bi bi-tools"></i>
                        <p>Ongoing Tasks</p>
                    </div>
                </div>

                <div class="inner-table-content">
                    <div class="task-container">
                        <div class="task-card">
                            <div class="task-card-top">
                                <div class="task-details">
                                    <div class="icon-div ONGOING">
                                        <i class="bi bi-tools"></i>
                                    </div>

                                    <div class="content">
                                        <h3>Kitchen Faucet Repair</h3>
                                        <p class="task-id">
                                            ID:
                                            <span>#BC-2026-00123</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="task-status ONGOING">
                                    In Progress
                                </div>
                            </div>

                            <div class="task-summary">
                                Inspection and repair work is currently underway on the kitchen faucet.
                                The damaged valve has been identified, and replacement components are
                                being installed. Water flow testing and final leak checks will be
                                carried out upon completion to ensure the plumbing system is functioning properly.
                            </div>

                            <div class="task-meta">
                                <div class="task-location">
                                    <i class="bi bi-geo-alt"></i>
                                    Texas, USA
                                </div>

                                <div class="task-date">
                                    <i class="bi bi-calendar-event"></i>
                                    Aug 05, 2026
                                </div>
                            </div>

                            <div class="task-actions">
                                <button title="Mark Task as Completed" class="task-btn done-btn">
                                    <i class="bi bi-check2-circle"></i> Mark as Completed
                                </button>
                            </div>
                        </div>

                        <div class="task-card">
                            <div class="task-card-top">
                                <div class="task-details">
                                    <div class="icon-div ONGOING">
                                        <i class="bi bi-tools"></i>
                                    </div>

                                    <div class="content">
                                        <h3>Electrical Wiring Inspection</h3>
                                        <p class="task-id">
                                            ID:
                                            <span>#BC-2026-00124</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="task-status ONGOING">
                                    In Progress
                                </div>
                            </div>

                            <div class="task-summary">
                                Electrical diagnostics have been completed, and faulty wiring sections
                                have been identified. Replacement and reconnection work is currently
                                in progress, while safety inspections and load testing will be conducted
                                before the task is finalized and handed over to the customer.
                            </div>

                            <div class="task-meta">
                                <div class="task-location">
                                    <i class="bi bi-geo-alt"></i>
                                    Texas, USA
                                </div>

                                <div class="task-date">
                                    <i class="bi bi-calendar-event"></i>
                                    Aug 05, 2026
                                </div>
                            </div>

                            <div class="task-actions">
                                <button title="Mark Task as Completed" class="task-btn done-btn">
                                    <i class="bi bi-check2-circle"></i> Mark as Completed
                                </button>
                            </div>
                        </div>

                        <div class="task-card">
                            <div class="task-card-top">
                                <div class="task-details">
                                    <div class="icon-div ONGOING">
                                        <i class="bi bi-tools"></i>
                                    </div>

                                    <div class="content">
                                        <h3>Electrical Panel Inspection & Repair</h3>
                                        <p class="task-id">
                                            ID:
                                            <span>#BC-2026-00125</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="task-status ONGOING">
                                    In Progress
                                </div>
                            </div>

                            <div class="task-summary">
                                The electrical panel has been inspected, and maintenance work is actively
                                being carried out. Loose connections are being secured, faulty breakers
                                are being replaced, and system stability tests will be completed before
                                closing the service request and restoring full operational reliability.
                            </div>

                            <div class="task-meta">
                                <div class="task-location">
                                    <i class="bi bi-geo-alt"></i>
                                    Houston, Texas, USA
                                </div>

                                <div class="task-date">
                                    <i class="bi bi-calendar-event"></i>
                                    Aug 06, 2026
                                </div>
                            </div>

                            <div class="task-actions">
                                <button title="Mark Task as Completed" class="task-btn done-btn">
                                    <i class="bi bi-check2-circle"></i> Mark as Completed
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if ($page == 'completedTask') { ?>
    <div class="artisian-dashboard" data-aos="fade-in" data-aos-duration="1500">
        <div class="main-content-div dash-main-content-div">
            <div class="tables-content-div">
                <div class="content-title">
                    <div class="title">
                        <i class="bi bi-check-circle-fill"></i>
                        <p>Completed Tasks</p>
                    </div>
                </div>

                <div class="inner-table-content">
                    <div class="task-container">
                        <div class="task-card">
                            <div class="task-card-top">
                                <div class="task-details">
                                    <div class="icon-div COMPLETED">
                                        <i class="bi bi-tools"></i>
                                    </div>

                                    <div class="content">
                                        <h3>Kitchen Faucet Repair</h3>
                                        <p class="task-id">
                                            ID:
                                            <span>#BC-2026-00123</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="task-status completed">
                                    Completed
                                </div>
                            </div>

                            <div class="task-summary">
                                Kitchen faucet repair has been successfully completed.
                                The damaged valve and worn-out internal components were
                                replaced, water flow was restored, and final leak testing
                                confirmed the system is operating efficiently without any issues.
                            </div>

                            <div class="task-meta">
                                <div class="task-location">
                                    <i class="bi bi-geo-alt"></i>
                                    Texas, USA
                                </div>

                                <div class="task-date">
                                    <i class="bi bi-calendar-check"></i>
                                    Aug 05, 2026
                                </div>
                            </div>

                            <div class="task-actions">
                                <button title="View Completion Report" class="task-btn">
                                   <i class="bi bi-eye"></i> View Report
                                </button>
                            </div>
                        </div>

                        <div class="task-card">
                            <div class="task-card-top">
                                <div class="task-details">
                                    <div class="icon-div COMPLETED">
                                       <i class="bi bi-tools"></i>
                                    </div>

                                    <div class="content">
                                        <h3>Electrical Wiring Inspection</h3>
                                        <p class="task-id">
                                            ID:
                                            <span>#BC-2026-00124</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="task-status completed">
                                    Completed
                                </div>
                            </div>

                            <div class="task-summary">
                                A full inspection of the electrical wiring system was completed.
                                Faulty wiring sections were replaced, all connections were secured,
                                and safety testing confirmed stable and reliable electrical performance.
                            </div>

                            <div class="task-meta">
                                <div class="task-location">
                                    <i class="bi bi-geo-alt"></i>
                                    Texas, USA
                                </div>

                                <div class="task-date">
                                    <i class="bi bi-calendar-check"></i>
                                    Aug 05, 2026
                                </div>
                            </div>

                            <div class="task-actions">
                                <button title="View Completion Report" class="task-btn">
                                   <i class="bi bi-eye"></i> View Report
                                </button>
                            </div>
                        </div>

                        <div class="task-card">
                            <div class="task-card-top">
                                <div class="task-details">
                                    <div class="icon-div COMPLETED">
                                        <i class="bi bi-tools"></i>
                                    </div>

                                    <div class="content">
                                        <h3>Electrical Panel Inspection & Repair</h3>
                                        <p class="task-id">
                                            ID:
                                            <span>#BC-2026-00125</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="task-status completed">
                                    Completed
                                </div>
                            </div>

                            <div class="task-summary">
                                Electrical panel inspection and maintenance were successfully completed.
                                Defective breakers were replaced, loose connections were secured,
                                and system stability tests verified safe and reliable power distribution.
                            </div>

                            <div class="task-meta">
                                <div class="task-location">
                                    <i class="bi bi-geo-alt"></i>
                                    Houston, Texas, USA
                                </div>

                                <div class="task-date">
                                    <i class="bi bi-calendar-check"></i>
                                    Aug 06, 2026
                                </div>
                            </div>

                            <div class="task-actions">
                                <button title="View Completion Report" class="task-btn">
                                   <i class="bi bi-eye"></i> View Report
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if ($page == 'artisanTransactions') { ?>
    <div class="artisian-dashboard" data-aos="fade-in" data-aos-duration="1500">
        <div class="main-content-div dash-main-content-div">
            <div class="artisan-statistics-back-div">
                <div class="artisan-statistics-div" title="Total Earnings">
                    <div class="artisan-statistics-inner-div">
                        <div class="icon-div active">
                            <i class="bi bi-cash-coin"></i>
                        </div>

                        <div class="artisan-statistics-text">
                            <h4>Total Earnings</h4>
                            <span>Completed job earnings</span>
                            <h2 id="pendingTasksCount">$1,260.00</h2>
                        </div>
                    </div>
                </div>

                <div class="artisan-statistics-div" title="Pending Payments">
                    <div class="artisan-statistics-inner-div">
                        <div class="icon-div warning">
                            <i class="bi bi-hourglass-split"></i>
                        </div>

                        <div class="artisan-statistics-text">
                            <h4>Pending Payments</h4>
                            <span>Awaiting payment</span>
                            <h2 id="ongoingTasksCount">$180.00</h2>
                        </div>
                    </div>
                </div>

                <div class="artisan-statistics-div" title="Total Transactions">
                    <div class="artisan-statistics-inner-div">
                        <div class="icon-div primary">
                            <i class="bi bi-receipt-cutoff"></i>
                        </div>

                        <div class="artisan-statistics-text">
                            <h4>Total Transactions</h4>
                            <span>Payment records</span>
                            <h2 id="payoutBalance">
                                24
                            </h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tables-content-div">
                <div class="content-title">
                    <div class="title">
                        <i class="bi bi-wallet2"></i>
                        <p>Transaction History</p>
                    </div>
                </div>

                <div class="inner-table-content">
                    <div class="table-div animated fadeIn">
                        <table class="table" cellspacing="0" style="width:100%">
                            <thead>
                                <tr class="tb-col">
                                    <th>SN</th>
                                    <th>Transaction ID</th>
                                    <th>Task</th>
                                    <th>Customer</th>
                                    <th>Amount</th>
                                    <th>Payment Method</th>
                                    <th>Date</th>
                                    <th>Payment Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr class="tb-row">
                                    <td>1</td>
                                    <td>TRX-2026-001</td>
                                    <td>Kitchen Faucet Repair</td>
                                    <td>John Smith</td>
                                    <td>$120.00</td>
                                    <td>Credit Card</td>
                                    <td>Aug 05, 2026</td>
                                    <td>
                                        <div class="status-div SUCCESS">
                                            SUCCESS
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn view-btn">
                                            VIEW
                                        </button>
                                    </td>
                                </tr>
                                <tr class="tb-row">
                                    <td>2</td>
                                    <td>TRX-2026-002</td>
                                    <td>Electrical Wiring Inspection</td>
                                    <td>Sarah Johnson</td>
                                    <td>$250.00</td>
                                    <td>Bank Transfer</td>
                                    <td>Aug 05, 2026</td>
                                    <td>
                                        <div class="status-div SUCCESS">
                                            SUCCESS
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn view-btn">
                                            VIEW
                                        </button>
                                    </td>
                                </tr>
                                <tr class="tb-row">
                                    <td>3</td>
                                    <td>TRX-2026-003</td>
                                    <td>Electrical Panel Repair</td>
                                    <td>Michael Brown</td>
                                    <td>$340.00</td>
                                    <td>Debit Card</td>
                                    <td>Aug 06, 2026</td>
                                    <td>
                                        <div class="status-div SUCCESS">
                                            SUCCESS
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn view-btn">
                                            VIEW
                                        </button>
                                    </td>
                                </tr>
                                <tr class="tb-row">
                                    <td>4</td>
                                    <td>TRX-2026-004</td>
                                    <td>Air Conditioning Maintenance</td>
                                    <td>Emily Davis</td>
                                    <td>$180.00</td>
                                    <td>PayPal</td>
                                    <td>Aug 07, 2026</td>
                                    <td>
                                        <div class="status-div SUCCESS">
                                            SUCCESS
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn view-btn">
                                            VIEW
                                        </button>
                                    </td>
                                </tr>

                                <tr class="tb-row">
                                    <td>5</td>
                                    <td>TRX-2026-005</td>
                                    <td>Door Lock Replacement</td>
                                    <td>David Wilson</td>
                                    <td>$95.00</td>
                                    <td>Credit Card</td>
                                    <td>Aug 08, 2026</td>
                                    <td>
                                        <div class="status-div SUCCESS">
                                            SUCCESS
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn view-btn">
                                            VIEW
                                        </button>
                                    </td>
                                </tr>

                                <tr class="tb-row">
                                    <td>6</td>
                                    <td>TRX-2026-006</td>
                                    <td>Water Heater Repair</td>
                                    <td>Jessica Miller</td>
                                    <td>$275.00</td>
                                    <td>Bank Transfer</td>
                                    <td>Aug 09, 2026</td>
                                    <td>
                                        <div class="status-div SUCCESS">
                                            SUCCESS
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn view-btn">
                                            VIEW
                                        </button>
                                    </td>
                                </tr>

                                <tr class="tb-row">
                                    <td>7</td>
                                    <td>TRX-2026-007</td>
                                    <td>Ceiling Fan Installation</td>
                                    <td>Robert Taylor</td>
                                    <td>$150.00</td>
                                    <td>Credit Card</td>
                                    <td>Aug 10, 2026</td>
                                    <td>
                                        <div class="status-div SUCCESS">
                                            SUCCESS
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn view-btn">
                                            VIEW
                                        </button>
                                    </td>
                                </tr>

                                <tr class="tb-row">
                                    <td>8</td>
                                    <td>TRX-2026-008</td>
                                    <td>Generator Maintenance</td>
                                    <td>Olivia Martinez</td>
                                    <td>$420.00</td>
                                    <td>Bank Transfer</td>
                                    <td>Aug 11, 2026</td>
                                    <td>
                                        <div class="status-div SUCCESS">
                                            SUCCESS
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn view-btn">
                                            VIEW
                                        </button>
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                        <!-- Pagination -->
                        <div id="transactionPaginationControls" class="pagination-div"></div>

                    </div>
                </div>
            </div>

        </div>
    </div>
<?php } ?>