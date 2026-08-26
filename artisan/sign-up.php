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
                <div class="form-div">
                    <div class="top-div">
                        <h1>🚀 Start Your Artisan Journey</h1>
                        <p>Register today and grow your career with BowCare Maintenance Services.</p>
                    </div>

                    <div class="inner-form">
                        <div class="main-content-div artisan-main-content-div">
                            <div class="pages-tables-content-div form-main-content">
                                <div class="content-title">
                                    <div class="title">
                                        <i class="bi bi-person-fill-add"></i>
                                        <p>Create Account</p>
                                    </div>
                                </div>

                                <div class="form-container">
                                    <div class="text_field_container" id="firstName_container">
                                        <script>
                                        textField({
                                            id: 'firstName',
                                            title: 'First Name',
                                        });
                                        </script>
                                    </div>

                                    <div class="text_field_container" id="lastName_container">
                                        <script>
                                        textField({
                                            id: 'lastName',
                                            title: 'Last Name',
                                        });
                                        </script>
                                    </div>

                                    <div class="text_field_container" id="emailAddress_container">
                                        <script>
                                        textField({
                                            id: 'emailAddress',
                                            title: 'Email Address',
                                        });
                                        </script>
                                    </div>

                                    <div class="text_field_container" id="password_container">
                                        <script>
                                        textField({
                                            id: 'password',
                                            title: 'Create Password',
                                            type: 'password'
                                        });
                                        </script>
                                    </div>

                                    <div class="text_field_container" id="confirmPassword_container">
                                        <script>
                                        textField({
                                            id: 'confirmPassword',
                                            title: 'Confirm New Password',
                                            type: 'password'
                                        });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="main-content-div artisan-main-content-div">
                            <div class="pages-tables-content-div form-main-content">
                                <div class="content-title">
                                    <div class="title">
                                        <i class="bi bi-tools"></i>
                                        <p>Toggle Professions</p>
                                    </div>
                                </div>

                                <div class="form-container">
                                    <div class="permission-form-back-div">
                                        <div class="title-div">
                                            <p>Use the toggles below to enable or disable artisan professions. Switching
                                                to "Yes" makes
                                                the profession available for artisan registration and job assignments.
                                            </p>
                                        </div>

                                        <div class="permission-toggle-div">
                                            <div class="toggle-title">Available Professions</div>
                                            <div class="fetch-toggle" id="professionToggleContent">
                                                <script>_fetchProfessionToggle();</script>

                                                <div class="content-loading-div">
                                                    <img src="<?php echo $websiteUrl ?>/all-images/images/spinner.gif" alt="Loading" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="btn-div">
                            <button class="btn" id="" title="Sign Up"
                                onclick="window.location.href = artisanVerificationUrl;">Sign Up<i
                                    class="bi-check"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'bottom-scripts.php'?>
</body>

</html>