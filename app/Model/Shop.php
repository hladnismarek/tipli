<?php

namespace App\Model;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name:'shop')]
class Shop
{
    #[ORM\Id]
    #[ORM\Column]
    #[ORM\GeneratedValue]
    protected int $id;

    #[ORM\Column(length: 255, unique: true)]
    protected string $name;

    #[ORM\OneToMany(mappedBy: "shop", targetEntity: Leaflet::class)]
    protected Collection $leaflets;

    public function getId(): int
    {
        return $this->id;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getLeaflets()
    {
        return $this->leaflets;
    }
	public function setName(string $name): Shop
	{
		$this->name = $name;

		return $this;
	}
}