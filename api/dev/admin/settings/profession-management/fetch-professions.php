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
    $q = trim($_GET['q'] ?? '');
    $professionId = trim($_GET['professionId'] ?? '');
    $statusId = trim($_GET['statusId'] ?? '');

    ////////////////// Build Filters //////////////////
    $filters = [];
    $params = [];
    $types = '';

    if (!empty($professionId)) {
        $filters[] = "professionId = ?";
        $params[] = $professionId;
        $types .= 's';
    }

    if (!empty($statusId)) {
        $statusArray = explode(',', $statusId);
        $placeholders = implode(',', array_fill(0, count($statusArray), '?'));
        $filters[] = "statusId IN ($placeholders)";
        foreach ($statusArray as $s) {
            $params[] = trim($s);
            $types .= 's';
        }
    }

    if (!empty($q)) {
        $filters[] = "professionName LIKE ?";
        $params[] = "%$q%";
        $types .= 's';
    }

    $whereClause = '';
    if (!empty($filters)) {
        $whereClause = 'WHERE ' . implode(' AND ', $filters);
    }

    ////////////////// Fetch Professions //////////////////
    $select = "SELECT * FROM PROFESSION_TAB $whereClause ORDER BY professionName ASC";
    $professions = selectQuery($conn, $select, $types, $params);

    if (empty($professions)) {
        throw new NotFoundException("No Record found");
    }

    foreach ($professions as &$professionData) {
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
    }

    $response = [
        'response' => 200,
        'success' => true,
        'message' => "PROFESSION FETCHED SUCCESSFULLY!",
        'allRecordCount' => count($professions),
        'data' => $professions
    ];


} catch (Throwable $e) {
    ErrorHandler::handle($e);
}

http_response_code($response['response'] ?? 500);
echo json_encode($response);
?>