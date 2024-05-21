<?php

namespace App\DTO;


class LeafletDTO extends AbstractBaseDTO
{
	private ?int $id = null;
	private ShopDTO $shopDTO;
	private string $url;
	private ?string $title = null;
	private \DateTimeImmutable $validFrom;
	private \DateTimeImmutable $expiredAt;

	public function getId(): ?int
	{
		return $this->id;
	}

	public function setId(?int $id): LeafletDTO
	{
		$this->id = $id;

		return $this;
	}

	public function getTitle(): ?string
	{
		return $this->title;
	}

	public function setTitle(?string $title): LeafletDTO
	{
		$this->title = $title;

		return $this;
	}

	public function getUrl(): string
	{
		return $this->url;
	}

	public function setUrl(string $url): LeafletDTO
	{
		$this->url = $url;

		return $this;
	}

	public function getShopDTO(): ShopDTO
	{
		return $this->shopDTO;
	}
	public function setShopDTO(ShopDTO $shopDTO): LeafletDTO
	{
		$this->shopDTO = $shopDTO;

		return $this;
	}

	public function getValidFrom(): \DateTimeImmutable
	{
		return $this->validFrom;
	}

	public function setValidFrom(\DateTimeImmutable $validFrom): LeafletDTO
	{
		$this->validFrom = $validFrom;

		return $this;
	}

	public function getExpiredAt(): \DateTimeImmutable
	{
		return $this->expiredAt;
	}

	public function setExpiredAt(\DateTimeImmutable $expiredAt): LeafletDTO
	{
		$this->expiredAt = $expiredAt;

		return $this;
	}
}