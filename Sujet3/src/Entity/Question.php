<?php

namespace App\Entity;

use App\Repository\QuestionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=QuestionRepository::class)
 */
class Question
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $text;

    /**
     * @ORM\OneToMany(targetEntity=Reponse::class, mappedBy="question")
     */
    private $reponses;

    /**
     * @return mixed
     */
    public function getMembre()
    {
        return $this->membre;
    }


    /**
     * @param mixed $membre
     */
    public function setMembre($membre): void
    {
        $this->membre = $membre;
    }
      /**
       * @ORM\ManyToOne(targetEntity=Membre::class, inversedBy="questions")
      */
      private $membre ;

    /**
     * @return mixed
     */
    public function getReponses()
    {
        return $this->reponses;
    }

    /**
     * @param mixed $reponses
     */
    public function setReponses($reponses): void
    {
        $this->reponses = $reponses;
    }



    /**
     * @return mixed
     */
    public function getMemebre()
    {
        return $this->memebre;
    }

    /**
     * @param mixed $memebre
     */
    public function setMemebre($memebre): void
    {
        $this->memebre = $memebre;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function __toString() {
        return ($this->text);
    }
}
