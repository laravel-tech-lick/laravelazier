<?php

if (!function_exists('laz_flash')) {
    function laz_flash(string $message, string $type = 'info'): void
    {
        session()->flash('laz_flash', ['message' => $message, 'type' => $type]);
    }
}

if (!function_exists('laz_env')) {
    function laz_env(string $key, $default = null)
    {
        return env($key, $default);
    }
}

if (!function_exists('laz_now')) {
    function laz_now(string $format = 'Y-m-d H:i:s'): string
    {
        return now()->format($format);
    }
}
