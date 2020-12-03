<?php

namespace App\Entity;

use App\Repository\UserDetailsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserDetailsRepository::class)
 */
class UserDetails
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=User::class, inversedBy="userDetails", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\Column(type="boolean")
     */
    private $connected;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $geolocation;

    /**
     * @ORM\Column(type="integer")
     */
    private $carbone_score;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?User
    {
        return $this->user;
    }

    public function setUserId(User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getConnected(): ?bool
    {
        return $this->connected;
    }

    public function setConnected(bool $connected): self
    {
        $this->connected = $connected;

        return $this;
    }

    public function getGeolocation(): ?string
    {
        return $this->geolocation;
    }

    public function setGeolocation(?string $geolocation): self
    {
        $this->geolocation = $geolocation;

        return $this;
    }

    public function getCarboneScore(): ?int
    {
        return $this->carbone_score;
    }

    public function setCarboneScore(int $carbone_score): self
    {
        $this->carbone_score = $carbone_score;

        return $this;
    }
}
