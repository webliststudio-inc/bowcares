<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);
$websiteAutoUrl = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$appName = 'BowCare Maintenance Services';

//$websiteUrl='https://bowcares.com'; /// For Live Server Url //
$websiteUrl = 'http://localhost/weblist-studio/bowcares';
//$websiteUrl='http://10.160.38.177/weblist-studio/bowcares';
//$websitePath = $_SERVER['DOCUMENT_ROOT'];
$websitePath = $_SERVER['DOCUMENT_ROOT'].'/weblist-studio/bowcares'; //dirname(__FILE__);
$codeVersion = date('Ymdhis');
?>

<?php
$userOsBrowser = $_SERVER['HTTP_USER_AGENT'];
/////////////////////////////////////////////////////////////////////////////////
function getUserIP()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}
$userIpAddress = getUserIP();

/////////////////////////////////////////////////////////////////////////////////
function getBrowserId()
{
    $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';  // Browser and OS info
    $acceptLanguage = $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '';  // Language
    // Combine all data and create a hash
    $browserId = hash('sha256', $userAgent . $acceptLanguage);
    return $browserId;
}
$userDeviceId = getBrowserId();
?>

<script>
    /// Constants ///
    var websiteUrl = "<?php echo $websiteUrl; ?>";
    var userOsBrowser = "<?php echo $userOsBrowser; ?>"; /// For User OS Browser //
    var userIpAddress = "<?php echo $userIpAddress; ?>"; /// For User IP Address //
    var userDeviceId = "<?php echo $userDeviceId; ?>"; /// For User Device Id //

    ////// EndPoints///
    var endPoint = "https://bowcares.com/api/dev"; /// For EndPoint Url //
    var apiKey = "616531348a6a9a0c49b9ab7008c3c5c0"; /// For Api Key //

    /// Site Middleware Urls ///
    var siteMiddlewareUrl = websiteUrl + '/config/code'; //// For site url

    /// Admin Middleware Urls ///
    var adminMiddleWareUrl = websiteUrl + '/admin/config/code'; /// For Admin Login Middleware Url //
    var adminUrl = websiteUrl + '/admin'; /// For Admin Url //
    var userVerificationUrl = websiteUrl + '/admin/user-verification'; /// For User Verification Url //
    var completeResetPasswordUrl = websiteUrl + '/admin/complete-reset-password'; /// For Complete Reset Password Url //

    /// Artisan Sign Up Middleware Urls ///
    var artisanMiddleWareUrl = websiteUrl + '/artisan/config/code'; /// For Artisan Login Middleware Url //
    var artisanSignUpUrl = websiteUrl + '/artisan/sign-up'; /// For Artisan Sign Up Url //
    var artisanVerificationUrl = websiteUrl + '/artisan/verification'; /// For Artisan User Verification Url //

    /// Artisan Login Middleware Urls ///
    var artisanLoginUrl = websiteUrl + '/artisan/login'; /// For Artisan Login Url //
    var artisanLoginVerificationUrl = websiteUrl + '/artisan/user-verification'; /// For Artisan login Verification Url //

    /// Portal Middleware Urls ///
    var portalMiddleWareUrl = websiteUrl + '/portal/config/code'; /// For Portal Login Middleware Url //
    var portalUrl = websiteUrl + '/portal'; /// For Portal Url //

    /// Pictures Paths ///
    var blogPixPath = websiteUrl + '/uploaded_files/blog'; /// For Blog Picture Path //
    var servicePixPath = websiteUrl + '/uploaded_files/services'; /// For Services Picture Path //
    var galleryPixPath = websiteUrl + '/uploaded_files/gallery'; /// For Gallery Pictures Path //
    var pagesPixPath = websiteUrl + '/uploaded_files/pagePictures'; /// For Pages Pictures Path //
    var professionImagePath = websiteUrl + '/uploaded_files/professionImages'; /// For Profession Pictures Path //
    var professionIconPath = websiteUrl + '/uploaded_files/professionIcon'; /// For Profession Icon Path //
    
    var pageCategory = {
        SERVICE: 'SERVICE',
        BLOG: 'BLOG',
        GALLERY: 'GALLERY',
    }
</script>