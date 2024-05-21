<?php

namespace App\Mapper;

use App\DTO\AbstractBaseDTO;
use App\Model\AbstractBaseEntity;

abstract class AbstractBaseMapper
{
	public abstract function fromEntity(AbstractBaseEntity $entity): self;
	public abstract function toDTO(): AbstractBaseDTO;
	public function convertEntityArrayToDTOArray(array $entityArray): array
	{
		return array_map(function (AbstractBaseEntity $entity){
			return $this->fromEntity($entity)->toDTO();
		},$entityArray);
	}
}