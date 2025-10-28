<?php

declare(strict_types=1);

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;

/**
 * Controller responsible for rendering the public-facing landing page.
 * This class is executed when the root path (/) is requested.
 */
class HomeController
{
    private Twig $twig;

    /**
     * The Twig instance is automatically passed to the constructor 
     * by the dependency injection container (setup in App.php).
     * @param Twig $twig The Twig view engine instance.
     */
    public function __construct(Twig $twig)
    {
        $this->twig = $twig;
    }

    /**
     * Renders the complete Landing Page view.
     * This method is executed when the route $app->get('/', ...) is matched.
     */
    public function index(Request $request, Response $response): Response
    {
        // Renders the master template file: templates/landing/home.twig.
        // The Twig engine will assemble all your converted components (header, hero, etc.).
        return $this->twig->render($response, 'landing/home.twig', [
            'page_title' => 'Tickly - Lightweight Ticket Management',
            'base_url' => 'http://tickly-twig.test',
        ]);
    }
}
