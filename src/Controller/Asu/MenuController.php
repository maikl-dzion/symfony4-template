<?php

namespace App\Controller\Asu;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MenuController extends AbstractController
{
    /**
     * @Route("/asu/menu", name="asu_menu")
     */
    public function index()
    {
        return $this->render('asu/menu/index.html.twig', [
            'controller_name' => 'MenuController',
        ]);
    }
}
