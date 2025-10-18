<?php

namespace App\Support;

class SocietyContent
{
    protected static function data(string $key, array $default = []): array
    {
        $value = config("site.{$key}", $default);

        return is_array($value) ? $value : $default;
    }

    public static function hero(): array
    {
        return self::data('hero');
    }

    public static function mission(): array
    {
        return self::data('mission');
    }

    public static function activities(): array
    {
        return self::data('activities');
    }

    public static function services(): array
    {
        return self::data('services');
    }

    public static function documents(): array
    {
        return self::data('documents');
    }

    public static function managementGroups(): array
    {
        return self::data('management_groups');
    }

    public static function contact(): array
    {
        return self::data('contact');
    }

    public static function about(): array
    {
        return self::data('about');
    }

    public static function socialLinks(): array
    {
        return self::data('social_links');
    }
}
