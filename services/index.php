<?php include '../config/constants.php'; ?>
<?php include '../config/functions.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include '../meta.php' ?>
    <title>
        <?php echo $appName ?> | Corporate, Commercial, Industrial & Residential Maintenance Services
    </title>
    <meta name="keywords"
        content="<?php echo $appName ?>, corporate maintenance services, commercial maintenance services, industrial maintenance services, residential maintenance services, property maintenance USA, building maintenance services, facility maintenance services, home maintenance services, professional maintenance company USA, property repair services, building repair services" />
    <meta name="description"
        content="Explore <?php echo $appName ?> maintenance services for corporate, commercial, industrial, and residential properties. We provide reliable repairs, routine maintenance, and professional property care solutions across the USA." />
    <!-- Open Graph -->
    <meta property="og:title"
        content="<?php echo $appName ?> | Corporate, Commercial, Industrial & Residential Maintenance Services" />
    <meta property="og:image"
        content="<?php echo $websiteUrl ?>/all-images/plugin-pix/bowcares.jpg" />
    <meta property="og:description"
        content="<?php echo $appName ?> provides dependable maintenance and repair solutions for corporate, commercial, industrial, and residential properties, helping keep every space safe, functional, and well maintained." />
    <!-- Twitter -->
    <meta name="twitter:title"
        content="<?php echo $appName ?> | Corporate, Commercial, Industrial & Residential Maintenance Services" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/bowcares.jpg" />
    <meta name="twitter:description"
        content="Discover <?php echo $appName ?> maintenance solutions for corporate, commercial, industrial, and residential properties across the USA." />
</head>

<body>
    <?php include '../header.php' ?>

    <section class="other-pages" data-aos="fade-in" data-aos-duration="900">
        <?php
            _otherPagesTitleContent([
                'title' => 'Our ',
                'highlight' => 'Services',
                'description' => 'From corporate facilities to commercial, industrial, and residential properties, ' . $appName . ' delivers reliable maintenance and repair solutions tailored to keep every space safe, functional, and well maintained.',
                'breadcrumbs' => [
                    [
                        'title' => 'Home',
                        'url' => $websiteUrl,
                        'last' => false
                    ],
                    [
                        'title' => 'Our Services',
                        'url' => $websiteUrl . '/services',
                        'last' => true
                    ]
                ]
            ]);
        ?>
    </section>

    <section class="others-pg-content-div">
        <section class="body-div net-bg-br">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="title-div" data-aos="fade-in" data-aos-duration="1200">
                        <div class="inner-div">
                            <span class="top-title">WHAT WE DO</span>
                            <h2>Multi-Disciplined Engineering <span>Services</span></h2>
                        </div>
                    </div>

                    <div class="service-back-div">
                        <div class="service-div" data-aos="fade-up" data-aos-duration="1200">
                            <div class="image-div">
                                <img src="<?php echo $websiteUrl ?>/uploaded_files/services/service-3.jpeg"
                                    alt="Residential" />
                            </div>

                            <div class="icon-div">
                                <img src="<?php echo $websiteUrl ?>/all-images/images/icon.png"
                                    alt="<?php echo $appName ?> Icon" />
                            </div>

                            <a href="<?php echo $websiteUrl ?>/services/residential">
                                <div class="text-div">
                                    <h3>Residential</h3>
                                    <p>Comprehensive maintenance for warehouses, manufacturing plants, and industrial
                                        facilities with a focus...</p>

                                    <div class="btn-div" id="serviceBtn1">
                                        <script>
                                        generalButtons({
                                            container: "serviceBtn1",
                                            buttons: [{
                                                id: "serviceBtn1",
                                                text: "Learn More",
                                                icon: "bi bi-arrow-right-circle",
                                                width: "btn-full",
                                                iconPosition: "right",
                                                link: "<?php echo $websiteUrl ?>/services/residential"
                                            }]
                                        });
                                        </script>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="service-div" data-aos="fade-up" data-aos-duration="1200">
                            <div class="image-div">
                                <img src="<?php echo $websiteUrl ?>/uploaded_files/services/service-1.jpeg"
                                    alt="Corporate" />
                            </div>

                            <div class="icon-div">
                                <img src="<?php echo $websiteUrl ?>/all-images/images/icon.png"
                                    alt="<?php echo $appName ?> Icon" />
                            </div>

                            <a href="<?php echo $websiteUrl?>">
                                <div class="text-div">
                                    <h3>Corporate</h3>
                                    <p>Professional maintenance solutions for offices, corporate facilities, and
                                        business environments, ensuring...</p>

                                    <div class="btn-div" id="serviceBtn2">
                                        <script>
                                        generalButtons({
                                            container: "serviceBtn2",
                                            buttons: [{
                                                id: "serviceBtn2",
                                                text: "Learn More",
                                                icon: "bi bi-arrow-right-circle",
                                                width: "btn-full",
                                                iconPosition: "right"
                                            }]
                                        });
                                        </script>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="service-div" data-aos="fade-up" data-aos-duration="1200">
                            <div class="image-div">
                                <img src="<?php echo $websiteUrl ?>/uploaded_files/services/service-2.jpeg"
                                    alt="Commercial" />
                            </div>

                            <div class="icon-div">
                                <img src="<?php echo $websiteUrl ?>/all-images/images/icon.png"
                                    alt="<?php echo $appName ?> Icon" />
                            </div>

                            <a href="<?php echo $websiteUrl?>">
                                <div class="text-div">
                                    <h3>Commercial</h3>
                                    <p>Reliable maintenance services for retail stores, restaurants, shopping centers,
                                        and commercial...</p>

                                    <div class="btn-div" id="serviceBtn3">
                                        <script>
                                        generalButtons({
                                            container: "serviceBtn3",
                                            buttons: [{
                                                id: "serviceBtn",
                                                text: "Learn More",
                                                icon: "bi bi-arrow-right-circle",
                                                width: "btn-full",
                                                iconPosition: "right"
                                            }]
                                        });
                                        </script>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="service-div" data-aos="fade-up" data-aos-duration="1200">
                            <div class="image-div">
                                <img src="<?php echo $websiteUrl ?>/uploaded_files/services/service-3.jpeg"
                                    alt="Industrial" />
                            </div>

                            <div class="icon-div">
                                <img src="<?php echo $websiteUrl ?>/all-images/images/icon.png"
                                    alt="<?php echo $appName ?> Icon" />
                            </div>

                            <a href="<?php echo $websiteUrl?>">
                                <div class="text-div">
                                    <h3>Industrial</h3>
                                    <p>Comprehensive maintenance for warehouses, manufacturing plants, and industrial
                                        facilities with a focus...</p>

                                    <div class="btn-div" id="serviceBtn4">
                                        <script>
                                        generalButtons({
                                            container: "serviceBtn4",
                                            buttons: [{
                                                id: "serviceBtn",
                                                text: "Learn More",
                                                icon: "bi bi-arrow-right-circle",
                                                width: "btn-full",
                                                iconPosition: "right",
                                            }]
                                        });
                                        </script>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="body-div net-bg-tr">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="title-div" data-aos="fade-in" data-aos-duration="1200">
                        <div class="inner-div">
                            <span class="top-title">HOW IT WORKS</span>
                            <h2>Simple Steps to Get Your <span>Maintenance Done</span></h2>
                        </div>

                        <div class="btn-div" id="howItWorksButton">
                            <script>
                            generalButtons({
                                container: "howItWorksButton",
                                buttons: [{
                                    id: "btnStart",
                                    text: "Explore How It Works",
                                    icon: "bi bi-arrow-right-circle",
                                    iconPosition: "right"
                                }, ]
                            });
                            </script>
                        </div>
                    </div>

                    <div class="how-it-works-wrapper">
                        <div class="how-it-works-section">
                            <div class="how-it-works-back-div">
                                <!-- STEP 1 -->
                                <div class="how-it-works-div maintenance-step active-step" data-step="1"
                                    data-aos="fade-left" data-aos-duration="1200">
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
                                <div class="how-it-works-div maintenance-step" data-step="2" data-step="1"
                                    data-aos="fade-left" data-aos-duration="1200">
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
                                <div class="how-it-works-div maintenance-step" data-step="3" data-step="1"
                                    data-aos="fade-left" data-aos-duration="1200">
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
                                <div class="how-it-works-div maintenance-step" data-step="4" data-step="1"
                                    data-aos="fade-left" data-aos-duration="1200">
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
                </div>
            </div>
        </section>

        <?php include '../footer.php' ?>
    </section>
</body>

</html>