<?php
/**
 * Contact Form Processing Script
 * Validates form data and redirects accordingly
 */

// Check if form was submitted via POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php#contact');
    exit;
}

// Get and sanitize form data
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

// Validation errors array
$errors = [];

// Validate name
if (empty($name)) {
    $errors[] = 'Name is required.';
} elseif (strlen($name) < 2) {
    $errors[] = 'Name must be at least 2 characters long.';
}

// Validate email
if (empty($email)) {
    $errors[] = 'Email is required.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please enter a valid email address.';
}

// Validate message
if (empty($message)) {
    $errors[] = 'Message is required.';
} elseif (strlen($message) < 10) {
    $errors[] = 'Message must be at least 10 characters long.';
}

// If there are errors, redirect back with error message and form data
if (!empty($errors)) {
    $errorMessage = implode(' ', $errors);
    $queryParams = http_build_query([
        'error' => $errorMessage,
        'name' => $name,
        'email' => $email,
        'message' => $message
    ]);
    header('Location: index.php#contact?' . $queryParams);
    exit;
}

// If validation passes, redirect to thank you page
header('Location: thank-you.html');
exit;
?>

