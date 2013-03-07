<?php

namespace Anmol\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AnmolHelloBundle:Default:index.html.twig', array('name' => $name));
    }
}
