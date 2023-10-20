<?php

if (!function_exists('env')) {
    /**
     * Get env param by key
     *
     * @param string
     * @return string|null
     */
    function env(string $key): string|null
    {
        $pathProject = getcwd();
        $formattedKey = strtolower($key);

        $file = "{$pathProject}/src/.env";

        if (file_exists($file)) {
            $envFile = parse_ini_file($file);
            $formattedEnvFile = array_change_key_case($envFile, CASE_LOWER);

            return $formattedEnvFile[$formattedKey] ?? null;
        }

        return null;
    }
}

if (!function_exists('config')) {
    /**
     * Get config param by key
     *
     * @param string
     * @return string|array|null
     */
    function config(string $key): string|array|null
    {
        $pathProject = getcwd();
        $keys = explode('.', $key);

        $file = "{$pathProject}/src/config/{$keys[0]}.php";

        if (file_exists($file)) {
            $configFile = include_once $file;
            unset($keys[0]);

            foreach ($keys as $key) {
                $value = $configFile[$key] ?? null;
            }

            return $value;
        }

        return null;
    }
}
