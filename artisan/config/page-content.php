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