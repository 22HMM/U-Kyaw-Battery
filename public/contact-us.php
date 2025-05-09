<?php include_once __DIR__ . '/partials/header.php'; ?>

<!-- Banner -->
<header class="bg-[#FFFCFF] mt-[60px] lg:mt-[70px] xl:mt-[90px]">
    <div class="relative grid theme-container md:grid-cols-3">
        <div class="hidden md:block"></div>
        <article class="absolute z-10 flex flex-col w-full max-w-[250px] xs:max-w-[350px] sm:max-w-xl lg:max-w-2xl leading-[120%] gap-6 px-2 transform -translate-y-1/2 md:px-6 left-4 sm:left-6 top-1/2 bg-[#FFFCFF] py-6 sm:py-12 md:py-16 lg:py-24">
            <p class="text-sm capitalize md:text-base text-secondary"><?= __('contact.title'); ?></p>
            <h2 class="banner-title"><?= __('contact.subtitle'); ?></h2>
            <p class="text-sm md:text-base"><?= __('contact.description'); ?></p>
        </article>
        <figure class="overflow-hidden md:col-span-2 aspect-w-3 aspect-h-3 xs:aspect-h-2">
            <img
                class="object-cover object-center w-full h-full"
                src="/images/contact-us-banner.webp"
                alt="Contact Us Banner"
                width="917"
                height="685"
                title="Banner Image of Contact Us Page"
                fetchpriority="high"
                loading="eager" />
        </figure>
    </div>
</header>

<!-- Addresses Section -->
<section class="py-[60px] md:py-[80px] text-[#020B22]">
    <div class="py-6 md:py-20" style="background-image: url('/images/page-background.webp'); background-size: cover; background-position:center; background-repeat: no-repeat;">
        <div class="theme-container">
            <article class="w-full max-w-2xl mx-auto">
                <h2 class="mb-8 text-center capitalize heading-2">
                    <?= __('contact.address_title'); ?>
                </h2>
                <address class="not-italic">
                    <ul class="space-y-8 text-sm md:text-base">
                        <li>
                            <a href="https://maps.app.goo.gl/FEzJzZub7bHZ3QzE6" target="_blank" rel="noopener" class="inline-flex items-start gap-2 focus:outline-none focus:text-theme focus-visible:ring-2 focus-visible:ring-theme focus-visible:ring-offset-2">
                                <svg class="w-6 h-6 shrink-0" aria-hidden="true" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 14.5C14.206 14.5 16 12.706 16 10.5C16 8.294 14.206 6.5 12 6.5C9.794 6.5 8 8.294 8 10.5C8 12.706 9.794 14.5 12 14.5ZM12 8.5C13.103 8.5 14 9.397 14 10.5C14 11.603 13.103 12.5 12 12.5C10.897 12.5 10 11.603 10 10.5C10 9.397 10.897 8.5 12 8.5Z" fill="black" />
                                    <path d="M11.4201 22.314C11.5894 22.4346 11.7922 22.4994 12.0001 22.4994C12.208 22.4994 12.4107 22.4346 12.5801 22.314C12.8841 22.099 20.0291 16.94 20.0001 10.5C20.0001 6.089 16.4111 2.5 12.0001 2.5C7.58909 2.5 4.00009 6.089 4.00009 10.495C3.97109 16.94 11.1161 22.099 11.4201 22.314ZM12.0001 4.5C15.3091 4.5 18.0001 7.191 18.0001 10.505C18.0211 14.943 13.6121 18.928 12.0001 20.235C10.3891 18.927 5.97909 14.941 6.00009 10.5C6.00009 7.191 8.69109 4.5 12.0001 4.5Z" fill="black" />
                                </svg>
                                <span>No. (320/27), Ground Floor, Upper Baho Road, Mayangone Township, Yangon.</span>
                            </a>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-6 h-6 shrink-0" aria-hidden="true" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 3.5C8.5 3.5 10.5 8 10.5 8.5C10.5 9.5 9 10.5 8.5 11.5C8 12.5 9 13.5 10 14.5C10.39 14.89 12 16.5 13 16C14 15.5 15 14 16 14C16.5 14 21 16 21 16.5C21 18.5 19.5 20 18 20.5C16.5 21 15.5 21 13.5 20.5C11.5 20 10 19.5 7.5 17C5 14.5 4.5 13 4 11C3.5 9 3.5 8 4 6.5C4.5 5 6 3.5 8 3.5Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <a href="tel:+09266559969" class="focus:outline-none focus:text-theme focus-visible:ring-2 focus-visible:ring-theme focus-visible:ring-offset-2">09266559969</a>/
                            <a href="tel:+09421043703" class="focus:outline-none focus:text-theme focus-visible:ring-2 focus-visible:ring-theme focus-visible:ring-offset-2">09421043703</a>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-6 h-6 shrink-0" aria-hidden="true" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_112_2827" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="25">
                                    <rect y="0.5" width="24" height="24" fill="#D9D9D9" />
                                </mask>
                                <g mask="url(#mask0_112_2827)">
                                    <path d="M4 20.5C3.45 20.5 2.97917 20.3042 2.5875 19.9125C2.19583 19.5208 2 19.05 2 18.5V6.5C2 5.95 2.19583 5.47917 2.5875 5.0875C2.97917 4.69583 3.45 4.5 4 4.5H20C20.55 4.5 21.0208 4.69583 21.4125 5.0875C21.8042 5.47917 22 5.95 22 6.5V18.5C22 19.05 21.8042 19.5208 21.4125 19.9125C21.0208 20.3042 20.55 20.5 20 20.5H4ZM12 13.5L4 8.5V18.5H20V8.5L12 13.5ZM12 11.5L20 6.5H4L12 11.5ZM4 8.5V6.5V18.5V8.5Z" fill="#1F1F1F" />
                                </g>
                            </svg>
                            <a href="mailto:kyawbattery664@gmail.com" class="focus:outline-none focus:text-theme focus-visible:ring-2 focus-visible:ring-theme focus-visible:ring-offset-2">kyawbattery664@gmail.com</a>
                        </li>
                    </ul>
                </address>
            </article>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="my-[60px] md:my-[80px] max-w-[2560px] 2xl:max-w-[1563px] mx-auto">
    <div class="grid items-center gap-8 bg-white md:grid-cols-2 2xl:mx-6" aria-label="Contact Form Section" role="region">
        <!-- Left Image (outside container size) -->
        <figure class="hidden overflow-hidden aspect-w-3 aspect-h-4 md:block">
            <img
                class="object-cover w-full h-full"
                src="/images/contact-form.webp"
                alt="Contact Form Image"
                width="792"
                height="1003"
                title="Contact Form Image"
                loading="lazy" />
            <figcaption class="sr-only">Contact Form Image</figcaption>
        </figure>

        <!-- Right side content, containerized -->
        <article class="flex flex-col px-4 py-6 gap-x-6 gap-y-6 md:gap-y-12 sm:px-8 md:px-12 xl:px-28 theme-container">
            <img
                aria-label="U Kyaw Battery Logo"
                class="w-12 h-12 md:w-16 md:h-16"
                src="/images/footer-logo.webp"
                alt="U Kyaw Battery Logo"
                width="64"
                height="64"
                title="U Kyaw Battery Logo"
                draggable="false"
                loading="lazy" />
            <h2 class="heading-1 font-inter lg:leading-[60px]"><?= __('contact.message_title'); ?></h2>

            <?php
            // Define form fields and corresponding error keys
            $fields = ['name', 'email', 'phone', 'message'];
            $errors = ['nameError', 'emailError', 'phoneError'];

            // Extract flash messages from session
            $successMessage = $_SESSION['successMessage'] ?? null;
            $errorMessage = $_SESSION['errorMessage'] ?? null;

            // Initialize form values — default to empty
            $values = array_fill_keys($fields, '');
            // Restore previous values if the form submission failed
            if (!$successMessage) {
                foreach ($fields as $field) {
                    $values[$field] = $_SESSION[$field] ?? '';
                }
            }

            // Extract field-specific error messages
            $errorMessages = [];
            foreach ($errors as $error) {
                $errorMessages[$error] = $_SESSION[$error] ?? null;
            }

            // Clear session values after using them (flash-like behavior)
            foreach (array_merge($fields, $errors, ['successMessage', 'errorMessage']) as $key) {
                unset($_SESSION[$key]);
            }
            ?>

            <form id="contact-form" action="/contact-us" method="post" role="form" aria-label="Contact Form">
                <fieldset class="flex flex-col space-y-6">
                    <legend class="sr-only">Contact Form Fields</legend>

                    <?php if ($successMessage): ?>
                        <div class="p-4 mb-4 text-sm text-green-800 border-l-2 rounded-lg border-l-green-800 bg-green-50" role="alert">
                            <span class="font-medium"><?= __('contact.form.send_success'); ?></span> <?= htmlspecialchars($successMessage) ?>
                        </div>
                    <?php elseif ($errorMessage): ?>
                        <div class="p-4 mb-4 text-sm text-red-800 border-l-2 rounded-lg border-l-red-800 bg-red-50" role="alert">
                            <span class="font-medium"><?= __('contact.form.send_error'); ?></span> <?= htmlspecialchars($errorMessage) ?>
                        </div>
                    <?php endif; ?>

                    <!-- Name -->
                    <div>
                        <label for="name" class="contact-form-label"><?= __('contact.form.name'); ?></label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="<?= htmlspecialchars($values['name']) ?>"
                            class="input <?= $errorMessages['nameError'] ? 'input--error' : 'input--default' ?>"
                            placeholder="Your Name"
                            autocomplete="name" />
                        <?php if ($errorMessages['nameError']): ?>
                            <span class="text-sm text-red-500"><?= htmlspecialchars($errorMessages['nameError']) ?></span>
                        <?php endif; ?>
                    </div>
                    <!-- Email -->
                    <div>
                        <label for="email" class="contact-form-label"><?= __('contact.form.email'); ?></label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="<?= htmlspecialchars($values['email']) ?>"
                            class="input <?= $errorMessages['emailError'] ? 'input--error' : 'input--default' ?>"
                            placeholder="Your Email"
                            autocomplete="email" />
                        <?php if ($errorMessages['emailError']): ?>
                            <span class="text-sm text-red-500"><?= htmlspecialchars($errorMessages['emailError']) ?></span>
                        <?php endif; ?>
                    </div>
                    <!-- Phone -->
                    <div>
                        <label for="phone" class="contact-form-label"><?= __('contact.form.phone_number'); ?></label>
                        <input
                            type="text"
                            id="phone"
                            name="phone"
                            value="<?= htmlspecialchars($values['phone']) ?>"
                            class="input <?= $errorMessages['phoneError'] ? 'input--error' : 'input--default' ?>"
                            placeholder="09-xxxxxxxxx"
                            autocomplete="tel" />
                        <?php if ($errorMessages['phoneError']): ?>
                            <span class="text-sm text-red-500"><?= htmlspecialchars($errorMessages['phoneError']) ?></span>
                        <?php endif; ?>
                    </div>
                    <!-- Message -->
                    <div>
                        <label for="message" class="contact-form-label"><?= __('contact.form.how_can_we_help'); ?></label>
                        <textarea
                            name="message"
                            id="message"
                            class="input input--default"
                            placeholder="Tell us a little about the project..."
                            autocomplete="off"
                            rows="5"><?= htmlspecialchars($values['message']) ?></textarea>
                    </div>
                    <!-- Submit -->
                    <div>
                        <button id="contact-submit-button" type="submit"
                            class="w-full px-6 py-3 text-sm text-center text-white rounded-full bg-[#0E4DED] transition-colors duration-300 ease-linear hover:bg-theme"
                            aria-label="Submit Contact Form">
                            <?= __('contact.form.send_message'); ?>
                        </button>
                    </div>
                </fieldset>
            </form>
        </article>
    </div>
</section>
<?php include_once __DIR__ . '/partials/footer.php'; ?>