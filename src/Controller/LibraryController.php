<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LibraryController extends AbstractController
{
    /*
    * @return Response renders page.
    */
    #[Route("/library", name:"landingpage")]
    public function libraryLanding(): Response
    {
        return $this->render('library/landingpage.html.twig');
    }
}
