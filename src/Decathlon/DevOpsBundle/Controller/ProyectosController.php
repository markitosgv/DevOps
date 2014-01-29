<?php

namespace Decathlon\DevOpsBundle\Controller;

use Decathlon\DevOpsBundle\Entity\Noticias;
use Decathlon\DevOpsBundle\Entity\Proyecto;
use Decathlon\DevOpsBundle\Form\Type\ProyectoEditFormType;
use Decathlon\DevOpsBundle\Form\Type\ProyectoFormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
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

    public function insertarProyectoAction(Request $request, $nombre)
    {
//        $project = new Proyecto();
//        $project->setNombre($nombre);
//        $project->setDescripcion($nombre);
//
//        $em = $this->getDoctrine()->getManager();
//        $em->persist($project);
//        $em->flush();
//
//        return new Response(
//            'Created project id: '.$project->getId()
//        );

        $project = new Proyecto();
        $form = $this->createForm(new ProyectoFormType(), $project, array('attr' => array('nombre' => $nombre)));

        if ($request->isMethod('POST')) {

            $form->handleRequest($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($project);
                $em->flush();
            }
        }

        return $this->render('DecathlonDevOpsBundle::insertarnoticia.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function editarProyectoAction(Request $request, $id)
    {
//        $project = new Proyecto();
//        $project->setNombre($nombre);
//        $project->setDescripcion($nombre);
//
//        $em = $this->getDoctrine()->getManager();
//        $em->persist($project);
//        $em->flush();
//
//        return new Response(
//            'Created project id: '.$project->getId()
//        );

        $em = $this->getDoctrine()->getManager();
        $project = $em->getRepository('DecathlonDevOpsBundle:Proyecto')->findOneBy(array('id' => $id));
        $form = $this->createForm(new ProyectoEditFormType(), $project);

        if ($request->isMethod('POST')) {

            $form->handleRequest($request);
            if ($form->isValid()) {
                //persist cascade
//                foreach ($project->getMiembros() as $member) {
//                    $em->persist($member);
//                }
                $em->persist($project);

            }
            $em->flush();
        }

        return $this->render('DecathlonDevOpsBundle::editarproyecto.html.twig', array(
            'proyecto' => $project,
            'form' => $form->createView(),
        ));
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
