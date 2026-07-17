<?php

declare(strict_types=1);

namespace WCCSA\Core;

final class Plugin
{
    public function boot(): void
    {
        add_action('plugins_loaded', [$this, 'init']);
    }

    public function init(): void
    {
        load_plugin_textdomain(
            Constants::text_domain(),
            false,
            dirname(plugin_basename(Constants::plugin_file())) . '/languages'
        );
    }
}
