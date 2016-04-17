<?php

namespace Application\wawahouseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ApplicationwawahouseBundle:Default:index.html.twig');
    }
}
