<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexTwig extends AbstractController
{
    #[Route("/", name: "IndexTwig")]
    public function number(): Response
    {
        $number = random_int(0, 100);

        $data = [
            'number' => $number
        ];

        return $this->render('IndexTwig.twig', $data);
    }

    #[Route("/about", name: "about")]
    public function about(): Response
    {
        return $this->render('about.html.twig');
    }

    #[Route("/report", name: "report")]
    public function report(): Response
    {
        return $this->render('report.html.twig');
    }


    #[Route("/lucky", name: "lucky")]
    public function lucky(): Response
    {
        $number = random_int(0, 100);
        $name = "Alexander";
        return $this->render('lucky.html.twig', [
            'name' => $name,
            'number' => $number
        ]);
    }

    #[Route("/metrics", name: "metrics")]
    public function metrics(): Response
    {
        return $this->render('metrics/metrics.html.twig');
    }

    #[Route("/scrutinizer", name: "scrutinizer")]
    public function scrutinizer(): Response
    {
        return $this->render('metrics/scrutinizer.html.twig');
    }

    #[Route("/phpmetrics", name: "phpmetrics")]
    public function phpmetrics(): Response
    {
        return $this->render('metrics/phpmetrics.html.twig');
    }

    #[Route("/improvements", name: "improvements")]
    public function improvements(): Response
    {
        return $this->render('metrics/improvements.html.twig');
    }


}
