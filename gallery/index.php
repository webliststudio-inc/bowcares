<?php include '../config/constants.php'; ?>
<?php include '../config/functions.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html id="other-page-header" lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include '../meta.php' ?>
    <title><?php echo $appName ?> | Gallery - Our Maintenance Projects & Services</title>
    <meta name="description"
        content="Explore the <?php echo $appName ?> gallery showcasing our completed maintenance projects, repair services, property improvements, and professional workmanship across corporate, commercial, industrial, and residential properties." />
    <meta name="keywords"
        content="<?php echo $appName ?> gallery, BowCares gallery, maintenance projects, property maintenance gallery, residential maintenance, commercial maintenance, corporate maintenance, industrial maintenance, repair services, handyman services, property improvements, building maintenance, completed maintenance projects, professional maintenance company USA" />
    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo $appName ?> | Gallery - Our Maintenance Projects & Services" />
    <meta property="og:image" content="<?php echo $websiteUrl ?>//all-images/plugin-pix/bowcares.jpg" />
    <meta property="og:description"
        content="Browse the <?php echo $appName ?> gallery featuring completed maintenance projects, quality repairs, property improvements, and professional service across a wide range of properties." />
    <!-- Twitter -->
    <meta name="twitter:title" content="<?php echo $appName ?> | Gallery - Our Maintenance Projects & Services" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="<?php echo $websiteUrl ?>//all-images/plugin-pix/bowcares.jpg" />
    <meta name="twitter:description"
        content="Take a look at completed maintenance and repair projects from <?php echo $appName ?>. See our quality workmanship and reliable service for corporate, commercial, industrial, and residential properties." />
</head>

<body>
    <?php include '../header.php' ?>
    <section class="other-pages" data-aos="fade-in" data-aos-duration="900">
        <?php
            _otherPagesTitleContent([
                'title' => 'Our',
                'highlight' => 'Gallery',
                'description' => 'Browse our gallery to see completed maintenance projects, repair services, and property improvements that reflect the quality, professionalism, and dependable service ' . $appName . ' brings to every property.',
                'breadcrumbs' => [
                    [
                        'title' => 'Home',
                        'url' => $websiteUrl,
                        'last' => false
                    ],
                    [
                        'title' => 'Our Gallery',
                        'url' => $websiteUrl . '/gallery',
                        'last' => true
                    ]
                ]
            ]);
        ?>
    </section>

    <section class="others-pg-content-div">
        <section class="body-div net-bg-br">
            <div class="body-div-in">
                <div class="page-back-div">
                    <div class="gallery-btn-nav"  data-aos="fade-in" data-aos-duration="900">
                        <button class="btn active" title="All">All</button>
                        <button class="btn" title="Plumbing">Plumbing</button>
                        <button class="btn" title="Electrical">Electrical</button>
                        <button class="btn" title="Remodeling">Remodeling</button>
                        <button class="btn" title="Painting">Painting</button>
                        <button class="btn" title="Cleaning">Cleaning</button>
                        <button class="btn" title="Windows">Windows</button>
                    </div>

                    <div class="gallery-back-div" id="allGalleryContainer">
                        <script>
                            _getPageList({
                                pageCategory: "GALLERY",
                                pageContainer: "allGalleryContainer",
                            })
                        </script>

                        <div class="content-loading-div">
                            <img src="<?php echo $websiteUrl ?>/all-images/images/spinner.gif" alt="Loading" />
                        </div>
                        <!-- <div class="gallery-card" onclick="_getForm({page:'galleryDetails', url:siteMiddlewareUrl});">
                            <div class="title">Plumbing</div>
                            <div class="image-div">
                                <img src="<?php echo $websiteUrl?>/uploaded_files/gallery/Plumber-Repairing.jpeg"
                                    alt="Emergency Plumbing Repair" />
                            </div>
                            <div class="card-content">
                                <h3 class="card-title" title="Emergency Plumbing Repair">Emergency Plumbing Repair</h3>
                                <div class="gallery-meta">
                                    <div class="location"><i class="bi bi-calendar3"></i> <span>July 28, 2026</span>
                                    </div>
                                    <div class="location"><i class="bi bi-images"></i> <span>18</span></div>
                                </div>
                            </div>
                        </div>

                        <div class="gallery-card">
                            <div class="title">Electrical</div>
                            <div class="image-div">
                                <img src="<?php echo $websiteUrl?>/uploaded_files/gallery/Electrician-Installing.jpeg"
                                    alt="Electrical Panel Installation" />
                            </div>
                            <div class="card-content">
                                <h3 class="card-title" title="Electrical Panel Installation">Electrical Panel
                                    Installation</h3>
                                <div class="gallery-meta">
                                    <div class="location"><i class="bi bi-calendar3"></i> <span>July 29, 2026</span>
                                    </div>
                                    <div class="location"><i class="bi bi-images"></i> <span>22</span></div>
                                </div>
                            </div>
                        </div>

                        <div class="gallery-card">
                            <div class="title">HVAC</div>
                            <div class="image-div">
                                <img src="<?php echo $websiteUrl?>/uploaded_files/gallery/Technician-Servicing-Air-Conditiion.jpeg"
                                    alt="Air Conditioning Maintenance" />
                            </div>
                            <div class="card-content">
                                <h3 class="card-title" title="Air Conditioning Maintenance">Air Conditioning Maintenance
                                </h3>
                                <div class="gallery-meta">
                                    <div class="location"><i class="bi bi-calendar3"></i> <span>July 2, 2026</span>
                                    </div>
                                    <div class="location"><i class="bi bi-images"></i> <span>20</span></div>
                                </div>
                            </div>
                        </div>

                        <div class="gallery-card">
                            <div class="title">Remodeling</div>
                            <div class="image-div">
                                <img src="<?php echo $websiteUrl?>/uploaded_files/gallery/Kitchen-Renovation.jpeg"
                                    alt="Kitchen Renovation Project" />
                            </div>
                            <div class="card-content">
                                <h3 class="card-title" title="Kitchen Renovation Project">Kitchen Renovation Project
                                </h3>
                                <div class="gallery-meta">
                                    <div class="location"><i class="bi bi-calendar3"></i> <span>July 10, 2026</span>
                                    </div>
                                    <div class="location"><i class="bi bi-images"></i> <span>30</span></div>
                                </div>
                            </div>
                        </div>

                        <div class="gallery-card">
                            <div class="title">Remodeling</div>
                            <div class="image-div">
                                <img src="<?php echo $websiteUrl?>/uploaded_files/gallery/Bathroom-Remodel.jpeg"
                                    alt="Bathroom Renovation Project" />
                            </div>
                            <div class="card-content">
                                <h3 class="card-title" title="Bathroom Renovation Project">Bathroom Renovation Project
                                </h3>
                                <div class="gallery-meta">
                                    <div class="location"><i class="bi bi-calendar3"></i> <span>July 10, 2026</span>
                                    </div>
                                    <div class="location"><i class="bi bi-images"></i> <span>30</span></div>
                                </div>
                            </div>
                        </div>

                        <div class="gallery-card">
                            <div class="title">Painting</div>
                            <div class="image-div">
                                <img src="<?php echo $websiteUrl?>/uploaded_files/gallery/Painter-Rolling.jpeg"
                                    alt="Painting Service Project" />
                            </div>
                            <div class="card-content">
                                <h3 class="card-title" title="Painting Service Project">Painting Service Project
                                </h3>
                                <div class="gallery-meta">
                                    <div class="location"><i class="bi bi-calendar3"></i> <span>July 10, 2026</span>
                                    </div>
                                    <div class="location"><i class="bi bi-images"></i> <span>30</span></div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>

        <?php include '../footer.php' ?>
    </section>
</body>

</html>