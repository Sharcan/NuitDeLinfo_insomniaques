<?php

namespace App\Entity;

use App\Repository\UserAnswerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserAnswerRepository::class)
 */
class UserAnswer
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="userAnswers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user_id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $carbone_score;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $geolocation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $spot;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_start;

    /**
     * @ORM\Column(type="integer")
     */
    private $duration;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $cleanliness;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $general;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $transport;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $solarcream;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $cigarette;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $plasticbag;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $wave;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $bathers;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nautic_activity;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $boats;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $surfers;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?User
    {
        return $this->user_id;
    }

    public function setUserId(?User $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getCarboneScore(): ?int
    {
        return $this->carbone_score;
    }

    public function setCarboneScore(?int $carbone_score): self
    {
        $this->carbone_score = $carbone_score;

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

    public function getSpot(): ?string
    {
        return $this->spot;
    }

    public function setSpot(?string $spot): self
    {
        $this->spot = $spot;

        return $this;
    }

    public function getDateStart(): ?\DateTimeInterface
    {
        return $this->date_start;
    }

    public function setDateStart(\DateTimeInterface $date_start): self
    {
        $this->date_start = $date_start;

        return $this;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getCleanliness(): ?int
    {
        return $this->cleanliness;
    }

    public function setCleanliness(?int $cleanliness): self
    {
        $this->cleanliness = $cleanliness;

        return $this;
    }

    public function getGeneral(): ?int
    {
        return $this->general;
    }

    public function setGeneral(?int $general): self
    {
        $this->general = $general;

        return $this;
    }

    public function getTransport(): ?string
    {
        return $this->transport;
    }

    public function setTransport(?string $transport): self
    {
        $this->transport = $transport;

        return $this;
    }

    public function getSolarcream(): ?bool
    {
        return $this->solarcream;
    }

    public function setSolarcream(?bool $solarcream): self
    {
        $this->solarcream = $solarcream;

        return $this;
    }

    public function getCigarette(): ?bool
    {
        return $this->cigarette;
    }

    public function setCigarette(?bool $cigarette): self
    {
        $this->cigarette = $cigarette;

        return $this;
    }

    public function getPlasticbag(): ?bool
    {
        return $this->plasticbag;
    }

    public function setPlasticbag(?bool $plasticbag): self
    {
        $this->plasticbag = $plasticbag;

        return $this;
    }

    public function getWave(): ?int
    {
        return $this->wave;
    }

    public function setWave(?int $wave): self
    {
        $this->wave = $wave;

        return $this;
    }

    public function getBathers(): ?int
    {
        return $this->bathers;
    }

    public function setBathers(?int $bathers): self
    {
        $this->bathers = $bathers;

        return $this;
    }

    public function getNauticActivity(): ?int
    {
        return $this->nautic_activity;
    }

    public function setNauticActivity(?int $nautic_activity): self
    {
        $this->nautic_activity = $nautic_activity;

        return $this;
    }

    public function getBoats(): ?int
    {
        return $this->boats;
    }

    public function setBoats(?int $boats): self
    {
        $this->boats = $boats;

        return $this;
    }

    public function getSurfers(): ?int
    {
        return $this->surfers;
    }

    public function setSurfers(?int $surfers): self
    {
        $this->surfers = $surfers;

        return $this;
    }
}
