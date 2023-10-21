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
        $pathProject = dirname(getcwd());
        $formattedKey = strtolower($key);

        $file = "{$pathProject}/.env";

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
        $pathProject = dirname(getcwd());
        $keys = explode('.', $key);

        $file = "{$pathProject}/config/{$keys[0]}.php";

        if (file_exists($file)) {
            $configFile = include $file;
            unset($keys[0]);

            foreach ($keys as $key) {
                $value = $configFile[$key] ?? null;
            }

            if ($value) {
                return $value;
            }

            return $configFile;
        }

        return null;
    }
}
