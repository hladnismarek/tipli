<?php

namespace App\Repository;

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

	public function save(string $shopName): Shop
	{
		$shop = $this->entityManager->getRepository(Shop::class)->findOneBy(['name'=>$shopName]);
		if(!$shop)
		{
			$shop = new Shop();
			$shop->setName($shopName);
			$this->entityManager->persist($shop);
			$this->entityManager->flush();
		}

		return $shop;
	}
}