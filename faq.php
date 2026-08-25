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
                                <script>
                                    _fetchCategoryList('FAQ', 'faqPageContent');
                                </script>

                                <div class="content-loading-div">
                                    <img src="<?php echo $websiteUrl ?>/all-images/images/spinner.gif" alt="Loading" />
                                </div>
                            </ul>
                        </div>
                    </div>

                    <div class="left-div">
                        <div class="general-faq-div" id="faqPageContent">
                            <script>
                                _getFaqList({
                                    pageContainer: "faqPageContent"
                                })
                            </script>

                            <div class="content-loading-div">
                                <img src="<?php echo $websiteUrl ?>/all-images/images/spinner.gif" alt="Loading" />
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