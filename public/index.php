<?php

/**
 * Main entry point for the application.
 * 
 * This script initializes the routing system using the Bramus Router library, handles routing 
 * for different pages (Home, Products, Services, About Us, Contact Us), and provides a custom 
 * 404 error page. It also loads environment variables from a .env file for configuration purposes.
 * 
 * The script starts a session to enable persistent user data across requests.
 * 
 * @package Bramus Router
 * @package PHPMailer
 * @author KhantLoonThu
 * 
 * @version 1.0.0 
 */

# Start the session (needed for storing user data across requests)
session_start();

# Load environment variables from the .env file
require_once __DIR__ . '/../loadEnv.php';

# Use the loadEnv function to load variables into the environment
loadEnv(__DIR__ . '/../.env');

# Now you can use env('KEY') to access .env variables — just like in Laravel :)

# Load the autoloader for third-party libraries
require_once __DIR__ . '/../vendor/autoload.php';

use Bramus\Router\Router;

# Initialize the router
$router = new Router();

# Define route for Home page
$router->get('/', function () {
    include_once __DIR__ . '/home.php';
});

# Define route for Products page
$router->get('/products', function () {
    include_once __DIR__ . '/products.php';
});

# Define route for Services page
$router->get('/services', function () {
    include_once __DIR__ . '/services.php';
});

# Define route for About Us page
$router->get('/about-us', function () {
    include_once __DIR__ . '/about-us.php';
});

# Define route for Contact Us page
$router->get('/contact-us', function () {
    include_once __DIR__ . '/contact-us.php';
});

# Define a custom 404 error page route
$router->set404(function () {
    http_response_code(404);
    include_once __DIR__ . '/404.php';
});

# Run the router to handle the incoming request
$router->run();
