<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LangueRepository")
 */
class Langue
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="id", type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom;


    /**
     * @ORM\ManyToMany(targetEntity="Users",mappedBy="$langue")
     * @ORM\JoinTable(name="users_langue")
     *  joinColumn={@ORM\JoinColumns(name="user_id",referencedColumns="id")},
     * inverseJoinColumn={ORM\@JoinColumn(name="langue_id",referencedColumns="id")},
     */
    public $user;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * @param mixed $Nom
     */
    public function setNom($Nom)
    {
        $this->Nom = $Nom;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }



}
