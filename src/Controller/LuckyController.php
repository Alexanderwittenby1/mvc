<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController
{
    #[Route('/lucky/number')]
    public function number(): Response
    {
        $number = random_int(0, 100);
        $name = "Alexander";
        return new Response(
            '<html><body>'.$name.'´s lucky number: '.$number.'</body></html>'
        );
    }


}
