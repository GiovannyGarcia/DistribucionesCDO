<?php

namespace CDO\bdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorias
 *
 * @ORM\Table(name="categorias")
 * @ORM\Entity(repositoryClass="CDO\bdBundle\Repository\CategoriasRepository")
 */
class Categorias
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
     * @ORM\Column(name="codCategoria", type="string", length=20, unique=true)
     */
    private $codCategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="nomCategoria", type="string", length=20, unique=true)
     */
    private $nomCategoria;


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
     * Set codCategoria
     *
     * @param string $codCategoria
     * @return Categorias
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
     * Set nomCategoria
     *
     * @param string $nomCategoria
     * @return Categorias
     */
    public function setNomCategoria($nomCategoria)
    {
        $this->nomCategoria = $nomCategoria;

        return $this;
    }

    /**
     * Get nomCategoria
     *
     * @return string 
     */
    public function getNomCategoria()
    {
        return $this->nomCategoria;
    }
}
