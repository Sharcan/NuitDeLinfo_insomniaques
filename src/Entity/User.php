<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User
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
    private $pseudo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\OneToOne(targetEntity=UserDetails::class, mappedBy="user_id", cascade={"persist", "remove"})
     */
    private $userDetails;

    /**
     * @ORM\OneToMany(targetEntity=UserAlert::class, mappedBy="user_id", orphanRemoval=true)
     */
    private $userAlerts;

    public function __construct()
    {
        $this->userAlerts = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

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

    public function getUserDetails(): ?UserDetails
    {
        return $this->userDetails;
    }

    public function setUserDetails(UserDetails $userDetails): self
    {
        $this->userDetails = $userDetails;

        // set the owning side of the relation if necessary
        if ($userDetails->getUserId() !== $this) {
            $userDetails->setUserId($this);
        }

        return $this;
    }

    /**
     * @return Collection|UserAlert[]
     */
    public function getUserAlerts(): Collection
    {
        return $this->userAlerts;
    }

    public function addUserAlert(UserAlert $userAlert): self
    {
        if (!$this->userAlerts->contains($userAlert)) {
            $this->userAlerts[] = $userAlert;
            $userAlert->setUserId($this);
        }

        return $this;
    }

    public function removeUserAlert(UserAlert $userAlert): self
    {
        if ($this->userAlerts->removeElement($userAlert)) {
            // set the owning side to null (unless already changed)
            if ($userAlert->getUserId() === $this) {
                $userAlert->setUserId(null);
            }
        }

        return $this;
    }
}
