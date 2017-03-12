<?php

namespace CDO\bdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empleados
 *
 * @ORM\Table(name="empleados")
 * @ORM\Entity(repositoryClass="CDO\bdBundle\Repository\EmpleadosRepository")
 */
class Empleados
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
     * @var int
     *
     * @ORM\Column(name="idEmpleado", type="integer", unique=true)
     */
    private $idEmpleado;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreEmp", type="string", length=30)
     */
    private $nombreEmp;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidoEmp", type="string", length=45)
     */
    private $apellidoEmp;

    /**
     * @var string
     *
     * @ORM\Column(name="direccionEmp", type="string", length=30, unique=true)
     */
    private $direccionEmp;

    /**
     * @var string
     *
     * @ORM\Column(name="telefonoEmp", type="string", length=10, unique=true)
     */
    private $telefonoEmp;

    /**
     * @var string
     *
     * @ORM\Column(name="emailEmp", type="string", length=40, nullable=true, unique=true)
     */
    private $emailEmp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaIngresoEmp", type="datetime")
     */
    private $fechaIngresoEmp;

    /**
     * @var string
     *
     * @ORM\Column(name="codCargo", type="string", length=10)
     */
    private $codCargo;

    /**
     * @var string
     *
     * @ORM\Column(name="codPromotora", type="string", length=15)
     */
    private $codPromotora;

    /**
     * @var string
     *
     * @ORM\Column(name="contrase¤a", type="string", length=15)
     */
    private $contrase¤a;


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
     * Set idEmpleado
     *
     * @param integer $idEmpleado
     * @return Empleados
     */
    public function setIdEmpleado($idEmpleado)
    {
        $this->idEmpleado = $idEmpleado;

        return $this;
    }

    /**
     * Get idEmpleado
     *
     * @return integer 
     */
    public function getIdEmpleado()
    {
        return $this->idEmpleado;
    }

    /**
     * Set nombreEmp
     *
     * @param string $nombreEmp
     * @return Empleados
     */
    public function setNombreEmp($nombreEmp)
    {
        $this->nombreEmp = $nombreEmp;

        return $this;
    }

    /**
     * Get nombreEmp
     *
     * @return string 
     */
    public function getNombreEmp()
    {
        return $this->nombreEmp;
    }

    /**
     * Set apellidoEmp
     *
     * @param string $apellidoEmp
     * @return Empleados
     */
    public function setApellidoEmp($apellidoEmp)
    {
        $this->apellidoEmp = $apellidoEmp;

        return $this;
    }

    /**
     * Get apellidoEmp
     *
     * @return string 
     */
    public function getApellidoEmp()
    {
        return $this->apellidoEmp;
    }

    /**
     * Set direccionEmp
     *
     * @param string $direccionEmp
     * @return Empleados
     */
    public function setDireccionEmp($direccionEmp)
    {
        $this->direccionEmp = $direccionEmp;

        return $this;
    }

    /**
     * Get direccionEmp
     *
     * @return string 
     */
    public function getDireccionEmp()
    {
        return $this->direccionEmp;
    }

    /**
     * Set telefonoEmp
     *
     * @param string $telefonoEmp
     * @return Empleados
     */
    public function setTelefonoEmp($telefonoEmp)
    {
        $this->telefonoEmp = $telefonoEmp;

        return $this;
    }

    /**
     * Get telefonoEmp
     *
     * @return string 
     */
    public function getTelefonoEmp()
    {
        return $this->telefonoEmp;
    }

    /**
     * Set emailEmp
     *
     * @param string $emailEmp
     * @return Empleados
     */
    public function setEmailEmp($emailEmp)
    {
        $this->emailEmp = $emailEmp;

        return $this;
    }

    /**
     * Get emailEmp
     *
     * @return string 
     */
    public function getEmailEmp()
    {
        return $this->emailEmp;
    }

    /**
     * Set fechaIngresoEmp
     *
     * @param \DateTime $fechaIngresoEmp
     * @return Empleados
     */
    public function setFechaIngresoEmp($fechaIngresoEmp)
    {
        $this->fechaIngresoEmp = $fechaIngresoEmp;

        return $this;
    }

    /**
     * Get fechaIngresoEmp
     *
     * @return \DateTime 
     */
    public function getFechaIngresoEmp()
    {
        return $this->fechaIngresoEmp;
    }

    /**
     * Set codCargo
     *
     * @param string $codCargo
     * @return Empleados
     */
    public function setCodCargo($codCargo)
    {
        $this->codCargo = $codCargo;

        return $this;
    }

    /**
     * Get codCargo
     *
     * @return string 
     */
    public function getCodCargo()
    {
        return $this->codCargo;
    }

    /**
     * Set codPromotora
     *
     * @param string $codPromotora
     * @return Empleados
     */
    public function setCodPromotora($codPromotora)
    {
        $this->codPromotora = $codPromotora;

        return $this;
    }

    /**
     * Get codPromotora
     *
     * @return string 
     */
    public function getCodPromotora()
    {
        return $this->codPromotora;
    }

    /**
     * Set contrase¤a
     *
     * @param string $contrase¤a
     * @return Empleados
     */
    public function setContrase¤a($contrase¤a)
    {
        $this->contrase¤a = $contrase¤a;

        return $this;
    }

    /**
     * Get contrase¤a
     *
     * @return string 
     */
    public function getContrase¤a()
    {
        return $this->contrase¤a;
    }
}
