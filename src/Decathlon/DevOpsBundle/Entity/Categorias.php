<?php

namespace Decathlon\DevOpsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorias
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Decathlon\DevOpsBundle\Entity\CategoriasRepository")
 */
class Categorias
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity="Noticias", mappedBy="categoria")
     */
    private $noticias;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Categorias
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->noticias = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add noticias
     *
     * @param \Decathlon\DevOpsBundle\Entity\Noticias $noticias
     * @return Categorias
     */
    public function addNoticia(\Decathlon\DevOpsBundle\Entity\Noticias $noticias)
    {
        $this->noticias[] = $noticias;

        return $this;
    }

    /**
     * Remove noticias
     *
     * @param \Decathlon\DevOpsBundle\Entity\Noticias $noticias
     */
    public function removeNoticia(\Decathlon\DevOpsBundle\Entity\Noticias $noticias)
    {
        $this->noticias->removeElement($noticias);
    }

    /**
     * Get noticias
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNoticias()
    {
        return $this->noticias;
    }
}
