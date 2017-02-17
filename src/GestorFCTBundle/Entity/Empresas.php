<?php

namespace GestorFCTBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empresas
 *
 * @ORM\Table(name="empresas")
 * @ORM\Entity(repositoryClass="GestorFCTBundle\Repository\EmpresasRepository")
 */
class Empresas
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
     * @ORM\Column(name="Poblacion", type="string", length=255)
     */
    private $poblacion;

    /**
     * @var bool
     *
     * @ORM\Column(name="AportadaAlumno", type="boolean")
     */
    private $aportadaAlumno;

    /**
     * @ORM\OneToMany(targetEntity="Asignaciones", mappedBy="idEmpresa")
     */
    private $asignacionEmpresa;

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
     * @return Empresas
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
     * Set poblacion
     *
     * @param string $poblacion
     *
     * @return Empresas
     */
    public function setPoblacion($poblacion)
    {
        $this->poblacion = $poblacion;

        return $this;
    }

    /**
     * Get poblacion
     *
     * @return string
     */
    public function getPoblacion()
    {
        return $this->poblacion;
    }

    /**
     * Set aportadaAlumno
     *
     * @param boolean $aportadaAlumno
     *
     * @return Empresas
     */
    public function setAportadaAlumno($aportadaAlumno)
    {
        $this->aportadaAlumno = $aportadaAlumno;

        return $this;
    }

    /**
     * Get aportadaAlumno
     *
     * @return bool
     */
    public function getAportadaAlumno()
    {
        return $this->aportadaAlumno;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->asignacionEmpresa = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add asignacionEmpresa
     *
     * @param \GestorFCTBundle\Entity\Asignaciones $asignacionEmpresa
     *
     * @return Empresas
     */
    public function addAsignacionEmpresa(\GestorFCTBundle\Entity\Asignaciones $asignacionEmpresa)
    {
        $this->asignacionEmpresa[] = $asignacionEmpresa;

        return $this;
    }

    /**
     * Remove asignacionEmpresa
     *
     * @param \GestorFCTBundle\Entity\Asignaciones $asignacionEmpresa
     */
    public function removeAsignacionEmpresa(\GestorFCTBundle\Entity\Asignaciones $asignacionEmpresa)
    {
        $this->asignacionEmpresa->removeElement($asignacionEmpresa);
    }

    /**
     * Get asignacionEmpresa
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAsignacionEmpresa()
    {
        return $this->asignacionEmpresa;
    }
}
