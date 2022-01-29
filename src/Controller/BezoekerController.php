<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BezoekerController extends AbstractController
{
    /**
     * @Route("/", name="bezoeker")
     */
    public function index(): Response
    {
        return $this->render('customerVieuw.html.twig', [
            'controller_name' => 'BezoekerController',
        ]);
    }
}
