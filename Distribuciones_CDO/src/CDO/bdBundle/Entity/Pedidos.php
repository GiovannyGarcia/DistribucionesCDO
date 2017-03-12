<?php

namespace CDO\bdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pedidos
 *
 * @ORM\Table(name="pedidos")
 * @ORM\Entity(repositoryClass="CDO\bdBundle\Repository\PedidosRepository")
 */
class Pedidos
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
     * @var string
     *
     * @ORM\Column(name="estadoPedido", type="string", length=20)
     */
    private $estadoPedido;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaPedido", type="datetime")
     */
    private $fechaPedido;

    /**
     * @var int
     *
     * @ORM\Column(name="cedulaCliente", type="integer")
     */
    private $cedulaCliente;

    /**
     * @var int
     *
     * @ORM\Column(name="cedulaEmpleado", type="integer")
     */
    private $cedulaEmpleado;


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
     * @return Pedidos
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
     * Set estadoPedido
     *
     * @param string $estadoPedido
     * @return Pedidos
     */
    public function setEstadoPedido($estadoPedido)
    {
        $this->estadoPedido = $estadoPedido;

        return $this;
    }

    /**
     * Get estadoPedido
     *
     * @return string 
     */
    public function getEstadoPedido()
    {
        return $this->estadoPedido;
    }

    /**
     * Set fechaPedido
     *
     * @param \DateTime $fechaPedido
     * @return Pedidos
     */
    public function setFechaPedido($fechaPedido)
    {
        $this->fechaPedido = $fechaPedido;

        return $this;
    }

    /**
     * Get fechaPedido
     *
     * @return \DateTime 
     */
    public function getFechaPedido()
    {
        return $this->fechaPedido;
    }

    /**
     * Set cedulaCliente
     *
     * @param integer $cedulaCliente
     * @return Pedidos
     */
    public function setCedulaCliente($cedulaCliente)
    {
        $this->cedulaCliente = $cedulaCliente;

        return $this;
    }

    /**
     * Get cedulaCliente
     *
     * @return integer 
     */
    public function getCedulaCliente()
    {
        return $this->cedulaCliente;
    }

    /**
     * Set cedulaEmpleado
     *
     * @param integer $cedulaEmpleado
     * @return Pedidos
     */
    public function setCedulaEmpleado($cedulaEmpleado)
    {
        $this->cedulaEmpleado = $cedulaEmpleado;

        return $this;
    }

    /**
     * Get cedulaEmpleado
     *
     * @return integer 
     */
    public function getCedulaEmpleado()
    {
        return $this->cedulaEmpleado;
    }
}
