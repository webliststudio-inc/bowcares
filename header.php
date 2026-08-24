<?php include 'alert.php' ?>
<header data-aos="fade-down" data-aos-duration="900">
    <div class="header-top">
        <div class="header-top-inner">
            <div class="logo-wrapper">
                <div class="logo-div">
                    <a href="<?php echo $websiteUrl ?>">
                        <img src="<?php echo $websiteUrl?>/all-images/images/logo.png" alt="<?php echo $appName?> Logo"
                            class="animated zoomIn" />
                    </a>
                </div>

                <div class="media-back-div">
                    <div class="each-media call-dsp-none">
                        <div class="icon-div">
                            <i class="bi-telephone-fill"></i>
                        </div>

                        <div class="text-div">
                            <h3>Call Us</h3>
                            <p>+1 (510) 479-1822</p>
                        </div>
                    </div>

                    <div class="mobile-media">
                        <div class="icon-div">
                            <i class="bi-telephone-fill"></i>
                        </div>

                        <div class="text-div">
                            <h3>Call</h3>
                        </div>
                    </div>

                    <div class="mobile-media">
                        <div class="icon-div">
                            <i class="bi bi-envelope-check-fill"></i>
                        </div>

                        <div class="text-div">
                            <h3>Email</h3>
                        </div>
                    </div>

                    <div class="each-media mail-display-none">
                        <div class="icon-div">
                            <i class="bi bi-envelope-check-fill"></i>
                        </div>

                        <div class="text-div">
                            <h3>Email Us</h3>
                            <a href="mailto:info@bowcares.com" title="Mail Us">
                                <p>info@bowcares.com</p>
                            </a>
                        </div>
                    </div>

                    <div class="each-media work-display-none">
                        <div class="icon-div">
                            <i class="bi bi-clock-fill"></i>
                        </div>

                        <div class="text-div">
                            <h3>Working Hours</h3>
                            <p>Mon - Sun 24/7 Service</p>
                        </div>
                    </div>

                    <div class="each-media display-none">
                        <div class="icon-div">
                            <i class="bi-people-fill"></i>
                        </div>

                        <div class="text-div">
                            <h3>Follow Us</h3>
                            <div class="other-icon-back-div">
                                <ul>
                                    <a href="https://www.youtube.com" target="_blank" title="YouTube">
                                        <li><i class="bi-youtube"></i></li>
                                    </a>
                                    <a href="https://www.facebook.com" target="_blank" title="Facebook">
                                        <li><i class="bi-facebook"></i></li>
                                    </a>
                                    <a href="mailto:info@bowcares.com" title="Mail Us">
                                        <li><i class="bi-envelope"></i></li>
                                    </a>
                                    <a href="https://www.instagram.com" target="_blank"
                                        title="Instagram">
                                        <li><i class="bi-instagram"></i></li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-btn-wrapper">
                <div class="btn-div" id="getStartedBtn">
                    <script>
                    generalButtons({
                        container: "getStartedBtn",
                        buttons: [{
                            id: "getStartedBtn",
                            text: "Get Started",
                            icon: "bi bi-calendar-check-fill",
                            link: "<?php echo $websiteUrl ?>/request-service"
                        }, ]
                    });
                    </script>
                </div>

                <button class="mobile-btn" onclick="_openMenu()"><i class="bi-text-right"></i></button>
            </div>
        </div>
    </div>

    <div class="header-bottom">
        <div class="header-bottom-inner">
            <nav>
                <ul>
                    <a href="<?php echo $websiteUrl ?>" title="Home Page">
                        <li <?php if (($websiteAutoUrl=="$websiteUrl/index")||($websiteAutoUrl=="$websiteUrl/")||($websiteAutoUrl=="$websiteUrl")) {?>
                            class="active" <?php }?>> Home</li>
                    </a>

                    <a href="<?php echo $websiteUrl?>/about" title="About Us">
                        <li class="<?php if (strstr($websiteAutoUrl, "$websiteUrl/about")) {?> active <?php }?>">
                            About Us
                        </li>
                    </a>

                    <li id="expand-li"
                        class="services <?php if (strstr($websiteAutoUrl, "$websiteUrl/services")) {?> active <?php }?>">
                        <a href="<?php echo $websiteUrl?>/services" title="Services">
                            <i class="bi-plus"></i> Services </a>
                        <ul class="animated fadeIn">
                            <div class="sub-nav-div">
                                <div class="left-div" id="headerServiceList">
                                    <script>
                                        _getPageList({
                                            pageCategory: "SERVICE",
                                            limit: 4,
                                            pageContainer: "headerServiceList"
                                        })
                                    </script>
                                </div>
                            </div>
                        </ul>
                    </li>

                    <a href="<?php echo $websiteUrl?>/our-work-model" title="Our Work Model">
                        <li
                            class="our-work-model-li <?php if (strstr($websiteAutoUrl, "$websiteUrl/our-work-model")) {?> active <?php }?>">
                            Our Work Model
                        </li>
                    </a>

                    <a href="<?php echo $websiteUrl?>/blog" title="Blog">
                        <li class="blog-li <?php if (strstr($websiteAutoUrl, "$websiteUrl/blog")) {?> active <?php }?>">
                            Blog
                        </li>
                    </a>

                    <a href="<?php echo $websiteUrl?>/gallery" title="Gallery">
                        <li
                            class="gallery-li <?php if (strstr($websiteAutoUrl, "$websiteUrl/gallery")) {?> active <?php }?>">
                            Gallery
                        </li>
                    </a>

                    <a href="<?php echo $websiteUrl?>/reviews" title="Reviews">
                        <li
                            class="reviews-li <?php if (strstr($websiteAutoUrl, "$websiteUrl/reviews")) {?> active <?php }?>">
                            Reviews
                        </li>
                    </a>

                    <a href="<?php echo $websiteUrl?>/contact-us" title="Contact Us">
                        <li class="contact-li <?php if (strstr($websiteAutoUrl, "$websiteUrl/contact-us")) {?> active <?php }?>">
                            Contact Us
                        </li>
                    </a>

                    <li class="mini-menu" id="expand-menu">
                        More <i class="bi-chevron-double-down"></i>
                        <div class="mini-nav-div animated animated">
                            <div class="li" id="li"><strong>MORE</strong></div>
                            <a href="<?php echo $websiteUrl?>/contact-us" title="Contact Us">
                            <div class="li">Contact Us</div></a>
                            <a href="<?php echo $websiteUrl?>/reviews" title="Reviews">
                            <div class="li">Reviews</div></a>
                            <a href="<?php echo $websiteUrl?>/gallery" title="Gallery">
                            <div class="li">Gallery</div></a>
                            <a href="<?php echo $websiteUrl?>/blog" title="Blog">
                            <div class="li">Blog</div></a>
                        </div>
                    </li>
                </ul>
            </nav>

            <div class="btn-div" id="joinOurTeamBtn">
                <script>
                    generalButtons({
                        container: "joinOurTeamBtn",
                        buttons: [{
                            id: "joinOurTeamBtn",
                            text: "Join Our Team",
                            icon: "bi bi-briefcase-fill",
                            variant: 'btn-secondary',
                            link: "<?php echo $websiteUrl ?>/artisan/sign-up"
                        }, ]
                    });
                </script>
            </div>
        </div>
    </div>
</header>