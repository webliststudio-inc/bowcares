<?php if ($page=='loginPage'){?>
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
<?php }?>

<?php if ($page=='forgotPassword'){?>
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
<?php }?>

<?php if ($page=='otpPage'){?>
    <div class="form-header" data-aos="fade-in" data-aos-duration="1200">
        <h2>
            OTP <span>Verification!</span>
        </h2>

        <p>
            Enter the OTP sent to your email address
        </p>
    </div>

    <div class="form-div" data-aos="fade-in" data-aos-duration="1200">
        <div class="alert alert-success form-alert-div"> <i class="bi-person"></i> Hi, <span
                id="fullName">Hon.Paul Emmanuel</span>,
            an <span>OTP</span> has been sent to your email address (<span id="userEmailAddress">seunemmanuel107@gmail.com</span>).
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
                <button title="Resend OTP" class="resendOtpBtn" id="resendOtpBtn"
                    onclick=""><strong>Resend OTP</strong></button>
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
<?php }?>

<?php if ($page=='completeResetPassword'){?>
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

        <div class="pswd_info"><em>At least 8 charaters required including upper & lower cases and special characters and numbers.</em></div>

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
<?php }?>


<!-- ///// Sign up Page /////// -->
<?php if ($page=='artisanSignUpPage'){?>
    <script>
        artisanBioDataSession = JSON.parse(localStorage.getItem("artisanBioDataSession")) || {};
    </script>

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
                                value: artisanBioDataSession?.firstName ?? ''
                            });
                            </script>
                        </div>

                        <div class="text_field_container" id="lastName_container">
                            <script>
                            textField({
                                id: 'lastName',
                                title: 'Last Name',
                                value: artisanBioDataSession?.lastName ?? ''
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

                        <div class="text_field_container" id="emailAddress_container">
                            <script>
                            textField({
                                id: 'emailAddress',
                                title: 'Email Address',
                                value: artisanBioDataSession?.emailAddress ?? ''
                            });
                            </script>
                        </div>

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
                            <div class="issue-text" id="issues_professionToggle"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="btn-div">
                <button class="btn" id="signUpBtn" title="Sign Up"
                    onclick="_proceedArtisanSignUp();">Sign Up<i
                        class="bi-check"></i></button>
            </div>
        </div>
    </div>
<?php }?>

<!-- ///// Sign up OTP Verification Page /////// -->
<?php if ($page=='signUpotpVerificationPage'){?>
    <script>
		$(document).ready(function () {
			artisanBioDataSession = JSON.parse(localStorage.getItem("artisanBioDataSession"));
			
			$("#artisanFullName").html(capitalizeFirstLetterOfEachWord(artisanBioDataSession?.firstName + ' ' + artisanBioDataSession?.lastName));
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

                    <button class="back-btn" title="Back to previous" onclick="_nextSignUpPage({page: 'artisanSignUpPage'});"><i class="bi bi-arrow-left-circle"></i> Back</button>
                </div>
            </div>

            <div class="btn-div">
                <button class="btn" id="verifyBtn" title="Proceed"
                    onclick="_completeArtisanSignUp();">Proceed <i class="bi-arrow-right"></i></button>
            </div>
        </div>
        <script>
		    _counDownOtp(180);
	    </script>
    </div>
<?php }?>