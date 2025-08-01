<?php

/** Get the current path from the request URI */
$currentPath = $_SERVER['REQUEST_URI'];

/** Define page-specific boolean flags for easier reuse in navigation */
$isHome = $currentPath === '/';
$isProducts = $currentPath === '/products' || str_starts_with($currentPath, '/products/');
$isServices = $currentPath === '/services';
$isAbout = $currentPath === '/about-us';
$isContact = $currentPath === '/contact-us';
?>

<!DOCTYPE html>
<html lang="<?= $_SESSION['lang']; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($pageTitle) ? "$pageTitle | " . env('APP_NAME') : env('APP_NAME') ?></title>

    <!-- Meta tags for SEO -->
    <meta name="description" content="U Kyaw Battery offers a wide range of batteries for homes, businesses, and vehicles, with over 20 years of experience and a focus on customer satisfaction.">
    <meta name="theme-color" content="#363FB3">
    <meta name="author" content="U Kyaw Battery">

    <!-- Favicons for various devices -->
    <link rel="icon" type="image/png" href="/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon/favicon.svg" />
    <link rel="shortcut icon" href="/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png" />
    <link rel="manifest" href="/favicon/site.webmanifest" />

    <!-- Preload fonts -->
    <link rel="preload" href="/fonts/IBMPlexSans-Bold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="/fonts/Inter_18pt-Regular.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="/fonts/NotoSansMyanmar-Regular.ttf" as="font" type="font/ttf" crossorigin>

    <!-- Preload images -->
    <link rel="preload" href="/images/main-logo.webp" as="image">
    <link rel="preload" href="/images/US.webp" as="image">
    <link rel="preload" href="/images/MM.webp" as="image">
    <link rel="preload" href="/images/products-banner.webp" as="image">
    <link rel="preload" href="/images/services-banner.webp" as="image">
    <link rel="preload" href="/images/about-us-banner.webp" as="image">
    <link rel="preload" href="/images/contact-us-banner.webp" as="image">
    <link rel="preload" href="/images/carousel-image-1.webp" as="image">
    <link rel="preload" href="/images/carousel-image-2.webp" as="image">
    <link rel="preload" href="/images/footer-logo.webp" as="image">

    <!-- Canonical URL for SEO -->
    <link rel="canonical" href="<?= htmlspecialchars((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8') ?>">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="/css/app.css">
</head>

<body class="bg-[#FFFCFF]">

    <nav class="fixed top-0 left-0 z-50 w-full pt-2 pb-[2px] bg-[#FFFCFF]" role="navigation" aria-label="Main Navigation">
        <section class="flex items-center justify-between theme-container">

            <!-- Site Identity -->
            <a href="/" class="flex items-center focus:outline-none focus:opacity-70 focus-visible:ring-2 focus-visible:ring-theme focus-visible:ring-offset-2" aria-label="<?= env('APP_NAME') ?>">
                <img src="/images/main-logo.webp"
                    alt="U Kyaw Battery Sales & Services"
                    width="300"
                    height="80"
                    fetchpriority="high"
                    loading="eager"
                    class="w-auto h-[40px] xs:h-[45px] md:h-[50px] lg:h-[60px] xl:h-[80px]" />
                <h1 class="sr-only"><?= env('APP_NAME'); ?></h1>
            </a>

            <!-- Mobile Menu Toggle -->
            <button class="block md:hidden hamburger-menu w-[30px] h-[30px] md:w-[40px] md:h-[40px] focus:outline-none focus:ring-2 focus:ring-theme focus:ring-offset-2"
                type="button"
                id="toggle-button"
                aria-expanded="false"
                data-drawer-target="mobile-nav-links-drawer"
                data-drawer-show="mobile-nav-links-drawer"
                data-drawer-placement="right"
                aria-controls="mobile-nav-links-drawer">
                <svg class="w-full h-full cursor-pointer shrink-0"
                    width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="hamburger line-1" d="M6.25 8C5.55965 8 5 8.55965 5 9.25C5 9.94035 5.55965 10.5 6.25 10.5H33.75C34.4403 10.5 35 9.94035 35 9.25C35 8.55965 34.4403 8 33.75 8H6.25Z" fill="black" />
                    <path class="hamburger line-2" d="M6.25 15.5C5.55965 15.5 5 16.0597 5 16.75C5 17.4404 5.55965 18 6.25 18H33.75C34.4403 18 35 17.4404 35 16.75C35 16.0597 34.4403 15.5 33.75 15.5H6.25Z" fill="black" />
                    <path class="hamburger line-3" d="M6.25 22.5C5.55965 22.5 5 23.0597 5 23.75C5 24.4404 5.55965 25 6.25 25H33.75C34.4403 25 35 24.4404 35 23.75C35 23.0597 34.4403 22.5 33.75 22.5H6.25Z" fill="black" />
                    <path class="hamburger line-4" d="M6.25 29.5C5.55965 29.5 5 30.0597 5 30.75C5 31.4404 5.55965 32 6.25 32H33.75C34.4403 32 35 31.4404 35 30.75C35 30.0597 34.4403 29.5 33.75 29.5H6.25Z" fill="black" />
                </svg>
                <span class="sr-only">Toggle Button</span>
            </button>


            <!-- Nav links for large screens -->
            <ul class="items-center hidden space-x-3 text-sm md:text-[12px] lg:text-base font-normal capitalize transition-all duration-300 ease-in-out md:flex lg:space-x-5">
                <li>
                    <a href="/" class="nav-link lg:px-4 xl:px-6 px-2 py-[18px] lg:py-[22px] xl:py-8 <?= $isHome ? 'active' : ''; ?>"
                        <?= $isHome ? 'aria-current="page"' : '' ?>
                        aria-label="<?= __('navbar.home'); ?>">
                        <?= __('navbar.home'); ?>
                    </a>
                </li>
                <li>
                    <a href="/products" class="nav-link lg:px-2 xl:px-6 px-2 py-[18px] lg:py-[22px] xl:py-8 <?= $isProducts ? 'active' : ''; ?>"
                        <?= $isProducts ? 'aria-current="page"' : '' ?>>
                        <?= __('navbar.products'); ?>
                    </a>
                </li>
                <li>
                    <a href="/services" class="nav-link lg:px-2 xl:px-6 px-2 py-[18px] lg:py-[22px] xl:py-8 <?= $isServices ? 'active' : ''; ?>"
                        <?= $isServices ? 'aria-current="page"' : '' ?>>
                        <?= __('navbar.services'); ?>
                    </a>
                </li>
                <li>
                    <a href="/about-us" class="nav-link lg:px-2 xl:px-6 px-2 py-[18px] lg:py-[22px] xl:py-8 <?= $isAbout ? 'active' : ''; ?>"
                        <?= $isAbout ? 'aria-current="page"' : '' ?>>
                        <?= __('navbar.about_us'); ?>
                    </a>
                </li>
                <li>
                    <a href="/contact-us" class="nav-link lg:px-2 xl:px-6 px-2 py-[18px] lg:py-[22px] xl:py-8 <?= $isContact ? 'active' : ''; ?>"
                        <?= $isContact ? 'aria-current="page"' : '' ?>>
                        <?= __('navbar.contact_us'); ?>
                    </a>
                </li>
                <li>
                    <!-- Dropdown button -->
                    <button id="language-dropdown-button" data-dropdown-toggle="language-dropdown"
                        class="text-white border border-[#E9E5E9] rounded focus:outline-none px-2 lg:px-3 py-2.5 text-center inline-flex items-center focus:ring-2 focus:ring-theme focus:ring-offset-2" type="button">
                        <?php if ($_SESSION['lang'] == 'en'): ?>
                            <span class="sr-only">English Language</span>
                            <img class="w-[38px] h-[28px] xl:w-[48px] xl:h-[36px]"
                                src="/images/US.webp"
                                alt="US Flag"
                                width="48"
                                height="36"
                                fetchpriority="high"
                                loading="eager" />
                        <?php elseif ($_SESSION['lang'] == 'mm'): ?>
                            <span class="sr-only">Burmese Language</span>
                            <img class="w-[38px] h-[28px] xl:w-[48px] xl:h-[36px]"
                                src="/images/MM.webp"
                                alt="MM Flag"
                                width="48"
                                height="36"
                                fetchpriority="high"
                                loading="eager" />
                        <?php endif; ?>
                        <svg class="w-6 h-6 ms-2 lg:ms-5" aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_284_100" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                <rect width="24" height="24" fill="#D9D9D9" />
                            </mask>
                            <g mask="url(#mask0_284_100)">
                                <path d="M10 17V7L15 12L10 17Z" fill="#1F1F1F" />
                            </g>
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="language-dropdown" class="z-10 hidden bg-transparent md:w-24 lg:w-28 xl:w-32">
                        <ul class="space-y-1 text-sm text-gray-700" aria-labelledby="language-dropdown-button">
                            <li>
                                <form action="/change-language" method="post" class="w-full">
                                    <input type="hidden" name="lang" value="en">
                                    <button type="submit" class="block w-full px-4 py-2 bg-white hover:bg-[#DAE4FF] focus:outline-none focus:ring-2 focus:ring-theme focus:ring-offset-2">
                                        <span class="sr-only">English Language</span>
                                        <img class="w-[38px] h-[28px] xl:w-[48px] xl:h-[36px]"
                                            src="/images/US.webp"
                                            alt="US Flag"
                                            width="48"
                                            height="36"
                                            fetchpriority="high"
                                            loading="eager" />
                                    </button>
                                </form>
                            </li>
                            <li>
                                <form action="/change-language" method="post" class="w-full">
                                    <input type="hidden" name="lang" value="mm">
                                    <button type="submit" class="block w-full px-4 py-2 bg-white hover:bg-[#DAE4FF] focus:outline-none focus:ring-2 focus:ring-theme focus:ring-offset-2">
                                        <span class="sr-only">Burmese Language</span>
                                        <img class="w-[38px] h-[28px] xl:w-[48px] xl:h-[36px]"
                                            src="/images/MM.webp"
                                            alt="MM Flag"
                                            width="48"
                                            height="36"
                                            fetchpriority="high"
                                            loading="eager" />
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </section>

        <!-- Nav links for small screens -->
        <div id="mobile-nav-links-drawer" class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white w-72" tabindex="-1" aria-labelledby="mobile-nav-links-drawer-title">
            <h2 id="mobile-nav-links-drawer-title" class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 sr-only">
                <?= env('APP_NAME'); ?>
            </h2>
            <button type="button" id="close-menu" data-drawer-hide="mobile-nav-links-drawer" aria-controls="mobile-nav-links-drawer" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close menu</span>
            </button>
            <ul class="flex flex-col mt-10 space-y-5 text-sm font-normal capitalize transition-all duration-300 ease-in-out theme-container md:hidden">
                <li>
                    <a href="/" class="nav-link p-2 <?= $isHome ? 'active' : ''; ?>"
                        <?= $isHome ? 'aria-current="page"' : '' ?>>
                        <?= __('navbar.home'); ?>
                    </a>
                </li>
                <li>
                    <a href="/products" class="nav-link p-2 <?= $isProducts ? 'active' : ''; ?>"
                        <?= $isProducts ? 'aria-current="page"' : '' ?>>
                        <?= __('navbar.products'); ?>
                    </a>
                </li>
                <li>
                    <a href="/services" class="nav-link p-2 <?= $isServices ? 'active' : ''; ?>"
                        <?= $isServices ? 'aria-current="page"' : '' ?>>
                        <?= __('navbar.services'); ?>
                    </a>
                </li>
                <li>
                    <a href="/about-us" class="nav-link p-2 <?= $isAbout ? 'active' : ''; ?>"
                        <?= $isAbout ? 'aria-current="page"' : '' ?>>
                        <?= __('navbar.about_us'); ?>
                    </a>
                </li>
                <li>
                    <a href="/contact-us" class="nav-link p-2 <?= $isContact ? 'active' : ''; ?>"
                        <?= $isContact ? 'aria-current="page"' : '' ?>>
                        <?= __('navbar.contact_us'); ?>
                    </a>
                </li>
                <li>
                    <!-- Dropdown button -->
                    <button id="language-dropdown-button-sm" data-dropdown-toggle="language-dropdown-sm"
                        class="border border-[#E9E5E9] rounded focus:outline-none px-2 lg:px-3 py-2.5 text-center inline-flex items-center w-full justify-between focus:ring-2 focus:ring-theme focus:ring-offset-2" type="button">
                        <?php if ($_SESSION['lang'] == 'en'): ?>
                            <div class="flex items-center gap-2">
                                <img class="w-[38px] h-[28px] lg:w-[48px] lg:h-[36px]"
                                    src="/images/US.webp"
                                    alt="US Flag"
                                    width="48"
                                    height="36"
                                    fetchpriority="high"
                                    loading="eager" />
                                <span>English</span>
                            </div>
                        <?php elseif ($_SESSION['lang'] == 'mm'): ?>
                            <div class="flex items-center gap-2">
                                <img class="w-[38px] h-[28px] lg:w-[48px] lg:h-[36px]"
                                    src="/images/MM.webp"
                                    alt="MM Flag"
                                    width="48"
                                    height="36"
                                    fetchpriority="high"
                                    loading="eager" />
                                <span>Burmese</span>
                            </div>
                        <?php endif; ?>
                        <svg class="w-6 h-6 ms-2 lg:ms-5" aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_284_100" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                <rect width="24" height="24" fill="#D9D9D9" />
                            </mask>
                            <g mask="url(#mask0_284_100)">
                                <path d="M10 17V7L15 12L10 17Z" fill="#1F1F1F" />
                            </g>
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="language-dropdown-sm" class="z-10 hidden w-full bg-transparent theme-container" role="menu" aria-orientation="vertical" aria-labelledby="language-dropdown-button-sm">
                        <ul class="space-y-1 text-sm text-gray-700" aria-labelledby="language-dropdown-button-sm">
                            <li role="menuitem">
                                <form action="/change-language" method="post" class="w-full">
                                    <input type="hidden" name="lang" value="en">
                                    <button type="submit" class="flex items-center w-full gap-2 px-4 py-2 bg-white hover:bg-[#DAE4FF] focus:outline-none focus:ring-2 focus:ring-theme focus:ring-offset-2">
                                        <img class="w-[38px] h-[28px] lg:w-[48px] lg:h-[36px]"
                                            src="/images/US.webp"
                                            alt="US Flag"
                                            width="48"
                                            height="36"
                                            fetchpriority="high"
                                            loading="eager" />
                                        <span>English</span>
                                    </button>
                                </form>
                            </li>
                            <li role="menuitem">
                                <form action="/change-language" method="post" class="w-full">
                                    <input type="hidden" name="lang" value="mm">
                                    <button type="submit" class="flex items-center w-full gap-2 px-4 py-2 bg-white hover:bg-[#DAE4FF] focus:outline-none focus:ring-2 focus:ring-theme focus:ring-offset-2">
                                        <img class="w-[38px] h-[28px] lg:w-[48px] lg:h-[36px]"
                                            src="/images/MM.webp"
                                            alt="MM Flag"
                                            width="48"
                                            height="36"
                                            fetchpriority="high"
                                            loading="eager" />
                                        <span>Burmese</span>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>