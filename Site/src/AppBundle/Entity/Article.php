<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepositoryInterface;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="id", type="integer")
     */
    public $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    public $title;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $accroche;

    /**
     * @ORM\Column(type="text")
     */
    public $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $pays;
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
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param mixed $categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $categorie;

    /**
     * @ORM\ManyToOne(targetEntity="Users", inversedBy="article")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    public $Users;

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
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getAccroche()
    {
        return $this->accroche;
    }

    /**
     * @param mixed $accroche
     */
    public function setAccroche($accroche)
    {
        $this->accroche = $accroche;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
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


    public function articlehome()
    {
        $qb = $this->createQueryBuilder('n');

        $qb->orderBy('n.id', 'DESC');
        $qb->setMaxResults(2);

        return $qb->getQuery()
            ->getResult();
    }


}
