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

bug 1
bug2
bug3
bug4
bug5
bug6
bug 7 bug 8 bug 9 bug 10 bug 11 bug 12 bug 13 bug 14 bug 15 bug 16 bug 17 bug 18 bug 19 bug 20 bug 21 bug 22 bug 23 bug 24 bug 25 bug 26 bug 27 bug 28 bug 29 bug 30 bug 31 bug 32 bug 33 bug 34 bug 35 bug 36 bug 37 bug 38 bug 39 bug 40 bug 41 bug 42 bug 43 bug 44 bug 45 bug 46 bug 47 bug 48 bug 49 bug 50 bug 51 bug 52 bug 53 bug 54 bug 55 bug 56 bug 57 bug 58 bug 59 bug 60 bug 61 bug 62 bug 63 bug 64 bug 65 bug 66 bug 67 bug 68 bug 69 bug 70 bug 71 bug 72 bug 73 bug 74 bug 75 bug 76 bug 77 bug 78 bug 79 bug 80 bug 81 bug 82 bug 83 bug 84 bug 85 bug 86 bug 87 bug 88 bug 89 bug 90 bug 91 bug 92 bug 93 bug 94 bug 95 bug 96 bug 97 bug 98 bug 99 bug 100