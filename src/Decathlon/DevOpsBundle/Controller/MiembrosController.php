<?php

namespace Decathlon\DevOpsBundle\Controller;

use Decathlon\DevOpsBundle\Entity\Miembro;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MiembrosController extends Controller
{

    public function listadoAction()
    {
        $em = $this->getDoctrine()->getManager();
        $members = $em->getRepository('DecathlonDevOpsBundle:Miembro')->findAll();

        return $this->render('DecathlonDevOpsBundle::listmiembros.html.twig',array(
            'miembros' => $members,
        ));
    }

    public function insertarMiembroAction($nombre, $apellido)
    {
        $member = new Miembro();
        $member->setNombre($nombre);
        $member->setApellido($apellido);
        $member->setBio("mi bio");

        $em = $this->getDoctrine()->getManager();
        $em->persist($member);
        $em->flush();

        return new Response(
            'Created project id: '.$member->getId()
        );
    }

    public function getMiembroAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $member = $em->getRepository('DecathlonDevOpsBundle:Miembro')->findOneBy(array('id' => $id));

        return $this->render('DecathlonDevOpsBundle::miembros.html.twig',array(
            'miembro' => $member,
        ));
    }


}
