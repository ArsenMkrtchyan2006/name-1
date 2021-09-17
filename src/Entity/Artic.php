<?php

namespace App\Entity;

use App\Repository\ArticRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArticRepository::class)
 */
class Artic
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */

    /**
     * @ORM\Column(type="string", length=255)
     */

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $id;
    protected $anun;

    public function getId(): int
    {
        return $this->id;
    }

    public function getAnun(): string
    {
        return $this->anun;
    }

    public function setAnun(string $anun): void
    {
        $this->anun = $anun;

    }



}
