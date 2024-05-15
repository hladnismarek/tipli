<?php

namespace App\UI\Shop;

use App\Model\Leaflet;
use App\Model\Shop;
use App\Repository\LeafletRepository;
use Doctrine\ORM\EntityManagerInterface;
use Nette\Application\UI\Presenter;

class ShopPresenter extends Presenter
{
    public function __construct(
        private LeafletRepository $leafletRepository,
        private EntityManagerInterface $entityManager
    ){

    }

    public function renderList()
    {
        $this->template->shops = $this->entityManager->getRepository(Shop::class)->findAll();
    }
    public function renderDetail(string $shopSlug)
    {
        /** @var Shop $shop */
        $shop = $this->entityManager->getRepository(Shop::class)->findOneBy(['name' => $shopSlug]);
        $this->template->shopName = $shop->getName();
        $validLeaflets = $this->leafletRepository->getValidLeaflets($shop);
        $expiredLeaflets = $this->leafletRepository->getExpiredLeaflets($shop);

        $this->template->validLeaflets = $validLeaflets;
        $this->template->expiredLeaflets = $expiredLeaflets;
    }
}