<?php

namespace Decathlon\DevOpsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DecathlonDevOpsBundle:Default:index.html.twig', array('name' => $name));
    }
}
