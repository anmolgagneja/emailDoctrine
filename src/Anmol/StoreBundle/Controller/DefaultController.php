<?php

namespace Anmol\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AnmolStoreBundle:Default:index.html.twig', array('name' => $name));
    }
}
