<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoryRepository::class)
 */
class Category
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
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $danger;

    /**
     * @ORM\OneToMany(targetEntity=UserAlert::class, mappedBy="category_id", orphanRemoval=true)
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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDanger(): ?int
    {
        return $this->danger;
    }

    public function setDanger(int $danger): self
    {
        $this->danger = $danger;

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
            $userAlert->setCategoryId($this);
        }

        return $this;
    }

    public function removeUserAlert(UserAlert $userAlert): self
    {
        if ($this->userAlerts->removeElement($userAlert)) {
            // set the owning side to null (unless already changed)
            if ($userAlert->getCategoryId() === $this) {
                $userAlert->setCategoryId(null);
            }
        }

        return $this;
    }
}
