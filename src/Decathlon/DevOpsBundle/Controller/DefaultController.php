<?php

namespace Decathlon\DevOpsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\SecurityContext;

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

    public function adminAction()
    {
        return $this->render('DecathlonDevOpsBundle::admin.html.twig');
    }

    public function quienesSomosAction()
    {
        return $this->render('DecathlonDevOpsBundle::quienessomos.html.twig');
    }

    public function contactoAction()
    {
        return $this->render('DecathlonDevOpsBundle::contacto.html.twig');
    }

    public function loginAction(Request $request)
    {
        $session = $request->getSession();

        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                SecurityContext::AUTHENTICATION_ERROR
            );
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->render(
            'DecathlonDevOpsBundle::login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                'error'         => $error,
            )
        );
    }

    public function logoutAction()
    {

    }

}
