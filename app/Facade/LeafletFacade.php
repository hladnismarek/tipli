<?php

namespace App\Facade;

use App\DTO\LeafletDTO;
use App\Mapper\LeafletMapper;
use App\Mapper\ShopMapper;
use App\Repository\LeafletRepository;

class LeafletFacade
{
	public function __construct(
		private LeafletMapper $leafletMapper,
		private LeafletRepository $leafletRepository,
		private ShopFacade $shopFacade
	){}

	public function saveLeaflet(LeafletDTO $leafletDTO): LeafletDTO
	{
		$leaflet = $this->leafletMapper->fromDTO($leafletDTO)->toEntity();
		$leaflet = $this->leafletRepository->saveLeaflet($leaflet);

		return $this->leafletMapper->fromEntity($leaflet)->toDTO();
	}
	public function getValidLeaflets(string $shopSlug): array
	{
		$shop = $this->shopFacade->getShopByName($shopSlug);
		$validLeaflets = $this->leafletRepository->getValidLeaflets($shop);

		return $this->leafletMapper->convertEntityArrayToDTOArray($validLeaflets);
	}
	public function getExpiredLeaflets(string $shopSlug): array
	{
		$shop = $this->shopFacade->getShopByName($shopSlug);
		$expiredLeaflets = $this->leafletRepository->getExpiredLeaflets($shop);

		return $this->leafletMapper->convertEntityArrayToDTOArray($expiredLeaflets);
	}
}