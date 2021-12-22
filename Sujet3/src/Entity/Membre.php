<?php

namespace App\Entity;

use App\Repository\MembreRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\Length;

/**
 * @ORM\Entity(repositoryClass=MembreRepository::class)
 */
class Membre
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;


    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }



    /**
     * @ORM\Column(type="string", length=15)
     */
    private $name;


    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Adresse est obligatoire")
     */
    private $Adresse;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="ville est obligatoire")
     */
    private $Ville;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="numero est obligatoire")
     * @Assert\Length(
     *      min = 8,
     *      max = 8,
     *      minMessage = "Your phone number must be at least {{ limit }} characters long",
     *      maxMessage = "Your phone number cannot be longer than {{ limit }} characters")
     */

    private $Tel;


    /**
     * @ORM\OneToMany(targetEntity=Question::class, mappedBy="membre")
     */
    private $questions;

    /**
     * @return mixed
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * @param mixed $questions
     */
    public function setQuestions($questions): void
    {
        $this->questions = $questions;
    }

    public function getId(): ?int
    {
        return $this->id;
    }



    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
    public function __toString(): ?string
    {
        return ($this->getName());
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->Adresse;
    }

    /**
     * @param mixed $Adresse
     */
    public function setAdresse($Adresse): void
    {
        $this->Adresse = $Adresse;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->Ville;
    }

    /**
     * @param mixed $Ville
     */
    public function setVille($Ville): void
    {
        $this->Ville = $Ville;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->Tel;
    }

    /**
     * @param mixed $Tel
     */
    public function setTel($Tel): void
    {
        $this->Tel = $Tel;
    }

}
