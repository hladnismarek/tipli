<?php

namespace App\Model;

use App\Repository\LeafletRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LeafletRepository::class)]
//#[ORM\Entity]
#[ORM\Table(name:'leaflet')]
class Leaflet
{
    #[ORM\Id]
    #[ORM\Column]
    #[ORM\GeneratedValue]
    protected int $id;

    #[ORM\Column(length: 2048)]
    protected string $url;

	#[ORM\Column(length: 2048, nullable: true)]
	protected ?string $title;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    protected \DateTimeInterface $validFrom;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    protected \DateTimeInterface $expiredAt;

    #[ORM\ManyToOne(targetEntity: Shop::class, inversedBy: "leaflets")]
    protected Shop $shop;

    public function getId(): int
    {
        return $this->id;
    }

    public function getUrl(): string
    {
        return $this->url;
    }
	public function setUrl(string $url): Leaflet
	{
		$this->url = $url;

		return $this;
	}
    public function getValidFrom(): \DateTimeInterface
    {
        return $this->validFrom;
    }
    public function setValidFrom(\DateTimeInterface $validFrom): void
    {
        $this->validFrom = $validFrom;
    }
    public function getExpiredAt(): ?\DateTimeInterface
    {
        return $this->expiredAt;
    }
    public function setExpiredAt(?\DateTimeInterface $expiredAt): Leaflet
    {
        $this->expiredAt = $expiredAt;

		return $this;
    }
	public function getShop(): Shop
	{
		return $this->shop;
	}
	public function setShop(Shop $shop): Leaflet
	{
		$this->shop = $shop;

		return $this;
	}
	public function getTitle(): ?string
	{
		return $this->title;
	}
	public function setTitle(?string $title): Leaflet
	{
		$this->title = $title;

		return $this;
	}
}