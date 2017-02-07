<?php
/**
 * Created by PhpStorm.
 * User: apprenti-thinkpad-t430s
 * Date: 30/01/17
 * Time: 16:09
 */


namespace FY\ValentineBundle\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ValentineController extends Controller
{

    public function indexAction()
    {
        return $this->render('index.html.twig');
    }


}