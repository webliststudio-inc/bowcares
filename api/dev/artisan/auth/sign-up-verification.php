<?php
require_once '../../config/connection.php';
try {
	if (!$checkBasicSecurity) {
		throw new ForbiddenException("Unauthorized access! Please log in and try again.");
	}

	// ////// get all input parameters
	$firstName = $data['firstName'];
	$lastName = $data['lastName'];
	$emailAddress = $data['emailAddress'];
	$phoneNumber = $data['phoneNumber'];
	$password = $data['password'];
	$confirmPassword = $data['confirmPassword'];
	$professionIds = $data['professionIds'] ?? [];

	//// validate input parameters
	validateEmptyField($firstName, "FIRST NAME");
	validateEmptyField($lastName, "LAST NAME");
	validateEmptyField($emailAddress, "EMAIL ADDRESS");
	validateEmailField($emailAddress, "EMAIL ADDRESS");
	validateEmptyField($phoneNumber, "PHONE NUMBER");
	validateEmptyField($password, "PASSWORD");
	validateEmptyField($confirmPassword, "CONFIRM PASSWORD");
	if ($password !== $confirmPassword) {
		throw new BadRequestException("PASSWORD NOT MATCH! Check the Passwords and try again.");
	}
	if (count($professionIds) === 0) {
		throw new BadRequestException("PROFESSIONS REQUIRED! At least one profession must be selected.");
	}
	///validate that this artisian does not already exist with the given email address
	$selectQuery = "SELECT artisanId FROM ARTISANS_TAB WHERE emailAddress = ?";
	$selectParams = [$emailAddress];
	$userData = selectQuery($conn, $selectQuery, 's', $selectParams);

	if (!empty($userData)) {
		throw new ConflictException("ARTISAN ALREADY EXISTS! An account with this email address already exists.");
	}

	$otp = rand(100000, 999999);
	$insertQuery = "INSERT INTO `ARTISAN_VERIFICATION_TAB`
	(`firstName`, `lastName`, `emailAddress`, `otp`) VALUES 
	(?, ?, ?, ?)";
	$insertParams = [$firstName, $lastName, $emailAddress, $otp];
	insertQuery($conn, $insertQuery, "ssss", $insertParams);

	$fullName = $firstName . ' ' . $lastName;
	/* Send OTP email */
	require_once('../../mail/artisan/sign-up-verification.php');

	$response = [
		'response' => 200,
		'success' => true,
		'message' => "OTP SENT! Please check your email INBOX or SPAM folder for the verification code.",
	];

} catch (Throwable $e) {
	ErrorHandler::handle($e);
}
http_response_code($response['response']); // sets HTTP status
echo json_encode($response);
?>