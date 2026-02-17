<?php
/**
 * ============================================================
 *  Med Shipping Solutions — contact-handler.php
 *  Handles AJAX contact form submissions
 * ============================================================
 */
header('Content-Type: application/json; charset=UTF-8');
header('X-Content-Type-Options: nosniff');

// Only allow POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Load config + current language
session_start();
require_once 'config.php';
$lang_code = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'fr';
$lang = include "languages/{$lang_code}.php";

// ─── Sanitise & validate ────────────────────────────────────
$name    = trim($_POST['name']    ?? '');
$email   = trim($_POST['email']   ?? '');
$phone   = trim($_POST['phone']   ?? '');
$company = trim($_POST['company'] ?? '');
$service = trim($_POST['service'] ?? '');
$message = trim($_POST['message'] ?? '');

// Strip tags
$name    = htmlspecialchars($name,    ENT_QUOTES, 'UTF-8');
$email   = filter_var($email, FILTER_SANITIZE_EMAIL);
$phone   = htmlspecialchars($phone,   ENT_QUOTES, 'UTF-8');
$company = htmlspecialchars($company, ENT_QUOTES, 'UTF-8');
$service = htmlspecialchars($service, ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

// Required fields
if (empty($name) || empty($email) || empty($phone) || empty($message)) {
    echo json_encode(['success' => false, 'message' => $lang['contact_error']]);
    exit;
}

// Email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Format d\'email invalide / Invalid email format']);
    exit;
}

// ─── Build email ─────────────────────────────────────────────
$to      = ADMIN_EMAIL;
$subject = '=?UTF-8?B?' . base64_encode('[' . COMPANY_SHORT . '] Nouveau message de ' . $name) . '?=';

$body = "
Nouveau message depuis le formulaire de contact — " . COMPANY_NAME . "
================================================================

Nom       : {$name}
Email     : {$email}
Téléphone : {$phone}
Société   : " . ($company ?: '—') . "
Service   : " . ($service ?: '—') . "

Message :
----------
{$message}

================================================================
Soumis le  : " . date('d/m/Y à H:i:s') . "
IP         : " . ($_SERVER['REMOTE_ADDR'] ?? 'unknown') . "
Langue     : {$lang_code}
";

$headers  = "From: " . MAIL_FROM_NAME . " <noreply@medshippingsolutions.com>\r\n";
$headers .= "Reply-To: {$name} <{$email}>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

// ─── Send ────────────────────────────────────────────────────
if (mail($to, $subject, $body, $headers)) {
    echo json_encode(['success' => true,  'message' => $lang['contact_success']]);
} else {
    // Log failure for debugging (optional)
    error_log('[M2S Contact] mail() failed for ' . $email . ' at ' . date('Y-m-d H:i:s'));
    echo json_encode(['success' => false, 'message' => $lang['contact_error']]);
}
