<?php

namespace Decathlon\DevOpsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $members = $em->getRepository('DecathlonDevOpsBundle:Miembro')->getLastMiembros(2);
        $proyectos = $em->getRepository('DecathlonDevOpsBundle:Proyecto')->getLastProyectos(2);
        $new = $em->getRepository('DecathlonDevOpsBundle:Noticias')->getLast();

        return $this->render('DecathlonDevOpsBundle::inicio.html.twig', array(
            'miembros' => $members,
            'proyectos' => $proyectos,
            'noticia' => $new,
        ));
    }

    public function quienesSomosAction()
    {
        return $this->render('DecathlonDevOpsBundle::quienessomos.html.twig');
    }

    public function contactoAction()
    {
        return $this->render('DecathlonDevOpsBundle::contacto.html.twig');
    }
}
