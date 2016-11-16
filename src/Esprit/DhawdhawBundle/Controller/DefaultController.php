<?php

namespace Esprit\DhawdhawBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EspritDhawdhawBundle:Default:index.html.twig');
    }
}
