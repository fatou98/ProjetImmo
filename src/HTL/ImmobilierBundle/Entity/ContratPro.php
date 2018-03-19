<?php

namespace HTL\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContratPro
 *
 * @ORM\Table(name="contrat_pro")
 * @ORM\Entity(repositoryClass="HTL\ImmobilierBundle\Repository\ContratProRepository")
 */
class ContratPro
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=10)
     */
    private $duree;
 /**
   * @ORM\ManyToOne(targetEntity="HTL\ImmobilierBundle\Entity\Bien")
   * @ORM\JoinColumn(nullable=true)
   */
    private $bien;
 /**
   * @ORM\ManyToOne(targetEntity="HTL\ImmobilierBundle\Entity\Proprietaire")
   * @ORM\JoinColumn(nullable=true)
   */
    private $proprietaire;

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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return ContratPro
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set duree
     *
     * @param string $duree
     *
     * @return ContratPro
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return string
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set bien
     *
     * @param \HTL\ImmobilierBundle\Entity\Bien $bien
     *
     * @return ContratPro
     */
    public function setBien(\HTL\ImmobilierBundle\Entity\Bien $bien = null)
    {
        $this->bien = $bien;

        return $this;
    }

    /**
     * Get bien
     *
     * @return \HTL\ImmobilierBundle\Entity\Bien
     */
    public function getBien()
    {
        return $this->bien;
    }

    /**
     * Set proprietaire
     *
     * @param \HTL\ImmobilierBundle\Entity\Proprietaire $proprietaire
     *
     * @return ContratPro
     */
    public function setProprietaire(\HTL\ImmobilierBundle\Entity\Proprietaire $proprietaire = null)
    {
        $this->proprietaire = $proprietaire;

        return $this;
    }

    /**
     * Get proprietaire
     *
     * @return \HTL\ImmobilierBundle\Entity\Proprietaire
     */
    public function getProprietaire()
    {
        return $this->proprietaire;
    }
}
