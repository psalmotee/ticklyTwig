<?php

declare(strict_types=1);

use App\Application;

// 1. Load Composer Autoloader
// This tells PHP how to find all the libraries (Slim, Twig, etc.)
// and all your custom classes (App\Application, App\Controllers\HomeController, etc.)
require __DIR__ . '/../vendor/autoload.php';

// 2. Load the Application Class
// This includes the App.php file which sets up all the routes and settings.
require __DIR__ . '/../src/App.php';

// 3. Create and Run the Slim App
// The bootstrap() method in App.php does all the configuration and routing.
$app = Application::bootstrap();

// 4. Start processing the user's request
$app->run();
