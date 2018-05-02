<?php

namespace EmploiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * shs_user
 *
 * @ORM\Table(name="shs_user")
 * @ORM\Entity(repositoryClass="EmploiBundle\Repository\shs_userRepository")
 */
class shs_user
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
     * @ORM\Column(name="Prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_de_famille", type="string", length=255)
     */
    private $nomDeFamille;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=255)
     */
    private $email;

    /**
     * @var int
     *
     * @ORM\Column(name="Numero_de_telephone", type="integer", nullable=true)
     */
    private $numeroDeTelephone;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var array
     *
     * @ORM\Column(name="Role", type="simple_array")
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="Societe", type="string", length=255)
     */
    private $societe;


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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return shs_user
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set nomDeFamille
     *
     * @param string $nomDeFamille
     *
     * @return shs_user
     */
    public function setNomDeFamille($nomDeFamille)
    {
        $this->nomDeFamille = $nomDeFamille;

        return $this;
    }

    /**
     * Get nomDeFamille
     *
     * @return string
     */
    public function getNomDeFamille()
    {
        return $this->nomDeFamille;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return shs_user
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set numeroDeTelephone
     *
     * @param integer $numeroDeTelephone
     *
     * @return shs_user
     */
    public function setNumeroDeTelephone($numeroDeTelephone)
    {
        $this->numeroDeTelephone = $numeroDeTelephone;

        return $this;
    }

    /**
     * Get numeroDeTelephone
     *
     * @return int
     */
    public function getNumeroDeTelephone()
    {
        return $this->numeroDeTelephone;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return shs_user
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

    /**
     * Set role
     *
     * @param array $role
     *
     * @return shs_user
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return array
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set societe
     *
     * @param string $societe
     *
     * @return shs_user
     */
    public function setSociete($societe)
    {
        $this->societe = $societe;

        return $this;
    }

    /**
     * Get societe
     *
     * @return string
     */
    public function getSociete()
    {
        return $this->societe;
    }
}

