<?php $currentPath = $_SERVER['REQUEST_URI']; ?>

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

    <nav class="fixed top-0 left-0 z-50 w-full py-2 bg-white" role="navigation" aria-label="Main Navigation">
        <section class="flex items-center justify-between theme-container">

            <!-- Site Identity -->
            <a href="/" class="flex items-center focus:outline-none focus:opacity-70">
                <img src="/images/main-logo.png"
                    alt="U Kyaw Battery Sales & Services"
                    width="300"
                    height="80"
                    loading="eager"
                    title="U Kyaw Battery Sales & Services"
                    class="w-auto h-[40px] xs:h-[45px] md:h-[50px] lg:h-[60px] xl:h-[80px]" />
                <h1 class="sr-only"><?= env('APP_NAME'); ?></h1>
            </a>

            <!-- Mobile Menu Toggle -->
            <button class="block md:hidden hamburger-menu w-[30px] h-[30px] md:w-[40px] md:h-[40px]"
                type="button"
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
            </button>


            <!-- Nav links for large screens -->
            <ul class="items-center hidden space-x-3 text-sm md:text-[12px] lg:text-sm font-normal capitalize transition-all duration-300 ease-in-out md:flex lg:space-x-5">
                <li><a href="/" class="nav-link lg:px-4 xl:px-6 px-2 py-6 <?= ($currentPath == '/') ? 'active' : ''; ?>"><?= __('navbar.home'); ?></a></li>
                <li><a href="/products" class="nav-link lg:px-2 xl:px-6 px-2 py-6 <?= ($currentPath == '/products') ? 'active' : ''; ?>"><?= __('navbar.products'); ?></a></li>
                <li><a href="/services" class="nav-link lg:px-2 xl:px-6 px-2 py-6 <?= ($currentPath == '/services') ? 'active' : ''; ?>"><?= __('navbar.services'); ?></a></li>
                <li><a href="/about-us" class="nav-link lg:px-2 xl:px-6 px-2 py-6 <?= ($currentPath == '/about-us') ? 'active' : ''; ?>"><?= __('navbar.about_us'); ?></a></li>
                <li><a href="/contact-us" class="nav-link lg:px-2 xl:px-6 px-2 py-6 <?= ($currentPath == '/contact-us') ? 'active' : ''; ?>"><?= __('navbar.contact_us'); ?></a></li>
                <li>
                    <!-- Dropdown button -->
                    <button id="language-dropdown-button" data-dropdown-toggle="language-dropdown"
                        class="text-white border border-[#E9E5E9] rounded focus:outline-none px-2 lg:px-3 py-2.5 text-center inline-flex items-center" type="button">
                        <?php if ($_SESSION['lang'] == 'en'): ?>
                            <span class="sr-only">English Language</span>
                            <img class="w-[30px] h-[20px] xl:w-[48px] xl:h-[36px]"
                                src="/images/US.png"
                                alt="US Flag"
                                width="48"
                                height="36"
                                title="US Flag"
                                loading="eager" />
                        <?php elseif ($_SESSION['lang'] == 'mm'): ?>
                            <span class="sr-only">Burmese Language</span>
                            <img class="w-[30px] h-[20px] xl:w-[48px] xl:h-[36px]"
                                src="/images/MM.png"
                                alt="MM Flag"
                                width="48"
                                height="36"
                                title="MM Flag"
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
                    <div id="language-dropdown" class="z-10 hidden w-32 bg-transparent">
                        <ul class="space-y-1 text-sm text-gray-700" aria-labelledby="language-dropdown-button">
                            <li>
                                <form action="/change-language" method="post" class="w-full">
                                    <input type="hidden" name="lang" value="en">
                                    <button type="submit" class="block w-full px-4 py-2 bg-white hover:bg-gray-100">
                                        <span class="sr-only">English Language</span>
                                        <img class="w-[30px] h-[20px] lg:w-[48px] lg:h-[36px]"
                                            src="/images/US.png"
                                            alt="US Flag"
                                            width="48"
                                            height="36"
                                            title="US Flag"
                                            loading="eager" />
                                    </button>
                                </form>
                            </li>
                            <li>
                                <form action="/change-language" method="post" class="w-full">
                                    <input type="hidden" name="lang" value="mm">
                                    <button type="submit" class="block w-full px-4 py-2 bg-white hover:bg-gray-100">
                                        <span class="sr-only">Burmese Language</span>
                                        <img class="w-[30px] h-[20px] lg:w-[48px] lg:h-[36px]"
                                            src="/images/MM.png"
                                            alt="MM Flag"
                                            width="48"
                                            height="36"
                                            title="MM Flag"
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
            <button type="button" data-drawer-hide="mobile-nav-links-drawer" aria-controls="mobile-nav-links-drawer" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close menu</span>
            </button>
            <ul class="flex flex-col mt-10 space-y-5 text-sm font-normal capitalize transition-all duration-300 ease-in-out theme-container md:hidden">
                <li><a href="/" class="nav-link p-2 <?= ($currentPath == '/') ? 'active' : ''; ?>"><?= __('navbar.home'); ?></a></li>
                <li><a href="/products" class="nav-link p-2 <?= ($currentPath == '/products') ? 'active' : ''; ?>"><?= __('navbar.products'); ?></a></li>
                <li><a href="/services" class="nav-link p-2 <?= ($currentPath == '/services') ? 'active' : ''; ?>"><?= __('navbar.services'); ?></a></li>
                <li><a href="/about-us" class="nav-link p-2 <?= ($currentPath == '/about-us') ? 'active' : ''; ?>"><?= __('navbar.about_us'); ?></a></li>
                <li><a href="/contact-us" class="nav-link p-2 <?= ($currentPath == '/contact-us') ? 'active' : ''; ?>"><?= __('navbar.contact_us'); ?></a></li>
                <li>
                    <!-- Dropdown button -->
                    <button id="language-dropdown-button-sm" data-dropdown-toggle="language-dropdown-sm"
                        class="border border-[#E9E5E9] rounded focus:outline-none px-2 lg:px-3 py-2.5 text-center inline-flex items-center w-full justify-between" type="button">
                        <?php if ($_SESSION['lang'] == 'en'): ?>
                            <div class="flex items-center gap-2">
                                <img class="w-[30px] h-[20px] lg:w-[48px] lg:h-[36px]"
                                    src="/images/US.png"
                                    alt="US Flag"
                                    width="48"
                                    height="36"
                                    title="US Flag"
                                    loading="eager" />
                                <span>English</span>
                            </div>
                        <?php elseif ($_SESSION['lang'] == 'mm'): ?>
                            <div class="flex items-center gap-2">
                                <img class="w-[30px] h-[20px] lg:w-[48px] lg:h-[36px]"
                                    src="/images/MM.png"
                                    alt="MM Flag"
                                    width="48"
                                    height="36"
                                    title="MM Flag"
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
                            <li>
                                <form action="/change-language" method="post" class="w-full">
                                    <input type="hidden" name="lang" value="en">
                                    <button type="submit" class="flex items-center w-full gap-2 px-4 py-2 bg-white hover:bg-gray-100">
                                        <img class="w-[30px] h-[20px] lg:w-[48px] lg:h-[36px]"
                                            src="/images/US.png"
                                            alt="US Flag"
                                            width="48"
                                            height="36"
                                            title="US Flag"
                                            loading="eager" />
                                        <span>English</span>
                                    </button>
                                </form>
                            </li>
                            <li>
                                <form action="/change-language" method="post" class="w-full">
                                    <input type="hidden" name="lang" value="mm">
                                    <button type="submit" class="flex items-center w-full gap-2 px-4 py-2 bg-white hover:bg-gray-100">
                                        <img class="w-[30px] h-[20px] lg:w-[48px] lg:h-[36px]"
                                            src="/images/MM.png"
                                            alt="MM Flag"
                                            width="48"
                                            height="36"
                                            title="MM Flag"
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