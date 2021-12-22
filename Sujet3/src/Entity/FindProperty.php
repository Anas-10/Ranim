<?php


namespace App\Entity;


class FindProperty
{
    /**
     * @var String|null
     */
    private $text ;

    /**
     * @return String|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @param String|null $text
     */
    public function setText(?string $text): void
    {
        $this->text = $text;
    }

}