<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Page2Controller extends Controller
{
    /**
     * @Route("/page2", name="page2")
     */
    public function index()
    {
        return $this->render('page2/index.html.twig', [
            'controller_name' => 'Page2Controller',
        ]);
    }
}
