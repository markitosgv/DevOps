<?php

namespace Decathlon\DevOpsBundle\Controller;

use Decathlon\DevOpsBundle\Entity\Noticias;
use Decathlon\DevOpsBundle\Entity\Proyecto;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ProyectosController extends Controller
{

    public function listadoAction()
    {
        $em = $this->getDoctrine()->getManager();
        $projects = $em->getRepository('DecathlonDevOpsBundle:Proyecto')->findAll();

        return $this->render('DecathlonDevOpsBundle::listproyectos.html.twig',array(
            'proyectos' => $projects,
        ));
    }

    public function insertarProyectoAction($nombre)
    {
        $project = new Proyecto();
        $project->setNombre($nombre);
        $project->setDescripcion($nombre);

        $em = $this->getDoctrine()->getManager();
        $em->persist($project);
        $em->flush();

        return new Response(
            'Created project id: '.$project->getId()
        );
    }

    public function getProyectoAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $project = $em->getRepository('DecathlonDevOpsBundle:Proyecto')->findOneBy(array('id' => $id));

        return $this->render('DecathlonDevOpsBundle::proyectos.html.twig',array(
            'proyecto' => $project,
        ));
    }


}
