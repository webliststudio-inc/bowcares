<?php
require_once '../config/connection.php';

try {
    if (!$checkBasicSecurity) {
        throw new ForbiddenException("Unauthorized access! Please log in.");
    }


    ////////////////// Variables //////////////////
    $q = trim($_GET['q'] ?? '');
    $professionId = trim($_GET['professionId'] ?? '');
    $statusId = 1; /// only active professions

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
    $select = "SELECT professionId, professionName, professionDescription, professionImage, professionIcon FROM PROFESSION_TAB $whereClause ORDER BY professionName ASC";
    $professions = selectQuery($conn, $select, $types, $params);

    if (empty($professions)) {
        throw new NotFoundException("No Record found");
    }

    foreach ($professions as &$professionData) {
        $statusId = 1; /// only active profession
        /// get statusData
        $statusData = _get_status_details($conn, $statusId);
        $professionData['statusData'] = $statusData;
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