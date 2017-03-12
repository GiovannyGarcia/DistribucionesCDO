<?php

namespace CDO\bdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetallePedidos
 *
 * @ORM\Table(name="detalle_pedidos")
 * @ORM\Entity(repositoryClass="CDO\bdBundle\Repository\DetallePedidosRepository")
 */
class DetallePedidos
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
     * @var int
     *
     * @ORM\Column(name="codProducto", type="integer", unique=true)
     */
    private $codProducto;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad", type="integer")
     */
    private $cantidad;


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
     * @return DetallePedidos
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
     * Set codProducto
     *
     * @param integer $codProducto
     * @return DetallePedidos
     */
    public function setCodProducto($codProducto)
    {
        $this->codProducto = $codProducto;

        return $this;
    }

    /**
     * Get codProducto
     *
     * @return integer 
     */
    public function getCodProducto()
    {
        return $this->codProducto;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     * @return DetallePedidos
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }
}
