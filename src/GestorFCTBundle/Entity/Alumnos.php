<?php

namespace GestorFCTBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alumnos
 *
 * @ORM\Table(name="alumnos")
 * @ORM\Entity(repositoryClass="GestorFCTBundle\Repository\AlumnoRepository")
 */
class Alumnos
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Direccion", type="string", length=255)
     */
    private $direccion;

    /**
     * @var int
     *
     * @ORM\Column(name="Telefono", type="integer")
     */
    private $Telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="DNI", type="string", length=255)
     */
    private $dni;

    /**
     * @var string
     *
     * @ORM\Column(name="Residencia", type="string", length=255)
     */
    private $residencia;

    /**
     * @var bool
     *
     * @ORM\Column(name="Transporte", type="boolean")
     */
    private $transporte;

    /**
     * @ORM\ManyToOne(targetEntity="Grupo", inversedBy="alumnos")
     * @ORM\JoinColumn(name="grupo_id", referencedColumnName="id")
     */
    private $grupo;

    /**
     * @ORM\OneToMany(targetEntity="Asignaciones", mappedBy="idAlumno")
     */
    private $asignacionAlumno;

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
     * @return Alumno
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
     * Set residencia
     *
     * @param string $residencia
     *
     * @return Alumno
     */
    public function setResidencia($residencia)
    {
        $this->residencia = $residencia;

        return $this;
    }

    /**
     * Get residencia
     *
     * @return string
     */
    public function getResidencia()
    {
        return $this->residencia;
    }

    /**
     * Set transporte
     *
     * @param boolean $transporte
     *
     * @return Alumno
     */
    public function setTransporte($transporte)
    {
        $this->transporte = $transporte;

        return $this;
    }

    /**
     * Get transporte
     *
     * @return bool
     */
    public function getTransporte()
    {
        return $this->transporte;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Alumnos
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set telefono
     *
     * @param integer $telefono
     *
     * @return Alumnos
     */
    public function setTelefono($telefono)
    {
        $this->Telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return integer
     */
    public function getTelefono()
    {
        return $this->Telefono;
    }

    /**
     * Set dni
     *
     * @param string $dni
     *
     * @return Alumnos
     */
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get dni
     *
     * @return string
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set grupo
     *
     * @param \GestorFCTBundle\Entity\Grupo $grupo
     *
     * @return Alumnos
     */
    public function setGrupo(\GestorFCTBundle\Entity\Grupo $grupo = null)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get grupo
     *
     * @return \GestorFCTBundle\Entity\Grupo
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
        $this->asignacionAlumno = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add asignacionAlumno
     *
     * @param \GestorFCTBundle\Entity\Asignaciones $asignacionAlumno
     *
     * @return Alumnos
     */
    public function addAsignacionAlumno(\GestorFCTBundle\Entity\Asignaciones $asignacionAlumno)
    {
        $this->asignacionAlumno[] = $asignacionAlumno;

        return $this;
    }

    /**
     * Remove asignacionAlumno
     *
     * @param \GestorFCTBundle\Entity\Asignaciones $asignacionAlumno
     */
    public function removeAsignacionAlumno(\GestorFCTBundle\Entity\Asignaciones $asignacionAlumno)
    {
        $this->asignacionAlumno->removeElement($asignacionAlumno);
    }

    /**
     * Get asignacionAlumno
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAsignacionAlumno()
    {
        return $this->asignacionAlumno;
    }
}
