<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\RouterInterface;
date_default_timezone_set("Europe/Stockholm");
class ApiController extends AbstractController
{
    private $router;

    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    #[Route("/api", name: "api_landing_page")]
    public function index(): Response
    {
        // Hämta alla rutter från route collection
        $routes = $this->router->getRouteCollection();

        // Array för att lagra alla typer av rutter
        $allRoutes = [];

        // Loopa igenom alla rutter
        foreach ($routes->all() as $routeName => $route) {
            // Hämta ruttdetaljer
            $routeDetails = [
                'name' => $routeName,
                'path' => $route->getPath(),
                
            ];

            // Lägg till ruttdetaljer i arrayen för alla rutter
            $allRoutes[] = $routeDetails;
        }

        // Rendera landningssidan med listan över alla rutter
        return $this->render('api_landing_page.html.twig', [
            'allRoutes' => $allRoutes,
        ]);
    }
    
    #[Route("/api/quote", name: "api_quote")]
    public function quote(): Response
    {
        // Lista med olika citat
        $quotes = [
            "Livet är vad som händer medan du är upptagen med att göra andra planer. - John Lennon",
            "Den enda sanna visdomen är att veta att du inte vet något.- Sokrates",
            "Lycka är inte något färdigt. Det kommer från dina egna handlingar. - Dalai Lama"
        ];

        // Slumpmässigt välj ett citat
        $randomQuote = $quotes[array_rand($quotes)];

        // Skapa dagens datum och tidsstämpel
        $currentDate = date("Y-m-d");
        $timestamp = date("h:i");

        // Skapa JSON-svar
        $response = [
            'quote' => "Citat: " . $randomQuote,
            'date' => "Dagens datum: " . $currentDate,
            'timestamp' => "Tidstämpel: " . $timestamp
        ];


        // Returnera JSON-svar
        return $this->render('quotes.html.twig',[
            'Response' => $response
        ]);
    }
}

