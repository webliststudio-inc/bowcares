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
                                <script>
                                    _fetchCategoryList('BLOG', 'pageMainBlogPageContainer,allRelatedBlogPageContainer');
                                </script>
                                
                                <div class="content-loading-div">
                                    <img src="<?php echo $websiteUrl ?>/all-images/images/spinner.gif" alt="Loading" />
                                </div>
                            </ul>
                        </div>
                    </div>

                    <div class="left-div">
                        <div class="page-list-back-div" id="pageMainBlogPageContainer">
                            <script>
                                _getPageList({
                                    pageCategory: "BLOG",
                                    limit: 3,
                                    pageContainer: "pageMainBlogPageContainer"
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

        <section class="body-div">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="title-div" data-aos="fade-in" data-aos-duration="1200">
                        <div class="inner-div">
                            <span class="top-title">LATEST INSIGHTS</span>
                            <h2>Related News And <span>Articles</span></h2>
                        </div>
                    </div>

                    <div class="blog-back-div" id="allRelatedBlogPageContainer">
                        <script>
                            _getPageList({
                                pageCategory: "BLOG",
                                pageContainer: "allRelatedBlogPageContainer"
                            })
                        </script>   

                        <div class="content-loading-div">
                            <img src="<?php echo $websiteUrl ?>/all-images/images/spinner.gif" alt="Loading" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include '../footer.php' ?>
    </section>

</body>

</html>