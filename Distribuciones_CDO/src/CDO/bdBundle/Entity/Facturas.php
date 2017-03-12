<?php

namespace CDO\bdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facturas
 *
 * @ORM\Table(name="facturas")
 * @ORM\Entity(repositoryClass="CDO\bdBundle\Repository\FacturasRepository")
 */
class Facturas
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
     * @ORM\Column(name="idPedido", type="integer", unique=true)
     */
    private $idPedido;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaFactura", type="datetime")
     */
    private $fechaFactura;

    /**
     * @var int
     *
     * @ORM\Column(name="costoTotal", type="integer")
     */
    private $costoTotal;


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
     * Set idPedido
     *
     * @param integer $idPedido
     * @return Facturas
     */
    public function setIdPedido($idPedido)
    {
        $this->idPedido = $idPedido;

        return $this;
    }

    /**
     * Get idPedido
     *
     * @return integer 
     */
    public function getIdPedido()
    {
        return $this->idPedido;
    }

    /**
     * Set fechaFactura
     *
     * @param \DateTime $fechaFactura
     * @return Facturas
     */
    public function setFechaFactura($fechaFactura)
    {
        $this->fechaFactura = $fechaFactura;

        return $this;
    }

    /**
     * Get fechaFactura
     *
     * @return \DateTime 
     */
    public function getFechaFactura()
    {
        return $this->fechaFactura;
    }

    /**
     * Set costoTotal
     *
     * @param integer $costoTotal
     * @return Facturas
     */
    public function setCostoTotal($costoTotal)
    {
        $this->costoTotal = $costoTotal;

        return $this;
    }

    /**
     * Get costoTotal
     *
     * @return integer 
     */
    public function getCostoTotal()
    {
        return $this->costoTotal;
    }
}
