<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

/**
 * Translate a given key using dot notation.
 *
 * Example: __('navbar.home') will return the value from $translations['navbar']['home']
 *
 * @param string $key The translation key in dot notation.
 * @return string The translated string or the original key if not found.
 */
function __(string $key): string
{
    $lang = $_SESSION['lang'] ?? 'en';
    $translations = require __DIR__ . "/lang/{$lang}.php";

    $segments = explode('.', $key);
    $value = $translations;

    foreach ($segments as $segment) {
        if (is_array($value) && array_key_exists($segment, $value)) {
            $value = $value[$segment];
        } else {
            return $key;
        }
    }

    return is_string($value) ? $value : $key;
}

/**
 * Sends a contact form message to the site administrator using PHPMailer.
 *
 * @param string $name    The sender's name.
 * @param string $email   The sender's email address.
 * @param string $phone   The sender's phone number.
 * @param string $message The sender's message content.
 *
 * @return bool Returns true if the email was sent successfully.
 *
 * @throws Exception If the email could not be sent.
 */
function sendMail(string $name, string $email, string $phone, string $message): bool
{
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = env('MAIL_HOST');
        $mail->SMTPAuth   = true;
        $mail->Username   = env('MAIL_USERNAME');
        $mail->Password   = env('MAIL_PASSWORD');
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = env('MAIL_PORT');

        $mail->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
        $mail->addAddress(env('MAIL_TO_ADDRESS'), env('MAIL_TO_NAME'));
        $mail->addReplyTo($email, $name);

        $mail->isHTML(true);
        $mail->Subject = 'New message from ' . htmlspecialchars($name);
        $mail->Body    = "
             <div style='font-family: Inter, sans-serif; color: #000; line-height: 1.6; max-width: 600px; background-color: #fff; padding: 20px; border: 2px solid #000; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);'>
                <h2 style='text-align:center; color:#000;'>New Contact Form Submission</h2>
                <p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>
                <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
                <p><strong>Phone:</strong> " . htmlspecialchars($phone) . "</p>
                <p><strong>Message:</strong><br>" . nl2br(htmlspecialchars($message)) . "</p>
                <div style='margin-top:20px; text-align:center; font-size:12px; color:#000;'>Thank you for getting in touch!</div>
            </div>
        ";

        return $mail->send();
    } catch (Exception $e) {
        throw new Exception("Message could not be sent. Mailer Error: {$e->getMessage()}");
    }
}
