<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepositoryInterface;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\JobRepository")
 */
class Job
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    public $id;


    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }
    /**
     * @ORM\Column(type="string", length=255,nullable=true)
     */
    public $title;
    /**
     * @ORM\ManyToOne(targetEntity="Users", inversedBy="job")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    public $Users;


    /**
     * @ORM\Column(type="string", length=255 ,nullable=true)
     */
    public $type;

    /**
     * @ORM\Column(type="text")
     */
    public $Description;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $pays;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $information;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $wifi;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    public $nombre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $Langue;

    /**
     * @return mixed
     */
    public function getWifi()
    {
        return $this->wifi;
    }

    /**
     * @param mixed $wifi
     */
    public function setWifi($wifi)
    {
        $this->wifi = $wifi;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getLangue()
    {
        return $this->Langue;
    }

    /**
     * @param mixed $Langue
     */
    public function setLangue($Langue)
    {
        $this->Langue = $Langue;
    }



    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="Please, upload the product brochure as a jpg file.")
     * @Assert\File(mimeTypes={ "image/jpeg", "image/png" })
     */
    public $image;


    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

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
    public function getUsers()
    {
        return $this->Users;
    }

    /**
     * @param mixed $Users
     */
    public function setUsers($Users)
    {
        $this->Users = $Users;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param mixed $Description
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
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
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * @param mixed $information
     */
    public function setInformation($information)
    {
        $this->information = $information;
    }


    public function Jobhome()
    {
        $qb = $this->createQueryBuilder('n');
        $qb->orderBy('n.id', 'DESC');
        $qb->setMaxResults(2);
        return $qb->getQuery()
            ->getResult();
    }
}
