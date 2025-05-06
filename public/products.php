<?php include_once __DIR__ . '/partials/header.php'; ?>
<!-- Banner -->
<header class="bg-[#FFFCFF] mt-[60px] lg:mt-[70px] xl:mt-[90px]">
    <div class="relative grid theme-container md:grid-cols-3">
        <div class="hidden md:block"></div>
        <article class="absolute z-10 flex flex-col w-full max-w-[250px] xs:max-w-[350px] sm:max-w-xl lg:max-w-2xl leading-[120%] gap-6 px-2 transform -translate-y-1/2 md:px-6 left-4 sm:left-6 top-1/2 bg-[#FFFCFF] py-6 sm:py-12 md:py-16 lg:py-24">
            <p id="products-heading" class="text-sm capitalize md:text-base text-secondary"><?= __('products.title'); ?></p>
            <h2 class="banner-title"><?= __('products.subtitle'); ?></h2>
            <p class="text-sm md:text-base"><?= __('products.description'); ?></p>
        </article>
        <figure class="overflow-hidden md:col-span-2 aspect-w-3 aspect-h-3 xs:aspect-h-2">
            <img
                class="object-cover object-center w-full h-full"
                src="/images/products-banner.png"
                alt="Products Banner"
                width="917"
                height="685"
                title="Banner Image of Products Page"
                fetchpriority="high"
                loading="eager" />
        </figure>
    </div>
</header>

<!-- Products -->
<?php
$categories = getCategories(); // Get all categories

// Get current category slug or default first one 
$currentCategorySlug = $_SESSION['category'] ?? slugify($categories[0]['name']);

// Find the full category info based on slug
$currentCategory = getCategoryBySlug($currentCategorySlug);

// If category is found, get related products
$currentProducts = $currentCategory ? getProductsByCategoryId($currentCategory['id']) : [];
?>
<section class="py-[60px] md:py-[80px]" aria-labelledby="products-heading">
    <div class="grid gap-12 py-2 md:gap-4 lg:gap-8 theme-container lg:grid-cols-5">
        <aside>
            <ul class="flex flex-row flex-wrap lg:flex-col border border-[#2D349566]">
                <?php foreach ($categories as $category): ?>
                    <?php
                    $categorySlug = slugify($category['name']);
                    $isActive = $categorySlug === $currentCategorySlug;
                    ?>
                    <li class="">
                        <a href="/products/<?= $categorySlug; ?>"
                            class="tab <?= $isActive ? 'tab--active' : 'tab--default' ?>"
                            <?= $isActive ? 'aria-current="page"' : '' ?>>
                            <?= $category['name'] ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </aside>
        <main class="space-y-8 lg:col-span-4" role="main" aria-labelledby="products-heading-sr">
            <article class="space-y-4" itemscope itemtype="https://schema.org/CollectionPage">
                <header>
                    <img
                        class="w-auto h-[41px]"
                        src="<?= htmlspecialchars($currentCategory['image']); ?>"
                        alt="<?= htmlspecialchars($currentCategory['name']); ?>"
                        width="200"
                        height="41"
                        title="<?= htmlspecialchars($currentCategory['name']); ?>"
                        loading="eager"
                        fetchpriority="high"
                        itemprop="image" />
                    <h2 id="products-heading-sr" class="sr-only" itemprop="name">
                        <?= htmlspecialchars($currentCategory['name']); ?>
                    </h2>
                </header>
                <p class="text-justify content-text" itemprop="description">
                    <?= __('products.categories.' . $currentCategory['id']); ?>
                </p>
            </article>

            <section class="grid gap-4 xs:grid-cols-2 md:grid-cols-3" aria-label="Product list">
                <?php for ($i = 1; $i <= 3; $i++): ?>
                    <article class="space-y-4 bg-white" itemscope itemtype="https://schema.org/Product">
                        <figure class="overflow-hidden aspect-w-3 aspect-h-2">
                            <img
                                class="object-cover w-full h-full"
                                src="/images/product-<?= $i ?>.png"
                                alt="Battery <?= $i ?>"
                                width="320"
                                height="256"
                                loading="lazy"
                                title="Battery <?= $i ?>"
                                itemprop="image" />
                            <figcaption class="sr-only">Battery <?= $i ?></figcaption>
                        </figure>

                        <div class="space-y-2">
                            <h3 class="heading-3 text-[#020B22]" itemprop="name">Battery <?= $i ?></h3>
                            <p class="content-text text-[#3E3D3D]" itemprop="description">Battery model and specification</p>
                            <a href="/contact-us" class="btn-arrow group" aria-label="Contact us about Battery <?= $i ?>">
                                <span class="font-semibold group-hover:underline underline-offset-4 content-text">
                                    <?= __('contact.title') ?>
                                </span>
                                <svg
                                    aria-hidden="true"
                                    class="btn-arrow__icon group-hover:text-[#0C40C5] group-focus:text-[#0C40C5] group-hover:animate-phoneRing group-focus:animate-phoneRing"
                                    width="24"
                                    height="25"
                                    viewBox="0 0 24 25"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <mask id="mask0_365_362" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="25">
                                        <rect y="0.5" width="24" height="24" fill="#D9D9D9" />
                                    </mask>
                                    <g mask="url(#mask0_365_362)">
                                        <path d="M19.1436 12.2551C19.1436 10.3051 18.4645 8.65089 17.1061 7.29255C15.7478 5.93422 14.0936 5.25505 12.1436 5.25505V3.1593C13.4056 3.1593 14.5874 3.3988 15.6889 3.8778C16.7905 4.3568 17.7505 5.00547 18.5689 5.8238C19.3872 6.64197 20.0359 7.60263 20.5149 8.7058C20.9939 9.8088 21.2334 10.9919 21.2334 12.2551H19.1436ZM15.0479 12.2551C15.0479 11.4456 14.7662 10.7581 14.2029 10.1928C13.6394 9.6273 12.953 9.34455 12.1436 9.34455V7.25505C13.527 7.25505 14.7061 7.74255 15.6811 8.71755C16.6561 9.69255 17.1436 10.8717 17.1436 12.2551H15.0479ZM19.9261 21.7033C17.8428 21.7033 15.7674 21.2453 13.6999 20.3293C11.6322 19.4135 9.75313 18.1132 8.06263 16.4286C6.37213 14.7441 5.07188 12.8781 4.16188 10.8308C3.25187 8.78347 2.79688 6.69989 2.79688 4.58005V3.2968H9.15113L10.1659 8.5968L7.14838 11.5256C7.49521 12.1357 7.88263 12.7156 8.31063 13.2651C8.73879 13.8146 9.20121 14.3293 9.69788 14.8093C10.1614 15.2686 10.6617 15.7062 11.1989 16.1221C11.7359 16.5379 12.3099 16.9235 12.9209 17.2788L15.9701 14.2533L21.2034 15.3561V21.7033H19.9261ZM6.06087 9.4043L7.70513 7.8083L7.29188 5.5718H5.10888C5.18421 6.29397 5.30121 6.97022 5.45987 7.60055C5.61854 8.23105 5.81887 8.8323 6.06087 9.4043ZM15.0349 18.3843C15.6697 18.6556 16.3126 18.8726 16.9636 19.0353C17.6148 19.198 18.2697 19.3083 18.9284 19.3663V17.1963L16.6979 16.7333L15.0349 18.3843Z" fill="#1F1F1F" />
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </article>
                <?php endfor; ?>
            </section>
        </main>
    </div>
</section>
<?php include_once __DIR__ . '/partials/footer.php'; ?>