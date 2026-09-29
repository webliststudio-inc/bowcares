<?php
require_once '../../../config/connection.php';
require_once '../../../config/staff-session-check.php';

try {

    if (!$checkBasicSecurity) {
        throw new ForbiddenException("Unauthorized access! Please log in.");
    }

    if (!$checkSession) {
        throw new UnauthorizedException("SESSION EXPIRED! Please LogIn Again.");
    }

    ////////////////// Variables //////////////////
    $professionName = strtoupper(trim($data['professionName'] ?? ''));
    $professionDescription = strtoupper(trim($data['professionDescription'] ?? ''));
    $statusId = $data['statusId'] ?? 1; // Default to 1 (Active) if not provided

    ////////////////// Validation //////////////////
    validateEmptyField($professionName, 'PROFESSION NAME');
    validateEmptyField($professionDescription, 'PROFESSION DESCRIPTION');
    validateEmptyField($statusId, 'STATUS ID');

    ////////////////// Check Existing Profession //////////////////
    $checkQuery = "SELECT professionId FROM PROFESSION_TAB WHERE professionName = ?";
    $existingProfession = selectQuery($conn, $checkQuery, "s", [$professionName]);

    if (!empty($existingProfession)) {
        throw new ConflictException("PROFESSION EXIST! Profession already exists by name. Check and try again.");
    }

    ////////////////// Generate Profession ID //////////////////
    $sequence = _get_sequence_count($conn, 'PRO');
    $professionId = 'PRO' . $sequence['no'] . date("Ymdhis");
    $professionImage = "$professionId.jpg"; // Assuming the image is named after the professionId with a .jpg extension
    $professionIcon = "$professionId.png"; // Assuming the icon is named after the professionId with a .png extension
    ////////////////// Insert Profession //////////////////
    $insertQuery = "
        INSERT INTO PROFESSION_TAB (
            professionId,
            professionName,
            professionDescription,
            professionImage,
            professionIcon,
            statusId,
            createdBy,
            createdTime
        ) VALUES (?, ?, ?, ?, ?, ?, ?, NOW())
    ";
    $insertParams = [$professionId, $professionName, $professionDescription, $professionImage, $professionIcon, $statusId, $loginStaffId];
    insertQuery($conn, $insertQuery, "sssssis", $insertParams);

    ////////////////// Fetch Created Profession //////////////////
    $selectQuery = "SELECT * FROM PROFESSION_TAB WHERE professionId = ?";
    $professionData = selectQuery($conn, $selectQuery, "s", [$professionId])[0];

    /// get statusData
    $statusData = _get_status_details($conn, $professionData['statusId']);
    $professionData['statusData'] = $statusData;
    /// get createdByData
    $createdByData = _action_performed_by($conn, $professionData['createdBy']);
    $professionData['createdByData'] = $createdByData;
    /// get updatedByData
    $updatedByData = _action_performed_by($conn, $professionData['updatedBy']);
    $professionData['updatedByData'] = $updatedByData;
    ////////////////// Response //////////////////

    $response = [
        'response' => 200,
        'success' => true,
        'message' => "PROFESSION CREATED SUCCESSFULLY!",
        'data' => $professionData
    ];

} catch (Throwable $e) {
    ErrorHandler::handle($e);
}

http_response_code($response['response'] ?? 500);
echo json_encode($response);
?>