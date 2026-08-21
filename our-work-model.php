<?php include 'config/constants.php'; ?>
<?php include 'config/functions.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html id="other-page-header" lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'meta.php' ?>
    <title><?php echo $appName ?> | Our Work Model - Simple & Professional Service Process</title>
    <meta name="description"
        content="Discover how <?php echo $appName ?> works. From requesting a service and scheduling an appointment to professional job completion and secure payment, our process is designed to be simple, transparent, and reliable." />
    <meta name="keywords"
        content="<?php echo $appName ?> work model, BowCare process, how BowCare works, maintenance service process, service workflow, appointment scheduling, home maintenance process, property maintenance workflow, professional maintenance services, repair service process, handyman workflow" />
    <!-- Open Graph -->
    <meta property="og:title"
        content="<?php echo $appName ?> | Our Work Model - Simple & Professional Service Process" />
    <meta property="og:image"
        content="<?php echo $websiteUrl ?>/all-images/plugin-pix/bowcares.jpg" />
    <meta property="og:description"
        content="See how our streamlined work model makes it easy to request, schedule, complete, and pay for professional maintenance services with confidence." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo $websiteUrl; ?>/work-model" />
    <!-- Twitter -->
    <meta name="twitter:title"
        content="<?php echo $appName ?> | Our Work Model - Simple & Professional Service Process" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image"
        content="<?php echo $websiteUrl ?>/all-images/plugin-pix/bowcares.jpg" />
    <meta name="twitter:description"
        content="Learn about <?php echo $appName ?>'s step-by-step service process—from your first request to the successful completion of your maintenance project and secure payment." />
</head>

<body>
    <?php include 'header.php' ?>

    <section class="other-pages" data-aos="fade-in" data-aos-duration="900">
        <?php
            _otherPagesTitleContent([
                'title' => 'Our',
                'highlight' => 'Work Model',
                'description' => 'We make property maintenance easy with a structured process designed for convenience, reliability, and efficiency. From scheduling your service to completing the work, our team ensures every project is handled professionally.',
                'breadcrumbs' => [
                    [
                        'title' => 'Home',
                        'url' => $websiteUrl,
                        'last' => false
                    ],
                    [
                        'title' => 'Our Work Model',
                        'url' => $websiteUrl . '/our-work-model',
                        'last' => true
                    ]
                ]
            ]);
        ?>
    </section>

    <section class="others-pg-content-div">
        <section class="body-div net-bg-tr">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="title-div" data-aos="fade-in" data-aos-duration="1200">
                        <div class="inner-div">
                            <span class="top-title">HOW IT WORKS</span>
                            <h2>Simple Steps to Get Your <span>Maintenance Done</span></h2>
                        </div>
                    </div>

                    <div class="how-it-works-wrapper">
                        <div class="how-it-works-section">
                            <div class="how-it-works-back-div">
                                <!-- STEP 1 -->
                                <div class="how-it-works-div active-step" data-step="1"
                                    data-aos="fade-up" data-aos-duration="900">
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

                                    <div class="bowcares-card">
                                        <div class="bowcares-header">
                                            <div class="bowcares-brand">
                                                <div class="brand-icon">B</div>

                                                <div class="title">
                                                    <strong>BowCares Maintenance</strong>
                                                    <small>Just now</small>
                                                </div>
                                            </div>

                                            <span class="more-icon">•••</span>
                                        </div>

                                        <div class="bowcares-content">
                                            <ul>
                                                <li>
                                                    <i class="bi bi-check"></i>
                                                    Our team answers your call quickly
                                                </li>

                                                <li>
                                                    <i class="bi bi-check"></i>
                                                    We understand your maintenance need
                                                </li>

                                                <li>
                                                    <i class="bi bi-check"></i>
                                                    We recommend the best solution
                                                </li>

                                                <li>
                                                    <i class="bi bi-check"></i>
                                                    You receive an estimated service plan
                                                </li>
                                            </ul>

                                            <div class="service-image">
                                                <img src="<?php echo $websiteUrl ?>/all-images/images/bowcare-phone.png"
                                                    alt="Call">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- STEP 2 -->
                                <div class="how-it-works-div" data-step="2" data-step="1"
                                    data-aos="fade-up" data-aos-duration="1000">
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

                                    <div class="bowcares-card">
                                        <div class="bowcares-header">
                                            <div class="bowcares-brand">
                                                <div class="brand-icon">B</div>

                                                <div class="title">
                                                    <strong>BowCares Maintenance</strong>
                                                    <small>Just now</small>
                                                </div>
                                            </div>

                                            <span class="more-icon">•••</span>
                                        </div>

                                        <div class="bowcares-content">
                                            <ul>
                                                <li>
                                                    <i class="bi bi-check"></i>
                                                    Choose a convenient date & time
                                                </li>

                                                <li>
                                                    <i class="bi bi-check"></i>
                                                    We assign the best technician
                                                </li>

                                                <li>
                                                    <i class="bi bi-check"></i>
                                                    Appointment confirmed instantly
                                                </li>

                                                <li>
                                                    <i class="bi bi-check"></i>
                                                    You get a reminder before the visit
                                                </li>
                                            </ul>

                                            <div class="service-image">
                                                <img src="<?php echo $websiteUrl ?>/all-images/images/calendar.png"
                                                    alt="calendar">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- STEP 3 -->
                                <div class="how-it-works-div" data-step="3" data-step="1"
                                    data-aos="fade-up" data-aos-duration="1200">
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

                                    <div class="bowcares-card">
                                        <div class="bowcares-header">
                                            <div class="bowcares-brand">
                                                <div class="brand-icon">B</div>

                                                <div class="title">
                                                    <strong>BowCares Maintenance</strong>
                                                    <small>Just now</small>
                                                </div>
                                            </div>
                                            <span class="more-icon">•••</span>
                                        </div>

                                        <div class="bowcares-content">
                                            <ul>
                                                <li>
                                                    <i class="bi bi-check"></i>
                                                    We inspect the problem thoroughly
                                                </li>

                                                <li>
                                                    <i class="bi bi-check"></i>
                                                    Professional repairs with quality parts
                                                </li>

                                                <li>
                                                    <i class="bi bi-check"></i>
                                                    We test to ensure everything works
                                                </li>

                                                <li>
                                                    <i class="bi bi-check"></i>
                                                    Clean up & quality check completed
                                                </li>

                                                <li>
                                                    <i class="bi bi-check"></i>
                                                    You approve the completed job
                                                </li>
                                            </ul>

                                            <div class="service-image">
                                                <img src="<?php echo $websiteUrl ?>/all-images/images/toolsbox.png"
                                                    alt="tools box">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- STEP 4 -->
                                <div class="how-it-works-div" data-step="4" data-step="1"
                                    data-aos="fade-up" data-aos-duration="1400">
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

                                    <div class="bowcares-card">
                                        <div class="bowcares-header">
                                            <div class="bowcares-brand">
                                                <div class="brand-icon">B</div>

                                                <div class="title">
                                                    <strong>BowCares Maintenance</strong>
                                                    <small>Just now</small>
                                                </div>
                                            </div>

                                            <span class="more-icon">•••</span>
                                        </div>

                                        <div class="bowcares-content">
                                            <ul>
                                                <li>
                                                    <i class="bi bi-check"></i>
                                                    Secure & convenient payment options
                                                </li>

                                                <li>
                                                    <i class="bi bi-check"></i>
                                                    Pay online, with card or bank transfer
                                                </li>

                                                <li>
                                                    <i class="bi bi-check"></i>
                                                    Instant invoice & payment receipt
                                                </li>

                                                <li>
                                                    <i class="bi bi-check"></i>
                                                    Thank you for choosing BowCares!
                                                </li>
                                            </ul>

                                            <div class="service-image">
                                                <img src="<?php echo $websiteUrl ?>/all-images/images/payment.png"
                                                    alt="payment">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'footer.php' ?>
    </section>
</body>

</html>