<?php

namespace Esprit\dhiaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DhiaBundle:Default:index.html.twig');
    }
}
