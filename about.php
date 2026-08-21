<?php include 'config/constants.php'; ?>
<?php include 'config/functions.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html id="other-page-header" lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'meta.php' ?>
    <title>
        <?php echo $appName ?> | About Us - Reliable Professional Maintenance Services
    </title>
    <meta name="description"
        content="Learn about <?php echo $appName ?>, a trusted maintenance services company providing reliable and professional solutions to keep homes and properties safe, comfortable, and well maintained." />
    <meta name="keywords"
        content="BowCare Maintenance Services, BowCares, About BowCares, maintenance services, property maintenance services, home maintenance services, professional maintenance company, reliable maintenance services, repair services, property repair services, home repair services, handyman services, maintenance company USA" />
    <!-- Open Graph -->
    <meta property="og:title"
        content="<?php echo $appName ?> | About Us - Reliable Professional Maintenance Services" />
    <meta property="og:image"
        content="<?php echo $websiteUrl ?>/all-images/plugin-pix/bowcares.jpg" />
    <meta property="og:description"
        content="Discover <?php echo $appName ?> and our commitment to providing dependable, professional, and quality maintenance services for homes and properties." />
    <!-- Twitter -->
    <meta name="twitter:title"
        content="<?php echo $appName ?> | About Us - Reliable Professional Maintenance Services" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/bowcares.jpg" />
    <meta name="twitter:description"
        content="Meet <?php echo $appName ?> — providing reliable maintenance solutions, quality workmanship, and professional service to help keep your space safe and well maintained." />
</head>

<body>
    <?php include 'header.php' ?>

    <section class="other-pages" data-aos="fade-in" data-aos-duration="900">
        <?php 
            _otherPagesTitleContent([
                'title' => 'About',
                'highlight' => 'BowCare',
                'description' => 'At ' . $appName . ', we provide dependable and professional maintenance services designed to keep homes and properties safe, comfortable, and well maintained. With a commitment to quality workmanship and reliable service, we are here to care for every space.',
                'breadcrumbs' => [
                    [
                        'title' => 'Home',
                        'url' => $websiteUrl,
                        'last' => false
                    ],
                    [
                        'title' => 'About Us',
                        'url' => $websiteUrl . '/about',
                        'last' => true
                    ]
                ]
            ]);
        ?>
    </section>

    <section class="others-pg-content-div">
        <section class="body-div net-bg-br">
            <div class="body-div-in">
                <div class="team-wrapper">
                    <div class="team-container" data-aos="fade-in" data-aos-duration="1200">
                        <div class="image-div">
                            <img src="<?php echo $websiteUrl ?>/all-images/body-pix/about-us.png" alt="About <?php echo $appName ?>" />
                        </div>

                        <div class="content-div">
                            <div class="title-div">
                                <div class="inner-div">
                                    <span class="top-title">ABOUT US</span>
                                    <h2>Reliable Care For <span>Every Space</span></h2>
                                </div>
                            </div>

                            <div class="text-div">
                                <p>
                                    At <?php echo $appName ?>, we are committed to providing dependable and professional
                                    maintenance services that help keep homes and properties safe, comfortable,
                                    and well maintained. Our skilled team takes pride in delivering quality
                                    workmanship, reliable solutions, and exceptional service for every customer.
                                    Whether it is a repair, routine maintenance, or a larger project, you can
                                    count on <?php echo $appName ?> to get the job done right.
                                </p>

                                <div class="btn-div" id="aboutServiceBtn">
                                    <script>
                                    generalButtons({
                                        container: "aboutServiceBtn",
                                        buttons: [{
                                            id: "aboutServiceBtn",
                                            text: "Explore Our Services",
                                            icon: "bi bi-arrow-right-circle",
                                            iconPosition: "right",
                                            link: "<?php echo $websiteUrl ?>/services"
                                        }]
                                    });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bottom-stats" data-aos="fade-in" data-aos-duration="1200">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="bi bi-tools"></i>
                            </div>
                            <div class="content">
                                <h3>Quality Work</h3>
                                <p>Professional workmanship you can depend on</p>
                            </div>
                        </div>

                        <div class="stat-item no-mobile-border">
                            <div class="stat-icon">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <div class="content">
                                <h3>Trusted Service</h3>
                                <p>Reliable solutions delivered with care and professionalism</p>
                            </div>
                        </div>

                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="bi bi-clock-history"></i>
                            </div>
                            <div class="content">
                                <h3>Fast Response</h3>
                                <p>We are ready to help when your property needs us</p>
                            </div>
                        </div>

                        <div class="stat-item no-border">
                            <div class="stat-icon">
                                <i class="bi bi-house-heart-fill"></i>
                            </div>
                            <div class="content">
                                <h3>We Care</h3>
                                <p>Keeping your space safe and cared for</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="body-div net-bg-tr">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="about-details-back-div">
                        <div class="text-div" data-aos="fade-up" data-aos-duration="1200">
                            <div>
                                <div class="top-div">
                                    <h4>OUR VISION</h4>
                                    <div class="icon-div">
                                        <img src="<?php echo $websiteUrl ?>/all-images/images/vision.png"
                                            alt="Our Vision" />
                                    </div>
                                </div>
                            </div>

                            <p>
                                Our vision is to become a trusted leader in maintenance services, helping homes
                                and properties remain safe, comfortable, functional, and well cared for through
                                reliable service and quality workmanship.
                            </p>
                        </div>

                        <div class="text-div mission-text" data-aos="fade-up" data-aos-duration="1200">
                            <div>
                                <div class="top-div mission-top">
                                    <h4>OUR MISSION</h4>
                                    <div class="icon-div">
                                        <img src="<?php echo $websiteUrl ?>/all-images/images/mission.png"
                                            alt="Our Mission" />
                                    </div>
                                </div>
                            </div>

                            <p>
                                Our mission is to provide dependable and professional maintenance solutions
                                through skilled workmanship, responsive service, and a strong commitment to
                                quality, safety, and customer satisfaction.
                            </p>
                        </div>

                        <div class="text-div slogan-text" data-aos="fade-up" data-aos-duration="1200">
                            <div>
                                <div class="top-div slogan-top">
                                    <h4>WHY PEOPLE CHOOSE US</h4>
                                    <div class="icon-div">
                                        <img src="<?php echo $websiteUrl ?>/all-images/images/value.png"
                                            alt="Why Choose Us" />
                                    </div>
                                </div>
                            </div>

                            <p>
                                Customers choose BowCares for our reliability, quality workmanship, responsive
                                service, transparent communication, and commitment to getting every job done right.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php _howItWorksSection('net-bg-bl');?>

        <?php _customerReviewSection('net-bg-br');?>

        <?php include 'footer.php' ?>
    </section>
</body>

</html>