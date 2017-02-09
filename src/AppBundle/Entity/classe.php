<?php

namespace AppBundle\Entity;

use AppBundle\Repository\classeRepository;
use Doctrine\ORM\Mapping as ORM;
use stdClass;

/**
 * classe
 *
 * @ORM\Table(name="classe")
 * @ORM\Entity(repositoryClass="classeRepository")
 */
class classe
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
     * @ORM\Column(name="nom", type="string", length=255, unique=true)
     */
    private $nom;

    /**
     * @var stdClass
     * @ORM\OneToOne(targetEntity="Stats")
     * @ORM\JoinColumn(name="fk_stats", referencedColumnName="id")
     */
    private $stats;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return classe
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set stats
     *
     * @param stdClass $stats
     *
     * @return classe
     */
    public function setStats($stats)
    {
        $this->stats = $stats;

        return $this;
    }

    /**
     * Get stats
     *
     * @return stdClass
     */
    public function getStats()
    {
        return $this->stats;
    }
}

