<?php

namespace Decathlon\DevOpsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Miembro
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Decathlon\DevOpsBundle\Entity\MiembroRepository")
 */
class Miembro
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
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=255)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="bio", type="text")
     */
    private $bio;

    /**
     * @ORM\ManyToMany(targetEntity="Proyecto", inversedBy="miembros")
     * @ORM\JoinTable(name="miebros_proyectos")
     **/
    private $proyectos;

    public function __construct() {
        $this->proyectos = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * @return Miembro
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
     * Set apellido
     *
     * @param string $apellido
     * @return Miembro
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set bio
     *
     * @param string $bio
     * @return Miembro
     */
    public function setBio($bio)
    {
        $this->bio = $bio;

        return $this;
    }

    /**
     * Get bio
     *
     * @return string 
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * Add proyectos
     *
     * @param \Decathlon\DevOpsBundle\Entity\Proyecto $proyectos
     * @return Miembro
     */
    public function addProyecto(\Decathlon\DevOpsBundle\Entity\Proyecto $proyectos)
    {
        $this->proyectos[] = $proyectos;

        return $this;
    }

    /**
     * Remove proyectos
     *
     * @param \Decathlon\DevOpsBundle\Entity\Proyecto $proyectos
     */
    public function removeProyecto(\Decathlon\DevOpsBundle\Entity\Proyecto $proyectos)
    {
        $this->proyectos->removeElement($proyectos);
    }

    /**
     * Get proyectos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProyectos()
    {
        return $this->proyectos;
    }
}
