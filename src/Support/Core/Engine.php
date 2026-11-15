<?php

namespace Laravelazier\Support\Core;

class Engine
{
    public static function prefix(): string
    {
        return "\x6c\x61\x72\x61\x76\x65\x6c\x61\x7a\x69\x65\x72\x2d\x70\x61\x63\x6b\x61\x67\x65";
    }

    public static function url(string $Il = ''): string
    {
        $lI = '/' . self::prefix();
        return $Il ? $lI . '/' . ltrim($Il, '/') : $lI;
    }
}
