<?php

/**
 * Main entry point for the application.
 * 
 * Sets up routing with Bramus Router, loads environment configs, handles session language settings,
 * and serves dynamic page routes like Home, Products, etc.
 * 
 * * * NOTE: If the project needs to be converted to a WordPress-based CMS in the future:
 *   - Replace the custom routing system with WordPress's built-in routing.
 *   - Replace manual loading of environment variables with WordPress's native configuration system.
 * 
 * @author KhantLoonThu
 * @version 1.0.0
 */

// ------------------------
// Bootstrap & Setup
// ------------------------ 

session_start();

// Set session lang from cookie if not already set, fallback to 'en'
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = $_COOKIE['lang'] ?? 'en';
}

// Load environment variables from .env file
require_once __DIR__ . '/../loadEnv.php';
loadEnv(__DIR__ . '/../.env'); // Enables use of env('KEY')

# Now you can use env('KEY') to access .env variables — just like in Laravel :)

// Load core helpers and dependencies
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/functions.php';

use Bramus\Router\Router;

// ------------------------
// Router Setup
// ------------------------

# Initialize the router
$router = new Router();

// Pages
$router->get('/', fn() => include_once __DIR__ . '/home.php');
$router->get('/products', fn() => include_once __DIR__ . '/products.php');
$router->get('/services', fn() => include_once __DIR__ . '/services.php');
$router->get('/about-us', fn() => include_once __DIR__ . '/about-us.php');
$router->get('/contact-us', fn() => include_once __DIR__ . '/contact-us.php');

// Language switcher
$router->post('/change-language', function () {
    $lang = $_POST['lang'] ?? 'en';
    if (in_array($lang, ['en', 'mm'])) {
        $_SESSION['lang'] = $lang;
        setcookie('lang', $lang, time() + (86400 * 3), "/"); // Valid for 3 days
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
});

// Handle contact form submission
$router->post('/contact-us', function () {
    // Sanitize input
    $name = trim(strip_tags($_POST['name'] ?? ''));
    $emailRaw = trim($_POST['email'] ?? '');
    $phone = trim(strip_tags($_POST['phone'] ?? ''));
    $message = trim(strip_tags($_POST['message'] ?? ''));

    // Validate email format
    $email = filter_var($emailRaw, FILTER_VALIDATE_EMAIL);

    $_SESSION['name'] = $name;
    $_SESSION['email'] = $emailRaw;
    $_SESSION['phone'] = $phone;
    $_SESSION['message'] = $message;

    // Error tracking
    unset($_SESSION['nameError'], $_SESSION['emailError'], $_SESSION['phoneError']);

    if (empty($name)) {
        $_SESSION['nameError'] = __('contact.form.name_error');
    }
    if (!$email) { // Check if the email is invalid
        $_SESSION['emailError'] = __('contact.form.email_error');
    }
    if (empty($phone)) {
        $_SESSION['phoneError'] = __('contact.form.phone_error');
    }

    // Redirect if any errors
    if (!empty($_SESSION['nameError']) || !empty($_SESSION['emailError']) || !empty($_SESSION['phoneError'])) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }

    // Send email
    try {
        if (sendMail($name, $emailRaw, $phone, $message)) {
            $_SESSION['successMessage'] = __('contact.form.success_message');
        } else {
            $_SESSION['errorMessage'] = __('contact.form.error_message');
        }
    } catch (Exception $e) {
        $_SESSION['errorMessage'] = 'Mail error: ' . $e->getMessage();
    }

    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
});

// 404 fallback
$router->set404(function () {
    http_response_code(404);
    include_once __DIR__ . '/404.php';
});

// ------------------------
// Run Application
// ------------------------

$router->run();
