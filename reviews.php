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

                    <div class="main-testimnial-wrapper">
                        <div class="main-testimonial page-testimonial">
                            <div class="top-wrapper">
                                <div class="img-back-div">
                                    <div class="name-div"><h3>JS</h3></div>
                                    <div class="icon">
                                        <i class="bi-quote"></i>
                                    </div>
                                </div>

                                <div class="content">
                                    <div class="star-div">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                    </div>

                                    <h5>James S.</h5>
                                </div>
                            </div>

                            <p>BowCare exceeded our expectations with their maintenance service. The technician arrived
                                on time, worked efficiently, and left everything in excellent condition. We appreciated
                                the professionalism and attention to detail throughout the visit.</p>
                        </div>

                        <div class="main-testimonial page-testimonial">
                            <div class="top-wrapper">
                                <div class="img-back-div">
                                    <div class="name-div"><h3>ET</h3></div>
                                    <div class="icon">
                                        <i class="bi-quote"></i>
                                    </div>
                                </div>

                                <div class="content">
                                    <div class="star-div">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                    </div>

                                    <h5>Emma T.</h5>
                                </div>
                            </div>

                            <p>We needed urgent repairs, and BowCare responded quickly. The team was courteous,
                                knowledgeable, and completed the work to a very high standard. I would gladly recommend
                                their services to anyone needing dependable maintenance.</p>
                        </div>

                        <div class="main-testimonial page-testimonial">
                            <div class="top-wrapper">
                                <div class="img-back-div">
                                    <div class="name-div"><h3>DL</h3></div>
                                    <div class="icon">
                                        <i class="bi-quote"></i>
                                    </div>
                                </div>

                                <div class="content">
                                    <div class="star-div">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                    </div>

                                    <h5>Daniel L.</h5>
                                </div>
                            </div>

                            <p>The quality of service was outstanding from beginning to end. The technician explained
                                everything clearly, completed the repairs on schedule, and made sure the area was
                                spotless before leaving.</p>
                        </div>

                        <div class="main-testimonial page-testimonial">
                            <div class="top-wrapper">
                                <div class="img-back-div">
                                    <div class="name-div"><h3>SW</h3></div>
                                    <div class="icon">
                                        <i class="bi-quote"></i>
                                    </div>
                                </div>

                                <div class="content">
                                    <div class="star-div">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                    </div>

                                    <h5>Sophia W.</h5>
                                </div>
                            </div>

                            <p>BowCare made the whole process simple and stress-free. Booking was easy, communication
                                was excellent, and the maintenance work was completed with great care. I am extremely
                                happy with the results.</p>
                        </div>

                        <div class="main-testimonial page-testimonial">
                            <div class="top-wrapper">
                                <div class="img-back-div">
                                    <div class="name-div"><h3>RB</h3></div>
                                    <div class="icon">
                                        <i class="bi-quote"></i>
                                    </div>
                                </div>

                                <div class="content">
                                    <div class="star-div">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                    </div>

                                    <h5>Robert B.</h5>
                                </div>
                            </div>

                            <p>I have used BowCare several times, and every experience has been excellent. Their
                                technicians are friendly, skilled, and committed to delivering quality work. I can
                                always rely on their services.</p>
                        </div>

                        <div class="main-testimonial page-testimonial">
                            <div class="top-wrapper">
                                <div class="img-back-div">
                                    <div class="name-div"><h3>OC</h3></div>
                                    <div class="icon">
                                        <i class="bi-quote"></i>
                                    </div>
                                </div>

                                <div class="content">
                                    <div class="star-div">
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                    </div>

                                    <h5>Olivia C.</h5>
                                </div>
                            </div>

                            <p>From my first call to the completed service, everything was handled professionally. The
                                technician was punctual, respectful, and completed every task with precision. I will
                                definitely choose BowCare again.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'footer.php' ?>
    </section>
</body>

</html>