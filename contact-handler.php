<?php
/**
 * Handles submissions from the contact form on index.php.
 * Validates input, blocks obvious bots via a honeypot field, sends an email
 * to the practice, and redirects back to the contact section with a status flag.
 */

require_once __DIR__ . '/includes/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php#kontakt');
    exit;
}

// Honeypot: real visitors never fill this hidden field in.
if (!empty($_POST['website_url'])) {
    header('Location: index.php?sent=1#kontakt'); // pretend success, don't tip off bots
    exit;
}

$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$phone   = trim($_POST['phone'] ?? '');
$topic   = trim($_POST['topic'] ?? 'Sonstiges');
$message = trim($_POST['message'] ?? '');

$errors = [];

if ($name === '' || mb_strlen($name) > 120) {
    $errors[] = 'Bitte geben Sie Ihren Namen an.';
}
if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Bitte geben Sie eine gültige E-Mail-Adresse an.';
}
if ($message === '' || mb_strlen($message) > 4000) {
    $errors[] = 'Bitte geben Sie eine Nachricht ein.';
}

$allowedTopics = ['Grundpflege', 'Behandlungspflege', 'Kinderspitex', 'Palliative Pflege', 'Psychiatrische Begleitung', 'Sonstiges'];
if (!in_array($topic, $allowedTopics, true)) {
    $topic = 'Sonstiges';
}

if (!empty($errors)) {
    header('Location: index.php?sent=0#kontakt');
    exit;
}

$to      = $site['email'];
$subject = 'Neue Kontaktanfrage — ' . $topic;

$body  = "Neue Nachricht über das Kontaktformular von " . $site['name'] . "\n\n";
$body .= "Name: {$name}\n";
$body .= "E-Mail: {$email}\n";
$body .= 'Telefon: ' . ($phone !== '' ? $phone : '—') . "\n";
$body .= "Anliegen: {$topic}\n\n";
$body .= "Nachricht:\n{$message}\n";

$headers   = [];
$headers[] = 'From: ' . $site['name'] . ' Webseite <no-reply@' . preg_replace('/^www\./', '', $site['website']) . '>';
$headers[] = 'Reply-To: ' . $name . ' <' . $email . '>';
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-Type: text/plain; charset=UTF-8';

// mail() requires a properly configured mail server (e.g. sendmail/SMTP relay) on the host.
$sent = @mail($to, $subject, $body, implode("\r\n", $headers));

header('Location: index.php?sent=' . ($sent ? '1' : '0') . '#kontakt');
exit;
