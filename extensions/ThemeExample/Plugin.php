<?php

namespace ThemeExample;

use Cecil\Plugin\AbstractPlugin;
use Cecil\Plugin\Registry;

/**
 * Example theme plugin: registers the extensions of the theme, declared once in `config.yml`.
 */
class Plugin extends AbstractPlugin
{
    public function register(Registry $registry): void
    {
        // `example_reading_time` filter
        $registry->twigExtension(Twig\Extension::class, name: 'ThemeExample');
    }
}
