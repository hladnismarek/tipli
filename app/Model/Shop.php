<?php

namespace App\Model;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name:'shop')]
class Shop extends AbstractBaseEntity
{
    #[ORM\Id]
    #[ORM\Column]
    #[ORM\GeneratedValue]
    protected ?int $id;

    #[ORM\Column(length: 255, unique: true)]
    protected string $name;

    #[ORM\OneToMany(mappedBy: "shop", targetEntity: Leaflet::class, cascade: ['persist'])]
    protected Collection $leaflets;

    public function getId(): ?int
    {
        return $this->id;
    }

	/**
	 * @param ?int $id
	 */
	public function setId(?int $id): Shop
	{
		$this->id = $id;

		return $this;
	}
    public function getName(): string
    {
        return $this->name;
    }
    public function getLeaflets(): Collection
    {
        return $this->leaflets;
    }
	public function setLeaflets(Collection $leaflets): Shop
	{
		$this->leaflets = $leaflets;

		return $this;
	}
	public function setName(string $name): Shop
	{
		$this->name = $name;

		return $this;
	}
}