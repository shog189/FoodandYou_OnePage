<?php
/**
 * Created by PhpStorm.
 * User: apprenti-thinkpad-t430s
 * Date: 30/01/17
 * Time: 16:09
 */


namespace FY\ValentineBundle\Controller;



use FY\ValentineBundle\Form\FormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DomCrawler\Form;


class ValentineController extends Controller
{

    public function indexAction()
    {

        $form = $this->createForm(FormType::class);

        return $this->render('index.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function mentionAction()
    {
        return $this->render('cgv.html.twig');
    }

}