<?php

namespace App\Repository;

use App\Model\AbstractBaseEntity;
use App\Model\IEntity;
use App\Model\Leaflet;
use App\Model\Shop;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\ClassMetadata;

class ShopRepository extends EntityRepository
{
	public function __construct(private EntityManagerInterface $entityManager)
	{
		parent::__construct($entityManager, new ClassMetadata(Shop::class));
	}
	public function createNewEntityOrGetExisting(Shop $shop)
	{
		$existingShop = $this->getShopByName($shop->getName());
		if($existingShop)
		{
			return $existingShop;
		}

		return $shop;
	}
	public function getShopByName(string $shopName): ?Shop
	{
		return $this->findOneBy(['name'=>$shopName]);
	}
}