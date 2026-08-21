<?php include '../config/constants.php'; ?>
<?php include '../config/functions.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include '../meta.php' ?>
    <title><?php echo $appName ?> | Maintenance Blog - Tips, Guides & Property Care Insights</title>
    <meta name="keywords"
        content="<?php echo $appName ?> blog, BowCare Maintenance blog, maintenance tips, home maintenance guides, property maintenance, handyman tips, home repair advice, commercial maintenance, residential maintenance, seasonal maintenance checklist, facility maintenance, property care blog, maintenance insights" />
    <meta name="description"
        content="Explore expert maintenance tips, property care guides, repair advice, and industry insights from <?php echo $appName ?>. Learn how to keep your home and commercial property safe, functional, and well maintained." />
    <!-- Open Graph -->
    <meta property="og:title"
        content="<?php echo $appName ?> | Maintenance Blog - Tips, Guides & Property Care Insights" />
    <meta property="og:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/bowcares.jpg" />
    <meta property="og:description"
        content="Stay informed with expert articles, maintenance tips, repair guides, and practical property care advice from <?php echo $appName ?>." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo $websiteUrl; ?>/blog/" />
    <!-- Twitter -->
    <meta name="twitter:title"
        content="<?php echo $appName ?> | Maintenance Blog - Tips, Guides & Property Care Insights" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="<?php echo $websiteUrl ?>/all-images/plugin-pix/bowcares.jpg" />
    <meta name="twitter:description"
        content="Discover helpful maintenance tips, repair guides, and property care insights from <?php echo $appName ?> to keep your home or business in excellent condition." />
</head>

<body>
    <?php include '../header.php' ?>
    <section class="other-pages" data-aos="fade-in" data-aos-duration="900">
        <?php
            _otherPagesTitleContent([
                'title' => 'Latest',
                'highlight' => 'Insights & Articles',
                'description' => 'Stay informed with expert maintenance tips, practical property care guides, repair advice, and industry insights from ' . $appName . '. Explore helpful articles designed to keep your home and business safe, efficient, and well maintained.',
                'breadcrumbs' => [
                    [
                        'title' => 'Home',
                        'url' => $websiteUrl,
                        'last' => false
                    ],
                    [
                        'title' => 'Latest Insight & Article',
                        'url' => $websiteUrl . '/blog',
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
                                <input class="text_field" id="searchContent" onkeyup="_filtersBlog(this.value);"
                                    type="text" placeholder="" />
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
                        <div class="page-list-back-div" id="pageMainBlogPageContainer">
                            <a href="<?php echo $websiteUrl ?>/blog/why-regular-property-maintenance-matters"
                                title="Why Regular Property Maintenance Matters">
                                <div class="main-blog-div">
                                    <div class="top-text">MAINTENANCE</div>

                                    <div class="image-div">
                                        <img src="<?php echo $websiteUrl ?>/uploaded_files/blog/blog-1.jpeg"
                                            alt="Why Regular Property Maintenance Matters" />
                                    </div>

                                    <div class="text-content-div">
                                        <h2>Why Regular Property Maintenance Matters</h2>

                                        <div class="count">
                                            <i class="bi-calendar3"></i> July 8, 2026
                                            <span> | </span>
                                            <i class="bi-eye"></i> 2,485 VIEWS
                                        </div>

                                        <p>
                                            Regular maintenance helps identify potential problems early,
                                            protect your property, reduce unexpected repair costs.
                                        </p>

                                        <div>
                                            <button class="btn" title="Read More">
                                                Read More <i class="bi-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" title="5 Signs Your Property Needs Professional Maintenance">
                                <div class="main-blog-div">
                                    <div class="top-text">GENERAL</div>

                                    <div class="image-div">
                                        <img src="<?php echo $websiteUrl ?>/uploaded_files/blog/blog-2.jpeg"
                                            alt="5 Signs Your Property Needs Professional Maintenance" />
                                    </div>

                                    <div class="text-content-div">
                                        <h2>5 Signs Your Property Needs Professional Maintenance</h2>

                                        <div class="count">
                                            <i class="bi-calendar3"></i> July 8, 2026
                                            <span> | </span>
                                            <i class="bi-eye"></i> 2,485 VIEWS
                                        </div>

                                        <p>
                                            Strange noises, recurring problems, poor performance, and visible
                                            damage can be signs of a bigger issue.
                                        </p>

                                        <div>
                                            <button class="btn" title="Read More">
                                                Read More <i class="bi-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" title="The Importance of Professional Property Maintenance">
                                <div class="main-blog-div">
                                    <div class="top-text">ANNOUNCEMENT</div>

                                    <div class="image-div">
                                        <img src="<?php echo $websiteUrl ?>/uploaded_files/blog/blog-3.jpeg"
                                            alt="The Importance of Professional Property Maintenance" />
                                    </div>

                                    <div class="text-content-div">
                                        <h2>The Importance of Professional Property Maintenance</h2>

                                        <div class="count">
                                            <i class="bi-calendar3"></i> July 8, 2026
                                            <span> | </span>
                                            <i class="bi-eye"></i> 2,485 VIEWS
                                        </div>

                                        <p>
                                            Professional maintenance goes beyond fixing visible problems. With proper
                                            inspection, expert knowledge.
                                        </p>

                                        <div>
                                            <button class="btn" title="Read More">
                                                Read More <i class="bi-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="body-div">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="title-div" data-aos="fade-in" data-aos-duration="1200">
                        <div class="inner-div">
                            <span class="top-title">LATEST INSIGHTS</span>
                            <h2>Related News And <span>Articles</span></h2>
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

        <?php include '../footer.php' ?>
    </section>

</body>

</html>