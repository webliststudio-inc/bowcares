<?php include 'config/constants.php'; ?>
<?php include 'config/functions.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'meta.php' ?>
    <title><?php echo $appName ?> | Customer Reviews & Testimonials</title>
    <meta name="keywords"
        content="<?php echo $appName ?> reviews, BowCares reviews, customer testimonials, maintenance service reviews, property maintenance reviews, home maintenance reviews, commercial maintenance reviews, industrial maintenance reviews, residential maintenance reviews, customer feedback, trusted maintenance company, service ratings" />
    <meta name="description"
        content="Read genuine customer reviews and testimonials about <?php echo $appName ?>. Discover why homeowners, businesses, and property managers trust us for reliable maintenance and repair services." />
    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo $appName ?> | Customer Reviews & Testimonials" />
    <meta property="og:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/bowcares.jpg" />
    <meta property="og:description"
        content="See what our customers have to say about <?php echo $appName ?>. Read real reviews highlighting our quality workmanship, dependable service, and commitment to customer satisfaction." />
    <!-- Twitter -->
    <meta name="twitter:title" content="<?php echo $appName ?> | Customer Reviews & Testimonials" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/bowcares.jpg" />
    <meta name="twitter:description"
        content="Browse customer reviews and testimonials to learn why <?php echo $appName ?> is a trusted choice for professional maintenance and repair services." />
</head>

<body>
    <?php include 'header.php' ?>
    <section class="other-pages" data-aos="fade-in" data-aos-duration="900">
        <?php 
            _otherPagesTitleContent([
                'title' => 'Testimonials And',
                'highlight' => 'Reviews',
                'description' => 'See what our customers have to say about ' . $appName . '. Read genuine testimonials and reviews from homeowners, businesses, and property managers who trust us for reliable maintenance services and quality workmanship.',
                'breadcrumbs' => [
                    [
                        'title' => 'Home',
                        'url' => $websiteUrl,
                        'last' => false
                    ],
                    [
                        'title' => 'Testimonials And Reviews',
                        'url' => $websiteUrl . '/reviews',
                        'last' => true
                    ]
                ]
            ]);
        ?>
    </section>

    <section class="other-pages-main-section">
        <section class="body-div">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="title-div" data-aos="fade-in" data-aos-duration="1200">
                        <div class="inner-div">
                            <span class="top-title">CUSTOMER REVIEWS</span>
                            <h2>What Our Client <span>Says</span></h2>
                        </div>
                    </div>

                    <div class="main-testimnial-wrapper" id="fetchPageReviewsContent">
                        <script>_fetchPageReviews();</script>

                        <div class="content-loading-div">
                            <img src="<?php echo $websiteUrl ?>/all-images/images/spinner.gif" alt="Loading" />
                        </div>  
                    </div>
                </div>
            </div>
        </section>

        <?php include 'footer.php' ?>
    </section>
</body>

</html>