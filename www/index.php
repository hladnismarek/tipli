<?php

declare(strict_types=1);
use Apitte\Core\Application\IApplication as ApiApplication;
use App\Bootstrap;
use Nette\Application\Application as UIApplication;
use Tracy\Debugger;

require __DIR__ . '/../vendor/autoload.php';

/*$configurator = App\Bootstrap::boot();
$container = $configurator->createContainer();
$application = $container->getByType(Nette\Application\Application::class);
$application->run();*/

Debugger::enable(Debugger::Development);

$isApi = substr($_SERVER['REQUEST_URI'], 0, 4) === '/api';
$container = Bootstrap::boot()->createContainer();

if ($isApi) {
	// Apitte application
	$container->getByType(ApiApplication::class)->run();
} else {
	// Nette application
	$container->getByType(UIApplication::class)->run();
}
