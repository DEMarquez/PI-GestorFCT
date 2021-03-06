<?php

namespace GestorFCTBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profesores
 *
 * @ORM\Table(name="profesores")
 * @ORM\Entity(repositoryClass="GestorFCTBundle\Repository\ProfesoresRepository")
 */
class Profesores
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Grupo", type="string", length=255)
     */
    private $grupo;

    /**
     * @ORM\OneToMany(targetEntity="Asignaciones", mappedBy="idProfesor")
     */
    private $asignacionProfesor;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Profesores
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
     * Set grupo
     *
     * @param string $grupo
     *
     * @return Profesores
     */
    public function setGrupo($grupo)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get grupo
     *
     * @return string
     */
    public function getGrupo()
    {
        return $this->grupo;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->asignacionProfesor = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add asignacionProfesor
     *
     * @param \GestorFCTBundle\Entity\Asignaciones $asignacionProfesor
     *
     * @return Profesores
     */
    public function addAsignacionProfesor(\GestorFCTBundle\Entity\Asignaciones $asignacionProfesor)
    {
        $this->asignacionProfesor[] = $asignacionProfesor;

        return $this;
    }

    /**
     * Remove asignacionProfesor
     *
     * @param \GestorFCTBundle\Entity\Asignaciones $asignacionProfesor
     */
    public function removeAsignacionProfesor(\GestorFCTBundle\Entity\Asignaciones $asignacionProfesor)
    {
        $this->asignacionProfesor->removeElement($asignacionProfesor);
    }

    /**
     * Get asignacionProfesor
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAsignacionProfesor()
    {
        return $this->asignacionProfesor;
    }
}
