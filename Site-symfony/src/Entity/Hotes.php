<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\HotesRepository")
 */
class Hotes
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    private $adresse;
    /**
     * @ORM\ManyToOne(targetEntity="Pays")
     * @ORM\JoinColumn(name="pays_id", referencedColumnName="id")
     */
    protected $pays;
    /**
     * @ORM\ManyToMany(targetEntity="Langue")
     * @ORM\JoinTable(name="host_langue")
     *  joinColumn={@ORM\JoinColumns(name="backpacker_id",referencedColumns="id")},
     * inverseJoinColumn={ORM\@JoinColumn(name="langue_id",referencedColumns="id")},
     */
    protected $langue;

    /**
     * @ORM\Column(name="mail", type="string", length=255,nullable=true)
     */
    private $mail;
    /**
     * @ORM\Column(name="Tel" ,type="string", length=255,nullable=true)
     */
    private $tel;

    /**
     * @return mixed
     */
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * @param mixed $profil
     */
    public function setProfil($profil)
    {
        $this->profil = $profil;
    }

    /**
     * @ORM\ManyToMany(targetEntity="Service")
     * @ORM\JoinTable(name="host_service")
     *  joinColumn={@ORM\JoinColumns(name="backpacker_id",referencedColumns="id")},
     * inverseJoinColumn={ORM\@JoinColumn(name="service_id",referencedColumns="id")},
     */
    private $service;

    /**
     * @ORM\Column(name="profil", type="string", length=255,nullable=true)
     */
    private $profil;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * @param mixed $pays
     */
    public function setPays($pays)
    {
        $this->pays = $pays;
    }

    /**
     * @return mixed
     */
    public function getLangue()
    {
        return $this->langue;
    }

    /**
     * @param mixed $langue
     */
    public function setLangue($langue)
    {
        $this->langue = $langue;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * @return mixed
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param mixed $service
     */
    public function setService($service)
    {
        $this->service = $service;
    }


}
