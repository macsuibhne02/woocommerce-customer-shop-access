<?php

declare(strict_types=1);

namespace WCCSA\Core;

final class Constants
{
    public static function version(): string
    {
        return '0.2.0';
    }

    public static function text_domain(): string
    {
        return 'woocommerce-customer-shop-access';
    }

    public static function plugin_file(): string
    {
        return dirname(__DIR__, 2) . '/woocommerce-customer-shop-access.php';
    }

    public static function plugin_path(): string
    {
        return dirname(__DIR__, 2) . '/';
    }

    public static function plugin_url(): string
    {
        return plugin_dir_url(self::plugin_file());
    }
}
