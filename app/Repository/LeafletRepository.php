<?php

namespace App\Repository;

use App\Model\Leaflet;
use App\Model\Shop;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\ClassMetadata;

class LeafletRepository extends EntityRepository
{
    public function __construct(
		private EntityManagerInterface $entityManager,
		private ShopRepository $shopRepository
	) {
        parent::__construct($entityManager, new ClassMetadata(Leaflet::class));
    }
    public function saveLeaflet(Leaflet $leaflet): Leaflet
    {
		$shop = $this->shopRepository->createNewEntityOrGetExisting($leaflet->getShop());
		$leaflet->setShop($shop);
		$this->entityManager->persist($leaflet);
		$this->entityManager->flush();

        return $leaflet;
    }
    public function getValidLeaflets(Shop $shop)
    {
        $qb = $this->createQueryBuilder('leaflet');
        $qb
            ->select('leaflet')
            ->where(
                $qb->expr()->andX(
                        $qb->expr()->eq('leaflet.shop',':shop'),
                        $qb->expr()->lte('leaflet.validFrom',':currentDateTime'),
                        $qb->expr()->gte('leaflet.expiredAt',':currentDateTime')
            ))
            ->setParameter('shop',$shop)
            ->setParameter('currentDateTime',$this->getCurrentDate())
            ->orderBy('leaflet.validFrom','DESC');

        return $qb->getQuery()->getResult();
    }
    public function getExpiredLeaflets(Shop $shop)
    {
        $qb = $this->createQueryBuilder('leaflet');
        $qb
            ->select('leaflet')
            ->where(
                $qb->expr()->andX(
                    $qb->expr()->eq('leaflet.shop',':shop'),
                    $qb->expr()->lt('leaflet.expiredAt',':currentDate')
                )
            )
            ->setParameter('shop',$shop)
            ->setParameter('currentDate',$this->getCurrentDate())
            ->orderBy('leaflet.validFrom','DESC');

        return $qb->getQuery()->getResult();
    }
	private function getCurrentDate(): \DateTime
	{
		$currentDate = new \DateTime();
		$currentDate->setTime(0,0);

		return $currentDate;
	}
}