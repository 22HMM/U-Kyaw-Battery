<?php
# Start the session
session_start();

# Load environment variables from .env file
require_once __DIR__ . '/../../loadEnv.php';
loadEnv(__DIR__ . '/../../.env');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo env('APP_NAME'); ?></title>

    <!-- Meta tags for SEO -->
    <meta name="description" content="U Kyaw Battery offers a wide range of batteries for homes, businesses, and vehicles, with over 20 years of experience and a focus on customer satisfaction.">
    <meta name="theme-color" content="#363FB3">

    <!-- Favicons for various devices -->
    <link rel="preload" href="/images/footer-logo.png" as="image">
    <link rel="icon" type="image/png" href="/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon/favicon.svg" />
    <link rel="shortcut icon" href="/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png" />
    <link rel="manifest" href="/favicon/site.webmanifest" />

    <!-- Canonical URL for SEO -->
    <link rel="canonical" href="<?= htmlspecialchars((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8') ?>">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>