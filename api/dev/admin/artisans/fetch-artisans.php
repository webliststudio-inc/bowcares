<?php
require_once '../../config/connection.php';
require_once '../../config/staff-session-check.php';

try {

    if (!$checkBasicSecurity) {
        throw new ForbiddenException("Unauthorized access! Please log in.");
    }

    if (!$checkSession) {
        throw new UnauthorizedException("SESSION EXPIRED! Please LogIn Again.");
    }

    ////////////////// Variables //////////////////
    $q = trim($_GET['q'] ?? '');
    $artisanId = trim($_GET['artisanId'] ?? '');
    $statusId = trim($_GET['statusId'] ?? '');

    ////////////////// Build Query //////////////////
    $conditions = [];
    $params = [];
    $types = '';

    if (!empty($artisanId)) {
        $conditions[] = "artisanId = ?";
        $params[] = $artisanId;
        $types .= "s";
    }

    if (!empty($statusId)) {
        $conditions[] = "statusId IN ($statusId)";
    }

    $extraWhere = '';
    if (!empty($conditions)) {
        $extraWhere = " AND " . implode(" AND ", $conditions);
    }

    ////////////////// Search Query //////////////////

    $searchClause = "
        (
            firstName LIKE ?
            OR lastName LIKE ?
            OR emailAddress LIKE ?
            OR phoneNumber LIKE ?
        )
    ";

    $searchValue = "%{$q}%";

    $params = array_merge([$searchValue, $searchValue, $searchValue, $searchValue], $params);
    $types = "ssss" . $types;

    $selectQuery = "SELECT 
    `artisanId`, 
    `firstName`, 
    `lastName`, 
    `emailAddress`, 
    `phoneNumber`, 
    `statusId`, 
    `availableStatusId`, 
    `professionIds`, 
    `lastLoginTime`, 
    `createdTime`, 
    `updatedBy`, 
    `updatedTime` 
    FROM ARTISANS_TAB 
    WHERE $searchClause $extraWhere
    ORDER BY firstName ASC";

    $selectParams = array_merge($params);

    $artisansData = selectQuery($conn, $selectQuery, $types, $selectParams);
    $allRecordCount = count($artisansData);
    if (empty($artisansData)) {
        throw new NotFoundException("No record found.");
    }

    foreach ($artisansData as &$artisan) {
        $statusId = $artisan['statusId'];
        $availableStatusId = $artisan['availableStatusId'];
        $professionIds = $artisan['professionIds']; // P001,P002,P003
        $updatedBy = $artisan['updatedBy'];

        // Get status data
        $statusData = _get_status_details($conn, $statusId);
        $artisan['statusData'] = $statusData;

        // get avalilable status data
        $availableStatusData = _get_status_details($conn, $availableStatusId);
        $artisan['availableStatusData'] = $availableStatusData;

        // Get updated-by data
        $updatedByData = _action_performed_by($conn, $updatedBy);
        $artisan['updatedByData'] = $updatedByData;

        // Get all professions
        $professionIdArray = array_filter(
            array_map('trim', explode(',', $professionIds))
        );

        if (!empty($professionIdArray)) {
            $quotedProfessionIds = implode(
                ',',
                array_map(
                    fn($id) => "'" . mysqli_real_escape_string($conn, $id) . "'",
                    $professionIdArray
                )
            );

            $allArtisanProfessionQuery = "SELECT 
            professionId, professionName
            FROM PROFESSION_TAB
            WHERE professionId IN ($quotedProfessionIds)
            ORDER BY professionName ASC ";
            $artisan['artisanProfessionData'] = selectQuery($conn, $allArtisanProfessionQuery);
        } else {
            $artisan['artisanProfessionData'] = [];
        }
    }

    unset($artisan);


    ///////////////// Response //////////////////
    $response = [
        'response' => 200,
        'success' => true,
        'message' => "FAQ fetched successfully.",
        'allRecordCount' => $allRecordCount,
        'data' => $artisansData,
    ];


} catch (Throwable $e) {
    ErrorHandler::handle($e);
}

http_response_code($response['response'] ?? 500);
echo json_encode($response);
?>