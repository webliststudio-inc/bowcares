<div class="side-nav-div animated fadeInLeft">
    <div class="div-in">
        <div class="logo-div">
            <img src="<?php echo $websiteUrl ?>/all-images/images/logo.png" alt="<?php echo $appName ?> logo" />
        </div>

        <div class="nav-wrapper">
            <div class="nav-back-div">
                <div class="title-wrapper">
                    <div class="title-div">
                        <h3>Main</h3>
                    </div>

                    <div class="nav-container">
                        <div class="nav-div active-li" title="Dashboard" id="dashboard"
                            onclick="_getActivePage({page:'dashboard', divid:'dashboard'});">
                            <i class="bi-speedometer2"></i>
                            <span>Dashboard</span>
                        </div>

                        <div class="nav-div" title="Administrators" id="adminPage"
                            onclick="_getActivePage({page:'adminPage', divid:'adminPage'});">
                            <i class="bi bi-people"></i>
                            <span>Administrators</span>
                        </div>

                        <div class="nav-div" title="Artisan" id="artisanPage"
                            onclick="_getActivePage({page:'artisanPage', divid:'artisanPage'});">
                            <i class="bi bi-tools"></i>
                            <span>Artisan</span>
                        </div>

                        <div class="nav-div" title="Task" id="taskPage"
                            onclick="_getActivePage({page:'taskPage', divid:'taskPage'});">
                            <i class="bi bi-list-check"></i>
                            <span>Task</span>
                        </div>

                        <div class="nav-div" title="Invoice" id="invoicePage"
                            onclick="_getActivePage({page:'invoicePage', divid:'invoicePage'});">
                            <i class="bi bi-receipt"></i>
                            <span>Invoice</span>
                        </div>

                        <div class="nav-div" title="Reports" id="reportPage"
                            onclick="_getActivePage({page:'reportPage', divid:'reportPage'});">
                            <i class="bi bi-bar-chart"></i>
                            <span>Report</span>
                        </div>
                    </div>
                </div>

                <div class="title-wrapper">
                    <div class="title-div">
                        <h3>System</h3>
                    </div>

                    <div class="nav-container">
                        <div class="nav-div" title="Services" id="servicePage"
                            onclick="_getActivePage({page:'servicePage', divid:'servicePage'});">
                            <i class="bi bi-stack"></i>
                            <span>Services</span>
                        </div>

                        <div class="nav-div" title="Portfolio" id="galleryPage"
                            onclick="_getActivePage({page:'galleryPage', divid:'galleryPage'});">
                            <i class="bi bi-images"></i>
                            <span>Gallery</span>
                        </div>

                        <div class="nav-div" title="Blog" id="blogPage"
                            onclick="_getActivePage({page:'blogPage', divid:'blogPage'});">
                            <i class="bi bi-journal-text"></i>
                            <span>Blog</span>
                        </div>

                        <div class="nav-div" title="Frequently Asked Questions" id="faqPage"
                            onclick="_getActivePage({page:'faqPage', divid:'faqPage'});">
                            <i class="bi bi-question-circle"></i>
                            <span>FAQ</span>
                        </div>

                        <div class="nav-div" title="Reviews" id="reviewPage"
                            onclick="_getActivePage({page:'reviewPage', divid:'reviewPage'});">
                            <i class="bi bi-chat-text"></i>
                            <span>Reviews</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nav-back-div">
                <div class="title-wrapper">
                    <div class="title-div">
                        <h3>System Configuration</h3>
                    </div>

                    <div class="nav-container">
                        <div class="nav-div" title="System Settings" id="settingsPage"
                            onclick="_getActivePage({page:'settingsPage', divid:'settingsPage'});">
                            <i class="bi-gear"></i>
                            <span>Settings</span>
                        </div>

                        <div class="nav-div" title="Log-Out" onclick="_confirmLogOut();">
                            <i class="bi-box-arrow-right"></i>
                            <span>Log-Out</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>