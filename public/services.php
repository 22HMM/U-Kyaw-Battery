<?php include_once __DIR__ . '/partials/header.php'; ?>
<!-- Banner -->
<header class="bg-[#FFFCFF] mt-[60px] lg:mt-[70px] xl:mt-[90px]">
    <div class="relative grid theme-container md:grid-cols-3">
        <div class="hidden md:block"></div>
        <article class="absolute z-10 flex flex-col w-full max-w-[250px] xs:max-w-[350px] sm:max-w-xl lg:max-w-2xl leading-[120%] gap-6 px-2 transform -translate-y-1/2 md:px-6 left-4 sm:left-6 top-1/2 bg-[#FFFCFF] py-6 sm:py-12 md:py-16 lg:py-24">
            <p class="text-sm capitalize md:text-base text-secondary"><?= __('services.title'); ?></p>
            <h2 class="banner-title"><?= __('services.subtitle'); ?></h2>
            <p class="text-sm md:text-base"><?= __('services.description'); ?></p>
        </article>
        <figure class="overflow-hidden md:col-span-2 aspect-w-3 aspect-h-3 xs:aspect-h-2">
            <img
                class="object-cover object-center w-full h-full"
                src="/images/services-banner.webp"
                alt="Services Banner"
                width="917"
                height="685"
                title="Banner Image of Services Page"
                fetchpriority="high"
                loading="eager" />
        </figure>
    </div>
</header>

<!-- Services -->
<?php
$services = getServices();
?>
<section class="py-[60px] md:py-[80px] theme-container space-y-[40px] md:space-y-[80px]">
    <?php foreach ($services as $service): ?>
        <div class="flex flex-col gap-6 bg-white md:items-end md:flex-row md:even:flex-row-reverse" aria-label="<?= htmlspecialchars(__("services.services.{$service['key']}.title"), ENT_QUOTES, 'UTF-8') ?>">
            <div class="w-full md:w-1/2">
                <figure class="overflow-hidden aspect-w-16 aspect-h-10">
                    <img
                        class="object-cover object-center w-full h-full"
                        src="<?= $service['image'] ?>"
                        alt="<?= __("services.services.{$service['key']}.title"); ?>"
                        width="644"
                        height="413"
                        title="<?= __("services.services.{$service['key']}.title"); ?>"
                        loading="<?= $service['key'] == 'service_1' ? 'eager' : 'lazy' ?>"
                        fetchpriority="<?= $service['key'] == 'service_1' ? 'high' : 'low' ?>" />
                    <figcaption class="sr-only"><?= __("services.services.{$service['key']}.title"); ?></figcaption>
                </figure>
            </div>
            <article class="inline-flex flex-col w-full gap-6 md:w-1/2">
                <h3 class="capitalize heading-3"><?= __("services.services.{$service['key']}.title"); ?></h3>
                <p class="content-text text-justify text-[#3E3D3D]"><?= __("services.services.{$service['key']}.description"); ?></p>
                <div>
                    <a href="/contact-us" class="text-[#1F1F1F] btn-arrow group">
                        <span class="font-semibold group-hover:underline underline-offset-4 content-text"><?= __('contact.title') ?></span>
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
</section>
<?php include_once __DIR__ . '/partials/footer.php'; ?>