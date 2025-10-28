<?php

declare(strict_types=1);

namespace App;

use DI\ContainerBuilder;
use Slim\App;
use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use App\Controllers\HomeController;

/**
 * Boots up the Slim application.
 * This class handles Dependency Injection setup, Twig registration, and defining core routes.
 */
class Application
{
    public static function bootstrap(): App
    {
        // 1. Setup DI Container (The brain that manages all our components like Twig)
        $containerBuilder = new ContainerBuilder();
        $settings = Settings::get();

        $containerBuilder->addDefinitions([
            'settings' => $settings,
            
            // Twig Setup: Creates the Twig object using the paths defined in Settings.php
            Twig::class => function () use ($settings) {
                $twig = Twig::create($settings['view']['paths'], $settings['view']['settings']);
                return $twig;
            },
            
            // Controller definition: Tells the container how to create the HomeController.
            // It automatically injects the Twig instance (which we just defined above).
            HomeController::class => function (Twig $twig) {
                return new HomeController($twig);
            },
        ]);

        $container = $containerBuilder->build();
        AppFactory::setContainer($container);

        // 2. Create the Slim App instance
        $app = AppFactory::create();
        
        // 3. Register Twig Middleware (A necessary step for Twig to function correctly with Slim)
        $app->add(TwigMiddleware::create($app, $container->get(Twig::class)));

        // 4. Add routing middleware and error handling
        $app->addRoutingMiddleware();
        // The three 'true' values enable detailed error reporting (great for debugging)
        $app->addErrorMiddleware(true, true, true);

        // 5. Define Routes: 
        // This is the specific instruction to render the landing page.
        // URL: /
        // Action: Execute the 'index' method on the HomeController.
        $app->get('/', HomeController::class . ':index');

        return $app;
    }
}
