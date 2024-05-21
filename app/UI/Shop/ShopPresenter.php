<?php

namespace App\UI\Shop;

use App\Facade\LeafletFacade;
use App\Facade\ShopFacade;
use App\Model\Leaflet;
use App\Model\Shop;
use App\Repository\LeafletRepository;
use Doctrine\ORM\EntityManagerInterface;
use Nette\Application\UI\Presenter;

class ShopPresenter extends Presenter
{
    public function __construct(
		private ShopFacade $shopFacade,
		private LeafletFacade $leafletFacade
    ){

    }

    public function renderList()
    {
        $this->template->shops = $this->shopFacade->getShops();
    }
    public function renderDetail(string $shopSlug)
    {

        /** @var Shop $shop */
        $shop = $this->shopFacade->getShopByName($shopSlug);
        $this->template->shopName = $shop->getName();

        $this->template->validLeaflets = $this->leafletFacade->getValidLeaflets($shopSlug);
        $this->template->expiredLeaflets = $this->leafletFacade->getExpiredLeaflets($shopSlug);
    }
}