<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BackpackerRepository")
 */
class Backpacker implements UserInterface
{

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column( name="Nom",type="string",nullable=true)
     */
    protected $name;

    /**
     * @ORM\Column( name="Prénom",type="string",nullable=true)
     */
    protected $lastname;
    /**
     * @ORM\Column( name="Age",type="integer" ,nullable=true)
     */
    protected $age;

    /**
     * @ORM\Column( name="Experience",type="string",nullable=true)
     */
    protected $experience;

    /**
     * @ORM\Column( name="tel",type="string",nullable=true)
     */
    protected $tel;

    /**
     * @ORM\Column(name="mail" ,type="string",nullable=true)
     */
    protected $mail;

    /**
     * @ORM\ManyToMany(targetEntity="Pays")
     * @ORM\JoinTable(name="backpacker_pays")
     *  joinColumn={@ORM\JoinColumns(name="backpacker_id",referencedColumns="id")},
     * inverseJoinColumn={ORM\@JoinColumn(name="pays_id",referencedColumns="id")},
     */
    protected $destination;

    /**
     * @ORM\ManyToMany(targetEntity="Langue" )
     * @ORM\JoinTable(name="backpacker_langue")
     *  joinColumn={@ORM\JoinColumns(name="backpacker_id",referencedColumns="id")},
     * inverseJoinColumn={ORM\@JoinColumn(name="langue_id",referencedColumns="id")},
     */
    protected $langue;

    /**
     * @ORM\Column( name="Validation",type="boolean",nullable=true)
     */
    protected $validation;


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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * @param mixed $experience
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;
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
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param mixed $destination
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
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
    public function getValidation()
    {
        return $this->validation;
    }

    /**
     * @param mixed $validation
     */
    public function setValidation($validation)
    {
        $this->validation = $validation;
    }
    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }


    /**
     * Returns the roles granted to the user.
     *
     * <code>
     * public function getRoles()
     * {
     *     return array('ROLE_USER');
     * }
     * </code>
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return (Role|string)[] The user roles
     */
    public function getRoles()
    {
        return[
            'ROLE_USER'
        ];
    }

    /**
     * Returns the salt that was originally used to encode the password.
     *
     * This can return null if the password was not encoded using a salt.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }
}
