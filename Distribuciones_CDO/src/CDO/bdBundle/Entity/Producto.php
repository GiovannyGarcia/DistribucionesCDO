<?php

namespace CDO\bdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producto
 *
 * @ORM\Table(name="producto")
 * @ORM\Entity(repositoryClass="CDO\bdBundle\Repository\ProductoRepository")
 */
class Producto
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
     * @ORM\Column(name="codigo", type="integer", unique=true)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=30, unique=true)
     */
    private $descripcion;

    /**
     * @var float
     *
     * @ORM\Column(name="costo", type="float")
     */
    private $costo;

    /**
     * @var float
     *
     * @ORM\Column(name="precioVenta", type="float")
     */
    private $precioVenta;

    /**
     * @var string
     *
     * @ORM\Column(name="codCategoria", type="string", length=20)
     */
    private $codCategoria;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad", type="integer")
     */
    private $cantidad;

    /**
     * @var float
     *
     * @ORM\Column(name="iva", type="float")
     */
    private $iva;


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
     * Set codigo
     *
     * @param integer $codigo
     * @return Producto
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return integer 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Producto
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set costo
     *
     * @param float $costo
     * @return Producto
     */
    public function setCosto($costo)
    {
        $this->costo = $costo;

        return $this;
    }

    /**
     * Get costo
     *
     * @return float 
     */
    public function getCosto()
    {
        return $this->costo;
    }

    /**
     * Set precioVenta
     *
     * @param float $precioVenta
     * @return Producto
     */
    public function setPrecioVenta($precioVenta)
    {
        $this->precioVenta = $precioVenta;

        return $this;
    }

    /**
     * Get precioVenta
     *
     * @return float 
     */
    public function getPrecioVenta()
    {
        return $this->precioVenta;
    }

    /**
     * Set codCategoria
     *
     * @param string $codCategoria
     * @return Producto
     */
    public function setCodCategoria($codCategoria)
    {
        $this->codCategoria = $codCategoria;

        return $this;
    }

    /**
     * Get codCategoria
     *
     * @return string 
     */
    public function getCodCategoria()
    {
        return $this->codCategoria;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     * @return Producto
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

    /**
     * Set iva
     *
     * @param float $iva
     * @return Producto
     */
    public function setIva($iva)
    {
        $this->iva = $iva;

        return $this;
    }

    /**
     * Get iva
     *
     * @return float 
     */
    public function getIva()
    {
        return $this->iva;
    }
}
