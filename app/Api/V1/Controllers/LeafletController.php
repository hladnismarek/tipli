<?php

namespace App\Api\V1\Controllers;

use Apitte\Core\Annotation\Controller\Method;
use Apitte\Core\Annotation\Controller\Path;
use Apitte\Core\Http\ApiRequest;
use Apitte\Core\Http\ApiResponse;
use App\Model\Leaflet;
use App\Model\Shop;
use App\Repository\LeafletRepository;
use App\Repository\ShopRepository;
use Doctrine\ORM\EntityManagerInterface;
use Nette\Utils\Json;

/**
 * @Path("/leaflet")
 */
class LeafletController extends BaseV1Controller
{
	public function __construct(
		private ShopRepository $shopRepository,
		private LeafletRepository $leafletRepository
	)
	{}
	/**
	 * @Path("/")
	 * @Method("POST")
	 */
	public function methodPost(ApiRequest $request, ApiResponse $response)
	{
		$leafletData = $request->getJsonBody();
		$shop = $this->shopRepository->save($leafletData['shop']);
		$leaflet = new Leaflet();
		$leaflet->setShop($shop);
		$leaflet->setUrl($leafletData['url']);
		$leaflet->setTitle($leafletData['title']);
		$leaflet->setValidFrom(new \DateTimeImmutable($leafletData['validFrom']));
		$leaflet->setExpiredAt(new \DateTimeImmutable($leafletData['expiredAt']));

		$this->leafletRepository->saveLeaflet($leaflet);
		$response->writeJsonBody(['status'=>'success']);

		return $response;
	}
}