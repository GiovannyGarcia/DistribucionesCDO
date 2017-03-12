<?php

namespace CDO\bdBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promotoras
 *
 * @ORM\Table(name="promotoras")
 * @ORM\Entity(repositoryClass="CDO\bdBundle\Repository\PromotorasRepository")
 */
class Promotoras
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
     * @ORM\Column(name="codPromotora", type="string", length=15, unique=true)
     */
    private $codPromotora;

    /**
     * @var string
     *
     * @ORM\Column(name="nomPromotora", type="string", length=20, unique=true)
     */
    private $nomPromotora;


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
     * Set codPromotora
     *
     * @param string $codPromotora
     * @return Promotoras
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
     * Set nomPromotora
     *
     * @param string $nomPromotora
     * @return Promotoras
     */
    public function setNomPromotora($nomPromotora)
    {
        $this->nomPromotora = $nomPromotora;

        return $this;
    }

    /**
     * Get nomPromotora
     *
     * @return string 
     */
    public function getNomPromotora()
    {
        return $this->nomPromotora;
    }
}
