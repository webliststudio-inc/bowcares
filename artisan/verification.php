<?php include '../config/constants.php';?>
<?php include 'config/functions.php'; ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php include 'meta.php'?>
    <title><?php echo $appName?> | User Verification</title>
    <meta name="keywords" content="User Verification - <?php echo $appName?>" />
    <meta name="description" content="User Verification - <?php echo $appName?>" />
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

            <div class="form-back-div center-content" data-aos="fade-in" data-aos-duration="1200">
                <div class="form-div">
                    <div class="top-div">
                        <h1>🚀 Verify Your Account</h1>
                        <p>Please verify your email address to activate your account.</p>
                    </div>

                    <div class="alert alert-success form-alert-div"> <i class="bi-person"></i> Hi, <span
                            id="fullName">Hon.Paul Emmanuel</span>,
                        an <span>OTP</span> has been sent to your email address (<span id="userEmailAddress">seunemmanuel107@gmail.com</span>).
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
                                Didn't get the OTP?
                                <button title="Resend OTP" class="resendOtpBtn" id="resendOtpBtn"
                                    onclick=""><strong>Resend OTP</strong></button>
                                <div id="resendCountdown"></div>
                            </div>
                        </div>

                        <div class="btn-div">
                            <button class="btn" id="verifyBtn" title="Proceed"
                                onclick="_completeVerification();">Proceed <i class="bi-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
		    _counDownOtp(180);
	    </script>
    </section>

    <?php include 'bottom-scripts.php'?>
</body>

</html>