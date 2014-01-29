<?php

namespace Decathlon\DevOpsBundle\Controller;

use Decathlon\DevOpsBundle\Entity\Noticias;
use Decathlon\DevOpsBundle\Form\Type\NoticiasEditFormType;
use Decathlon\DevOpsBundle\Form\Type\NoticiasFormType;
use Decathlon\DevOpsBundle\Form\Type\NoticiasInsertFormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class NoticiasController extends Controller
{

    public function insertarNoticiaAction(Request $request, $titular=null)
    {
        $new = new Noticias();
        $temperature = $this->get('decathlon_dev_ops.wheater')->getTemperature();
        $new->setCuerpo("Temperatura: ".$temperature." ºC");
        $form = $this->createForm(new NoticiasInsertFormType(), $new, array('attr' => array('titular' => $titular)));

        if ($request->isMethod('POST')) {

            $form->handleRequest($request);
            if ($form->isValid()) {
                ldd($form->getData());
                $em = $this->getDoctrine()->getManager();
                $em->persist($new);
                $em->flush();
            }
        }

        return $this->render('DecathlonDevOpsBundle::insertarnoticia.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function editarNoticiaAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();
        $new = $em->getRepository('DecathlonDevOpsBundle:Noticias')->findOneBy(array('id' => $id));

        $form = $this->createForm(new NoticiasEditFormType(), $new);

        if ($request->isMethod('POST')) {

            $form->handleRequest($request);
            if ($form->isValid()) {
                ldd($form->getData());
                $em = $this->getDoctrine()->getManager();
                $em->flush($new);
            }
        }

        return $this->render('DecathlonDevOpsBundle::editarnoticia.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function eliminarNoticiaAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $new = $em->getRepository('DecathlonDevOpsBundle:Noticias')->findOneBy(array('id' => $id));

        $em->remove($new);
        $em->flush();

        return new Response(
            'Deleted new id: '.$new->getId().' with this title: '.$new->getTitular()
        );
    }


}
