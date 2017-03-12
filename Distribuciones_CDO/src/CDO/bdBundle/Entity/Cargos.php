<?php

namespace CDO\bdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cargos
 *
 * @ORM\Table(name="cargos")
 * @ORM\Entity(repositoryClass="CDO\bdBundle\Repository\CargosRepository")
 */
class Cargos
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
     * @ORM\Column(name="codCargo", type="string", length=10, unique=true)
     */
    private $codCargo;

    /**
     * @var string
     *
     * @ORM\Column(name="nomCargo", type="string", length=20, unique=true)
     */
    private $nomCargo;


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
     * Set codCargo
     *
     * @param string $codCargo
     * @return Cargos
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
     * Set nomCargo
     *
     * @param string $nomCargo
     * @return Cargos
     */
    public function setNomCargo($nomCargo)
    {
        $this->nomCargo = $nomCargo;

        return $this;
    }

    /**
     * Get nomCargo
     *
     * @return string 
     */
    public function getNomCargo()
    {
        return $this->nomCargo;
    }
}
