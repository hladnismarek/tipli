<?php

namespace App\Model;

use App\Repository\LeafletRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LeafletRepository::class)]
#[ORM\Table(name:'leaflet')]
class Leaflet extends AbstractBaseEntity
{
    #[ORM\Id]
    #[ORM\Column]
    #[ORM\GeneratedValue]
    protected ?int $id;

    #[ORM\Column(length: 2048)]
    protected string $url;

	#[ORM\Column(length: 2048, nullable: true)]
	protected ?string $title;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    protected \DateTimeImmutable $validFrom;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE)]
    protected \DateTimeImmutable $expiredAt;

    #[ORM\ManyToOne(targetEntity: Shop::class, cascade: ['persist'], inversedBy: "leaflets")]
    protected Shop $shop;

    public function getId(): ?int
    {
        return $this->id;
    }
	public function setId(?int $id): Leaflet
	{
		$this->id = $id;

		return $this;
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
    public function getValidFrom(): \DateTimeImmutable
    {
        return $this->validFrom;
    }
    public function setValidFrom(\DateTimeImmutable $validFrom): void
    {
        $this->validFrom = $validFrom;
    }
    public function getExpiredAt(): ?\DateTimeImmutable
    {
        return $this->expiredAt;
    }
    public function setExpiredAt(?\DateTimeImmutable $expiredAt): Leaflet
    {
        $this->expiredAt = $expiredAt;

		return $this;
    }
	public function getShop(): Shop
	{
		return $this->shop;
	}
	/** @var Shop $shop */
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
	public function __toString(): string
	{
		return var_export($this,true);
	}
}