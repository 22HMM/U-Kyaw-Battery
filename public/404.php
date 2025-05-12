<?php include_once __DIR__ . '/partials/header.php'; ?>
<section class="flex items-center justify-center min-h-screen px-4 theme-container">
    <div class="space-y-8 text-center">
        <!-- 404 Gradient -->
        <p class="font-extrabold text-transparent text-8xl sm:text-9xl bg-gradient-to-r from-theme to-secondary bg-clip-text animate-pulse">
            404
        </p>

        <!-- Heading & Message -->
        <div class="space-y-4">
            <h2 class="text-3xl font-bold text-gray-800 sm:text-4xl">Oops! Page not found</h2>
            <p class="text-lg text-gray-600">The page you're looking for might have been moved or no longer exists.</p>
        </div>

        <!-- Button -->
        <a href="/" class="inline-flex items-center justify-center px-6 py-3 space-x-2 text-sm font-semibold text-white transition-all duration-300 rounded-lg shadow-lg bg-theme hover:bg-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
            </svg>
            <span> Back to Home</span>
        </a>
    </div>
</section>