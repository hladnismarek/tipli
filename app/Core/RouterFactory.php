<?php

declare(strict_types=1);

namespace App\Core;

use Nette;
use Nette\Application\Routers\Route;
use Nette\Application\Routers\RouteList;


final class RouterFactory
{
	use Nette\StaticClass;

	public static function createRouter(): RouteList
	{
		$router = new RouteList;
        $router[] = new Route('/','Shop:list');
		$router[] = new Route('obchody','Shop:list');
        $router[] = new Route('obchod/<shopSlug>', 'Shop:detail');
		$router[] = new Route('<presenter>/<action>[/<id>]', 'Shop:list');

		return $router;
	}
}
