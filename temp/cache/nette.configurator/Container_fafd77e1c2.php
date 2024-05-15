<?php
// source: /var/www/html/config/common.neon
// source: /var/www/html/config/services.neon
// source: array

/** @noinspection PhpParamsInspection,PhpMethodMayBeStaticInspection */

declare(strict_types=1);

class Container_fafd77e1c2 extends Nette\DI\Container
{
	/** @var string[]  services name => type (complete list of available services) */
	protected array $types = ['container' => 'Nette\DI\Container'];

	/** @var string[]  alias => service name */
	protected array $aliases = [
		'application' => 'application.application',
		'cacheStorage' => 'cache.storage',
		'database.default' => 'database.default.connection',
		'database.default.context' => 'database.default.explorer',
		'httpRequest' => 'http.request',
		'httpResponse' => 'http.response',
		'nette.cacheJournal' => 'cache.journal',
		'nette.database.default' => 'database.default',
		'nette.database.default.context' => 'database.default.explorer',
		'nette.httpRequestFactory' => 'http.requestFactory',
		'nette.latteFactory' => 'latte.latteFactory',
		'nette.mailer' => 'mail.mailer',
		'nette.presenterFactory' => 'application.presenterFactory',
		'nette.templateFactory' => 'latte.templateFactory',
		'nette.userStorage' => 'security.userStorage',
		'session' => 'session.session',
		'user' => 'security.user',
	];

	/** @var array[]  type => level => services */
	protected array $wiring = [
		'Nette\DI\Container' => [['container']],
		'Nette\Application\Application' => [['application.application']],
		'Nette\Application\IPresenterFactory' => [['application.presenterFactory']],
		'Nette\Application\LinkGenerator' => [['application.linkGenerator']],
		'Nette\Caching\Storages\Journal' => [['cache.journal']],
		'Nette\Caching\Storage' => [['cache.storage']],
		'Nette\Database\Connection' => [['database.default.connection']],
		'Nette\Database\IStructure' => [['database.default.structure']],
		'Nette\Database\Structure' => [['database.default.structure']],
		'Nette\Database\Conventions' => [['database.default.conventions']],
		'Nette\Database\Conventions\DiscoveredConventions' => [['database.default.conventions']],
		'Nette\Database\Explorer' => [['database.default.explorer']],
		'Nette\Http\RequestFactory' => [['http.requestFactory']],
		'Nette\Http\IRequest' => [['http.request']],
		'Nette\Http\Request' => [['http.request']],
		'Nette\Http\IResponse' => [['http.response']],
		'Nette\Http\Response' => [['http.response']],
		'Nette\Bridges\ApplicationLatte\LatteFactory' => [['latte.latteFactory']],
		'Nette\Application\UI\TemplateFactory' => [['latte.templateFactory']],
		'Nette\Bridges\ApplicationLatte\TemplateFactory' => [['latte.templateFactory']],
		'Nette\Mail\Mailer' => [['mail.mailer']],
		'Nette\Security\Passwords' => [['security.passwords']],
		'Nette\Security\UserStorage' => [['security.userStorage']],
		'Nette\Security\User' => [['security.user']],
		'Nette\Http\Session' => [['session.session']],
		'Tracy\ILogger' => [['tracy.logger']],
		'Tracy\BlueScreen' => [['tracy.blueScreen']],
		'Tracy\Bar' => [['tracy.bar']],
		'Doctrine\DBAL\Logging\SQLLogger' => [1 => ['doctrine.dbal.logger']],
		'Doctrine\DBAL\Logging\LoggerChain' => [['doctrine.dbal.logger']],
		'Doctrine\DBAL\Configuration' => [0 => ['doctrine.orm.configuration'], 2 => ['doctrine.dbal.configuration']],
		'Doctrine\Common\EventManager' => [['doctrine.dbal.eventManager']],
		'Nettrine\DBAL\Events\ContainerAwareEventManager' => [['doctrine.dbal.eventManager']],
		'Nettrine\DBAL\ConnectionFactory' => [['doctrine.dbal.connectionFactory']],
		'Doctrine\DBAL\Connection' => [['doctrine.dbal.connection']],
		'Nettrine\DBAL\ConnectionAccessor' => [['doctrine.dbal.connectionAccessor']],
		'Doctrine\ORM\Configuration' => [['doctrine.orm.configuration']],
		'Doctrine\ORM\Mapping\EntityListenerResolver' => [['doctrine.orm.entityListenerResolver']],
		'Nettrine\ORM\Mapping\ContainerEntityListenerResolver' => [['doctrine.orm.entityListenerResolver']],
		'Doctrine\ORM\Decorator\EntityManagerDecorator' => [['doctrine.orm.entityManagerDecorator']],
		'Doctrine\Persistence\ObjectManagerDecorator' => [['doctrine.orm.entityManagerDecorator']],
		'Doctrine\ORM\EntityManagerInterface' => [['doctrine.orm.entityManagerDecorator']],
		'Doctrine\Persistence\ObjectManager' => [['doctrine.orm.entityManagerDecorator']],
		'Nettrine\ORM\EntityManagerDecorator' => [['doctrine.orm.entityManagerDecorator']],
		'Doctrine\Persistence\AbstractManagerRegistry' => [['doctrine.orm.managerRegistry']],
		'Doctrine\Persistence\ConnectionRegistry' => [['doctrine.orm.managerRegistry']],
		'Doctrine\Persistence\ManagerRegistry' => [['doctrine.orm.managerRegistry']],
		'Nettrine\ORM\ManagerRegistry' => [['doctrine.orm.managerRegistry']],
		'Doctrine\Persistence\Mapping\Driver\MappingDriver' => [
			0 => ['doctrine.orm.mappingDriver'],
			2 => [1 => 'doctrine.orm.attributes.attributeDriver'],
		],
		'Doctrine\Persistence\Mapping\Driver\MappingDriverChain' => [['doctrine.orm.mappingDriver']],
		'Doctrine\ORM\Mapping\Driver\CompatibilityAnnotationDriver' => [2 => ['doctrine.orm.attributes.attributeDriver']],
		'Doctrine\ORM\Mapping\Driver\AttributeDriver' => [2 => ['doctrine.orm.attributes.attributeDriver']],
		'Doctrine\ORM\Cache\RegionsConfiguration' => [2 => ['nettrine.orm.cache.regions']],
		'Doctrine\ORM\Cache\CacheFactory' => [2 => ['nettrine.orm.cache.cacheFactory']],
		'Doctrine\ORM\Cache\DefaultCacheFactory' => [2 => ['nettrine.orm.cache.cacheFactory']],
		'Doctrine\ORM\Cache\CacheConfiguration' => [2 => ['nettrine.orm.cache.cacheConfiguration']],
		'Doctrine\Common\Cache\Cache' => [['doctrine.cache.driver']],
		'Doctrine\Migrations\Metadata\Storage\MetadataStorageConfiguration' => [
			['nettrine.migrations.configuration.tableStorage'],
		],
		'Doctrine\Migrations\Metadata\Storage\TableMetadataStorageConfiguration' => [
			['nettrine.migrations.configuration.tableStorage'],
		],
		'Doctrine\Migrations\Configuration\Configuration' => [['nettrine.migrations.configuration']],
		'Doctrine\Migrations\Version\MigrationFactory' => [['nettrine.migrations.migrationFactory']],
		'Nettrine\Migrations\Version\DbalMigrationFactory' => [['nettrine.migrations.migrationFactory']],
		'Nettrine\Migrations\DI\DependencyFactory' => [2 => ['nettrine.migrations.nettrineDependencyFactory']],
		'Doctrine\Migrations\DependencyFactory' => [['nettrine.migrations.dependencyFactory']],
		'Doctrine\Migrations\Tools\Console\Command\DoctrineCommand' => [
			2 => [
				'nettrine.migrations.currentCommand',
				'nettrine.migrations.diffCommand',
				'nettrine.migrations.dumpSchemaCommand',
				'nettrine.migrations.executeCommand',
				'nettrine.migrations.generateCommand',
				'nettrine.migrations.latestCommand',
				'nettrine.migrations.listCommand',
				'nettrine.migrations.migrateCommand',
				'nettrine.migrations.rollupCommand',
				'nettrine.migrations.statusCommand',
				'nettrine.migrations.syncMetadataCommand',
				'nettrine.migrations.upToDateCommand',
				'nettrine.migrations.versionCommand',
			],
		],
		'Symfony\Component\Console\Command\Command' => [
			2 => [
				'nettrine.migrations.currentCommand',
				'nettrine.migrations.diffCommand',
				'nettrine.migrations.dumpSchemaCommand',
				'nettrine.migrations.executeCommand',
				'nettrine.migrations.generateCommand',
				'nettrine.migrations.latestCommand',
				'nettrine.migrations.listCommand',
				'nettrine.migrations.migrateCommand',
				'nettrine.migrations.rollupCommand',
				'nettrine.migrations.statusCommand',
				'nettrine.migrations.syncMetadataCommand',
				'nettrine.migrations.upToDateCommand',
				'nettrine.migrations.versionCommand',
			],
		],
		'Doctrine\Migrations\Tools\Console\Command\CurrentCommand' => [2 => ['nettrine.migrations.currentCommand']],
		'Doctrine\Migrations\Tools\Console\Command\DiffCommand' => [2 => ['nettrine.migrations.diffCommand']],
		'Doctrine\Migrations\Tools\Console\Command\DumpSchemaCommand' => [2 => ['nettrine.migrations.dumpSchemaCommand']],
		'Doctrine\Migrations\Tools\Console\Command\ExecuteCommand' => [2 => ['nettrine.migrations.executeCommand']],
		'Doctrine\Migrations\Tools\Console\Command\GenerateCommand' => [2 => ['nettrine.migrations.generateCommand']],
		'Doctrine\Migrations\Tools\Console\Command\LatestCommand' => [2 => ['nettrine.migrations.latestCommand']],
		'Doctrine\Migrations\Tools\Console\Command\ListCommand' => [2 => ['nettrine.migrations.listCommand']],
		'Doctrine\Migrations\Tools\Console\Command\MigrateCommand' => [2 => ['nettrine.migrations.migrateCommand']],
		'Doctrine\Migrations\Tools\Console\Command\RollupCommand' => [2 => ['nettrine.migrations.rollupCommand']],
		'Doctrine\Migrations\Tools\Console\Command\StatusCommand' => [2 => ['nettrine.migrations.statusCommand']],
		'Doctrine\Migrations\Tools\Console\Command\SyncMetadataCommand' => [
			2 => ['nettrine.migrations.syncMetadataCommand'],
		],
		'Doctrine\Migrations\Tools\Console\Command\UpToDateCommand' => [2 => ['nettrine.migrations.upToDateCommand']],
		'Doctrine\Migrations\Tools\Console\Command\VersionCommand' => [2 => ['nettrine.migrations.versionCommand']],
		'Apitte\Core\Dispatcher\IDispatcher' => [['api.core.dispatcher']],
		'Apitte\Core\ErrorHandler\IErrorHandler' => [['api.core.errorHandler']],
		'Apitte\Core\Application\IApplication' => [['api.core.application']],
		'Apitte\Core\Router\IRouter' => [['api.core.router']],
		'Apitte\Core\Handler\IHandler' => [['api.core.handler']],
		'Apitte\Core\Schema\Schema' => [['api.core.schema']],
		'Nette\Routing\RouteList' => [['router']],
		'Nette\Routing\Router' => [['router']],
		'ArrayAccess' => [2 => ['router', 'application.1', 'application.2', 'application.3']],
		'Nette\Application\Routers\RouteList' => [['router']],
		'Nette\Application\UI\Presenter' => [2 => ['application.1', 'application.2', 'application.3']],
		'Nette\Application\UI\Control' => [2 => ['application.1', 'application.2', 'application.3']],
		'Nette\Application\UI\Component' => [2 => ['application.1', 'application.2', 'application.3']],
		'Nette\ComponentModel\Container' => [2 => ['application.1', 'application.2', 'application.3']],
		'Nette\ComponentModel\Component' => [2 => ['application.1', 'application.2', 'application.3']],
		'Nette\Application\IPresenter' => [
			2 => ['application.1', 'application.2', 'application.3', 'application.4', 'application.5', 'application.6'],
		],
		'Nette\Application\UI\Renderable' => [2 => ['application.1', 'application.2', 'application.3']],
		'Nette\Application\UI\StatePersistent' => [2 => ['application.1', 'application.2', 'application.3']],
		'Nette\Application\UI\SignalReceiver' => [2 => ['application.1', 'application.2', 'application.3']],
		'Nette\ComponentModel\IContainer' => [2 => ['application.1', 'application.2', 'application.3']],
		'Nette\ComponentModel\IComponent' => [2 => ['application.1', 'application.2', 'application.3']],
		'App\UI\Home\HomePresenter' => [2 => ['application.1']],
		'App\UI\Shop\ShopPresenter' => [2 => ['application.2']],
		'App\UI\Error\Error4xx\Error4xxPresenter' => [2 => ['application.3']],
		'App\UI\Error\Error5xx\Error5xxPresenter' => [2 => ['application.4']],
		'NetteModule\ErrorPresenter' => [2 => ['application.5']],
		'NetteModule\MicroPresenter' => [2 => ['application.6']],
		'Doctrine\ORM\EntityRepository' => [['01', '02']],
		'Doctrine\Common\Collections\Selectable' => [['01', '02']],
		'Doctrine\Persistence\ObjectRepository' => [['01', '02']],
		'App\Repository\ShopRepository' => [['01']],
		'App\Repository\LeafletRepository' => [['02']],
		'App\Api\V1\Controllers\BaseV1Controller' => [['resource._App_Api_V1_Controllers_.1']],
		'Apitte\Core\UI\Controller\IController' => [['resource._App_Api_V1_Controllers_.1']],
		'App\Api\V1\Controllers\LeafletController' => [['resource._App_Api_V1_Controllers_.1']],
		'Apitte\Core\Schema\Serialization\IHydrator' => [['api.core.schema.hydrator']],
		'Apitte\Core\Schema\Serialization\ArrayHydrator' => [['api.core.schema.hydrator']],
	];


	public function __construct(array $params = [])
	{
		parent::__construct($params);
	}


	public function createService01(): App\Repository\ShopRepository
	{
		return new App\Repository\ShopRepository($this->getService('doctrine.orm.entityManagerDecorator'));
	}


	public function createService02(): App\Repository\LeafletRepository
	{
		return new App\Repository\LeafletRepository($this->getService('doctrine.orm.entityManagerDecorator'));
	}


	public function createServiceApi__core__application(): Apitte\Core\Application\IApplication
	{
		return new Apitte\Core\Application\Application(
			$this->getService('api.core.errorHandler'),
			$this->getService('api.core.dispatcher'),
		);
	}


	public function createServiceApi__core__dispatcher(): Apitte\Core\Dispatcher\IDispatcher
	{
		return new Apitte\Core\Dispatcher\JsonDispatcher($this->getService('api.core.router'), $this->getService('api.core.handler'));
	}


	public function createServiceApi__core__errorHandler(): Apitte\Core\ErrorHandler\IErrorHandler
	{
		$service = new Apitte\Core\ErrorHandler\SimpleErrorHandler;
		$service->setCatchException(true);
		return $service;
	}


	public function createServiceApi__core__handler(): Apitte\Core\Handler\IHandler
	{
		return new Apitte\Core\Handler\ServiceHandler($this);
	}


	public function createServiceApi__core__router(): Apitte\Core\Router\IRouter
	{
		return new Apitte\Core\Router\SimpleRouter($this->getService('api.core.schema'));
	}


	public function createServiceApi__core__schema(): Apitte\Core\Schema\Schema
	{
		return $this->getService('api.core.schema.hydrator')->hydrate([
			[
				'handler' => ['class' => 'App\Api\V1\Controllers\LeafletController', 'method' => 'methodPost'],
				'id' => null,
				'tags' => [],
				'methods' => ['POST'],
				'mask' => '/api/v1/leaflet',
				'parameters' => [],
				'responses' => [],
				'negotiations' => [],
				'attributes' => ['pattern' => '/api/v1/leaflet'],
				'openApi' => ['controller' => [], 'method' => []],
			],
		]);
	}


	public function createServiceApi__core__schema__hydrator(): Apitte\Core\Schema\Serialization\ArrayHydrator
	{
		return new Apitte\Core\Schema\Serialization\ArrayHydrator;
	}


	public function createServiceApplication__1(): App\UI\Home\HomePresenter
	{
		$service = new App\UI\Home\HomePresenter;
		$service->injectPrimary(
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->invalidLinkMode = 1;
		return $service;
	}


	public function createServiceApplication__2(): App\UI\Shop\ShopPresenter
	{
		$service = new App\UI\Shop\ShopPresenter($this->getService('02'), $this->getService('doctrine.orm.entityManagerDecorator'));
		$service->injectPrimary(
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->invalidLinkMode = 1;
		return $service;
	}


	public function createServiceApplication__3(): App\UI\Error\Error4xx\Error4xxPresenter
	{
		$service = new App\UI\Error\Error4xx\Error4xxPresenter;
		$service->injectPrimary(
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory'),
		);
		$service->invalidLinkMode = 1;
		return $service;
	}


	public function createServiceApplication__4(): App\UI\Error\Error5xx\Error5xxPresenter
	{
		return new App\UI\Error\Error5xx\Error5xxPresenter($this->getService('tracy.logger'));
	}


	public function createServiceApplication__5(): NetteModule\ErrorPresenter
	{
		return new NetteModule\ErrorPresenter($this->getService('tracy.logger'));
	}


	public function createServiceApplication__6(): NetteModule\MicroPresenter
	{
		return new NetteModule\MicroPresenter($this, $this->getService('http.request'), $this->getService('router'));
	}


	public function createServiceApplication__application(): Nette\Application\Application
	{
		$service = new Nette\Application\Application(
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
		);
		$service->error4xxPresenter = 'Error:Error4xx';
		$service->errorPresenter = 'Error:Error5xx';
		Nette\Bridges\ApplicationDI\ApplicationExtension::initializeBlueScreenPanel(
			$this->getService('tracy.blueScreen'),
			$service,
		);
		return $service;
	}


	public function createServiceApplication__linkGenerator(): Nette\Application\LinkGenerator
	{
		return new Nette\Application\LinkGenerator(
			$this->getService('router'),
			$this->getService('http.request')->getUrl()->withoutUserInfo(),
			$this->getService('application.presenterFactory'),
		);
	}


	public function createServiceApplication__presenterFactory(): Nette\Application\IPresenterFactory
	{
		$service = new Nette\Application\PresenterFactory(new Nette\Bridges\ApplicationDI\PresenterFactoryCallback($this, 1, null));
		$service->setMapping(['*' => 'App\UI\*\**Presenter']);
		return $service;
	}


	public function createServiceCache__journal(): Nette\Caching\Storages\Journal
	{
		return new Nette\Caching\Storages\SQLiteJournal('/var/www/html/temp/cache/journal.s3db');
	}


	public function createServiceCache__storage(): Nette\Caching\Storage
	{
		return new Nette\Caching\Storages\FileStorage('/var/www/html/temp/cache', $this->getService('cache.journal'));
	}


	public function createServiceContainer(): Container_fafd77e1c2
	{
		return $this;
	}


	public function createServiceDatabase__default__connection(): Nette\Database\Connection
	{
		$service = new Nette\Database\Connection('sqlite::memory:', null, null, []);
		Nette\Bridges\DatabaseTracy\ConnectionPanel::initialize(
			$service,
			false,
			'default',
			true,
			$this->getService('tracy.bar'),
			$this->getService('tracy.blueScreen'),
		);
		return $service;
	}


	public function createServiceDatabase__default__conventions(): Nette\Database\Conventions\DiscoveredConventions
	{
		return new Nette\Database\Conventions\DiscoveredConventions($this->getService('database.default.structure'));
	}


	public function createServiceDatabase__default__explorer(): Nette\Database\Explorer
	{
		return new Nette\Database\Explorer(
			$this->getService('database.default.connection'),
			$this->getService('database.default.structure'),
			$this->getService('database.default.conventions'),
			$this->getService('cache.storage'),
		);
	}


	public function createServiceDatabase__default__structure(): Nette\Database\Structure
	{
		return new Nette\Database\Structure($this->getService('database.default.connection'), $this->getService('cache.storage'));
	}


	public function createServiceDoctrine__cache__driver(): Doctrine\Common\Cache\Cache
	{
		return new Doctrine\Common\Cache\PhpFileCache('/var/www/html/temp/cache/nettrine.cache');
	}


	public function createServiceDoctrine__dbal__configuration(): Doctrine\DBAL\Configuration
	{
		$service = new Doctrine\DBAL\Configuration;
		$service->setSQLLogger($this->getService('doctrine.dbal.logger'));
		$service->setResultCacheImpl($this->getService('doctrine.cache.driver'));
		$service->setAutoCommit(true);
		return $service;
	}


	public function createServiceDoctrine__dbal__connection(): Doctrine\DBAL\Connection
	{
		return $this->getService('doctrine.dbal.connectionFactory')->createConnection(
			[
			'driver' => 'pdo_mysql',
			'host' => 'database',
			'user' => 'tipli',
			'password' => 'tipli',
			'dbname' => 'tiplidb',
			'port' => 3306,
			'types' => [],
			'typesMapping' => [],
		],
			$this->getService('doctrine.dbal.configuration'),
			$this->getService('doctrine.dbal.eventManager'),
		);
	}


	public function createServiceDoctrine__dbal__connectionAccessor(): Nettrine\DBAL\ConnectionAccessor
	{
		return new class ($this) implements Nettrine\DBAL\ConnectionAccessor {
			public function __construct(
				private Container_fafd77e1c2 $container,
			) {
			}


			public function get(): Doctrine\DBAL\Connection
			{
				return $this->container->getService('doctrine.dbal.connection');
			}
		};
	}


	public function createServiceDoctrine__dbal__connectionFactory(): Nettrine\DBAL\ConnectionFactory
	{
		return new Nettrine\DBAL\ConnectionFactory([], []);
	}


	public function createServiceDoctrine__dbal__eventManager(): Nettrine\DBAL\Events\ContainerAwareEventManager
	{
		return new Nettrine\DBAL\Events\ContainerAwareEventManager($this);
	}


	public function createServiceDoctrine__dbal__logger(): Doctrine\DBAL\Logging\LoggerChain
	{
		return new Doctrine\DBAL\Logging\LoggerChain([]);
	}


	public function createServiceDoctrine__orm__attributes__attributeDriver(
	): Doctrine\ORM\Mapping\Driver\AttributeDriver
	{
		$service = new Doctrine\ORM\Mapping\Driver\AttributeDriver(['/var/www/html/app/Model']);
		$service->addExcludePaths([]);
		return $service;
	}


	public function createServiceDoctrine__orm__configuration(): Doctrine\ORM\Configuration
	{
		$service = new Doctrine\ORM\Configuration;
		$service->setProxyDir('/var/www/html/temp/proxies');
		$service->setAutoGenerateProxyClasses(2);
		$service->setProxyNamespace('Nettrine\Proxy');
		$service->setMetadataDriverImpl($this->getService('doctrine.orm.mappingDriver'));
		$service->setCustomStringFunctions([]);
		$service->setCustomNumericFunctions([]);
		$service->setCustomDatetimeFunctions([]);
		$service->setCustomHydrationModes([]);
		$service->setNamingStrategy(new Doctrine\ORM\Mapping\UnderscoreNamingStrategy);
		$service->setEntityListenerResolver($this->getService('doctrine.orm.entityListenerResolver'));
		$service->setQueryCacheImpl($this->getService('doctrine.cache.driver'));
		$service->setHydrationCacheImpl($this->getService('doctrine.cache.driver'));
		$service->setResultCacheImpl($this->getService('doctrine.cache.driver'));
		$service->setMetadataCacheImpl($this->getService('doctrine.cache.driver'));
		$service->setSecondLevelCacheEnabled(true);
		$service->setSecondLevelCacheConfiguration($this->getService('nettrine.orm.cache.cacheConfiguration'));
		return $service;
	}


	public function createServiceDoctrine__orm__entityListenerResolver(
	): Nettrine\ORM\Mapping\ContainerEntityListenerResolver
	{
		return new Nettrine\ORM\Mapping\ContainerEntityListenerResolver($this);
	}


	public function createServiceDoctrine__orm__entityManagerDecorator(): Nettrine\ORM\EntityManagerDecorator
	{
		return new Nettrine\ORM\EntityManagerDecorator(Doctrine\ORM\EntityManager::create(
			$this->getService('doctrine.dbal.connection'),
			$this->getService('doctrine.orm.configuration'),
			$this->getService('doctrine.dbal.eventManager'),
		));
	}


	public function createServiceDoctrine__orm__managerRegistry(): Nettrine\ORM\ManagerRegistry
	{
		return new Nettrine\ORM\ManagerRegistry(
			$this->getService('doctrine.dbal.connection'),
			$this->getService('doctrine.orm.entityManagerDecorator'),
			$this,
		);
	}


	public function createServiceDoctrine__orm__mappingDriver(): Doctrine\Persistence\Mapping\Driver\MappingDriverChain
	{
		$service = new Doctrine\Persistence\Mapping\Driver\MappingDriverChain;
		$service->addDriver($this->getService('doctrine.orm.attributes.attributeDriver'), 'App\Model');
		return $service;
	}


	public function createServiceHttp__request(): Nette\Http\Request
	{
		return $this->getService('http.requestFactory')->fromGlobals();
	}


	public function createServiceHttp__requestFactory(): Nette\Http\RequestFactory
	{
		$service = new Nette\Http\RequestFactory;
		$service->setProxy([]);
		return $service;
	}


	public function createServiceHttp__response(): Nette\Http\Response
	{
		$service = new Nette\Http\Response;
		$service->cookieSecure = $this->getService('http.request')->isSecured();
		return $service;
	}


	public function createServiceLatte__latteFactory(): Nette\Bridges\ApplicationLatte\LatteFactory
	{
		return new class ($this) implements Nette\Bridges\ApplicationLatte\LatteFactory {
			public function __construct(
				private Container_fafd77e1c2 $container,
			) {
			}


			public function create(): Latte\Engine
			{
				$service = new Latte\Engine;
				$service->setTempDirectory('/var/www/html/temp/cache/latte');
				$service->setAutoRefresh(false);
				$service->setStrictTypes(true);
				$service->setStrictParsing(true);
				$service->enablePhpLinter(null);
				func_num_args() && $service->addExtension(new Nette\Bridges\ApplicationLatte\UIExtension(func_get_arg(0)));
				$service->addExtension(new Nette\Bridges\CacheLatte\CacheExtension($this->container->getService('cache.storage')));
				$service->addExtension(new Nette\Bridges\FormsLatte\FormsExtension);
				$service->addExtension(new App\UI\Accessory\LatteExtension);
				return $service;
			}
		};
	}


	public function createServiceLatte__templateFactory(): Nette\Bridges\ApplicationLatte\TemplateFactory
	{
		return new Nette\Bridges\ApplicationLatte\TemplateFactory(
			$this->getService('latte.latteFactory'),
			$this->getService('http.request'),
			$this->getService('security.user'),
			$this->getService('cache.storage'),
			null,
		);
	}


	public function createServiceMail__mailer(): Nette\Mail\Mailer
	{
		return new Nette\Mail\SendmailMailer;
	}


	public function createServiceNettrine__migrations__configuration(): Doctrine\Migrations\Configuration\Configuration
	{
		$service = new Doctrine\Migrations\Configuration\Configuration;
		$service->setCustomTemplate(null);
		$service->setMetadataStorageConfiguration($this->getService('nettrine.migrations.configuration.tableStorage'));
		$service->addMigrationsDirectory('Migrations', '/var/www/html/app/../migrations');
		$service->setAllOrNothing(false);
		return $service;
	}


	public function createServiceNettrine__migrations__configuration__tableStorage(
	): Doctrine\Migrations\Metadata\Storage\TableMetadataStorageConfiguration
	{
		$service = new Doctrine\Migrations\Metadata\Storage\TableMetadataStorageConfiguration;
		$service->setTableName('doctrine_migrations');
		$service->setVersionColumnName('version');
		return $service;
	}


	public function createServiceNettrine__migrations__currentCommand(
	): Doctrine\Migrations\Tools\Console\Command\CurrentCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\CurrentCommand($this->getService('nettrine.migrations.dependencyFactory'));
	}


	public function createServiceNettrine__migrations__dependencyFactory(): Doctrine\Migrations\DependencyFactory
	{
		return $this->getService('nettrine.migrations.nettrineDependencyFactory')->createDependencyFactory();
	}


	public function createServiceNettrine__migrations__diffCommand(
	): Doctrine\Migrations\Tools\Console\Command\DiffCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\DiffCommand($this->getService('nettrine.migrations.dependencyFactory'));
	}


	public function createServiceNettrine__migrations__dumpSchemaCommand(
	): Doctrine\Migrations\Tools\Console\Command\DumpSchemaCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\DumpSchemaCommand($this->getService('nettrine.migrations.dependencyFactory'));
	}


	public function createServiceNettrine__migrations__executeCommand(
	): Doctrine\Migrations\Tools\Console\Command\ExecuteCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\ExecuteCommand($this->getService('nettrine.migrations.dependencyFactory'));
	}


	public function createServiceNettrine__migrations__generateCommand(
	): Doctrine\Migrations\Tools\Console\Command\GenerateCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\GenerateCommand($this->getService('nettrine.migrations.dependencyFactory'));
	}


	public function createServiceNettrine__migrations__latestCommand(
	): Doctrine\Migrations\Tools\Console\Command\LatestCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\LatestCommand($this->getService('nettrine.migrations.dependencyFactory'));
	}


	public function createServiceNettrine__migrations__listCommand(
	): Doctrine\Migrations\Tools\Console\Command\ListCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\ListCommand($this->getService('nettrine.migrations.dependencyFactory'));
	}


	public function createServiceNettrine__migrations__migrateCommand(
	): Doctrine\Migrations\Tools\Console\Command\MigrateCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\MigrateCommand($this->getService('nettrine.migrations.dependencyFactory'));
	}


	public function createServiceNettrine__migrations__migrationFactory(
	): Nettrine\Migrations\Version\DbalMigrationFactory
	{
		return new Nettrine\Migrations\Version\DbalMigrationFactory($this, $this->getService('doctrine.dbal.connection'));
	}


	public function createServiceNettrine__migrations__nettrineDependencyFactory(
	): Nettrine\Migrations\DI\DependencyFactory
	{
		return new Nettrine\Migrations\DI\DependencyFactory(
			$this->getService('nettrine.migrations.configuration'),
			$this->getService('nettrine.migrations.migrationFactory'),
			$this->getService('doctrine.dbal.connection'),
			$this->getService('doctrine.orm.entityManagerDecorator'),
		);
	}


	public function createServiceNettrine__migrations__rollupCommand(
	): Doctrine\Migrations\Tools\Console\Command\RollupCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\RollupCommand($this->getService('nettrine.migrations.dependencyFactory'));
	}


	public function createServiceNettrine__migrations__statusCommand(
	): Doctrine\Migrations\Tools\Console\Command\StatusCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\StatusCommand($this->getService('nettrine.migrations.dependencyFactory'));
	}


	public function createServiceNettrine__migrations__syncMetadataCommand(
	): Doctrine\Migrations\Tools\Console\Command\SyncMetadataCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\SyncMetadataCommand($this->getService('nettrine.migrations.dependencyFactory'));
	}


	public function createServiceNettrine__migrations__upToDateCommand(
	): Doctrine\Migrations\Tools\Console\Command\UpToDateCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\UpToDateCommand($this->getService('nettrine.migrations.dependencyFactory'));
	}


	public function createServiceNettrine__migrations__versionCommand(
	): Doctrine\Migrations\Tools\Console\Command\VersionCommand
	{
		return new Doctrine\Migrations\Tools\Console\Command\VersionCommand($this->getService('nettrine.migrations.dependencyFactory'));
	}


	public function createServiceNettrine__orm__cache__cacheConfiguration(): Doctrine\ORM\Cache\CacheConfiguration
	{
		$service = new Doctrine\ORM\Cache\CacheConfiguration;
		$service->setCacheFactory($this->getService('nettrine.orm.cache.cacheFactory'));
		return $service;
	}


	public function createServiceNettrine__orm__cache__cacheFactory(): Doctrine\ORM\Cache\DefaultCacheFactory
	{
		return new Doctrine\ORM\Cache\DefaultCacheFactory(
			$this->getService('nettrine.orm.cache.regions'),
			$this->getService('doctrine.cache.driver'),
		);
	}


	public function createServiceNettrine__orm__cache__regions(): Doctrine\ORM\Cache\RegionsConfiguration
	{
		return new Doctrine\ORM\Cache\RegionsConfiguration;
	}


	public function createServiceResource___App_Api_V1_Controllers___1(): App\Api\V1\Controllers\LeafletController
	{
		return new App\Api\V1\Controllers\LeafletController($this->getService('01'), $this->getService('02'));
	}


	public function createServiceRouter(): Nette\Application\Routers\RouteList
	{
		return App\Core\RouterFactory::createRouter();
	}


	public function createServiceSecurity__passwords(): Nette\Security\Passwords
	{
		return new Nette\Security\Passwords;
	}


	public function createServiceSecurity__user(): Nette\Security\User
	{
		return new Nette\Security\User($this->getService('security.userStorage'));
	}


	public function createServiceSecurity__userStorage(): Nette\Security\UserStorage
	{
		return new Nette\Bridges\SecurityHttp\SessionStorage($this->getService('session.session'));
	}


	public function createServiceSession__session(): Nette\Http\Session
	{
		$service = new Nette\Http\Session($this->getService('http.request'), $this->getService('http.response'));
		$service->setOptions(['cookieSamesite' => 'Lax']);
		return $service;
	}


	public function createServiceTracy__bar(): Tracy\Bar
	{
		return Tracy\Debugger::getBar();
	}


	public function createServiceTracy__blueScreen(): Tracy\BlueScreen
	{
		return Tracy\Debugger::getBlueScreen();
	}


	public function createServiceTracy__logger(): Tracy\ILogger
	{
		return Tracy\Debugger::getLogger();
	}


	public function initialize(): void
	{
		// http.
		(function () {
			$response = $this->getService('http.response');
			$response->setHeader('X-Powered-By', 'Nette Framework 3');
			$response->setHeader('Content-Type', 'text/html; charset=utf-8');
			$response->setHeader('X-Frame-Options', 'SAMEORIGIN');
			Nette\Http\Helpers::initCookie($this->getService('http.request'), $response);
		})();
		// session.
		(function () {
			$this->getService('session.session')->autoStart(false);
		})();
		// tracy.
		(function () {
			if (!Tracy\Debugger::isEnabled()) { return; }
			$logger = $this->getService('tracy.logger');
			Tracy\Debugger::$showBar = true;
			if ($logger instanceof Tracy\Logger) $logger->mailer = [
				new Tracy\Bridges\Nette\MailSender(
					$this->getService('mail.mailer'),
					null,
					$this->getByType('Nette\Http\Request', false)?->getUrl()->getHost(),
				),
				'send',
			];
		})();
	}
}
