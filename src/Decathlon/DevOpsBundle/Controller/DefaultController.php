<?php

namespace Decathlon\DevOpsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DecathlonDevOpsBundle:Default:index.html.twig', array('name' => $name));
    }

    public function quienesSomosAction()
    {
        return $this->render('DecathlonDevOpsBundle::quienessomos.html.twig');
    }
}
