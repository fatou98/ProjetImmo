<?php

namespace HTL\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProprietaireBien
 *
 * @ORM\Table(name="proprietaire_bien")
 * @ORM\Entity(repositoryClass="HTL\ImmobilierBundle\Repository\ProprietaireBienRepository")
 */
class ProprietaireBien
{
<<<<<<< HEAD

=======
>>>>>>> c7dea3f39afe44c3fc02f69a517e5def0b23e2cb
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
     * @ORM\Column(name="adresse", type="string", length=50)
     */
    private $adresse;

<<<<<<< HEAD
   /**
     * @var int
     *
     * @ORM\Column(name="etat", type="integer")
     */
    private $etat;
=======

>>>>>>> c7dea3f39afe44c3fc02f69a517e5def0b23e2cb
    /**

   * @ORM\ManyToOne(targetEntity="HTL\ImmobilierBundle\Entity\Proprietaire")

   * @ORM\JoinColumn(nullable=false)

   */

  private $proprietaire;

  /**

   * @ORM\ManyToOne(targetEntity="HTL\ImmobilierBundle\Entity\Bien")

   * @ORM\JoinColumn(nullable=false)

   */

  private $bien;


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
     * Set adresse
     *
     * @param string $adresse
     *
     * @return ProprietaireBien
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }
<<<<<<< HEAD
    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return ProprietaireBien
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set proprietaire
     *
     * @param \HTL\ImmobilierBundle\Entity\Proprietaire $proprietaire
     *
     * @return ProprietaireBien
     */
    public function setProprietaire(\HTL\ImmobilierBundle\Entity\Proprietaire $proprietaire)
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

    /**
     * Set bien
     *
     * @param \HTL\ImmobilierBundle\Entity\Bien $bien
     *
     * @return ProprietaireBien
     */
    public function setBien(\HTL\ImmobilierBundle\Entity\Bien $bien)
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
=======
>>>>>>> c7dea3f39afe44c3fc02f69a517e5def0b23e2cb
}
