<?php

namespace Decathlon\DevOpsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Noticias
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Decathlon\DevOpsBundle\Entity\NoticiasRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Noticias
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="titular", type="string", length=128)
     */
    private $titular;

    /**
     * @var string
     *
     * @ORM\Column(name="cuerpo", type="text")
     */
    private $cuerpo;

    /**
     * @ORM\ManyToOne(targetEntity="Categorias", inversedBy="noticias")
     * @ORM\JoinColumn(name="categoria_id", referencedColumnName="id")
     */
    private $categoria;

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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Noticias
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set titular
     *
     * @param string $titular
     * @return Noticias
     */
    public function setTitular($titular)
    {
        $this->titular = $titular;

        return $this;
    }

    /**
     * Get titular
     *
     * @return string 
     */
    public function getTitular()
    {
        return $this->titular;
    }

    /**
     * Set cuerpo
     *
     * @param string $cuerpo
     * @return Noticias
     */
    public function setCuerpo($cuerpo)
    {
        $this->cuerpo = $cuerpo;

        return $this;
    }

    /**
     * Get cuerpo
     *
     * @return string 
     */
    public function getCuerpo()
    {
        return $this->cuerpo;
    }


    /**
     * Set categoria
     *
     * @param \Decathlon\DevOpsBundle\Entity\Categorias $categoria
     * @return Noticias
     */
    public function setCategoria(\Decathlon\DevOpsBundle\Entity\Categorias $categoria = null)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return \Decathlon\DevOpsBundle\Entity\Categorias 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

   /**
    * @ORM\PreUpdate
    * @ORM\PrePersist
    */
   public function setUpdatedTime()
   {
       $this->fecha = new \DateTime();
   }
}
