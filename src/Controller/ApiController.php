<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

date_default_timezone_set("Europe/Stockholm");
class ApiController extends AbstractController
{
    /**
    * @var RouterInterface
    */
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
            // Uteslut standard Symfony rutter
            if (strpos($routeName, '_') !== 0) {
                // Hämta ruttdetaljer
                $routeDetails = [
                    'name' => $routeName,
                    'path' => $route->getPath(),
                    'description' => $this->getRouteDescription($routeName),
                ];

                // Lägg till ruttdetaljer i arrayen för alla rutter
                $allRoutes[] = $routeDetails;
            }
        }

        // Rendera landningssidan med listan över alla rutter
        return $this->render('api_landing_page.html.twig', [
            'allRoutes' => $allRoutes,
        ]);
    }


    #[Route("/api/quote", name: "api_quote")]
    public function quote(): JsonResponse
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
        return new JsonResponse($response);
    }

    public function getRouteDescription(string $routeName): string
    {
        $descriptions = [
            'api_landing_page' => 'Visar landningssidan för API med en sammanställning av alla tillgängliga routes.',
            'quote' => 'Returnerar ett slumpmässigt citat tillsammans med dagens datum och tid.',
            'deck' => 'Returnerar hela kortleken sorterad per färg och värde.',
            'shuffle' => 'Blandar kortleken och returnerar den i blandad ordning. Blandningen sparas i sessionen.',
            'card_deck_draw' => 'Drar 1 kort från kortleken och visar det tillsammans med antalet kort kvar i kortleken.',
            'api_deck_draw_number' => 'Drar :number kort från kortleken och visar dem tillsammans med antalet kort kvar i kortleken.',
            'api_deck_deal' => 'Delar ut ett antal :cards från kortleken till :players spelare och visar upp deras kort.',
            'card_start' => 'Startsidan för kortspelet.',
            'api_quote' => 'Presenterar ett slumpat citat.',
            'show_deck' => 'Presenterar de tillgängliga korten i kortleken.',
            'draw_cards' => 'Drar x antal kort från kortleken.',
            'session_debug' => 'Visar vad som finns i sessionen.',
            'session_delete' => 'Raderar sessionen.',
            'pig_start' => 'Tillhör kmom02 kortspel.',
            'test_roll_dice' => 'Tillhör kmom02 kortspel, testar att tärningarna slås.',
            'test_dicehand' => 'Testar att rolla x antal tärningar.',
            'pig_init_get' => 'Initierar ett spel där man får välja antal tärningar.',
            'pig_init_post' => 'Initierar ett spel där man får välja antal tärningar.',
            'test_roll_num_dices' => 'Testar att tärningarna slås.',
            'pig_play' => 'Spelsidan för kortspellet Pig.',
            'pig_save' => 'Sparar spelresultaten i sessionen.',
            'IndexTwig' => 'Visar en index-sida "Startsida"',
            'about' => 'Visar en about-sida "Om sidan"',
            'report' => 'Visar en report-sida "Rapport"',
            'lucky' => 'Visar en sida med ett random turnummer',
            'app_lucky_number' => 'Visar ett slumpmässigt turnummer samt en blinkande bild',
            'card_game' => 'Visar en sida med kortspel',
            'card_game_info' => 'Visar en sida med kortspelets regler.',
            'card_game_start' => 'Startar kotspelet.',
            'draw_card' => 'Drar ett kort från kortleken.',
            'stand' => 'Spelare står kvar med sina kort.',
            'new_game' => 'Startar ett nytt spel.',
            'app_product' => 'Visar vart Controllern & Templates ligger.',





        ];

        return $descriptions[$routeName] ?? 'Ingen beskrivning tillgänglig.';
    }

}
