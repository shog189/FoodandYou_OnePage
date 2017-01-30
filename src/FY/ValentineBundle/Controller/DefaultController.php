<?php

namespace FY\ValentineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FYValentineBundle:Default:index.html.twig');
    }
}
