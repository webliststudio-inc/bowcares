<?php include '../config/constants.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'meta.php' ?>
    <title><?php echo $appName ?> | Artisian Portal</title>
</head>

<body>
    <?php include 'alert.php' ?>
    <div class="mobile-header">
        <div class="inner-div">
            <a href="<?php echo $websiteUrl ?>/training">
                <div class="logo">
                    <img src="<?php echo $websiteUrl ?>/all-images/images/logo.png" alt="Logo">
                </div>
            </a>

            <div class="mobile-btn-div">
                <span class="top-text">
                    New Here?
                </span>

                <button class="btn" title="Create an Account" onclick="window.location.href=artisanSignUpUrl;">
                    Create an Account
                </button>
            </div>
        </div>
    </div>

    <div class="login-page">
        <div class="login-page-wrapper">
            <div class="login-page-left">
                <div class="login-page-left-overlay">
                    <div class="logo-div">
                        <a href="<?php echo $websiteUrl ?>">
                            <img src="<?php echo $websiteUrl ?>/all-images/images/logo.png"
                                alt="<?php echo $appName ?> Logo">
                        </a>
                    </div>

                    <div class="login-content">
                        <h1>
                            Welcome Back,<br>
                            <span>Artisan!</span>
                        </h1>

                        <p class="login-text">
                            Sign in to access your dashboard, manage jobs,
                            receive payments, and grow your business with BowCare.
                        </p>

                        <div class="features-wrapper">
                            <div class="features-div">
                                <div class="icon-div">
                                    <i class="bi bi-briefcase-fill"></i>
                                </div>

                                <div class="content-div">
                                    <h4>Find More Jobs</h4>
                                    <p>
                                        Get matched with verified customers
                                        looking for skilled professionals.
                                    </p>
                                </div>
                            </div>

                            <div class="features-div">
                                <div class="icon-div">
                                    <i class="bi bi-calendar-check-fill"></i>
                                </div>

                                <div class="content-div">
                                    <h4>Manage Your Schedule</h4>
                                    <p>
                                        View, accept and manage jobs
                                        on your own time.
                                    </p>
                                </div>
                            </div>

                            <div class="features-div">
                                <div class="icon-div">
                                    <i class="bi bi-credit-card-fill"></i>
                                </div>

                                <div class="content-div">
                                    <h4>Secure Payments</h4>
                                    <p>
                                        Get paid securely and on time
                                        for every completed job.
                                    </p>
                                </div>
                            </div>

                            <div class="features-div">
                                <div class="icon-div">
                                    <i class="bi bi-star-fill"></i>
                                </div>

                                <div class="content-div">
                                    <h4>Build Your Reputation</h4>
                                    <p>
                                        Earn reviews and grow your profile
                                        to attract more customers.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="login-page-right">
                <div class="form-section">
                    <div class="form-btn-div">
                        <span class="text">
                            New to BowCare?
                        </span>

                        <button title="Create an Account" class="btn" onclick="window.location.href=artisanSignUpUrl;">
                            Create an Account
                        </button>
                    </div>

                    <div class="form-wrapper">
                        <div id="page-content" data-aos="fade-in" data-aos-duration="1200">
                            <?php include $websitePath . '/artisan/config/content-page.php'; ?>
                        </div>

                        <script>
                            $(document).ready(function () {
                                let savedPage = sessionStorage.getItem("currentAuthPage") ?? "loginPage";

                                _getPage({
                                    page: savedPage,
                                    url: artisanMiddleWareUrl
                                });
                            });
                        </script>

                        <div class="mobile-features-wrapper">
                            <div class="mobile-features-div">
                                <div class="icon-div">
                                    <i class="bi bi-briefcase-fill"></i>
                                </div>

                                <div class="content-div">
                                    <h4>Find More Jobs</h4>
                                    <p>
                                        Get matched with verified customers.
                                    </p>
                                </div>
                            </div>

                            <div class="mobile-features-div">
                                <div class="icon-div">
                                    <i class="bi bi-calendar-check-fill"></i>
                                </div>

                                <div class="content-div">
                                    <h4>Manage Your Schedule</h4>
                                    <p>
                                        View, accept and manage jobs
                                        on your own time.
                                    </p>
                                </div>
                            </div>

                            <div class="mobile-features-div">
                                <div class="icon-div">
                                    <i class="bi bi-credit-card-fill"></i>
                                </div>

                                <div class="content-div">
                                    <h4>Secure Payments</h4>
                                    <p>
                                        Get paid securely and on time.
                                    </p>
                                </div>
                            </div>

                            <div class="mobile-features-div">
                                <div class="icon-div">
                                    <i class="bi bi-star-fill"></i>
                                </div>

                                <div class="content-div">
                                    <h4>Build Your Reputation</h4>
                                    <p>
                                        Earn reviews and grow your profile
                                        bussiness.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="support-card">
                            <div class="support-icon">
                                <i class="bi bi-headset"></i>
                            </div>

                            <div class="support-content">
                                <h4>Need Help?</h4>
                                <p>
                                    Our support team is here to help you.
                                </p>

                                <div class="support-links">
                                    <a href="tel:5104791822">
                                        <i class="bi bi-telephone"></i>
                                        (510) 479-1822
                                    </a>
                                    <a href="mailto:support@bowcares.com">
                                        <i class="bi bi-envelope"></i>
                                        support@bowcares.com
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'bottom-scripts.php' ?>
</body>

</html>