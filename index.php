<?php include 'config/constants.php'; ?>
<?php include 'config/functions.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'meta.php' ?>
    <title><?php echo $appName ?> | Professional Property Maintenance & Facility Services in the USA</title>
    <meta name="keywords"
        content="<?php echo $appName ?>, BowCare Maintenance Services, property maintenance USA, facility maintenance, building maintenance services, commercial maintenance, residential maintenance, handyman services, janitorial services, cleaning services USA, office maintenance, home maintenance, property repairs, facility management, preventive maintenance, maintenance contractors, building care services, property management support, maintenance company USA, repair and maintenance services" />
    <meta name="description"
        content="BowCare Maintenance Services provides reliable property maintenance, facility management, cleaning, repair, and handyman services across the USA. We help residential and commercial properties stay safe, clean, functional, and professionally maintained." />
    <meta property="og:title"
        content="<?php echo $appName ?> | Professional Property Maintenance & Facility Services in the USA" />
    <meta property="og:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/bowcares.jpg" />
    <meta property="og:description"
        content="Trusted property maintenance company in the USA offering building maintenance, janitorial services, repairs, facility management, and preventive maintenance for residential and commercial properties." />
    <meta name="twitter:title"
        content="<?php echo $appName ?> | Professional Property Maintenance & Facility Services in the USA" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/bowcares.jpg" />
    <meta name="twitter:description"
        content="BowCare Maintenance Services delivers dependable property maintenance, facility care, cleaning, repair, and handyman solutions throughout the USA for homes, offices, and commercial buildings." />
</head>

<body>
    <?php include 'header.php' ?>

    <div class="slide-section">
        <div class="slide-div">
            <div class="overlay"></div>
            <div class="content-back-div">
                <div class="text-content-div animated fadeIn">
                    <h1>Premium Service Solutions for Home</h1>
                    <p>Property upkeep doesn't have to be overwhelming. Bowcares connects you with skilled professionals
                        who get the job done right. Reliable service you can trust, every time.</p>

                    <div class="btn-div slide-btn-div" id="slideBtn">
                        <script>
                        generalButtons({
                            container: "slideBtn",
                            buttons: [{
                                id: "slideBtn",
                                text: "Request For a Service",
                                size: "btn-lg",
                                icon: "bi bi-calendar-check-fill",
                            }, {
                                id: "ff",
                                text: "Join Our Team",
                                icon: "bi bi-briefcase-fill",
                                size: "btn-lg",
                                variant: 'btn-outline'
                            }]
                        });
                        </script>
                    </div>
                </div>

                <div class="form-back-div">
                    <div class="main-content-div dash-main-content-div">
                        <div class="tables-content-div">
                            <div class="content-title">
                                <div class="title">
                                    <i class="bi-telephone-fill"></i>
                                    <p>Request For a Call</p>
                                </div>
                            </div>

                            <div class="inner-table-content">
                                <div id="page-content">
                                    <?php $page='customreInfoPage';?>
                                    <?php include $websitePath . '/config/content-page.php'; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <script>
            $(document).ready(function () {
                let savedPage = sessionStorage.getItem("currentContactPage") ?? "customreInfoPage";
                _getPage({
                    page: savedPage,
                    url: siteMiddlewareUrl
                });
            });
        </script> -->
    </div>

    <section class="index-content-div">
        <section class="service-slide-body-div">
            <div class="service-slide-body-div-in">
                <div class="service-slider">
                    <div class="each-services">
                        <div class="img-div">
                            <img src="<?php echo $websiteUrl?>/all-images/services/landscaping.png" alt="Landscaping">
                        </div>

                        <div class="text-div">
                            <h4>Landscaping</h4>
                        </div>
                    </div>

                    <div class="each-services">
                        <div class="img-div">
                            <img src="<?php echo $websiteUrl?>/all-images/services/plumbing.png" alt="Plumbing">
                        </div>

                        <div class="text-div">
                            <h4>Plumbing</h4>
                        </div>
                    </div>

                    <div class="each-services">
                        <div class="img-div">
                            <img src="<?php echo $websiteUrl?>/all-images/services/electrical.png" alt="Electrical">
                        </div>

                        <div class="text-div">
                            <h4>Electrical</h4>
                        </div>
                    </div>

                    <div class="each-services">
                        <div class="img-div">
                            <img src="<?php echo $websiteUrl?>/all-images/services/remodeling.png" alt="Remodeling">
                        </div>

                        <div class="text-div">
                            <h4>Remodeling</h4>
                        </div>
                    </div>

                    <div class="each-services">
                        <div class="img-div">
                            <img src="<?php echo $websiteUrl?>/all-images/services/roofing.png" alt="Roofing">
                        </div>

                        <div class="text-div">
                            <h4>Roofing</h4>
                        </div>
                    </div>

                    <div class="each-services">
                        <div class="img-div">
                            <img src="<?php echo $websiteUrl?>/all-images/services/painting.png" alt="Painting">
                        </div>

                        <div class="text-div">
                            <h4>Painting</h4>
                        </div>
                    </div>

                    <div class="each-services">
                        <div class="img-div">
                            <img src="<?php echo $websiteUrl?>/all-images/services/cleaning.png" alt="Cleaning">
                        </div>

                        <div class="text-div">
                            <h4>Cleaning</h4>
                        </div>
                    </div>

                    <div class="each-services">
                        <div class="img-div">
                            <img src="<?php echo $websiteUrl?>/all-images/services/window.png" alt="Windows">
                        </div>

                        <div class="text-div">
                            <h4>Windows</h4>
                        </div>
                    </div>

                    <div class="each-services">
                        <div class="img-div">
                            <img src="<?php echo $websiteUrl?>/all-images/services/concrete.png" alt="Concrete">
                        </div>

                        <div class="text-div">
                            <h4>Concrete</h4>
                        </div>
                    </div>
                </div>
            </div>
            <script>
            $('.service-slider').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 0,
                speed: 3000,
                infinite: true,
                cssEase: 'linear',
                arrows: false,
                pauseOnHover: false,
                pauseOnFocus: false,
                variableWidth: true
            });
            </script>
        </section>

        <section class="body-div net-bg-br">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="title-div" data-aos="fade-in" data-aos-duration="1200">
                        <div class="inner-div">
                            <span class="top-title">WHAT WE DO</span>
                            <h2>Multi-Disciplined Engineering <span>Services</span></h2>
                        </div>

                        <div class="btn-div" id="serviceButton">
                            <script>
                            generalButtons({
                                container: "serviceButton",
                                buttons: [{
                                    id: "btnStart",
                                    text: "Explore All Services",
                                    icon: "bi bi-arrow-right-circle",
                                    iconPosition: "right",
                                    link: "<?php echo $websiteUrl ?>/services"
                                }, ]
                            });
                            </script>
                        </div>
                    </div>

                    <div class="service-back-div">
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

                                    <div class="btn-div" id="serviceBtn">
                                        <script>
                                        generalButtons({
                                            container: "serviceBtn",
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

                                    <div class="btn-div" id="serviceBtn2">
                                        <script>
                                        generalButtons({
                                            container: "serviceBtn2",
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
                                    alt="Residential" />
                            </div>

                            <div class="icon-div">
                                <img src="<?php echo $websiteUrl ?>/all-images/images/icon.png"
                                    alt="<?php echo $appName ?> Icon" />
                            </div>

                            <a href="<?php echo $websiteUrl?>">
                                <div class="text-div">
                                    <h3>Residential</h3>
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
                                                iconPosition: "right"
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

        <?php _howItWorksSection('net-bg-tr');?>

        <section class="body-div net-bg-bl">
            <div class="body-div-in">
                <div class="team-wrapper">
                    <div class="team-container" data-aos="fade-in" data-aos-duration="1200">
                        <div class="image-div">
                            <img src="<?php echo $websiteUrl ?>/all-images/body-pix/join-our-team.png" alt="About Us" />
                        </div>

                        <div class="content-div">
                            <div class="title-div">
                                <div class="inner-div">
                                    <span class="top-title">JOIN OUR TEAM</span>
                                    <h2>Build Your Career With <span>BowCare</span></h2>
                                </div>
                            </div>

                            <div class="text-div">
                                <p>At BowCares, we believe great service starts with great people. We are always looking
                                    for skilled, passionate, and dependable individuals who are ready to grow, make a
                                    difference, and deliver quality maintenance solutions to our customers. Join our
                                    team and be part of a company that values hard work, professionalism, and
                                    excellence.</p>


                                <div class="btn-div" id="indexJoinOurTeamBtn">
                                    <script>
                                    generalButtons({
                                        container: "indexJoinOurTeamBtn",
                                        buttons: [{
                                            id: "btnStart",
                                            text: "Join Our Team",
                                            icon: "bi bi-arrow-right-circle",
                                            iconPosition: "right"
                                        }, ]
                                    });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bottom-stats" data-aos="fade-in" data-aos-duration="1200">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <div class="content">
                                <h3>Great Team</h3>
                                <p>Work with friendly, supportive professionals</p>
                            </div>
                        </div>

                        <div class="stat-item no-mobile-border">
                            <div class="stat-icon">
                                <i class="bi bi-shield-fill-check"></i>
                            </div>
                            <div class="content">
                                <h3>Meaningful Work</h3>
                                <p>Make a real impact every day in our communities</p>
                            </div>
                        </div>

                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="bi bi-graph-up-arrow"></i>
                            </div>
                            <div class="content">
                                <h3>Grow With Us</h3>
                                <p>Opportunities for learning, growth and advancement</p>
                            </div>
                        </div>

                        <div class="stat-item no-border">
                            <div class="stat-icon">
                                <i class="bi bi-heart-fill"></i>
                            </div>
                            <div class="content">
                                <h3>We Care</h3>
                                <p>A company culture built on respect, safety and support</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="body-div net-bg-tl">
            <div class="body-div-in">
                <div class="faq-wrapper" data-aos="fade-in" data-aos-duration="1200">
                    <div class="faq-content-div" data-aos="fade-up" data-aos-duration="1200">
                        <div class="title-div">
                            <div class="inner-div">
                                <span class="top-title">FAQ</span>
                                <h2>Frequently Asked <span>Questions</span></h2>
                            </div>
                        </div>

                        <div class="faq-toggle-back" id="indexFaqPageContent">
                            <div class="faq-toggle" id="faq1">
                                <div class="title-text" onclick="_collapse('faq1')">
                                    <div class="quest-text-div">
                                        <div class="icon-div">
                                            <i class="bi bi-question"></i>
                                        </div>
                                        <h3>What maintenance services does BowCares provide?</h3>
                                    </div>

                                    <div class="expand-div" id="faq1num">
                                        <i class="bi bi-plus"></i>
                                    </div>
                                </div>

                                <div class="answer-div" id="faq1answer">
                                    <p>
                                        BowCares provides professional maintenance and repair services for homes,
                                        businesses, and properties. Our services include inspections, repairs,
                                        installations, preventive maintenance, and other property maintenance
                                        solutions tailored to your needs.
                                    </p>
                                </div>
                            </div>

                            <div class="faq-toggle" id="faq2">
                                <div class="title-text" onclick="_collapse('faq2')">
                                    <div class="quest-text-div">
                                        <div class="icon-div">
                                            <i class="bi bi-question"></i>
                                        </div>
                                        <h3>How do I schedule a maintenance appointment?</h3>
                                    </div>

                                    <div class="expand-div" id="faq2num">
                                        <i class="bi bi-plus"></i>
                                    </div>
                                </div>

                                <div class="answer-div" id="faq2answer" style="display: none;">
                                    <p>
                                        Getting started is simple. Contact BowCares with details about the
                                        maintenance service you need, and our team will help you schedule a
                                        convenient visitation appointment with a qualified technician.
                                    </p>
                                </div>
                            </div>

                            <div class="faq-toggle" id="faq3">
                                <div class="title-text" onclick="_collapse('faq3')">
                                    <div class="quest-text-div">
                                        <div class="icon-div">
                                            <i class="bi bi-question"></i>
                                        </div>
                                        <h3>What happens during a maintenance visit?</h3>
                                    </div>

                                    <div class="expand-div" id="faq3num">
                                        <i class="bi bi-plus"></i>
                                    </div>
                                </div>

                                <div class="answer-div" id="faq3answer" style="display: none;">
                                    <p>
                                        Our technician will inspect the issue, identify the required solution,
                                        explain the work involved, and carry out the service professionally.
                                        Once the job is completed, we ensure everything is working properly
                                        before completing the service.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="btn-div" id="faqBtn">
                            <script>
                            generalButtons({
                                container: "faqBtn",
                                buttons: [{
                                    id: "faqBtn",
                                    text: "Read More FAQ",
                                    icon: "bi bi-arrow-right-circle",
                                    iconPosition: "right"
                                }, ]
                            });
                            </script>
                        </div>
                    </div>

                    <div class="image-div">
                        <img src="<?php echo $websiteUrl ?>/all-images/body-pix/faq.jpeg"
                            alt="Frequently Asked Questions" />
                    </div>
                </div>
            </div>
        </section>

        <?php _customerReviewSection('net-bg-br');?>

        <section class="body-div net-bg-tr">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="title-div" data-aos="fade-in" data-aos-duration="1200">
                        <div class="inner-div">
                            <span class="top-title">LATEST INSIGHTS</span>
                            <h2>Our Latest News And <span>Articles</span></h2>
                        </div>

                        <div class="btn-div" id="indexBlogBtn">
                            <script>
                            generalButtons({
                                container: "indexBlogBtn",
                                buttons: [{
                                    id: "indexBlogBtn",
                                    text: "Explore All Blogs",
                                    icon: "bi bi-arrow-right-circle",
                                    iconPosition: "right",
                                    link: "<?php echo $websiteUrl ?>/blog"
                                }, ]
                            });
                            </script>
                        </div>
                    </div>

                    <div class="blog-back-div" id="indexBlogPageContainer">
                        <div class="blog-div">
                            <div class="blog-inner-div">
                                <div class="title">MAINTENANCE</div>
                                <div class="image-div">
                                    <img src="<?php echo $websiteUrl ?>/uploaded_files/blog/blog-1.jpeg"
                                        alt="Why Regular Property Maintenance Matters" />
                                </div>

                                <div class="text-div">

                                    <div class="count">
                                        <i class="bi bi-calendar3"></i> June 18, 2026
                                        <span>|</span>
                                        <i class="bi bi-eye-fill"></i> 1,100 VIEWS
                                    </div>

                                    <h3>Why Regular Property Maintenance Matters</h3>

                                    <p>
                                        Regular maintenance helps identify potential problems early,
                                        protect your property, reduce unexpected repair costs...
                                    </p>

                                    <div class="btn-div" id="blogBtn1">
                                        <script>
                                        generalButtons({
                                            container: "blogBtn1",
                                            buttons: [{
                                                id: "blogBtn1",
                                                text: "Read More",
                                                icon: "bi bi-arrow-right-circle",
                                                iconPosition: "right",
                                                link: "<?php echo $websiteUrl ?>/blog/why-regular-property-maintenance-matters"
                                            }]
                                        });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="blog-div">
                            <div class="blog-inner-div">
                                <div class="title">GENERAL</div>
                                <div class="image-div">
                                    <img src="<?php echo $websiteUrl ?>/uploaded_files/blog/blog-2.jpeg"
                                        alt="5 Signs Your Property Needs Professional Maintenance" />
                                </div>

                                <div class="text-div">
                                    <div class="count">
                                        <i class="bi bi-calendar3"></i> June 12, 2026
                                        <span>|</span>
                                        <i class="bi bi-eye-fill"></i> 980 VIEWS
                                    </div>

                                    <h3>5 Signs Your Property Needs Professional Maintenance</h3>

                                    <p>
                                        Strange noises, recurring problems, poor performance, and visible
                                        damage can be signs of a bigger issue...
                                    </p>

                                    <div class="btn-div" id="blogBtn2">
                                        <script>
                                        generalButtons({
                                            container: "blogBtn2",
                                            buttons: [{
                                                id: "blogBtn2",
                                                text: "Read More",
                                                icon: "bi bi-arrow-right-circle",
                                                iconPosition: "right",
                                            }]
                                        });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="blog-div">
                            <div class="blog-inner-div">
                                <div class="title">ANNOUNCEMENT</div>
                                <div class="image-div">
                                    <img src="<?php echo $websiteUrl ?>/uploaded_files/blog/blog-3.jpeg"
                                        alt="The Importance of Professional Property Maintenance" />
                                </div>

                                <div class="text-div">
                                    <div class="count">
                                        <i class="bi bi-calendar3"></i> June 5, 2026
                                        <span>|</span>
                                        <i class="bi bi-eye-fill"></i> 1,450 VIEWS
                                    </div>

                                    <h3>The Importance of Professional Property Maintenance</h3>

                                    <p>
                                        Professional maintenance goes beyond fixing visible problems. With proper
                                        inspection, expert knowledge...
                                    </p>

                                    <div class="btn-div" id="blogBtn3">
                                        <script>
                                        generalButtons({
                                            container: "blogBtn3",
                                            buttons: [{
                                                id: "blogBtn3",
                                                text: "Read More",
                                                icon: "bi bi-arrow-right-circle",
                                                iconPosition: "right",
                                            }]
                                        });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'footer.php'?>
    </section>
</body>

</html>