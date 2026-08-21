<?php include '../../config/constants.php'; ?>
<?php include '../../config/functions.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include '../../meta.php'?>
    <title><?php echo $pageTitle?> - <?php echo $appName?></title>
    <meta name="description" content="<?php echo $seoDescription?>" />
    <meta name="keywords" content="<?php echo $seoKeywords?>" />

    <meta property="og:title" content="<?php echo $appName?> - <?php echo $pageTitle?>" />
    <meta property="og:image" content="<?php echo $websiteUrl?>/uploaded_files/services/<?php echo $pageSeoPix?>" />
    <meta property="og:description" content="<?php echo $seoDescription?>" />

    <meta name="twitter:title" content="<?php echo $appName?> - <?php echo $pageTitle?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="<?php echo $websiteUrl?>/uploaded_files/services/<?php echo $pageSeoPix?>" />
    <meta name="twitter:description" content="<?php echo $seoDescription?>" />
</head>

<body>
    <?php include '../../header.php' ?>

    <section class="other-pages" data-aos="fade-in" data-aos-duration="900">
        <div class="other-pages-back-div">
            <div class="nav-title">
                <ul>
                    <a href="<?php echo $websiteUrl ?>">
                        <li title="Home">Home <i class="bi-caret-right-fill"></i></li>
                    </a>
                    <a href="<?php echo $websiteUrl ?>/services">
                        <li title="Services">Our Services <i class="bi-caret-right-fill"></i></li>
                    </a>
                    <li><?php echo $pageTitle?></li>
                </ul>
            </div>

            <div class="main-content-back-div">
                <div class="text-content-div" data-aos="fade-in" data-aos-duration="900">
                    <h1 data-aos="fade-in" data-aos-duration="800"><?php echo $pageTitle?></h1>
                    <p id="seoDescription"><?php echo $seoDescription?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="others-pg-content-div">
        <section class="body-div">
            <div class="body-div-in">
                <div class="page-back-div">
                    <div class="left-div">
                        <div class="main-picture-back-div">
                            <div class="main-picture-div">
                                <img id="seoFlyer"
                                    src="<?php echo $websiteUrl ?>/uploaded_files/services/service-3.jpeg"
                                    alt="<?php echo $pageTitle?>" />
                            </div>
                        </div>

                        <div class="main-pages-content-div" id="pageContent">
                            <h2>Reliable Home Maintenance You Can Count On</h2>
                            <p>
                                At <strong>BowCares</strong>, we help homeowners keep their properties safe,
                                comfortable, and well maintained. Whether you need a quick repair, routine
                                maintenance, or a complete home improvement project, our experienced team
                                delivers quality workmanship with attention to detail and dependable service.
                            </p>

                            <p>
                                We understand that every home is unique, which is why we provide tailored
                                maintenance solutions that meet your specific needs. From minor fixes to
                                ongoing property care, BowCares is committed to protecting your investment
                                and giving you peace of mind.
                            </p>

                            <h3>Our Residential Services Include:</h3>
                            <ul>
                                <li>✔ General Home Repairs & Handyman Services</li>
                                <li>✔ Plumbing Repairs & Installations</li>
                                <li>✔ Electrical Maintenance & Troubleshooting</li>
                                <li>✔ Interior & Exterior Painting</li>
                                <li>✔ Carpentry & Wood Repairs</li>
                                <li>✔ Drywall & Ceiling Repairs</li>
                                <li>✔ Home Cleaning & Property Maintenance</li>
                                <li>✔ Preventive Maintenance & Seasonal Inspections</li>
                            </ul>

                            <div>
                                <strong>Why Choose BowCares?</strong>
                                <p>
                                    We pride ourselves on reliable service, transparent communication,
                                    skilled professionals, and quality results. Our goal is to keep your
                                    home in excellent condition while making every service experience
                                    simple, efficient, and stress-free.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="right-div sticky-div">
                        <div class="div-in">
                            <h3>RELATED SERVICES</h3>
                            <div class="related-services-cont" id="relatedServicesCont">
                                <a href="<?php echo $websiteUrl ?>/services/residential">
                                    <div class="services-cont">
                                        <div class="icon">
                                            <i class="bi bi-check2-circle"></i>
                                        </div>
                                        <div class="content">
                                            <h4 title="Residential">Residential</h4>
                                        </div>
                                    </div>
                                </a>

                                <a href="<?php echo $websiteUrl ?>/services">
                                    <div class="services-cont">
                                        <div class="icon">
                                            <i class="bi bi-check2-circle"></i>
                                        </div>
                                        <div class="content">
                                            <h4 title="Industrial">Industrial</h4>
                                        </div>
                                    </div>
                                </a>

                                <a href="<?php echo $websiteUrl ?>/services">
                                    <div class="services-cont">
                                        <div class="icon">
                                            <i class="bi bi-check2-circle"></i>
                                        </div>
                                        <div class="content">
                                            <h4 title="Corporate">Corporate</h4>
                                        </div>
                                    </div>
                                </a>

                                <a href="<?php echo $websiteUrl ?>/services">
                                    <div class="services-cont">
                                        <div class="icon">
                                            <i class="bi bi-check2-circle"></i>
                                        </div>
                                        <div class="content">
                                            <h4 title="Commercial">Commercial</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="body-div">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="service-back-div">
                        <div class="cg-carousel">
                            <div class="cg-carousel__container" id="js-carousel_1">
                                <div class="cg-carousel__track js-carousel__track" id="fetchSiteReviews">
                                    <div class="cg-carousel__slide js-carousel__slide" data-aos="fade-left"
                                        data-aos-duration="1200">
                                        <div class="service-div page-service-div">
                                            <div class="image-div">
                                                <img src="<?php echo $websiteUrl?>/uploaded_files/gallery/Plumber-Repairing.jpeg"
                                                    alt="Plumbing" />
                                            </div>

                                            <div class="icon-div">
                                                <img src="<?php echo $websiteUrl?>/all-images/services/plumbing.png"
                                                    alt="Plumbing">
                                            </div>

                                            <div class="text-div">
                                                <h3>Plumbing</h3>
                                                <p>Professional plumbing repairs and services.</p>

                                                <div class="btn-div" id="serviceBtn1">
                                                    <script>
                                                    generalButtons({
                                                        container: "serviceBtn1",
                                                        buttons: [{
                                                            id: "serviceBtn1",
                                                            text: "Request Service Now",
                                                            icon: "bi bi-arrow-right-circle",
                                                            width: "btn-full",
                                                            iconPosition: "right",
                                                        }]
                                                    });
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cg-carousel__slide js-carousel__slide" data-aos="fade-left"
                                        data-aos-duration="1200">
                                        <div class="service-div page-service-div">
                                            <div class="image-div">
                                                <img src="<?php echo $websiteUrl?>/uploaded_files/gallery/Electrician-Installing.jpeg"
                                                    alt="Electrical" />
                                            </div>

                                            <div class="icon-div">
                                                <img src="<?php echo $websiteUrl?>/all-images/services/electrical.png"
                                                    alt="Electrical">
                                            </div>

                                            <div class="text-div">
                                                <h3>Electrical</h3>
                                                <p>Safe electrical installations, repairs, and maintenance solutions.</p>

                                                <div class="btn-div" id="serviceBtn2">
                                                    <script>
                                                    generalButtons({
                                                        container: "serviceBtn2",
                                                        buttons: [{
                                                            id: "serviceBtn2",
                                                            text: "Request Service Now",
                                                            icon: "bi bi-arrow-right-circle",
                                                            width: "btn-full",
                                                            iconPosition: "right"
                                                        }]
                                                    });
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cg-carousel__slide js-carousel__slide" data-aos="fade-left"
                                        data-aos-duration="1200">
                                        <div class="service-div page-service-div">
                                            <div class="image-div">
                                                <img src="<?php echo $websiteUrl?>/uploaded_files/gallery/Painter-Rolling.jpeg"
                                                    alt="Painting" />
                                            </div>

                                            <div class="icon-div">
                                                <img src="<?php echo $websiteUrl?>/all-images/services/painting.png"
                                                    alt="Painting">
                                            </div>

                                            <div class="text-div">
                                                <h3>Painting</h3>
                                                <p>Professional painting services that refresh and transform spaces.</p>

                                                <div class="btn-div" id="serviceBtn3">
                                                    <script>
                                                    generalButtons({
                                                        container: "serviceBtn3",
                                                        buttons: [{
                                                            id: "serviceBtn3",
                                                            text: "Request Service Now",
                                                            icon: "bi bi-arrow-right-circle",
                                                            width: "btn-full",
                                                            iconPosition: "right"
                                                        }]
                                                    });
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cg-carousel__slide js-carousel__slide" data-aos="fade-left"
                                        data-aos-duration="1200">
                                        <div class="service-div page-service-div">
                                            <div class="image-div">
                                                <img src="<?php echo $websiteUrl?>/uploaded_files/gallery/Bathroom-Remodel.jpeg"
                                                    alt="Remodeling" />
                                            </div>

                                            <div class="icon-div">
                                                <img src="<?php echo $websiteUrl?>/all-images/services/remodeling.png"
                                                    alt="Remodeling">
                                            </div>

                                            <div class="text-div">
                                                <h3>Remodeling</h3>
                                                <p>Quality remodeling services designed to improve your space.</p>

                                                <div class="btn-div" id="serviceBtn4">
                                                    <script>
                                                    generalButtons({
                                                        container: "serviceBtn4",
                                                        buttons: [{
                                                            id: "serviceBtn4",
                                                            text: "Request Service Now",
                                                            icon: "bi bi-arrow-right-circle",
                                                            width: "btn-full",
                                                            iconPosition: "right"
                                                        }]
                                                    });
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cg-carousel__slide js-carousel__slide" data-aos="fade-left"
                                        data-aos-duration="1200">
                                        <div class="service-div page-service-div">
                                            <div class="image-div">
                                                <img src="<?php echo $websiteUrl?>/uploaded_files/gallery/Bathroom-Remodel.jpeg"
                                                    alt="Remodeling" />
                                            </div>

                                            <div class="icon-div">
                                                <img src="<?php echo $websiteUrl?>/all-images/services/window.png" alt="Windows">
                                            </div>

                                            <div class="text-div">
                                                <h3>Windows</h3>
                                                <p>Quality window services designed to improve your space.</p>

                                                <div class="btn-div" id="windowBtn">
                                                    <script>
                                                    generalButtons({
                                                        container: "windowBtn",
                                                        buttons: [{
                                                            id: "serviceBtn4",
                                                            text: "Request Service Now",
                                                            icon: "bi bi-arrow-right-circle",
                                                            width: "btn-full",
                                                            iconPosition: "right"
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
                    </div>

                    <div class="slide-btn">
                        <button class="btn" title="Previous" id="js-carousel__prev_1"><i
                                class="bi-chevron-double-left"></i></button>
                        <button class="btn" title="Next" id="js-carousel__next_1"><i
                                class="bi-chevron-double-right"></i></button>
                    </div>
                </div>
            </div>

            <script>
            window['carousel_options_1'] = ({
                items: 4,
                margin: 30,
                loop: true,
                dots: true,
                autoplayHoverPause: true,
                smartSpeed: 650,
                autoplay: true,
                breakpoints: {
                    700: {
                        slidesPerView: 2,
                    },
                    1100: {
                        slidesPerView: 3,
                    },
                    1300: {
                        slidesPerView: 4,
                    }

                }
            });
            _call_carousel(1);
            </script>
        </section>

        <section class="body-div">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="title-div" data-aos="fade-in" data-aos-duration="1200">
                        <div class="inner-div">
                            <span class="top-title">FREQUENTLY ASKED QUESTIONS</span>
                            <h2>FAQs About <span>Residential</span></h2>
                        </div>
                    </div>

                    <div class="general-faq-div pages-faq-div" id="faqPageContent">
                        <div class="faq-title" id="faq1">
                            <div class="inner-title-div" onclick="_collapse('faq1')">
                                <h2>What residential maintenance services does BowCares offer?</h2>

                                <div class="expand-div" id="faq1num">
                                    &nbsp;<i class="bi-plus"></i>&nbsp;
                                </div>
                            </div>

                            <div class="faq-answer-div" id="faq1answer">
                                <p>
                                    BowCares provides a wide range of residential maintenance services, including
                                    plumbing,
                                    electrical repairs, carpentry, painting, fixture installations, general repairs, and
                                    routine home maintenance to keep your property safe, functional, and well
                                    maintained.
                                </p>
                            </div>
                        </div>

                        <div class="faq-title" id="faq2">
                            <div class="inner-title-div" onclick="_collapse('faq2')">
                                <h2>Can I schedule maintenance for a specific date and time?</h2>

                                <div class="expand-div" id="faq2num">
                                    &nbsp;<i class="bi-plus"></i>&nbsp;
                                </div>
                            </div>

                            <div class="faq-answer-div" id="faq2answer" style="display: none;">
                                <p>
                                    Yes. Simply contact our team with your preferred date and time, and we'll work with
                                    you to arrange a convenient appointment that fits your schedule.
                                </p>
                            </div>
                        </div>

                        <div class="faq-title" id="faq3">
                            <div class="inner-title-div" onclick="_collapse('faq3')">
                                <h2>Do I need to be home during the service visit?</h2>

                                <div class="expand-div" id="faq3num">
                                    &nbsp;<i class="bi-plus"></i>&nbsp;
                                </div>
                            </div>

                            <div class="faq-answer-div" id="faq3answer" style="display: none;">
                                <p>
                                    We recommend that a homeowner or authorized representative be available when our
                                    technician arrives to discuss the work, answer any questions, and confirm the
                                    completed
                                    service before we leave.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <?php include '../../footer.php' ?>
    </section>
</body>

</html>