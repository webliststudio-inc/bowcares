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
                                            <div class="fetch-toggle" id="professionToggle">
                                                <div class="each-toggle-div">
                                                    <span>Carpentry</span>
                                                    <label for="profession_1" class="switch">
                                                        <input type="checkbox" class="child profession-checkbox"
                                                            id="profession_1" name="professionId[]" data-value="1">
                                                        <span class="slider"></span>
                                                        <span class="toggle-label">No</span>
                                                    </label>
                                                </div>

                                                <div class="each-toggle-div">
                                                    <span>Plumbing</span>
                                                    <label for="profession_2" class="switch">
                                                        <input type="checkbox" class="child profession-checkbox"
                                                            id="profession_2" name="professionId[]" data-value="2">
                                                        <span class="slider"></span>
                                                        <span class="toggle-label">No</span>
                                                    </label>
                                                </div>

                                                <div class="each-toggle-div">
                                                    <span>Electrical</span>
                                                    <label for="profession_3" class="switch">
                                                        <input type="checkbox" class="child profession-checkbox"
                                                            id="profession_3" name="professionId[]" data-value="3">
                                                        <span class="slider"></span>
                                                        <span class="toggle-label">No</span>
                                                    </label>
                                                </div>

                                                <div class="each-toggle-div">
                                                    <span>HVAC Technician</span>
                                                    <label for="profession_4" class="switch">
                                                        <input type="checkbox" class="child profession-checkbox"
                                                            id="profession_4" name="professionId[]" data-value="4">
                                                        <span class="slider"></span>
                                                        <span class="toggle-label">No</span>
                                                    </label>
                                                </div>

                                                <div class="each-toggle-div">
                                                    <span>Painting</span>
                                                    <label for="profession_5" class="switch">
                                                        <input type="checkbox" class="child profession-checkbox"
                                                            id="profession_5" name="professionId[]" data-value="5">
                                                        <span class="slider"></span>
                                                        <span class="toggle-label">No</span>
                                                    </label>
                                                </div>

                                                <div class="each-toggle-div">
                                                    <span>Roofing</span>
                                                    <label for="profession_6" class="switch">
                                                        <input type="checkbox" class="child profession-checkbox"
                                                            id="profession_6" name="professionId[]" data-value="6">
                                                        <span class="slider"></span>
                                                        <span class="toggle-label">No</span>
                                                    </label>
                                                </div>

                                                <div class="each-toggle-div">
                                                    <span>Welding</span>
                                                    <label for="profession_7" class="switch">
                                                        <input type="checkbox" class="child profession-checkbox"
                                                            id="profession_7" name="professionId[]" data-value="7">
                                                        <span class="slider"></span>
                                                        <span class="toggle-label">No</span>
                                                    </label>
                                                </div>

                                                <div class="each-toggle-div">
                                                    <span>Masonry</span>
                                                    <label for="profession_8" class="switch">
                                                        <input type="checkbox" class="child profession-checkbox"
                                                            id="profession_8" name="professionId[]" data-value="8">
                                                        <span class="slider"></span>
                                                        <span class="toggle-label">No</span>
                                                    </label>
                                                </div>

                                                <div class="each-toggle-div">
                                                    <span>Flooring Installation</span>
                                                    <label for="profession_9" class="switch">
                                                        <input type="checkbox" class="child profession-checkbox"
                                                            id="profession_9" name="professionId[]" data-value="9">
                                                        <span class="slider"></span>
                                                        <span class="toggle-label">No</span>
                                                    </label>
                                                </div>

                                                <div class="each-toggle-div">
                                                    <span>Appliance Repair</span>
                                                    <label for="profession_10" class="switch">
                                                        <input type="checkbox" class="child profession-checkbox"
                                                            id="profession_10" name="professionId[]" data-value="10">
                                                        <span class="slider"></span>
                                                        <span class="toggle-label">No</span>
                                                    </label>
                                                </div>

                                                <div class="each-toggle-div">
                                                    <span>Handyman Services</span>
                                                    <label for="profession_11" class="switch">
                                                        <input type="checkbox" class="child profession-checkbox"
                                                            id="profession_11" name="professionId[]" data-value="11">
                                                        <span class="slider"></span>
                                                        <span class="toggle-label">No</span>
                                                    </label>
                                                </div>

                                                <div class="each-toggle-div">
                                                    <span>Landscaping</span>
                                                    <label for="profession_12" class="switch">
                                                        <input type="checkbox" class="child profession-checkbox"
                                                            id="profession_12" name="professionId[]" data-value="12">
                                                        <span class="slider"></span>
                                                        <span class="toggle-label">No</span>
                                                    </label>
                                                </div>

                                                <div class="each-toggle-div">
                                                    <span>Drywall Installation</span>
                                                    <label for="profession_13" class="switch">
                                                        <input type="checkbox" class="child profession-checkbox"
                                                            id="profession_13" name="professionId[]" data-value="13">
                                                        <span class="slider"></span>
                                                        <span class="toggle-label">No</span>
                                                    </label>
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
        <script>
            _userRoleCheck();
        </script>
    </section>

    <?php include 'bottom-scripts.php'?>
</body>

</html>