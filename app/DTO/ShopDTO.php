<?php

namespace App\DTO;


class ShopDTO extends AbstractBaseDTO
{
	private ?int $id = null;
	private string $name;

	public function getId(): ?int
	{
		return $this->id;
	}

	public function setId(?int $id): ShopDTO
	{
		$this->id = $id;

		return $this;
	}

	public function getName(): string
	{
		return $this->name;
	}

	public function setName(string $name): ShopDTO
	{
		$this->name = $name;

		return $this;
	}
}
