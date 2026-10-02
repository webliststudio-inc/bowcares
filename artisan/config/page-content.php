<?php if ($page == 'loginPage') { ?>
    <div class="form-header" data-aos="fade-in" data-aos-duration="1200">
        <h2>
            Sign In <span>Now!</span>
        </h2>

        <p>
            Access your BowCare artisan account
        </p>
    </div>

    <div class="form-div" data-aos="fade-in" data-aos-duration="1200">
        <div class="text_field_container" id="userName_container">
            <script>
                textField({
                    id: 'userName',
                    title: 'Email Address'
                });
            </script>
        </div>

        <div class="text_field_container" id="password_container">
            <script>
                textField({
                    id: 'password',
                    title: 'Password',
                    type: 'password'
                });
            </script>
        </div>

        <div class="remember-container">
            <label class="login-page-remember">
                <input type="checkbox">
                <span>Remember Me</span>
            </label>

            <span class="forgot-password" onclick="_nextLoginPage({page: 'forgotPassword'});">
                Forgot Password?
            </span>
        </div>

        <div class="btn-div" id="loginBtn">
            <script>
                generalButtons({
                    container: "loginBtn",
                    buttons: [{
                        id: "formBtn",
                        text: "Sign In",
                        icon: "bi bi-arrow-right-circle",
                        width: "btn-full",
                        size: "btn-lg",
                        iconPosition: "right"
                    }]
                });
            </script>
        </div>
    </div>
<?php } ?>

<?php if ($page == 'forgotPassword') { ?>
    <div class="form-header" data-aos="fade-in" data-aos-duration="1200">
        <h2>
            Reset <span>Password!</span>
        </h2>

        <p>
            Enter your email address to reset your password
        </p>
    </div>

    <div class="form-div" data-aos="fade-in" data-aos-duration="1200">
        <div class="text_field_container" id="emailAddress_container">
            <script>
                textField({
                    id: 'emailAddress',
                    title: 'Enter Your Email Address',
                    type: 'email'
                });
            </script>
        </div>

        <div class="btn-div" id="forgotPassBtn">
            <script>
                generalButtons({
                    container: "forgotPassBtn",
                    buttons: [{
                        id: "formBtn",
                        text: "Proceed",
                        icon: "bi bi-arrow-right-circle",
                        width: "btn-full",
                        size: "btn-lg",
                        iconPosition: "right",
                        onClick: "_nextLoginPage({page: 'otpPage'});"
                    }]
                });
            </script>
        </div>

        <div class="reset-password">
            Already have an account? <span onclick="_nextLoginPage({page: 'loginPage'});">Login Here</span>
        </div>
    </div>
<?php } ?>

<?php if ($page == 'otpPage') { ?>
    <div class="form-header" data-aos="fade-in" data-aos-duration="1200">
        <h2>
            OTP <span>Verification!</span>
        </h2>

        <p>
            Enter the OTP sent to your email address
        </p>
    </div>

    <div class="form-div" data-aos="fade-in" data-aos-duration="1200">
        <div class="alert alert-success form-alert-div"> <i class="bi-person"></i> Hi, <span id="fullName">Hon.Paul
                Emmanuel</span>,
            an <span>OTP</span> has been sent to your email address (<span
                id="userEmailAddress">seunemmanuel107@gmail.com</span>).
            Kindly check your <strong>INBOX</strong> or <strong>SPAM</strong> to
            confirm.
        </div>

        <div class="otp-container" id="otp_container">
            <script>
                otpField({
                    id: "otp",
                    length: 6,
                    onKeyPressFunction: 'isNumberCheck(event);',
                });
            </script>
        </div>

        <div class="forgot-pass-container">
            <div class="forgot-container">
                Didn't get the OTP?
                <button title="Resend OTP" class="resendOtpBtn" id="resendOtpBtn" onclick=""><strong>Resend
                        OTP</strong></button>
                <div id="resendCountdown"></div>
            </div>
        </div>

        <div class="btn-div" id="otpBtn">
            <script>
                generalButtons({
                    container: "otpBtn",
                    buttons: [{
                        id: "formBtn",
                        text: "Proceed",
                        icon: "bi bi-arrow-right-circle",
                        width: "btn-full",
                        size: "btn-lg",
                        iconPosition: "right",
                        onClick: "_nextLoginPage({page: 'completeResetPassword'});"
                    }]
                });
            </script>
        </div>

        <div class="reset-password">
            Already have an account? <span onclick="_nextLoginPage({page: 'loginPage'});">Login Here</span>
        </div>
    </div>
    <script>
        _counDownOtp(180);
    </script>
<?php } ?>

<?php if ($page == 'completeResetPassword') { ?>
    <div class="form-header" data-aos="fade-in" data-aos-duration="1200">
        <h2>
            Complete <span>Password Reset!</span>
        </h2>

        <p>
            Enter your new password to complete the reset process
        </p>
    </div>

    <div class="form-div" data-aos="fade-in" data-aos-duration="1200">
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

    <div class="pswd_info"><em>At least 8 charaters required including upper & lower cases and special characters and
            numbers.</em></div>

    <div class="btn-div" id="forgotPassBtn">
        <script>
            generalButtons({
                container: "forgotPassBtn",
                buttons: [{
                    id: "formBtn",
                    text: "Reset Password",
                    icon: "bi bi-arrow-clockwise",
                    width: "btn-full",
                    size: "btn-lg",
                    iconPosition: "right",
                    onClick: "_completeResetPass();"
                }]
            });
        </script>
    </div>

    <div class="reset-password">
        Already have an account? <span onclick="_nextLoginPage({page: 'loginPage'});">Login Here</span>
    </div>
    </d>
<?php } ?>


<!-- ///// Artisan Account Type Page ////// -->
<?php if ($page == 'artisanAccountTypePage') { ?>
    <div class="form-div accountType-form-div">
        <div class="top-div accountTpye-title-div">
            <h3>👋 Welcome Back <span>Artisan!</span></h3>
            <h1>How would you like to register?</h1>
            <p>Select an account type to continue.</p>
        </div>

        <div class="inner-form">
            <div class="card-wrapper">
                <div class="card" title="Self Employed" onclick="_nextSignUpPage({page: 'artisanSignUpPage', accountType: 'selfEmployed'});">
                    <div class="card-inner">
                        <div class="card-icon">
                            <i class="bi bi-person"></i>
                        </div>

                        <h2>Self Employed</h2>

                        <p>
                            Register and manage your artisan services as an
                        </p>

                        <button title="Continue"  class="btn">
                            Continue <i class="bi bi-arrow-right-circle"></i>
                        </button>
                    </div>
                </div>

                <div class="card" title="Company" onclick="_nextSignUpPage({page: 'artisanSignUpPage', accountType: 'company'});">
                    <div class="card-inner">
                        <div class="card-icon">
                            <i class="bi bi-building"></i>
                        </div>

                        <h2>Company</h2>

                        <p>
                            Register and manage your artisan services under a company.
                        </p>

                        <button title="Continue" class="btn" onclick="">
                            Continue <i class="bi bi-arrow-right-circle"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<!-- ///// Sign up Page /////// -->
<?php if ($page == 'artisanSignUpPage') { ?>
    <script>
        artisanBioDataSession = JSON.parse(localStorage.getItem("artisanBioDataSession")) || {};
        accountType = sessionStorage.getItem("artisanAccountType") || "";
    </script>

    <div class="form-div">
        <div class="top-div">
            <h1>🚀 Start Your Artisan Journey</h1>
            <p>Register today and grow your career with BowCare Maintenance Services.</p>
        </div>

        <div class="inner-form">
            <div class="main-content-div">
                <div class="pages-tables-content-div">
                    <div class="content-title">
                        <div class="title">
                            <i class="bi bi-person-fill-add"></i>
                            <p>Create Account</p>
                        </div>
                    </div>

                    <div class="form-container">
                        <div class="text_field_container" id="fullName_container">
                            <script>
                                textField({
                                    id: 'fullName',
                                    title: accountType === 'company' ? 'Company Name' : 'Full Name',
                                    value: artisanBioDataSession?.fullName ?? ''
                                });
                            </script>
                        </div>

                        <div class="text_field_container" id="phoneNumber_container">
                            <script>
                                textField({
                                    id: 'phoneNumber',
                                    title: 'Mobile Number',
                                    value: artisanBioDataSession?.phoneNumber ?? ''
                                });
                            </script>
                        </div>

                        <div class="text_field_container" id="homeNumber_container">
                            <script>
                                textField({
                                    id: 'homeNumber',
                                    title: 'Home Number',
                                    value: artisanBioDataSession?.homeNumber ?? ''
                                });
                            </script>
                        </div>

                        <div class="text_field_container" id="emailAddress_container">
                            <script>
                                textField({
                                    id: 'emailAddress',
                                    title: 'Email Address',
                                    value: artisanBioDataSession?.emailAddress ?? ''
                                });
                            </script>
                        </div>

                        <div class="text_area_container" id="about_container">
                            <script>
                                textField({
                                    id: 'about',
                                    title: accountType === 'company' ? 'Tell Us About Your Company' : 'Tell Us About Yourself',
                                    type: 'textarea',
                                    maxlength: 180,
                                });
                            </script>
                        </div>

                        <div class="text_field_container col-3" id="destination_container">
                            <script>
                                textField({
                                    id: 'destination',
                                    title: accountType === 'company' ? 'Company Address' : 'Address',
                                    oninputFunction: 'getMapDetails()',
                                    value: artisanBioDataSession?.address ?? ''
                                });
                            </script>
                        </div>
                        <div id="map"></div>
                    </div>
                </div>
            </div>

            <div class="main-content-div">
                <div class="pages-tables-content-div">
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
                                    <script>
                                        _fetchProfessionToggle();
                                    </script>

                                    <div class="content-loading-div">
                                        <img src="<?php echo $websiteUrl ?>/all-images/images/spinner.gif"
                                            alt="Loading" />
                                    </div>
                                </div>
                            </div>
                            <div class="issue-text" id="issues_professionToggle"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-content-div">
                <div class="pages-tables-content-div">
                    <div class="content-title">
                        <div class="title">
                            <i class="bi bi-clock"></i>
                            <p>Availability Time</p>
                        </div>
                    </div>

                    <div class="form-container">
                        <div class="permission-form-back-div">
                            <div class="title-div">
                                <p>
                                    Set the days and times you are available to receive and attend to job requests.
                                </p>
                            </div>

                            <div class="permission-toggle-div">
                                <div class="toggle-title">Available Days</div>
                                <div class="fetch-toggle" id="availabilitPageContent">
                                    <script>
                                        _fetchAvailabilityToggle();
                                    </script>
                                    <!-- <div class="each-toggle-div time-toggle-div">
                                        <div class="left-cont">
                                            <span>Monday</span>

                                            <label for="monday" class="switch">
                                                <input 
                                                    type="checkbox"
                                                    class="child artisan-checkbox"
                                                    id="monday"
                                                    name="availabilityDay[]"
                                                    data-value="1"
                                                >
                                                <span class="slider"></span>
                                                <span class="toggle-label">Yes</span>
                                            </label>
                                        </div>

                                        <div class="time-wrapper">
                                            <div class="time-input-div">
                                                <div class="time-input">
                                                    <span class="placeholder">Available From</span>
                                                    <input class="time-textfield" type="time" id="mondayFrom">
                                                </div>
                                            </div>

                                            <div class="time-input-div">
                                                <div class="time-input">
                                                    <span class="placeholder">Available To</span>
                                                    <input class="time-textfield" type="time" id="mondayTo">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="each-toggle-div time-toggle-div">
                                        <div class="left-cont">
                                            <span>Tuesday</span>

                                            <label for="tuesday" class="switch">
                                                <input 
                                                    type="checkbox"
                                                    class="child artisan-checkbox"
                                                    id="tuesday"
                                                    name="availabilityDay[]"
                                                    data-value="2"
                                                >
                                                <span class="slider"></span>
                                                <span class="toggle-label">Yes</span>
                                            </label>
                                        </div>

                                        <div class="time-wrapper">
                                            <div class="time-input-div">
                                                <div class="time-input">
                                                    <span class="placeholder">Available From</span>
                                                    <input class="time-textfield" type="time" id="tuesdayFrom">
                                                </div>
                                            </div>

                                            <div class="time-input-div">
                                                <div class="time-input">
                                                    <span class="placeholder">Available To</span>
                                                    <input class="time-textfield" type="time" id="tuesdayTo">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="each-toggle-div time-toggle-div">
                                        <div class="left-cont">
                                            <span>Wednesday</span>

                                            <label for="wednesday" class="switch">
                                                <input 
                                                    type="checkbox"
                                                    class="child artisan-checkbox"
                                                    id="wednesday"
                                                    name="availabilityDay[]"
                                                    data-value="3"
                                                >
                                                <span class="slider"></span>
                                                <span class="toggle-label">Yes</span>
                                            </label>
                                        </div>

                                        <div class="time-wrapper">
                                            <div class="time-input-div">
                                                <div class="time-input">
                                                    <span class="placeholder">Available From</span>
                                                    <input class="time-textfield" type="time" id="wednesdayFrom">
                                                </div>
                                            </div>

                                            <div class="time-input-div">
                                                <div class="time-input">
                                                    <span class="placeholder">Available To</span>
                                                    <input class="time-textfield" type="time" id="wednesdayTo">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="each-toggle-div time-toggle-div">
                                        <div class="left-cont">
                                            <span>Thursday</span>

                                            <label for="thursday" class="switch">
                                                <input 
                                                    type="checkbox"
                                                    class="child artisan-checkbox"
                                                    id="thursday"
                                                    name="availabilityDay[]"
                                                    data-value="4"
                                                >
                                                <span class="slider"></span>
                                                <span class="toggle-label">Yes</span>
                                            </label>
                                        </div>

                                        <div class="time-wrapper">
                                            <div class="time-input-div">
                                                <div class="time-input">
                                                    <span class="placeholder">Available From</span>
                                                    <input class="time-textfield" type="time" id="thursdayFrom">
                                                </div>
                                            </div>

                                            <div class="time-input-div">
                                                <div class="time-input">
                                                    <span class="placeholder">Available To</span>
                                                    <input class="time-textfield" type="time" id="thursdayTo">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="each-toggle-div time-toggle-div">
                                        <div class="left-cont">
                                            <span>Friday</span>

                                            <label for="friday" class="switch">
                                                <input 
                                                    type="checkbox"
                                                    class="child artisan-checkbox"
                                                    id="friday"
                                                    name="availabilityDay[]"
                                                    data-value="5"
                                                >
                                                <span class="slider"></span>
                                                <span class="toggle-label">Yes</span>
                                            </label>
                                        </div>

                                        <div class="time-wrapper">
                                            <div class="time-input-div">
                                                <div class="time-input">
                                                    <span class="placeholder">Available From</span>
                                                    <input class="time-textfield" type="time" id="fridayFrom">
                                                </div>
                                            </div>

                                            <div class="time-input-div">
                                                <div class="time-input">
                                                    <span class="placeholder">Available To</span>
                                                    <input class="time-textfield" type="time" id="fridayTo">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="each-toggle-div time-toggle-div">
                                        <div class="left-cont">
                                            <span>Saturday</span>

                                            <label for="saturday" class="switch">
                                                <input 
                                                    type="checkbox"
                                                    class="child artisan-checkbox"
                                                    id="saturday"
                                                    name="availabilityDay[]"
                                                    data-value="6"
                                                >
                                                <span class="slider"></span>
                                                <span class="toggle-label">Yes</span>
                                            </label>
                                        </div>

                                        <div class="time-wrapper">
                                            <div class="time-input-div">
                                                <div class="time-input">
                                                    <span class="placeholder">Available From</span>
                                                    <input class="time-textfield" type="time" id="saturdayFrom">
                                                </div>
                                            </div>

                                            <div class="time-input-div">
                                                <div class="time-input">
                                                    <span class="placeholder">Available To</span>
                                                    <input class="time-textfield" type="time" id="saturdayTo">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="each-toggle-div time-toggle-div">
                                        <div class="left-cont">
                                            <span>Sunday</span>

                                            <label for="sunday" class="switch">
                                                <input 
                                                    type="checkbox"
                                                    class="child artisan-checkbox"
                                                    id="sunday"
                                                    name="availabilityDay[]"
                                                    data-value="7"
                                                >
                                                <span class="slider"></span>
                                                <span class="toggle-label">Yes</span>
                                            </label>
                                        </div>

                                        <div class="time-wrapper">
                                            <div class="time-input-div">
                                                <div class="time-input">
                                                    <span class="placeholder">Available From</span>
                                                    <input class="time-textfield" type="time" id="sundayFrom">
                                                </div>
                                            </div>

                                            <div class="time-input-div">
                                                <div class="time-input">
                                                    <span class="placeholder">Available To</span>
                                                    <input class="time-textfield" type="time" id="sundayTo">
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="issue-text" id="issues_artisanAvailability"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-content-div">
                <div class="pages-tables-content-div">
                    <div class="content-title">
                        <div class="title">
                            <i class="bi bi-lock"></i>
                            <p>Create Password</p>
                        </div>
                    </div>

                    <div class="form-container">
                        <div class="text_field_container" id="createPassword_container">
                            <script>
                                textField({
                                    id: 'createPassword',
                                    title: 'Create Password',
                                    type: 'password',
                                    value: artisanBioDataSession?.password ?? ''
                                });
                            </script>
                        </div>

                        <div class="text_field_container" id="confirmPassword_container">
                            <script>
                                textField({
                                    id: 'confirmPassword',
                                    title: 'Confirm Password',
                                    type: 'password',
                                    value: artisanBioDataSession?.confirmPassword ?? ''
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>

            <div class="btn-div">
                <button class="btn" id="signUpBtn" title="Sign Up" onclick="_proceedArtisanSignUp();">Sign Up<i
                        class="bi-check"></i></button>
            </div>

            <button class="back-btn" title="Back to previous"
                onclick="_nextSignUpPage({page: 'artisanAccountTypePage'});"><i class="bi bi-arrow-left-circle"></i>
                Back</button>
        </div>
    </div>
<?php  }?>

<!-- ///// Sign up OTP Verification Page /////// -->
<?php if ($page == 'signUpotpVerificationPage') { ?>
    <script>
        $(document).ready(function () {
            artisanBioDataSession = JSON.parse(localStorage.getItem("artisanBioDataSession"));

            $("#artisanFullName").html(capitalizeFirstLetterOfEachWord(artisanBioDataSession?.firstName + ' ' +
                artisanBioDataSession?.lastName));
            $("#artisanEmailAddress").html(artisanBioDataSession?.emailAddress);
        });
    </script>

    <div class="form-div center-content">
        <div class="top-div">
            <h1>🚀 Verify Your Account</h1>
            <p>Please verify your email address to activate your account.</p>
        </div>

        <div class="alert alert-success form-alert-div"> <i class="bi-person"></i> Hi, <span
                id="artisanFullName">Loading...</span>,
            an <span>OTP</span> has been sent to your email address (<span id="artisanEmailAddress">Loading...</span>).
            Kindly check your <strong>INBOX</strong> or <strong>SPAM</strong> to
            confirm.
        </div>

        <div class="inner-form" id="viewOtpPassword">
            <div class="otp-container" id="otp_container">
                <script>
                    otpField({
                        id: "otp",
                        length: 6,
                        onKeyPressFunction: 'isNumberCheck(event);',
                    });
                </script>
            </div>

            <div class="forgot-pass-container">
                <div class="forgot-container">
                    <div class="flex-div">
                        Didn't get the OTP?
                        <button title="Resend OTP" class="resendOtpBtn" id="resendOtpBtn"
                            onclick="_proceedArtisanSignUp(true);"><strong>Resend OTP</strong></button>
                        <div id="resendCountdown"></div>
                    </div>

                    <button class="back-btn" title="Back to previous"
                        onclick="_nextSignUpPage({page: 'artisanSignUpPage'});"><i class="bi bi-arrow-left-circle"></i>
                        Back</button>
                </div>
            </div>

            <div class="btn-div">
                <button class="btn" id="verifyBtn" title="Proceed" onclick="_completeArtisanSignUp();">Proceed <i
                        class="bi-arrow-right"></i></button>
            </div>
        </div>
        <script>
            _counDownOtp(180);
        </script>
    </div>
<?php } ?>