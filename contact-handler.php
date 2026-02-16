<?php
header('Content-Type: application/json');

// Start session for language
session_start();
$current_lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'fr';
$lang = include("languages/{$current_lang}.php");

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Sanitize input data
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $company = htmlspecialchars(trim($_POST['company'] ?? ''));
    $service = htmlspecialchars(trim($_POST['service'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));
    
    // Validate required fields
    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        echo json_encode([
            'success' => false,
            'message' => $lang['contact_error']
        ]);
        exit;
    }
    
    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode([
            'success' => false,
            'message' => 'Invalid email format'
        ]);
        exit;
    }
    
    // Email configuration
    $to = 'contact@medshippingsolutions.com'; // Replace with your actual email
    $subject = 'New Contact Form Submission - Med Shipping Solutions';
    
    // Email body
    $email_body = "
    New Contact Form Submission
    
    Name: {$name}
    Email: {$email}
    Phone: {$phone}
    Company: {$company}
    Service: {$service}
    
    Message:
    {$message}
    
    ---
    Submitted on: " . date('Y-m-d H:i:s') . "
    IP Address: " . $_SERVER['REMOTE_ADDR'] . "
    ";
    
    // Email headers
    $headers = "From: {$email}\r\n";
    $headers .= "Reply-To: {$email}\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    // Send email
    if (mail($to, $subject, $email_body, $headers)) {
        echo json_encode([
            'success' => true,
            'message' => $lang['contact_success']
        ]);
    } else {
        echo json_encode([
            'success' => false,
            'message' => $lang['contact_error']
        ]);
    }
    
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Invalid request method'
    ]);
}
?>
