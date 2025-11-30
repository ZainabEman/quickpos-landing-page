<?php
// Validate form data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';

    // Validate non-empty fields
    if (empty($name) || empty($email) || empty($message)) {
        header('HTTP/1.1 400 Bad Request');
        echo json_encode(['error' => 'All fields are required']);
        exit;
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('HTTP/1.1 400 Bad Request');
        echo json_encode(['error' => 'Invalid email format']);
        exit;
    }

    // Simulate success - in production, you would send an email or save to database
    // For now, we just redirect to thank you page
    header('Location: thank-you.html');
    exit;
} else {
    header('HTTP/1.1 405 Method Not Allowed');
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}
?>
