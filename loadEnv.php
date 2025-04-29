<?php

/**
 * Load environment variables from a .env file.
 *
 * This function reads key-value pairs from a .env file and sets them
 * into the environment using both $_ENV and putenv().
 *
 * @param string $path Full path to the .env file.
 * @throws Exception If the .env file does not exist.
 * @return void
 */
function loadEnv($path)
{
    if (!file_exists($path)) {
        throw new Exception(".env file not found at $path");
    }

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (str_starts_with(trim($line), '#')) {
            continue;
        }
        list($key, $value) = explode('=', $line, 2);
        $key = trim($key);
        $value = trim($value, '"\'');

        $_ENV[$key] = $value;
        putenv("$key=$value");
    }
}

/**
 * Get the value of an environment variable.
 *
 * Returns the environment variable value if set, otherwise the default value.
 *
 * @param string $key The name of the environment variable.
 * @param mixed $default A default value to return if the variable is not set.
 * @return mixed
 */
function env($key, $default = null)
{
    $value = getenv($key);

    if ($value === false) {
        return $default;
    }

    return $value;
}
