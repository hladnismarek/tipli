<?php

namespace App\Api\V1\Controllers;

use Apitte\Core\Annotation\Controller\Method;
use Apitte\Core\Annotation\Controller\Path;
use Apitte\Core\Http\ApiRequest;
use Apitte\Core\Http\ApiResponse;
use App\Facade\LeafletFacade;
use App\Facade\ShopFacade;
use App\Mapper\LeafletMapper;
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
		private LeafletFacade $leafletFacade,
		//private ShopFacade $shopFacade,
		private LeafletMapper $leafletMapper
	)
	{}
	/**
	 * @Path("/")
	 * @Method("POST")
	 */
	public function methodPost(ApiRequest $request, ApiResponse $response)
	{
		$leafletData = $request->getJsonBody();
		$leafltetDTO = $this->leafletMapper->fromArray($leafletData)->toDTO();
		$leaflet = $this->leafletFacade->saveLeaflet($leafltetDTO);
		$response->writeJsonBody(['result' => 'ok', 'leafletId' => $leaflet->getId()]);

		return $response;
	}
}