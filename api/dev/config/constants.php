<?php
/////// developed by Mike Afolabi on 19-02-2025//////////////////////
$appName = "Bow Cares Maintenance & Services";
$appDescription = "Bowcares connects you with skilled professionals who get the job done right. Reliable service you can trust, every time.";

////////////////////////////////////////////////////////////////////////
$userIpAddress = isset($_SERVER['HTTP_USERIPADDRESS']) ? $_SERVER['HTTP_USERIPADDRESS'] : null;
$frontEndApiKey = isset($_SERVER['HTTP_APIKEY']) ? $_SERVER['HTTP_APIKEY'] : null;
$userDeviceId = isset($_SERVER['HTTP_USERDEVICEID']) ? $_SERVER['HTTP_USERDEVICEID'] : null;
////////////////////////////////////////////////////////////////////////

/// all constance
// $websiteUrl='http://localhost/projects/WebListStudio-GetFoodStuffs';
$websiteUrl = 'https://bowcares.com';
$backEndApiKey = '616531348a6a9a0c49b9ab7008c3c5c0'; //bowcares@2026


// Read the raw JSON input
$json = file_get_contents('php://input');
// Decode the JSON into an associative array
$data = json_decode($json, true);

$checkBasicSecurity = true;
///// check for API security
if ($frontEndApiKey != $backEndApiKey) {/// start if 1
    $checkBasicSecurity = false;
}

///// check for userIpAddress security
if (empty($userIpAddress)) {/// start if 1
    $checkBasicSecurity = false;
}

///// check for userDeviceId security
if (empty($userDeviceId)) {/// start if 1
    $checkBasicSecurity = false;
}