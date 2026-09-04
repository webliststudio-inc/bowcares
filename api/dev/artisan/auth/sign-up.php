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
	$otp = $data['otp'];


	//// validate input parameters
	validateEmptyField($firstName, "FIRST NAME");
	validateEmptyField($lastName, "LAST NAME");
	validateEmptyField($emailAddress, "EMAIL ADDRESS");
	validateEmailField($emailAddress, "EMAIL ADDRESS");
	validateEmptyField($phoneNumber, "PHONE NUMBER");
	validateEmptyField($password, "PASSWORD");
	validateEmptyField($confirmPassword, "CONFIRM PASSWORD");
	validateEmptyField($otp, "OTP");
	validateNumericField($otp, "OTP");
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
		throw new BadRequestException("ARTISAN ALREADY EXISTS! An account with this email address already exists.");
	}

	//// confirm OTP from ARTISAN_VERIFICATION_TAB
	$selectQuery = "SELECT * FROM ARTISAN_VERIFICATION_TAB WHERE emailAddress = ? AND otp = ?";
	$selectParams = [$emailAddress, $otp];
	$otpData = selectQuery($conn, $selectQuery, 'si', $selectParams);

	if (empty($otpData)) {
		throw new BadRequestException("INVALID OTP! The provided OTP is incorrect or has expired.");
	}


	////////////////// Generate Role ID //////////////////
	$sequence = _get_sequence_count($conn, 'ART');
	$artisanId = 'ART' . $sequence['no'] . date("Ymdhis");

	$statusId = 8; // in awaiting approval
	/* Secure password hashing */
	$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
	// Convert professionIds array to comma-separated string
	$professionIdsString = implode(',', array_column($professionIds, 'professionId'));

	$insertQuery = "INSERT INTO `ARTISANS_TAB`
	(`artisanId`, `firstName`, `lastName`, `emailAddress`, `phoneNumber`, `statusId`, `password`, `professionIds`, `createdTime`) VALUES 
	(?, ?, ?, ?, ?, ?, ?, ?, NOW())";
	$insertParams = [$artisanId, $firstName, $lastName, $emailAddress, $phoneNumber, $statusId, $hashedPassword, $professionIdsString];
	insertQuery($conn, $insertQuery, "sssssiss", $insertParams);

	//// fetct created artisan data
	$selectQuery = "SELECT artisanId, firstName, lastName, emailAddress, phoneNumber, statusId, professionIds, createdTime FROM ARTISANS_TAB WHERE artisanId = ?";
	$artisanData = selectQuery($conn, $selectQuery, 's', [$artisanId]);

	foreach ($artisanData as &$artisan) {
		/// for statusId
		$artisan['statusData'] = _get_status_details($conn, $artisan['statusId']) ?? null;
		// Updated By
		$artisan['updatedByData'] = _action_performed_by($conn, $artisan['updatedBy']) ?? null;

		// Profession Details
		if (!empty($artisan['professionIds'])) {
			$professionIds = explode(',', $artisan['professionIds']);
			$placeholders = implode(',', array_fill(0, count($professionIds), '?'));
			$professionQuery = "SELECT  professionId, professionName FROM PROFESSION_TAB WHERE professionId IN ($placeholders)";
			$artisan['professions'] = selectQuery($conn, $professionQuery, str_repeat('s', count($professionIds)), $professionIds);
		} else {
			$artisan['professions'] = [];
		}
	}
	/// delete OTP from ARTISAN_VERIFICATION_TAB
	$deleteQuery = "DELETE FROM ARTISAN_VERIFICATION_TAB WHERE emailAddress = ?";
	$deleteParams = [$emailAddress];
	deleteQuery($conn, $deleteQuery, 's', $deleteParams);

	$response = [
		'response' => 200,
		'success' => true,
		'message' => "SIGN UP SUCCESSFUL! You can now login with your new account.",
		'data' => $artisanData
	];

} catch (Throwable $e) {
	ErrorHandler::handle($e);
}
http_response_code($response['response']); // sets HTTP status
echo json_encode($response);
?>