<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/lol", name="test")
     */
    public function index()
    {
        $variable = 'BONJOUR';

        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController', 'ma_variable' => $variable
        ]);
    }

    /**
     * @Route("/membres", name="membres")
     */
    public function membres()
    {
        return $this->render('membres/index.html.twig');
    }
}
