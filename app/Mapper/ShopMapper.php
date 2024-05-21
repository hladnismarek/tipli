<?php

namespace App\Mapper;

use App\DTO\ShopDTO;
use App\Model\AbstractBaseEntity;
use App\Model\Shop;

class ShopMapper extends AbstractBaseMapper
{
	private ?int $id = null;
	private string $name;

	public function fromArray(array $input)
	{
		$this->id = $input['id'] ?? null;
		$this->name = $input['name'];

		return $this;
	}
	/** @var Shop $shop */
	public function fromEntity(AbstractBaseEntity $shop): ShopMapper
	{
		$this->id = $shop->getId();
		$this->name = $shop->getName();

		return $this;
	}
	public function fromDTO(ShopDTO $shopDTO)
	{
		$this->id = $shopDTO->getId();
		$this->name = $shopDTO->getName();

		return $this;
	}
	public function toEntity(): Shop
	{
		$shop = new Shop();

		$shop->setId($this->id);
		$shop->setName($this->name);

		return $shop;
	}
	public function toShopDTO(): ShopDTO
	{
		$shopDto = new ShopDTO();
		$shopDto->setId($this->id);
		$shopDto->setName($this->name);

		return $shopDto;
	}

	public function toDTO(): ShopDTO
	{

		$shopDTO = new ShopDTO();
		$shopDTO->setId($this->id);
		$shopDTO->setName($this->name);

		return $shopDTO;
	}
	/*public function convertEntityArrayToDTOArray(array $entityArray): array
	{
		return array_map(function (Shop $shop){
			return $this->fromEntity($shop)->toDTO();
		},$entityArray);
	}*/
}