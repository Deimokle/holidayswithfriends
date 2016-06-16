<?php

namespace AppBundle\Entity;

/**
 * Voyage
 */
class Voyage
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $pays;

    /**
     * @var string
     */
    private $ville;

    /**
     * @var string
     */
    private $adrDepart;

    /**
     * @var string
     */
    private $adrArriver;

    /**
     * @var \DateTime
     */
    private $dateDepart;

    /**
     * @var int
     */
    private $tempsSejour;

    /**
     * @var string
     */
    private $prixFood;

    /**
     * @var string
     */
    private $prixLoge;

    /**
     * @var array
     */
    private $locomotion;

    /**
     * @var string
     */
    private $commentaire;


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
     * Set pays
     *
     * @param string $pays
     *
     * @return Voyage
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Voyage
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set adrDepart
     *
     * @param string $adrDepart
     *
     * @return Voyage
     */
    public function setAdrDepart($adrDepart)
    {
        $this->adrDepart = $adrDepart;

        return $this;
    }

    /**
     * Get adrDepart
     *
     * @return string
     */
    public function getAdrDepart()
    {
        return $this->adrDepart;
    }

    /**
     * Set adrArriver
     *
     * @param string $adrArriver
     *
     * @return Voyage
     */
    public function setAdrArriver($adrArriver)
    {
        $this->adrArriver = $adrArriver;

        return $this;
    }

    /**
     * Get adrArriver
     *
     * @return string
     */
    public function getAdrArriver()
    {
        return $this->adrArriver;
    }

    /**
     * Set dateDepart
     *
     * @param \DateTime $dateDepart
     *
     * @return Voyage
     */
    public function setDateDepart($dateDepart)
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    /**
     * Get dateDepart
     *
     * @return \DateTime
     */
    public function getDateDepart()
    {
        return $this->dateDepart;
    }

    /**
     * Set tempsSejour
     *
     * @param integer $tempsSejour
     *
     * @return Voyage
     */
    public function setTempsSejour($tempsSejour)
    {
        $this->tempsSejour = $tempsSejour;

        return $this;
    }

    /**
     * Get tempsSejour
     *
     * @return int
     */
    public function getTempsSejour()
    {
        return $this->tempsSejour;
    }

    /**
     * Set prixFood
     *
     * @param string $prixFood
     *
     * @return Voyage
     */
    public function setPrixFood($prixFood)
    {
        $this->prixFood = $prixFood;

        return $this;
    }

    /**
     * Get prixFood
     *
     * @return string
     */
    public function getPrixFood()
    {
        return $this->prixFood;
    }

    /**
     * Set prixLoge
     *
     * @param string $prixLoge
     *
     * @return Voyage
     */
    public function setPrixLoge($prixLoge)
    {
        $this->prixLoge = $prixLoge;

        return $this;
    }

    /**
     * Get prixLoge
     *
     * @return string
     */
    public function getPrixLoge()
    {
        return $this->prixLoge;
    }

    /**
     * Set locomotion
     *
     * @param array $locomotion
     *
     * @return Voyage
     */
    public function setLocomotion($locomotion)
    {
        $this->locomotion = $locomotion;

        return $this;
    }

    /**
     * Get locomotion
     *
     * @return array
     */
    public function getLocomotion()
    {
        return $this->locomotion;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Voyage
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }
}

