<?php include 'config/constants.php'; ?>
<?php include 'config/functions.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'meta.php' ?>
    <title><?php echo $appName ?> | Frequently Asked Questions - Maintenance Services FAQ</title>
    <meta name="keywords"
        content="<?php echo $appName ?> FAQ, BowCares FAQ, maintenance services FAQ, property maintenance questions, home maintenance FAQ, commercial maintenance FAQ, industrial maintenance FAQ, residential maintenance FAQ, repair services FAQ, handyman questions, maintenance support, service inquiries" />
    <meta name="description"
        content="Find answers to frequently asked questions about <?php echo $appName ?>. Learn more about our maintenance services, service process, scheduling, pricing, and how we care for corporate, commercial, industrial, and residential properties." />
    <!-- Open Graph -->
    <meta property="og:title"
        content="<?php echo $appName ?> | Frequently Asked Questions - Maintenance Services FAQ" />
    <meta property="og:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/bowcares.jpg" />
    <meta property="og:description"
        content="Get answers to common questions about <?php echo $appName ?> maintenance services, scheduling, repairs, pricing, and our commitment to quality service." />
    <!-- Twitter -->
    <meta name="twitter:title"
        content="<?php echo $appName ?> | Frequently Asked Questions - Maintenance Services FAQ" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/bowcares.jpg" />
    <meta name="twitter:description"
        content="Browse our FAQs to learn more about <?php echo $appName ?> maintenance services, booking, repairs, pricing, and property care solutions." />
</head>

<body>
    <?php include 'header.php' ?>
    <section class="other-pages" data-aos="fade-in" data-aos-duration="900">
        <?php 
            _otherPagesTitleContent([
                'title' => 'Frequently Asked',
                'highlight' => 'Questions',
                'description' => 'Find answers to common questions about ' . $appName . ' maintenance services. Learn about our service process, scheduling, pricing, and how we provide reliable solutions for corporate, commercial, industrial, and residential properties.',
                'breadcrumbs' => [
                    [
                        'title' => 'Home',
                        'url' => $websiteUrl,
                        'last' => false
                    ],
                    [
                        'title' => 'Frequently Asked Questions',
                        'url' => $websiteUrl . '/faq',
                        'last' => true
                    ]
                ]
            ]);
        ?>
    </section>

    <section class="other-pages-main-section">
        <section class="body-div">
            <div class="body-div-in">
                <div class="page-back-div">
                    <div class="right-div sticky-div">
                        <div class="div-in">
                            <h3>SEARCH</h3>
                            <div class="text_field_container">
                                <input class="text_field" id="searchContent"
                                    onkeyup="_filtersPages(this.value, 'faqPageContent', 'faq-title');" type="text"
                                    placeholder="" />
                                <div class="placeholder">Type Here To Search</div>
                            </div>
                        </div>

                        <div class="div-in">
                            <h3>TAG LIST</h3>

                            <ul id="catId">
                                <li>MAINTENANCE</li>
                                <li>ANNOUNCEMENT</li>
                                <li>GENERAL</li>
                                <li>SERVICES</li>
                                <li>RESIDENTIAL SERVICES</li>
                            </ul>
                        </div>
                    </div>

                    <div class="left-div">
                        <div class="general-faq-div" id="faqPageContent">
                            <div class="faq-title" id="faq1">
                                <div class="inner-title-div" onclick="_collapse('faq1')">
                                    <h2>What maintenance services does BowCares provide?</h2>

                                    <div class="expand-div" id="faq1num">
                                        &nbsp;<i class="bi-plus"></i>&nbsp;
                                    </div>
                                </div>
                                <div class="faq-answer-div" id="faq1answer">
                                    <p>
                                        BowCares provides professional maintenance and repair services for homes,
                                        businesses, and properties. Our services include inspections, repairs,
                                        installations, preventive maintenance, and other property maintenance
                                        solutions tailored to your needs.
                                    </p>
                                </div>
                            </div>

                            <div class="faq-title" id="faq2">
                                <div class="inner-title-div" onclick="_collapse('faq2')">
                                    <h2>How do I schedule a maintenance appointment?</h2>

                                    <div class="expand-div" id="faq2num">
                                        &nbsp;<i class="bi-plus"></i>&nbsp;
                                    </div>
                                </div>
                                <div class="faq-answer-div" id="faq2answer" style="display: none;">
                                    <p>
                                        Getting started is simple. Contact BowCares with details about the
                                        maintenance service you need, and our team will help you schedule a
                                        convenient visitation appointment with a qualified technician.
                                    </p>
                                </div>
                            </div>

                            <div class="faq-title" id="faq3">
                                <div class="inner-title-div" onclick="_collapse('faq3')">
                                    <h2>What happens during a maintenance visit?</h2>

                                    <div class="expand-div" id="faq3num">
                                        &nbsp;<i class="bi-plus"></i>&nbsp;
                                    </div>
                                </div>
                                <div class="faq-answer-div" id="faq3answer" style="display: none;">
                                    <p>
                                        Our technician will inspect the issue, identify the required solution,
                                        explain the work involved, and carry out the service professionally.
                                        Once the job is completed, we ensure everything is working properly
                                        before completing the service.
                                    </p>
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