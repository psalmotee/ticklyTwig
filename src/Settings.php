<?php

declare(strict_types=1);

namespace App;

/**
 * Defines the application settings, primarily paths for Twig.
 */
final class Settings
{
    /**
     * Retrieves the application configuration array.
     * @return array
     */
    public static function get(): array
    {
        // Define the project's root path by going up one directory from the 'src' folder.
        $rootPath = dirname(__DIR__);

        return [
            // Twig View settings
            'view' => [
                'paths' => [
                    // This tells the application to look inside the 'templates' folder for all Twig files.
                    $rootPath . '/templates', 
                ],
                'settings' => [
                    // We disable caching for now so changes show up instantly during development.
                    'cache' => false, 
                    'debug' => true,
                    'auto_reload' => true, 
                ],
            ],
            // Base URL setting (Matches your Laragon virtual host)
            'base_url' => 'http://tickly-twig.test',
        ];
    }
}
