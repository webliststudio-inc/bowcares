<?php include 'config/constants.php';?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html id="request-service-html" lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'meta.php'?>
    <title><?php echo $appName ?> | Request a Maintenance Service</title>
    <meta name="keywords"
        content="<?php echo $appName ?>, request maintenance service, property maintenance USA, facility maintenance, handyman services, home repairs, commercial maintenance, residential maintenance, cleaning services, building repairs, maintenance request, BowCare services" />
    <meta name="description"
        content="Request reliable property maintenance, repair, cleaning, handyman, and facility services from BowCare Maintenance Services. Tell us what you need and our team will help you get started." />
    <meta property="og:title"
        content="<?php echo $appName ?> | Request a Maintenance Service" />
    <meta property="og:image"
        content="<?php echo $websiteUrl ?>/all-images/plugin-pix/bowcares.jpg" />
    <meta property="og:description"
        content="Submit a service request to BowCare Maintenance Services for reliable property maintenance, repairs, cleaning, handyman, and facility services." />
    <meta name="twitter:title"
        content="<?php echo $appName ?> | Request a Maintenance Service" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/bowcares.jpg" />
    <meta name="twitter:description"
        content="Request professional property maintenance, repairs, cleaning, handyman, and facility services from BowCare Maintenance Services." />
</head>

<body>
    <?php include 'alert.php'?>
    <section class="login-session">
        <div class="graphics-div"></div>
        <div class="login-div">
            <header>
                <div class="header-div-in">
                    <a href="<?php echo $websiteUrl?>">
                        <div class="logo-div">
                            <img src="<?php echo $websiteUrl?>/all-images/images/logo.png"
                                alt="<?php echo $appName?> logo" />
                        </div>
                    </a>

                    <div class="form-btn-div">
                        <span class="text">
                           Need Help?
                        </span>

                        <button title="Contact Us"
                            class="btn"
                            onclick="window.location.href='<?php echo $websiteUrl ?>/contact-us';">
                            Contact Us
                        </button>
                    </div>
                </div>
            </header>

            <div class="form-back-div" data-aos="fade-in" data-aos-duration="1200">
                <div class="form-div">
                    <div class="top-div">
                        <h1>🛠️ Request a Service</h1>
                        <p>
                            Tell us what you need and our team will help you find the right maintenance service for your property.
                        </p>
                    </div>

                    <div class="how-it-works-wrapper request-how-it-works-wrapper">
                        <div class="how-it-works-section">
                            <div class="how-it-works-back-div">
                                <!-- STEP 1 -->
                                <div class="how-it-works-div requst-how-it-works-div maintenance-step active-step" data-step="1" data-aos="fade-left"
                                    data-aos-duration="1200">
                                    <div class="step-info">
                                        <div class="step-number">1</div>

                                        <h3>Call Us</h3>

                                        <div class="step-icon">
                                            <i class="bi bi-telephone-inbound"></i>
                                        </div>
                                    </div>

                                    <div class="customer-message-card">
                                        <div class="message-user">
                                            <div class="user-avatar">
                                                <img src="<?php echo $websiteUrl ?>/all-images/images/customer.png"
                                                    alt="Customer">
                                            </div>

                                            <div class="role">
                                                <strong>Customer</strong>
                                                <small>Just now</small>
                                            </div>
                                        </div>

                                        <p>
                                            Hello, I need help with my electrical system.
                                            Can you assist me?
                                        </p>
                                    </div>

                                    <div class="step-arrow">
                                        <i class="bi bi-arrow-right"></i>
                                    </div>
                                </div>

                                <!-- STEP 2 -->
                                <div class="how-it-works-div requst-how-it-works-div maintenance-step" data-step="2" data-step="1" data-aos="fade-left"
                                    data-aos-duration="1200">
                                    <div class="step-info">
                                        <div class="step-number">2</div>

                                        <h3>
                                            Schedule<br>
                                            Visitation<br>
                                            Appointment
                                        </h3>

                                        <div class="step-icon">
                                            <i class="bi bi-calendar3"></i>
                                        </div>
                                    </div>

                                    <div class="customer-message-card">
                                        <div class="message-user">
                                            <div class="user-avatar">
                                                <img src="<?php echo $websiteUrl ?>/all-images/images/customer-visitation.png"
                                                    alt="customer visitation">
                                            </div>

                                            <div class="role">
                                                <strong>Customer</strong>
                                                <small>Just now</small>
                                            </div>
                                        </div>

                                        <p>
                                            Great! Can we schedule a visitation appointment
                                            for this Friday?
                                        </p>
                                    </div>

                                    <div class="step-arrow">
                                        <i class="bi bi-arrow-right"></i>
                                    </div>
                                </div>

                                <!-- STEP 3 -->
                                <div class="how-it-works-div requst-how-it-works-div maintenance-step" data-step="3" data-step="1" data-aos="fade-left"
                                    data-aos-duration="1200">
                                    <div class="step-info">
                                        <div class="step-number">3</div>

                                        <h3>
                                            Get Job<br>
                                            Done
                                        </h3>

                                        <div class="step-icon">
                                            <i class="bi bi-tools"></i>
                                        </div>
                                    </div>

                                    <div class="customer-message-card">
                                        <div class="message-user">
                                            <div class="user-avatar">
                                                <img src="<?php echo $websiteUrl ?>/all-images/images/technician.png"
                                                    alt="technician">
                                            </div>

                                            <div class="role">
                                                <strong>Technician</strong>
                                                <small>Just now</small>
                                            </div>
                                        </div>

                                        <p>
                                            We are on-site and working on the issue.
                                        </p>
                                    </div>


                                    <div class="step-arrow">
                                        <i class="bi bi-arrow-right"></i>
                                    </div>
                                </div>

                                <!-- STEP 4 -->
                                <div class="how-it-works-div requst-how-it-works-div maintenance-step" data-step="4" data-step="1" data-aos="fade-left"
                                    data-aos-duration="1200">
                                    <div class="step-info">
                                        <div class="step-number">4</div>

                                        <h3>Payment</h3>

                                        <div class="step-icon">
                                            <i class="bi bi-credit-card"></i>
                                        </div>
                                    </div>

                                    <div class="customer-message-card">
                                        <div class="message-user">
                                            <div class="user-avatar">
                                                <img src="<?php echo $websiteUrl ?>/all-images/images/customer-visitation.png"
                                                    alt="customer visitation">
                                            </div>

                                            <div class="role">
                                                <strong>Customer</strong>
                                                <small>Just now</small>
                                            </div>
                                        </div>

                                        <p>
                                            Job well done! How can I make payment?
                                        </p>
                                    </div>

                                    <div class="step-arrow">
                                        <i class="bi bi-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="how-it-works-progress" data-aos="fade-in" data-aos-duration="1200">
                            <div class="steps">
                                <div class="step active" data-step="1" onclick="_changeMaintenanceStep(1, this)">
                                    <div class="circle">1</div>
                                </div>

                                <div class="step" data-step="2" onclick="_changeMaintenanceStep(2, this)">
                                    <div class="circle">2</div>
                                </div>

                                <div class="step" data-step="3" onclick="_changeMaintenanceStep(3, this)">
                                    <div class="circle">3</div>
                                </div>

                                <div class="step" data-step="4" onclick="_changeMaintenanceStep(4, this)">
                                    <div class="circle">4</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="inner-form">
                        <div class="main-content-div artisan-main-content-div">
                            <div class="pages-tables-content-div form-main-content">
                                <div class="content-title">
                                    <div class="title">
                                        <i class="bi-tools"></i>
                                        <p>Request a Service</p>
                                    </div>
                                </div>

                                <div class="form-container">
                                    <div class="text_field_container col-3" id="FullName_container">
                                        <script>
                                            textField({
                                                id: 'FullName',
                                                title: 'Full Name',
                                            });
                                        </script>
                                    </div>

                                    <div class="text_field_container col-3" id="emailAddress_container">
                                        <script>
                                            textField({
                                                id: 'emailAddress',
                                                title: 'Email Address',
                                                type: 'email',
                                            });
                                        </script>
                                    </div>

                                    <div class="text_field_container col-3" id="phoneNumber_container">
                                        <script>
                                            textField({
                                                id: 'phoneNumber',
                                                title: 'Phone Number',
                                                type: 'tel',
                                            });
                                        </script>
                                    </div>

                                    <div class="text_field_container col-3" id="addressId_container">
                                        <script>
                                            textField({
                                                id: 'addressId',
                                                title: 'Address',
                                            });
                                        </script>
                                    </div>
                                            
                                    <div id="map" style="min-height: 50px; border-radius: 12px;"></div>

                                    <div class="text_area_container" id="messageRequest_container">
                                        <script>
                                            textField({
                                                id: 'messageRequest',
                                                title: 'Describe Your Service Request',
                                                type: 'textarea',
                                                maxlength: 180,
                                            });
                                        </script>
                                    </div>

                                    <div class="check-box-container" id="notificationConsent_container">
                                        <label class="check-box-label">
                                            <input type="checkbox" id="notificationConsent" name="notificationConsent" value="1">

                                            <span>
                                                By checking this box, I agree to receive emails, notifications, and other important updates from BowCare regarding my service request, including request status, appointment confirmations, service updates, reminders, and other information related to the services I have requested. I can opt out at any time.
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="btn-div">
                            <button class="btn"
                                id="requestServiceBtn"
                                title="Submit Service Request"
                                onclick="_completeServiceRequest();">
                                Submit Request
                                <i class="bi-check"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'bottom-scripts.php'?>
</body>
</html>