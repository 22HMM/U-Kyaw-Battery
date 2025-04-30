<?php

/**
 * Translate a given key using dot notation.
 *
 * Example: __('navbar.home') will return the value from $translations['navbar']['home']
 *
 * @param string $key The translation key in dot notation.
 * @return string The translated string or the original key if not found.
 */
function __($key): string
{
    $lang = $_SESSION['lang'] ?? 'en';
    $translations = require __DIR__ . "/lang/{$lang}.php";

    $segments = explode('.', $key);
    $value = $translations;

    foreach ($segments as $segment) {
        if (is_array($value) && array_key_exists($segment, $value)) {
            $value = $value[$segment];
        } else {
            return $key;
        }
    }

    return is_string($value) ? $value : $key;
}
