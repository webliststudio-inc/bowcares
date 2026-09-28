<?php include '../config/constants.php';?>
<?php include 'config/functions.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php include 'meta.php'?>
    <title><?php echo $appName?> | Artisan Sign Up</title>
    <meta name="keywords" content="Artisan Sign Up - <?php echo $appName?>" />
    <meta name="description" content="Artisan Sign Up - <?php echo $appName?>" />
</head>

<body>

    <?php include 'alert.php'?>
    <section class="login-session">
        <?php _leftArtisanSideSection(); ?>

        <div class="login-div">
            <header>
                <div class="header-div-in">
                    <a href="<?php echo $websiteUrl?>">
                        <div class="logo-div"><img src="<?php echo $websiteUrl?>/all-images/images/logo.png"
                                alt="<?php echo $appName?> logo" /></div>
                    </a>

                    <div class="form-btn-div">
                        <span class="text">
                            Already have an account?
                        </span>

                        <button title="Login" class="btn" onclick="window.location.href=artisanLoginUrl;">
                            Login
                        </button>
                    </div>
                </div>
            </header>

            <div class="form-back-div" data-aos="fade-in" data-aos-duration="1200">
                <div id="page-content">
                    <?php include $websitePath . '/artisan/config/page-content.php'; ?>
                </div>

                <script>
                    $(document).ready(function () {
                        let savedPage = sessionStorage.getItem("currentSignUpPage") ?? "artisanSignUpPage";

                        _getPage({
                            page: savedPage,
                            url: artisanMiddleWareUrl
                        });
                        savedPage === "signUpotpVerificationPage"
                        ? $(".form-back-div").addClass("center-content")
                        : $(".form-back-div").removeClass("center-content");
                    });
                </script>
            </div>
        </div>
    </section>

    <?php include 'bottom-scripts.php'?>
</body>

</html>