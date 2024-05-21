<?php

namespace App\Mapper;

use App\DTO\LeafletDTO;
use App\DTO\ShopDTO;
use App\Model\AbstractBaseEntity;
use App\Model\Leaflet;
use DateTimeImmutable;

class LeafletMapper extends AbstractBaseMapper
{
	private ?int $id = null;
	private ?string $title = null;
	private string $url;
	private DateTimeImmutable $validFrom;
	private DateTimeImmutable $expiredAt;
	private ShopDTO $shopDTO;

	public function __construct(private ShopMapper $shopMapper){}
	public function fromArray($input = null): LeafletMapper
	{
		$this->id = $input['id'] ?? null;
		$shopDTO = new ShopDTO();
		$shopDTO->setName($input['shop']);
		$this->shopDTO = $shopDTO;
		$this->title = $input['title'];
		$this->validFrom = new DateTimeImmutable($input['validFrom']);
		$this->expiredAt = new DateTimeImmutable($input['expiredAt']);
		$this->url = $input['url'];

		return $this;
	}
	/** @param Leaflet $leaflet */
	public function fromEntity(AbstractBaseEntity $leaflet): LeafletMapper
	{
		$this->id = $leaflet->getId();
		$this->title = $leaflet->getTitle();
		$this->url = $leaflet->getUrl();
		$this->validFrom = $leaflet->getValidFrom();
		$this->expiredAt = $leaflet->getExpiredAt();
		$this->shopDTO = $this->shopMapper->fromEntity($leaflet->getShop())->toDTO();

		return $this;
	}
	public function fromDTO(LeafletDTO $leafletDTO): LeafletMapper
	{
		$this->id = $leafletDTO->getId();
		$this->title = $leafletDTO->getTitle();
		$this->url = $leafletDTO->getUrl();
		$this->validFrom = $leafletDTO->getValidFrom();
		$this->expiredAt = $leafletDTO->getExpiredAt();
		$this->shopDTO = $leafletDTO->getShopDTO();

		return $this;
	}
	public function toEntity(): Leaflet
	{
		$leaflet = new Leaflet();
		$leaflet->setId($this->id);
		$leaflet->setTitle($this->title);
		$leaflet->setUrl($this->url);
		$leaflet->setValidFrom($this->validFrom);
		$leaflet->setExpiredAt($this->expiredAt);
		$shop = $this->shopMapper->fromDTO($this->shopDTO)->toEntity();
		$leaflet->setShop($shop);

		return $leaflet;
	}
	public function toDTO(): LeafletDTO
	{
		$leafletDTO = new LeafletDTO();
		$leafletDTO->setId($this->id);
		$leafletDTO->setShopDTO($this->shopDTO);
		$leafletDTO->setTitle($this->title);
		$leafletDTO->setUrl($this->url);
		$leafletDTO->setValidFrom($this->validFrom);
		$leafletDTO->setExpiredAt($this->expiredAt);

		return $leafletDTO;
	}
	/*public function convertEntityArrayToDTOArray(array $entityArray): array
	{
		return array_map(function ($entity){
			return $this->fromEntity($entity)->toDTO();
		},$entityArray);
	}*/
}