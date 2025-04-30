<footer class="py-4 md:py-16 bg-[#FFFCFF]">
    <section class="py-6 md:py-8 theme-container border-y border-y-[#020B22]">
        <header class="flex items-center justify-center gap-6 mb-6 md:mb-12">
            <img class="object-cover w-12 h-12 select-none"
                draggable="false"
                src="/images/footer-logo.png"
                alt="Footer Logo"
                width="50"
                height="50"
                title="Footer Logo"
                loading="eager" />
            <h2 class="footer-title">ဦးကျော် ဘတ္ထရီ - Kyaw Battery Sales & Services</h2>
        </header>

        <div class="grid gap-6 md:grid-cols-3 md:gap-12" role="contentinfo" aria-label="Footer Information">

            <?php // Quick Links Navigation            
            ?>
            <nav aria-labelledby="footer-links-heading">
                <h3 id="footer-links-heading" class="mb-6 footer-sub-title">
                    links
                </h3>

                <ul class="space-y-3 md:space-y-5 text-[#3E3D3D] text-sm md:text-base">
                    <li class="px-2"><a href="/" class="footer-nav-link">home</a></li>
                    <li class="px-2"><a href="/products" class="footer-nav-link">products</a></li>
                    <li class="px-2"><a href="/services" class="footer-nav-link">services</a></li>
                    <li class="px-2"><a href="/about-us" class="footer-nav-link">about us</a></li>
                    <li class="px-2"><a href="/contact-us" class="footer-nav-link">contact us</a></li>
                </ul>
            </nav>

            <?php // Address Block
            ?>
            <section aria-labelledby="footer-address-heading">
                <h3 id="footer-address-heading" class="mb-6 footer-sub-title">
                    contact us
                </h3>

                <address class="not-italic text-[#545254] text-sm md:text-base">
                    <ul class="space-y-4 ">
                        <li>
                            <a href="https://maps.app.goo.gl/FEzJzZub7bHZ3QzE6" target="_blank" rel="noopener" class="focus:outline-none focus:text-theme">
                                No. (320/27), Ground Floor, Upper Baho Road, Mayangone Township, Yangon.
                            </a>
                        </li>
                        <li class="flex items-center gap-2">
                            <a href="tel:+09266559969" class="focus:outline-none focus:text-theme">09266559969</a>/
                            <a href="tel:+09421043703" class="focus:outline-none focus:text-theme">09421043703</a>
                        </li>
                        <li>
                            <a href="mailto:kyawbattery664@gmail.com" class="focus:outline-none focus:text-theme">kyawbattery664@gmail.com</a>
                        </li>
                        <li class="inline-block">
                            <a href="/contact-us" class="flex items-center gap-3 capitalize focus:outline-none focus:text-theme hover:text-theme group">
                                <span>message us</span>
                                <svg class="text-[#6E6D6E] w-6 h-6 transition-transform duration-300 ease-linear shrink-0 group-hover:transform group-hover:translate-x-1 group-focus:translate-x-1 group-hover:text-theme group-focus:text-theme"
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
                        </li>
                    </ul>
                </address>
            </section>

            <?php // Social Links + Copyright 
            ?>
            <section aria-labelledby="footer-social-heading">
                <h3 id="footer-social-heading" class="mb-6 footer-sub-title">
                    follow us
                </h3>

                <ul class="flex items-center mb-6 space-x-8 text-sm lg:space-x-16 md:space-x-4 md:text-base">
                    <li><a href="https://www.facebook.com" target="_blank" rel="noopener" class="capitalize text-facebook focus:outline-none focus:underline hover:underline underline-offset-2">facebook</a></li>
                    <li><a href="https://www.linkedin.com" target="_blank" rel="noopener" class="capitalize text-linkedin focus:outline-none focus:underline hover:underline underline-offset-2">linkedin</a></li>
                    <li><a href="https://www.viber.com" target="_blank" rel="noopener" class="capitalize text-viber focus:outline-none focus:underline hover:underline underline-offset-2">viber</a></li>
                </ul>

                <p class="text-sm text-[#545254]">&copy; <?= date('Y') ?> Battery Selling Shop. All rights reserved.</p>
            </section>
        </div>

    </section>

</footer>


<?php
# End the session
session_destroy();
?>
<script src="/js/app.js" defer></script>

</body>

</html>