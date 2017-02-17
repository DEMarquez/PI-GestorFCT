<?php

namespace GestorFCTBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asignaciones
 *
 * @ORM\Table(name="asignaciones")
 * @ORM\Entity(repositoryClass="GestorFCTBundle\Repository\AsignacionesRepository")
 */
class Asignaciones
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;

    /**
     * @ORM\ManyToOne(targetEntity="Profesores", inversedBy="asignacionProfesor")
     * @ORM\JoinColumn(name="profesor_id", referencedColumnName="id")
     */
    private $idProfesor;

    /**
     * @ORM\ManyToOne(targetEntity="Empresas", inversedBy="asignacionEmpresa")
     * @ORM\JoinColumn(name="Empresa_id", referencedColumnName="id")
     */
    private $idEmpresa;

    /**
     * @ORM\ManyToOne(targetEntity="Alumnos", inversedBy="asignacionAlumno")
     * @ORM\JoinColumn(name="Alumno_id", referencedColumnName="id")
     */
    private $idAlumno;


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
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Asignaciones
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
     * Set idProfesor
     *
     * @param \GestorFCTBundle\Entity\Profesores $idProfesor
     *
     * @return Asignaciones
     */
    public function setIdProfesor(\GestorFCTBundle\Entity\Profesores $idProfesor = null)
    {
        $this->idProfesor = $idProfesor;

        return $this;
    }

    /**
     * Get idProfesor
     *
     * @return \GestorFCTBundle\Entity\Profesores
     */
    public function getIdProfesor()
    {
        return $this->idProfesor;
    }

    /**
     * Set idEmpresa
     *
     * @param \GestorFCTBundle\Entity\Empresas $idEmpresa
     *
     * @return Asignaciones
     */
    public function setIdEmpresa(\GestorFCTBundle\Entity\Empresas $idEmpresa = null)
    {
        $this->idEmpresa = $idEmpresa;

        return $this;
    }

    /**
     * Get idEmpresa
     *
     * @return \GestorFCTBundle\Entity\Empresas
     */
    public function getIdEmpresa()
    {
        return $this->idEmpresa;
    }

    /**
     * Set idAlumno
     *
     * @param \GestorFCTBundle\Entity\Alumnos $idAlumno
     *
     * @return Asignaciones
     */
    public function setIdAlumno(\GestorFCTBundle\Entity\Alumnos $idAlumno = null)
    {
        $this->idAlumno = $idAlumno;

        return $this;
    }

    /**
     * Get idAlumno
     *
     * @return \GestorFCTBundle\Entity\Alumnos
     */
    public function getIdAlumno()
    {
        return $this->idAlumno;
    }
}
