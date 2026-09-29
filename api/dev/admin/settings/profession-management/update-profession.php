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
    $professionId = (trim($_GET['professionId'] ?? ''));
    $professionName = strtoupper(trim($data['professionName'] ?? ''));
    $professionDescription = strtoupper(trim($data['professionDescription'] ?? ''));
    $statusId = $data['statusId'] ?? 1; // Default to 1 (Active) if not provided

    ////////////////// Validation //////////////////
    validateEmptyField($professionName, 'PROFESSION NAME');
    validateEmptyField($statusId, 'STATUS ID');

    ////////////////// Check Duplicate //////////////////
    $checkQuery = "SELECT professionId FROM PROFESSION_TAB WHERE professionName = ? AND professionId != ?";
    $existing = selectQuery($conn, $checkQuery, "ss", [$professionName, $professionId]);
    if (!empty($existing)) {
        throw new ConflictException("PROFESSION EXIST! Profession already exists by name. Check and try again.");
    }

    ////////////////// Update Profession //////////////////
    $updateQuery = "UPDATE PROFESSION_TAB
        SET professionName = ?, professionDescription = ?, statusId = ?, updatedBy = ?, updatedTime = NOW()
        WHERE professionId = ?
    ";
    $updateParams = [$professionName, $professionDescription, $statusId, $loginStaffId, $professionId];
    updateQuery($conn, $updateQuery, "ssiss", $updateParams);

    ////////////////// Fetch Created Profession //////////////////
    $selectQuery = "SELECT * FROM PROFESSION_TAB WHERE professionId = ?";
    $selectParams = [$professionId];
    $professionData = selectQuery($conn, $selectQuery, "s", $selectParams)[0];
    $statusId = $professionData['statusId'];
    $createdBy = $professionData['createdBy'];
    $updatedBy = $professionData['updatedBy'];


    /// get statusData
    $statusData = _get_status_details($conn, $statusId);
    $professionData['statusData'] = $statusData;
    /// get createdByData
    $createdByData = _action_performed_by($conn, $createdBy);
    $professionData['createdByData'] = $createdByData;
    /// get updatedByData
    $updatedByData = _action_performed_by($conn, $updatedBy);
    $professionData['updatedByData'] = $updatedByData;

    ////////////////// Response //////////////////
    $response = [
        'response' => 200,
        'success' => true,
        'message' => "PROFESSION UPDATED SUCCESSFULLY!",
        'data' => $professionData
    ];

} catch (Throwable $e) {
    ErrorHandler::handle($e);
}

http_response_code($response['response'] ?? 500);
echo json_encode($response);
?>