<?php include_once __DIR__ . '/partials/header.php'; ?>

<!-- Hero Section -->
<header class="bg-[#FFFCFF] mt-[60px] lg:mt-[70px] xl:mt-[90px] max-w-[2560px] 2xl:max-w-[1563px] mx-auto">
    <div class="relative flex flex-col-reverse 2xl:mx-14 gap-y-6">
        <!-- Hero Content -->
        <article class="hero-content flex flex-col justify-center space-y-6 theme-container relative lg:absolute left-0 z-30 h-[calc(100%+4px)] w-full lg:w-[65%] 2xl:w-[60%] bg-[#FFFCFF] md:-m-1 xl:-m-px">
            <header class="lg:max-w-[70%] xl:max-w-[75%] space-y-2 px-2">
                <div class="flex flex-wrap items-center gap-4 capitalize lg:gap-x-8 md:gap-y-4 text-secondary content-text">
                    <strong class="font-medium"><?= __('home.hero.reliable'); ?></strong>၊
                    <strong class="font-medium"><?= __('home.hero.high_quality'); ?></strong>၊
                    <strong class="font-medium"><?= __('home.hero.after_sale'); ?></strong>
                </div>
                <h2 class="banner-title lg:!leading-[120%]"><?= __('home.hero.welcome'); ?></h2>
            </header>
            <div class="lg:max-w-[70%] xl:max-w-[75%] space-y-6 px-2">
                <p class="text-justify content-text text-[#3E3D3D] pe-6"><?= __('home.hero.description'); ?></p>
                <div class="flex flex-wrap items-center gap-4">
                    <div class="w-full sm:w-[50%] lg:w-[60%] xl:w-[65%] max-w-[300px] md:max-w-full">
                        <a href="/products" class="relative inline-flex w-full overflow-hidden text-white bg-[#FFDB43] btn energy-btn group hover:bg-[#D00416] transition-all ease-in-out">
                            <!-- Left text -->
                            <div class="px-2 py-3 left-part text-end">
                                <span><?= __('home.hero.shop'); ?></span>
                            </div>

                            <!-- Right text -->
                            <div class="px-2 py-3 right-part">
                                <span><?= __('home.hero.now'); ?></span>
                            </div>

                            <!-- After-hover text -->
                            <div class="px-8 py-3 w-full text-center bg-[#D00416] transition-opacity duration-500 ease-in-out opacity-0 group-hover:opacity-100">
                                <span class="text-nowrap"><?= __('home.hero.get_battery'); ?></span>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="/contact-us" class="text-[#1F1F1F] btn px-8 py-3 border border-[#1F1F1F]"><?= __('home.hero.contact_us'); ?></a>
                    </div>
                </div>
                <span class="inline-block content-text text-[#020B22]"><?= __('home.hero.trusted_customers'); ?></span>
            </div>
        </article>
        <!-- Carousel -->
        <div id="controls-carousel" class="relative w-full h-[40vh] md:h-[70vh] lg:h-[80vh] xl:h-[70vh] overflow-hidden" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative z-0 w-full h-full overflow-hidden">
                <!-- Item 1 -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item="active">
                    <img src="/images/carousel-image-1.webp" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="Carousel Image 1"
                        width="1512"
                        height="685"
                        title="Carousel Image 1"
                        loading="eager"
                        fetchpriority="high" />
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="/images/carousel-image-2.webp" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="Carousel Image 2"
                        width="1512"
                        height="685"
                        title="Carousel Image 2"
                        loading="eager"
                        fetchpriority="high" />
                </div>
            </div>
            <!-- Slider controls -->
            <div class="absolute right-0 z-30 space-y-4 -translate-y-1/2 2xl:right-6 top-1/2">
                <button type="button" class="flex items-center justify-center px-4 cursor-pointer end-0 group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 md:w-16 md:h-16 bg-[#2D349540] group-hover:bg-[#2D349580] group-focus:ring-4 group-focus:ring-theme">
                        <svg class="w-4 h-4 text-white rtl:rotate-180 md:w-10 md:h-10 " aria-hidden="true" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 24H40M40 24L28 12M40 24L28 36" stroke="#FFFCFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
                <button type="button" class="flex items-center justify-center px-4 cursor-pointer start-0 group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 md:w-16 md:h-16 bg-[#2D349540] group-hover:bg-[#2D349580] group-focus:ring-4 group-focus:ring-theme">
                        <svg class="w-4 h-4 text-white rotate-180 md:w-10 md:h-10" aria-hidden="true" width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 24H40M40 24L28 12M40 24L28 36" stroke="#FFFCFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
            </div>
        </div>
    </div>
</header>

<!-- Categories Section -->
<section class="relative py-[60px] md:pt-[80px] md:pb-[160px] theme-container" aria-labelledby="products-title">
    <div class="space-y-8 lg:space-y-20 mx-[7%]">

        <!-- Section Heading -->
        <header class="space-y-6 text-center">
            <p id="products-title" class="flex items-center justify-center space-x-4">
                <svg class="w-6 h-6 shrink-0" aria-hidden="true" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_112_2975)">
                        <path d="M2.05176 6.71777C1.66363 6.71777 1.34863 7.03277 1.34863 7.4209V20.1915C1.34863 20.5796 1.66363 20.8946 2.05176 20.8946H12L13.4532 13.8062L12 6.71777H2.05176Z" fill="#FF7C48" />
                        <path d="M21.9483 6.71777H12V20.8946H21.9483C22.3364 20.8946 22.6514 20.5796 22.6514 20.1915V7.4209C22.6514 7.03277 22.3364 6.71777 21.9483 6.71777Z" fill="#FF415B" />
                        <path d="M6.07743 4.61865H2.87549C2.48718 4.61865 2.17236 4.30384 2.17236 3.91553V1.57178C2.17236 0.925605 2.69807 0.399902 3.34424 0.399902H5.60872C6.25489 0.399902 6.7806 0.925605 6.7806 1.57178V3.91553C6.78055 4.30384 6.46574 4.61865 6.07743 4.61865Z" fill="#363FB3" />
                        <path d="M21.1243 4.61865H17.9224C17.5341 4.61865 17.2192 4.30384 17.2192 3.91553V1.57178C17.2192 0.925605 17.7449 0.399902 18.3911 0.399902H20.6556C21.3018 0.399902 21.8275 0.925605 21.8275 1.57178V3.91553C21.8275 4.30384 21.5127 4.61865 21.1243 4.61865Z" fill="#191D54" />
                        <path d="M9.46191 0.399902C8.81551 0.399902 8.29004 0.925371 8.29004 1.57178V3.61365H9.69629V1.80615H12.0002L12.5861 1.06787L12.0002 0.399902H9.46191Z" fill="#363FB3" />
                        <path d="M14.5383 0.399902H12V1.80615H14.3039V3.61365H15.7102V1.57178C15.7102 0.925371 15.1847 0.399902 14.5383 0.399902Z" fill="#191D54" />
                        <path d="M7.47458 13.103H5.22852C4.8402 13.103 4.52539 13.4178 4.52539 13.8062C4.52539 14.1945 4.8402 14.5093 5.22852 14.5093H7.47458C7.86289 14.5093 8.1777 14.1945 8.1777 13.8062C8.1777 13.4178 7.86289 13.103 7.47458 13.103Z" fill="#FFDA44" />
                        <path d="M12.0001 12.3568L11.6616 13.1026H12.0001L12.3907 13.8062L12.0001 14.5088H10.5704C10.3313 14.5088 10.1087 14.3874 9.9793 14.1863C9.84992 13.9857 9.83117 13.7326 9.93008 13.5151L11.3977 10.2807C11.5098 10.0332 11.747 9.88227 12.0001 9.86914L12.2506 10.8009L12.0001 12.3568Z" fill="#FFDA44" />
                        <path d="M11.3918 16.7636L11.9998 15.3503L12.3904 16.7907L11.9998 17.7438C11.9192 17.7391 11.8381 17.7208 11.7598 17.6871C11.4031 17.5338 11.2385 17.1203 11.3918 16.7636Z" fill="#FFDA44" />
                        <path d="M18.7715 13.1033H18.3515V12.6833C18.3515 12.295 18.0367 11.9802 17.6484 11.9802C17.2601 11.9802 16.9453 12.295 16.9453 12.6833V13.1033H16.5254C16.1371 13.1033 15.8223 13.4181 15.8223 13.8064C15.8223 14.1947 16.1371 14.5095 16.5254 14.5095H16.9453V14.9294C16.9453 15.3177 17.2601 15.6325 17.6484 15.6325C18.0367 15.6325 18.3515 15.3177 18.3515 14.9294V14.5095H18.7715C19.1598 14.5095 19.4746 14.1947 19.4746 13.8064C19.4746 13.4181 19.1598 13.1033 18.7715 13.1033Z" fill="#FFB655" />
                        <path d="M12.6783 10.8616L12 12.3569V9.86924C12.1097 9.86315 12.2217 9.88283 12.3286 9.93112C12.682 10.0914 12.8386 10.5081 12.6783 10.8616Z" fill="#FFB655" />
                        <path d="M14.0756 14.0834L12.6839 17.3192C12.5695 17.5854 12.3098 17.7448 12.0375 17.7448C12.0248 17.7448 12.0122 17.7443 12 17.7439V15.3504L12.3619 14.509H12V13.1028H13.4297C13.6664 13.1028 13.8867 13.2214 14.017 13.4192C14.1469 13.6165 14.1689 13.8664 14.0756 14.0834Z" fill="#FFB655" />
                        <path d="M1.17188 3.2124C0.525469 3.2124 0 3.73787 0 4.38428V6.95209C0 7.5985 0.525469 8.12396 1.17188 8.12396H12L13.1406 5.66818L12 3.2124H1.17188Z" fill="#C2C5ED" />
                        <path d="M22.8281 3.2124H12V8.12396H22.8281C23.4745 8.12396 24 7.5985 24 6.95209V4.38428C24 3.73787 23.4745 3.2124 22.8281 3.2124Z" fill="#A4A8E4" />
                        <path d="M1.17188 19.4883C0.525469 19.4883 0 20.0138 0 20.6602V23.228C0 23.8744 0.525469 24.3998 1.17188 24.3998H12L12.7656 22.1413L12 19.4883H1.17188Z" fill="#C2C5ED" />
                        <path d="M22.8281 19.4883H12V24.3998H22.8281C23.4745 24.3998 24 23.8744 24 23.228V20.6602C24 20.0138 23.4745 19.4883 22.8281 19.4883Z" fill="#A4A8E4" />
                    </g>
                    <defs>
                        <clipPath id="clip0_112_2975">
                            <rect width="24" height="24" fill="white" transform="translate(0 0.399902)" />
                        </clipPath>
                    </defs>
                </svg>
                <span class="text-sm capitalize md:text-base lg:text-lg text-secondary"><?= __('products.home_title'); ?></span>
            </p>
            <h2 class="heading-2 lg:!leading-[120%] text-[#020B22]">
                <?= __('products.home_subtitle'); ?>
            </h2>
            <p class="text-center text-sm md:text-base lg:text-lg xl:text-lg text-[#020B22] lg:!leading-[170%]">
                <?= __('products.description'); ?>
            </p>
        </header>

        <?php $categories = getCategories(); ?>
        <div class="flex flex-wrap justify-center w-full gap-6" role="list">
            <?php foreach ($categories as $index => $category):
                $categoryId = 'category-name-' . $index;
                $categorySlug = slugify($category['name']);
            ?>
                <a href="/products/<?= $categorySlug; ?>" class="transition-colors duration-300 bg-[#FFFCFF] ease-in-out border border-[#C2C5ED] rounded-[8px] hover:bg-[#F2F3FF] hover:shadow-[0_2px_15px_0_#0000001A] p-4 w-full xs:w-[calc(50%-20px)] lg:w-[calc(33.333%-20px)]" role="listitem" aria-labelledby="<?= $categoryId; ?>">
                    <article class="space-y-6" itemscope itemtype="https://schema.org/CollectionPage">
                        <header>
                            <img
                                class="w-auto h-[30px]"
                                src="<?= htmlspecialchars($category['image']); ?>"
                                alt="<?= htmlspecialchars($category['name']); ?>"
                                width="200"
                                height="41"
                                title="<?= htmlspecialchars($category['name']); ?>"
                                loading="eager"
                                itemprop="image" />
                            <h2 id="category-name-<?= $index ?>" class="sr-only" itemprop="name">
                                <?= htmlspecialchars($category['name']); ?>
                            </h2>
                        </header>
                        <p class="text-justify content-text line-clamp-3" itemprop="description">
                            <?= __('products.categories.' . $category['id']); ?>
                        </p>
                    </article>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="relative py-[60px] md:py-[80px] max-w-[2560px] 2xl:max-w-[1563px] mx-auto" aria-labelledby="about-title">
    <div class="grid gap-12 md:grid-cols-2 md:gap-8 lg:gap-16 2xl:mx-14">
        <!-- Image with Caption -->
        <figure class="w-full overflow-hidden aspect-w-6 aspect-h-4">
            <img
                class="object-cover object-center w-full h-full select-none"
                src="/images/home-about-us-image.webp"
                alt="About U Kyaw Battery"
                width="400"
                height="300"
                title="About U Kyaw Battery"
                loading="lazy" />
            <figcaption class="sr-only">About U Kyaw Battery</figcaption>
        </figure>

        <!-- About Content -->
        <article class="theme-container md:!ps-0 flex flex-col justify-between space-y-6 md:space-y-8 lg:space-y-8 2xl:space-y-10 mb-2">
            <header class="space-y-6">
                <p id="about-title" class="flex items-center justify-start space-x-4">
                    <svg class="w-6 h-6 shrink-0" aria-hidden="true" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_112_2975)">
                            <path d="M2.05176 6.71777C1.66363 6.71777 1.34863 7.03277 1.34863 7.4209V20.1915C1.34863 20.5796 1.66363 20.8946 2.05176 20.8946H12L13.4532 13.8062L12 6.71777H2.05176Z" fill="#FF7C48" />
                            <path d="M21.9483 6.71777H12V20.8946H21.9483C22.3364 20.8946 22.6514 20.5796 22.6514 20.1915V7.4209C22.6514 7.03277 22.3364 6.71777 21.9483 6.71777Z" fill="#FF415B" />
                            <path d="M6.07743 4.61865H2.87549C2.48718 4.61865 2.17236 4.30384 2.17236 3.91553V1.57178C2.17236 0.925605 2.69807 0.399902 3.34424 0.399902H5.60872C6.25489 0.399902 6.7806 0.925605 6.7806 1.57178V3.91553C6.78055 4.30384 6.46574 4.61865 6.07743 4.61865Z" fill="#363FB3" />
                            <path d="M21.1243 4.61865H17.9224C17.5341 4.61865 17.2192 4.30384 17.2192 3.91553V1.57178C17.2192 0.925605 17.7449 0.399902 18.3911 0.399902H20.6556C21.3018 0.399902 21.8275 0.925605 21.8275 1.57178V3.91553C21.8275 4.30384 21.5127 4.61865 21.1243 4.61865Z" fill="#191D54" />
                            <path d="M9.46191 0.399902C8.81551 0.399902 8.29004 0.925371 8.29004 1.57178V3.61365H9.69629V1.80615H12.0002L12.5861 1.06787L12.0002 0.399902H9.46191Z" fill="#363FB3" />
                            <path d="M14.5383 0.399902H12V1.80615H14.3039V3.61365H15.7102V1.57178C15.7102 0.925371 15.1847 0.399902 14.5383 0.399902Z" fill="#191D54" />
                            <path d="M7.47458 13.103H5.22852C4.8402 13.103 4.52539 13.4178 4.52539 13.8062C4.52539 14.1945 4.8402 14.5093 5.22852 14.5093H7.47458C7.86289 14.5093 8.1777 14.1945 8.1777 13.8062C8.1777 13.4178 7.86289 13.103 7.47458 13.103Z" fill="#FFDA44" />
                            <path d="M12.0001 12.3568L11.6616 13.1026H12.0001L12.3907 13.8062L12.0001 14.5088H10.5704C10.3313 14.5088 10.1087 14.3874 9.9793 14.1863C9.84992 13.9857 9.83117 13.7326 9.93008 13.5151L11.3977 10.2807C11.5098 10.0332 11.747 9.88227 12.0001 9.86914L12.2506 10.8009L12.0001 12.3568Z" fill="#FFDA44" />
                            <path d="M11.3918 16.7636L11.9998 15.3503L12.3904 16.7907L11.9998 17.7438C11.9192 17.7391 11.8381 17.7208 11.7598 17.6871C11.4031 17.5338 11.2385 17.1203 11.3918 16.7636Z" fill="#FFDA44" />
                            <path d="M18.7715 13.1033H18.3515V12.6833C18.3515 12.295 18.0367 11.9802 17.6484 11.9802C17.2601 11.9802 16.9453 12.295 16.9453 12.6833V13.1033H16.5254C16.1371 13.1033 15.8223 13.4181 15.8223 13.8064C15.8223 14.1947 16.1371 14.5095 16.5254 14.5095H16.9453V14.9294C16.9453 15.3177 17.2601 15.6325 17.6484 15.6325C18.0367 15.6325 18.3515 15.3177 18.3515 14.9294V14.5095H18.7715C19.1598 14.5095 19.4746 14.1947 19.4746 13.8064C19.4746 13.4181 19.1598 13.1033 18.7715 13.1033Z" fill="#FFB655" />
                            <path d="M12.6783 10.8616L12 12.3569V9.86924C12.1097 9.86315 12.2217 9.88283 12.3286 9.93112C12.682 10.0914 12.8386 10.5081 12.6783 10.8616Z" fill="#FFB655" />
                            <path d="M14.0756 14.0834L12.6839 17.3192C12.5695 17.5854 12.3098 17.7448 12.0375 17.7448C12.0248 17.7448 12.0122 17.7443 12 17.7439V15.3504L12.3619 14.509H12V13.1028H13.4297C13.6664 13.1028 13.8867 13.2214 14.017 13.4192C14.1469 13.6165 14.1689 13.8664 14.0756 14.0834Z" fill="#FFB655" />
                            <path d="M1.17188 3.2124C0.525469 3.2124 0 3.73787 0 4.38428V6.95209C0 7.5985 0.525469 8.12396 1.17188 8.12396H12L13.1406 5.66818L12 3.2124H1.17188Z" fill="#C2C5ED" />
                            <path d="M22.8281 3.2124H12V8.12396H22.8281C23.4745 8.12396 24 7.5985 24 6.95209V4.38428C24 3.73787 23.4745 3.2124 22.8281 3.2124Z" fill="#A4A8E4" />
                            <path d="M1.17188 19.4883C0.525469 19.4883 0 20.0138 0 20.6602V23.228C0 23.8744 0.525469 24.3998 1.17188 24.3998H12L12.7656 22.1413L12 19.4883H1.17188Z" fill="#C2C5ED" />
                            <path d="M22.8281 19.4883H12V24.3998H22.8281C23.4745 24.3998 24 23.8744 24 23.228V20.6602C24 20.0138 23.4745 19.4883 22.8281 19.4883Z" fill="#A4A8E4" />
                        </g>
                        <defs>
                            <clipPath id="clip0_112_2975">
                                <rect width="24" height="24" fill="white" transform="translate(0 0.399902)" />
                            </clipPath>
                        </defs>
                    </svg>
                    <span class="text-sm capitalize md:text-base text-secondary"><?= __('about.title'); ?></span>
                </p>
                <div>
                    <h2 class="heading-2 lg:!leading-[120%] text-[#020B22]">
                        <p><?= __('about.about_title_1'); ?></p>
                    </h2>
                    <h2 class="heading-2 lg:!leading-[120%] text-[#020B22]">
                        <p><?= __('about.about_title_2'); ?></p>
                    </h2>
                </div>
            </header>
            <p class="text-justify content-text"><?= __('about.about_description'); ?></p>
            <?php
            $stats = [
                ['value' => __('about.years'), 'label' => __('about.experience')],
                ['value' => __('about.nation_wide'), 'label' => __('about.trusted_by')],
                ['value' => __('about.authorized'), 'label' => __('about.distributor')],
            ];
            ?>
            <ul class="flex flex-col flex-wrap items-center justify-start gap-y-12 xs:gap-y-6 xs:flex-row xs:gap-x-12 lg:gap-x-24" aria-label="Company Achievements">
                <?php foreach ($stats as $stat): ?>
                    <li class="space-y-2 text-center">
                        <strong class="text-[#D00416] block font-bold text-base md:text-lg lg:text-2xl lg:!leading-[140%]"><?= $stat['value']; ?></strong>
                        <span class="block text-[12px] md:text-sm lg:text-base"><?= $stat['label']; ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>

            <!-- CTA Button -->
            <nav class="text-center xs:text-start" aria-label="Call to Action">
                <a href="/contact-us" class="btn px-8 py-3 text-white border border-[#0E4DED] bg-[#0E4DED] hover:bg-[#0C40C5] hover:border-[#0C40C5]">
                    <?= __('about.read_more'); ?>
                </a>
            </nav>
        </article>
    </div>
</section>

<!-- Services Section -->
<section class="relative py-[60px] md:py-[80px]" aria-labelledby="services-title">
    <div class="space-y-8 theme-container lg:space-y-20">

        <!-- Section Heading -->
        <header class="space-y-6 text-center">
            <p id="services-title" class="flex items-center justify-center space-x-4">
                <svg class="w-6 h-6 shrink-0" aria-hidden="true" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_112_2975)">
                        <path d="M2.05176 6.71777C1.66363 6.71777 1.34863 7.03277 1.34863 7.4209V20.1915C1.34863 20.5796 1.66363 20.8946 2.05176 20.8946H12L13.4532 13.8062L12 6.71777H2.05176Z" fill="#FF7C48" />
                        <path d="M21.9483 6.71777H12V20.8946H21.9483C22.3364 20.8946 22.6514 20.5796 22.6514 20.1915V7.4209C22.6514 7.03277 22.3364 6.71777 21.9483 6.71777Z" fill="#FF415B" />
                        <path d="M6.07743 4.61865H2.87549C2.48718 4.61865 2.17236 4.30384 2.17236 3.91553V1.57178C2.17236 0.925605 2.69807 0.399902 3.34424 0.399902H5.60872C6.25489 0.399902 6.7806 0.925605 6.7806 1.57178V3.91553C6.78055 4.30384 6.46574 4.61865 6.07743 4.61865Z" fill="#363FB3" />
                        <path d="M21.1243 4.61865H17.9224C17.5341 4.61865 17.2192 4.30384 17.2192 3.91553V1.57178C17.2192 0.925605 17.7449 0.399902 18.3911 0.399902H20.6556C21.3018 0.399902 21.8275 0.925605 21.8275 1.57178V3.91553C21.8275 4.30384 21.5127 4.61865 21.1243 4.61865Z" fill="#191D54" />
                        <path d="M9.46191 0.399902C8.81551 0.399902 8.29004 0.925371 8.29004 1.57178V3.61365H9.69629V1.80615H12.0002L12.5861 1.06787L12.0002 0.399902H9.46191Z" fill="#363FB3" />
                        <path d="M14.5383 0.399902H12V1.80615H14.3039V3.61365H15.7102V1.57178C15.7102 0.925371 15.1847 0.399902 14.5383 0.399902Z" fill="#191D54" />
                        <path d="M7.47458 13.103H5.22852C4.8402 13.103 4.52539 13.4178 4.52539 13.8062C4.52539 14.1945 4.8402 14.5093 5.22852 14.5093H7.47458C7.86289 14.5093 8.1777 14.1945 8.1777 13.8062C8.1777 13.4178 7.86289 13.103 7.47458 13.103Z" fill="#FFDA44" />
                        <path d="M12.0001 12.3568L11.6616 13.1026H12.0001L12.3907 13.8062L12.0001 14.5088H10.5704C10.3313 14.5088 10.1087 14.3874 9.9793 14.1863C9.84992 13.9857 9.83117 13.7326 9.93008 13.5151L11.3977 10.2807C11.5098 10.0332 11.747 9.88227 12.0001 9.86914L12.2506 10.8009L12.0001 12.3568Z" fill="#FFDA44" />
                        <path d="M11.3918 16.7636L11.9998 15.3503L12.3904 16.7907L11.9998 17.7438C11.9192 17.7391 11.8381 17.7208 11.7598 17.6871C11.4031 17.5338 11.2385 17.1203 11.3918 16.7636Z" fill="#FFDA44" />
                        <path d="M18.7715 13.1033H18.3515V12.6833C18.3515 12.295 18.0367 11.9802 17.6484 11.9802C17.2601 11.9802 16.9453 12.295 16.9453 12.6833V13.1033H16.5254C16.1371 13.1033 15.8223 13.4181 15.8223 13.8064C15.8223 14.1947 16.1371 14.5095 16.5254 14.5095H16.9453V14.9294C16.9453 15.3177 17.2601 15.6325 17.6484 15.6325C18.0367 15.6325 18.3515 15.3177 18.3515 14.9294V14.5095H18.7715C19.1598 14.5095 19.4746 14.1947 19.4746 13.8064C19.4746 13.4181 19.1598 13.1033 18.7715 13.1033Z" fill="#FFB655" />
                        <path d="M12.6783 10.8616L12 12.3569V9.86924C12.1097 9.86315 12.2217 9.88283 12.3286 9.93112C12.682 10.0914 12.8386 10.5081 12.6783 10.8616Z" fill="#FFB655" />
                        <path d="M14.0756 14.0834L12.6839 17.3192C12.5695 17.5854 12.3098 17.7448 12.0375 17.7448C12.0248 17.7448 12.0122 17.7443 12 17.7439V15.3504L12.3619 14.509H12V13.1028H13.4297C13.6664 13.1028 13.8867 13.2214 14.017 13.4192C14.1469 13.6165 14.1689 13.8664 14.0756 14.0834Z" fill="#FFB655" />
                        <path d="M1.17188 3.2124C0.525469 3.2124 0 3.73787 0 4.38428V6.95209C0 7.5985 0.525469 8.12396 1.17188 8.12396H12L13.1406 5.66818L12 3.2124H1.17188Z" fill="#C2C5ED" />
                        <path d="M22.8281 3.2124H12V8.12396H22.8281C23.4745 8.12396 24 7.5985 24 6.95209V4.38428C24 3.73787 23.4745 3.2124 22.8281 3.2124Z" fill="#A4A8E4" />
                        <path d="M1.17188 19.4883C0.525469 19.4883 0 20.0138 0 20.6602V23.228C0 23.8744 0.525469 24.3998 1.17188 24.3998H12L12.7656 22.1413L12 19.4883H1.17188Z" fill="#C2C5ED" />
                        <path d="M22.8281 19.4883H12V24.3998H22.8281C23.4745 24.3998 24 23.8744 24 23.228V20.6602C24 20.0138 23.4745 19.4883 22.8281 19.4883Z" fill="#A4A8E4" />
                    </g>
                    <defs>
                        <clipPath id="clip0_112_2975">
                            <rect width="24" height="24" fill="white" transform="translate(0 0.399902)" />
                        </clipPath>
                    </defs>
                </svg>
                <span class="text-sm capitalize md:text-base text-secondary"><?= __('services.home_title'); ?></span>
            </p>
            <h2 class="heading-2 lg:!leading-[120%] text-[#020B22]">
                <?= __('services.subtitle'); ?>
            </h2>
        </header>

        <!-- Services -->
        <?php $services = getServices(); ?>
        <div class="grid gap-6 md:gap-8 xs:grid-cols-2 md:grid-cols-3" role="list">
            <?php foreach ($services as $index => $service):
                $serviceId = 'service-name-' . $index;
            ?>
                <div class="flex flex-col gap-6 bg-white" role="listitem" aria-labelledby="<?= $serviceId; ?>">

                    <!-- Image with caption -->
                    <figure class="overflow-hidden aspect-w-[2.75] aspect-h-1">
                        <img
                            class="object-cover object-center w-full h-full"
                            src="<?= $service['image'] ?>"
                            alt="<?= __("services.services.{$service['key']}.title"); ?>"
                            width="644"
                            height="413"
                            title="<?= __("services.services.{$service['key']}.title"); ?>"
                            loading="lazy" />
                        <figcaption class="sr-only"><?= __("services.services.{$service['key']}.title"); ?></figcaption>
                    </figure>

                    <!-- Content -->
                    <article class="inline-flex flex-col gap-6">
                        <h3 id="service-name-<?= $index; ?>" class="capitalize heading-3 line-clamp-1 lg:!leading-[180%]"><?= __("services.services.{$service['key']}.title"); ?></h3>
                        <p class="content-text text-justify text-[#3E3D3D] line-clamp-3"><?= __("services.services.{$service['key']}.description"); ?></p>
                        <div>
                            <a href="/services" class="text-[#1F1F1F] btn-arrow group">
                                <span class="font-semibold transition-all duration-300 ease-linear underline-offset-4 content-text"><?= __('services.view_details') ?></span>
                                <svg class="btn-arrow__icon group-hover:transform group-hover:translate-x-1 group-focus:translate-x-1 group-hover:text-[#0C40C5] group-focus:text-[#0C40C5]"
                                    aria-hidden="true"
                                    focusable="false"
                                    width="25"
                                    height="25"
                                    viewBox="0 0 25 25"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.6665 12.6265H20.6665M20.6665 12.6265L14.6665 6.62646M20.6665 12.6265L14.6665 18.6265"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- Buy Battery Online Section -->
<section class="relative py-[60px] md:py-[80px]" aria-labelledby="buy-battery-title">
    <!-- Background Layers -->
    <div class="absolute inset-0 bg-[#0E4DED]/80 z-0" aria-hidden="true"></div>
    <div class="absolute inset-0 bg-[url('/images/buy-batteries-online-background.webp')] bg-cover bg-center bg-no-repeat z-[-1] bg-opacity-20" aria-hidden="true"></div>

    <!-- Content -->
    <div class="relative z-10 grid gap-12 text-white md:grid-cols-2 theme-container">
        <!-- Text Content -->
        <article class="flex items-center justify-center">
            <div class="space-y-10">
                <header class="space-y-8">
                    <h2 id="buy-battery-title" class="capitalize heading-2">
                        <?= __('home.buy_battery.title'); ?>
                    </h2>
                    <p class="content-text">
                        <?= __('home.buy_battery.description'); ?>
                    </p>
                </header>
                <nav class="flex flex-wrap items-center gap-4" aria-label="Buy Battery Actions">
                    <a href="/contact-us" class="bg-white border border-white btn px-8 py-3 text-[#0C40C5] hover:bg-[#AEC3FA] hover:border-[#AEC3FA]">
                        <?= __('home.buy_battery.buy_now'); ?>
                    </a>
                    <a href="/services" class="text-white bg-transparent border border-white btn px-8 py-3 hover:border-[#3E3D3D] hover:text-[#3E3D3D]">
                        <?= __('home.buy_battery.read_details'); ?>
                    </a>
                </nav>
            </div>
        </article>

        <!-- Image -->
        <figure class="flex items-center justify-center">
            <img
                class="w-[200px] h-[200px] md:w-[300px] md:h-[300px] object-contain"
                src="/images/mr-battery.webp"
                alt="Mr. Battery character illustration"
                width="300"
                height="300"
                title="Mr. Battery"
                loading="lazy" />
            <figcaption class="sr-only">Mr Battery's Image</figcaption>
        </figure>
    </div>
</section>

<!-- Testimonial Section -->
<section class="relative py-[60px] md:py-[80px]" aria-labelledby="testimonial-title">
    <div class="grid items-center gap-10 md:gap-20 lg:gap-x-44 theme-container md:grid-cols-2">

        <!-- Testimonial Content -->
        <article class="space-y-6 md:space-y-8">
            <svg aria-hidden="true" role="presentation" class="w-10 h-10 shrink-0" width="43" height="35" viewBox="0 0 43 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M42.28 34.7766H26.04C24.4533 29.6432 23.66 24.3232 23.66 18.8166C23.66 13.2166 25.1067 8.78323 28 5.51656C30.9867 2.15656 35.3733 0.476562 41.16 0.476562V8.31656C36.4933 8.31656 34.16 11.1632 34.16 16.8566V19.5166H42.28V34.7766ZM18.62 34.7766H2.38C0.793333 29.6432 0 24.3232 0 18.8166C0 13.2166 1.44667 8.78323 4.34 5.51656C7.32667 2.15656 11.7133 0.476562 17.5 0.476562V8.31656C12.8333 8.31656 10.5 11.1632 10.5 16.8566V19.5166H18.62V34.7766Z" fill="#FB3748" fill-opacity="0.1" />
            </svg>
            <header>
                <h3 id="testimonial-title" class="heading-3 text-justify lg:!leading-[140%]">
                    “<?= __('home.testimonial.title'); ?>”
                </h3>
            </header>
            <blockquote class="text-sm md:text-base lg:text-lg text-[#3E3D3D] text-justify">
                <p><?= __('home.testimonial.description'); ?></p>
                <footer class="mt-4 text-xs text-gray-500">
                    <!-- Set sr only to hide on UI -->
                    <cite class="not-italic sr-only">- Scope Battery, Trade Boss Trading Co. Ltd</cite>
                </footer>
            </blockquote>
        </article>

        <!-- Image with Caption -->
        <figure class="relative overflow-hidden rounded-[20px]" role="img" aria-label="Testimonial letter from Scope Battery">
            <img
                class="object-cover object-center w-full h-full select-none"
                src="/images/testimonial-bg.webp"
                alt="Testimonial Background"
                width="400"
                height="300"
                title="Testimonial Thanks Letter Image"
                loading="lazy" />
            <figcaption class="absolute inset-x-0 bottom-0 bg-[linear-gradient(360deg,_#000000_0%,_rgba(0,0,0,0)_100%)] text-white p-4 md:p-6 lg:p-8 space-y-2">
                <p class="content-text">Scope Battery</p>
                <p class="text-[#A1A1AA] text-xs md:text-sm">Trade Boss Trading Co. Ltd</p>
            </figcaption>
        </figure>
    </div>
</section>

<?php include_once __DIR__ . '/partials/footer.php'; ?>