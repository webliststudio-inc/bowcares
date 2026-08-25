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
    $faqId = trim($_GET['faqId'] ?? '');

    ////////////////// Validation //////////////////
    validateEmptyField($faqId, 'FAQ ID');

    ////////////////// Delete FAQ //////////////////
    $deleteQuery = "DELETE FROM FAQ_TAB WHERE faqId = ?";
    deleteQuery($conn, $deleteQuery, "s", [$faqId]);

    ////////////////// Response //////////////////
    $response = [
        'response' => 200,
        'success' => true,
        'message' => "FAQ DELETED SUCCESSFULLY!",
    ];

} catch (Throwable $e) {
    ErrorHandler::handle($e);
}

http_response_code($response['response'] ?? 500);
echo json_encode($response);
?>