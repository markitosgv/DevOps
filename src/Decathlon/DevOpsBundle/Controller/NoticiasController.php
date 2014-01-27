<?php

namespace Decathlon\DevOpsBundle\Controller;

use Decathlon\DevOpsBundle\Entity\Categorias;
use Decathlon\DevOpsBundle\Entity\Noticias;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class NoticiasController extends Controller
{

    public function insertarNoticiaAction($titular)
    {
        $category = new Categorias();
        $category->setNombre("Actualidad");

        $new = new Noticias();
        $new->setTitular($titular);
        $new->setCategoria($category);
        $new->setCuerpo("test");

        $em = $this->getDoctrine()->getManager();
        $em->persist($category);
        $em->persist($new);
        $em->flush();

        return new Response(
            'Created product id: '.$new->getId().' and category id: '.$category->getId()
        );
    }

    public function editarNoticiaAction($id, $titular)
    {

        $em = $this->getDoctrine()->getManager();
        $new = $em->getRepository('DecathlonDevOpsBundle:Noticias')->findOneBy(array('id' => $id));
        $new->setTitular($titular);
        $em->flush($new);

        return new Response(
            'Edited new id: '.$new->getId().' with this new title: '.$new->getTitular()
        );
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
