<?php

namespace App\Facade;

use App\Mapper\ShopMapper;
use App\Model\Shop;
use App\Repository\ShopRepository;

class ShopFacade
{
	public function __construct(private ShopRepository $shopRepository, private ShopMapper $mapper)
	{

	}
	public function getShops(): array
	{
		$shops = $this->shopRepository->findAll();
		$shopDTOs = $this->mapper->convertEntityArrayToDTOArray($shops);

		return $shopDTOs;
	}
	public function getShopByName(string $shopName): ?Shop
	{
		return $this->shopRepository->getShopByName($shopName);
	}
}