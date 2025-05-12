<?php
$pageTitle = 'About Us';
include_once __DIR__ . '/partials/header.php'; ?>
<!-- Banner -->
<header class="bg-[#FFFCFF] mt-[60px] lg:mt-[70px] xl:mt-[90px]">
    <div class="relative grid theme-container md:grid-cols-3">
        <div class="hidden md:block"></div>
        <article class="absolute z-10 flex flex-col w-full max-w-[250px] xs:max-w-[350px] sm:max-w-xl lg:max-w-2xl leading-[120%] gap-6 px-2 transform -translate-y-1/2 md:px-6 left-4 sm:left-6 top-1/2 bg-[#FFFCFF] py-6 sm:py-12 md:py-16 lg:py-24">
            <p class="text-sm capitalize md:text-base text-secondary"><?= __('about.title'); ?></p>
            <h2 class="banner-title"><?= __('about.subtitle'); ?></h2>
            <p class="text-sm md:text-base"><?= __('about.description'); ?></p>
        </article>
        <figure class="overflow-hidden md:col-span-2 aspect-w-3 aspect-h-3 xs:aspect-h-2">
            <img
                class="object-cover object-center w-full h-full"
                src="/images/about-us-banner.webp"
                alt="About Us Banner"
                width="917"
                height="685"
                title="Banner Image of About Us Page"
                loading="eager" />
        </figure>
    </div>
</header>

<!-- About Content Section -->
<section class="py-[60px] md:py-[80px] text-[#020B22]">
    <div class="py-6 md:py-20" style="background-image: url('/images/page-background.webp'); background-size: cover; background-position:center; background-repeat: no-repeat;">
        <div class="theme-container">
            <article class="w-full mx-auto space-y-8 md:space-y-10 max-w-7xl">
                <header class="space-y-3">
                    <h2 class="text-center capitalize heading-2">
                        <?= __('about.about_title_1'); ?>
                    </h2>
                    <h2 class="text-center capitalize heading-2">
                        <?= __('about.about_title_2'); ?>
                    </h2>
                </header>
                <p class="mb-8 text-center text-sm md:text-base xl:text-lg text-[#020B22] lg:!leading-[170%]">
                    <?= __('about.about_description'); ?>
                </p>

                <?php
                $stats = [
                    ['value' => __('about.years'), 'label' => __('about.experience')],
                    ['value' => __('about.nation_wide'), 'label' => __('about.trusted_by')],
                    ['value' => __('about.authorized'), 'label' => __('about.distributor')],
                ];
                ?>
                <div class="flex flex-col flex-wrap items-center justify-center w-full max-w-xl mx-auto space-y-6 md:max-w-2xl xs:space-y-0 xs:flex-row xs:space-x-6 md:space-x-20">
                    <?php foreach ($stats as $stat): ?>
                        <p class="space-y-2 text-center">
                            <span class="text-[#D00416] font-bold text-base md:text-lg lg:text-xl lg:!leading-[140%] block"><?= $stat['value']; ?></span>
                            <span class="block text-[12px] md:text-sm lg:text-base"><?= $stat['label']; ?></span>
                        </p>
                    <?php endforeach; ?>
                </div>

            </article>
        </div>
    </div>
</section>
<?php include_once __DIR__ . '/partials/footer.php'; ?>