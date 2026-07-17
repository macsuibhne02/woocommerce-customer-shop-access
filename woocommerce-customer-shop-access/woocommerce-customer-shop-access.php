<?php

declare(strict_types=1);

/**
 * Plugin Name: WooCommerce Customer Shop Access
 * Plugin URI: https://github.com/yourname/woocommerce-customer-shop-access
 * Description: Allows administrators to approve individual customers before they can access the WooCommerce shop.
 * Version: 0.2.0
 * Requires at least: 6.8
 * Requires PHP: 8.1
 * Author: Your Name
 * License: GPL-2.0-or-later
 * Text Domain: woocommerce-customer-shop-access
 */

if (! defined('ABSPATH')) {
    exit;
}

require_once __DIR__ . '/vendor/autoload.php';

use WCCSA\Core\Plugin;

$plugin = new Plugin();
$plugin->boot();
