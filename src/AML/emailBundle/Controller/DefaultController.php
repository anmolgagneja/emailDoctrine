<?php

namespace AML\emailBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AMLemailBundle:Default:index.html.twig', array('name' => $name));
    }
}
