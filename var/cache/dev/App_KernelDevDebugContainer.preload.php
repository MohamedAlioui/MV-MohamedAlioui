<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg', 'embed'], true)) {
    return;
}

require dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor/autoload.php';
(require __DIR__.'/App_KernelDevDebugContainer.php')->set(\Container2vqnmgf\App_KernelDevDebugContainer::class, null);
require __DIR__.'/Container2vqnmgf/EntityManagerGhostEbeb667.php';
require __DIR__.'/Container2vqnmgf/RequestPayloadValueResolverGhost3590451.php';
require __DIR__.'/Container2vqnmgf/getWebpackEncore_TagRendererService.php';
require __DIR__.'/Container2vqnmgf/getWebpackEncore_ExceptionListenerService.php';
require __DIR__.'/Container2vqnmgf/getWebpackEncore_EntrypointLookupDefaultService.php';
require __DIR__.'/Container2vqnmgf/getWebProfiler_Controller_RouterService.php';
require __DIR__.'/Container2vqnmgf/getWebProfiler_Controller_ProfilerService.php';
require __DIR__.'/Container2vqnmgf/getWebProfiler_Controller_ExceptionPanelService.php';
require __DIR__.'/Container2vqnmgf/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/Container2vqnmgf/getTurbo_Doctrine_EventListenerService.php';
require __DIR__.'/Container2vqnmgf/getSession_Handler_NativeService.php';
require __DIR__.'/Container2vqnmgf/getSession_FactoryService.php';
require __DIR__.'/Container2vqnmgf/getServicesResetterService.php';
require __DIR__.'/Container2vqnmgf/getSecrets_VaultService.php';
require __DIR__.'/Container2vqnmgf/getRouting_LoaderService.php';
require __DIR__.'/Container2vqnmgf/getMonolog_Logger_DeprecationService.php';
require __DIR__.'/Container2vqnmgf/getMonolog_LoggerService.php';
require __DIR__.'/Container2vqnmgf/getFragment_Renderer_InlineService.php';
require __DIR__.'/Container2vqnmgf/getErrorHandler_ErrorRenderer_HtmlService.php';
require __DIR__.'/Container2vqnmgf/getErrorControllerService.php';
require __DIR__.'/Container2vqnmgf/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/Container2vqnmgf/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/Container2vqnmgf/getDoctrine_Orm_Listeners_PdoSessionHandlerSchemaListenerService.php';
require __DIR__.'/Container2vqnmgf/getDoctrine_Orm_Listeners_LockStoreSchemaListenerService.php';
require __DIR__.'/Container2vqnmgf/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaListenerService.php';
require __DIR__.'/Container2vqnmgf/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaListenerService.php';
require __DIR__.'/Container2vqnmgf/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/Container2vqnmgf/getDoctrine_Orm_DefaultEntityManagerService.php';
require __DIR__.'/Container2vqnmgf/getDoctrine_Dbal_DefaultConnection_EventManagerService.php';
require __DIR__.'/Container2vqnmgf/getDoctrine_Dbal_DefaultConnectionService.php';
require __DIR__.'/Container2vqnmgf/getDebug_FileLinkFormatter_UrlFormatService.php';
require __DIR__.'/Container2vqnmgf/getDebug_ErrorHandlerConfiguratorService.php';
require __DIR__.'/Container2vqnmgf/getDataCollector_Request_SessionCollectorService.php';
require __DIR__.'/Container2vqnmgf/getController_TemplateAttributeListenerService.php';
require __DIR__.'/Container2vqnmgf/getContainer_GetRoutingConditionServiceService.php';
require __DIR__.'/Container2vqnmgf/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/Container2vqnmgf/getContainer_EnvVarProcessorService.php';
require __DIR__.'/Container2vqnmgf/getCache_SystemClearerService.php';
require __DIR__.'/Container2vqnmgf/getCache_GlobalClearerService.php';
require __DIR__.'/Container2vqnmgf/getCache_AppClearerService.php';
require __DIR__.'/Container2vqnmgf/getTemplateControllerService.php';
require __DIR__.'/Container2vqnmgf/getRedirectControllerService.php';
require __DIR__.'/Container2vqnmgf/getProfilerControllerService.php';
require __DIR__.'/Container2vqnmgf/getVinylMixRepositoryService.php';
require __DIR__.'/Container2vqnmgf/getVinylControllerService.php';
require __DIR__.'/Container2vqnmgf/getSongControllerService.php';
require __DIR__.'/Container2vqnmgf/get_ServiceLocator_Y4Zrx_Service.php';
require __DIR__.'/Container2vqnmgf/get_ServiceLocator_JUv_ZyjService.php';
require __DIR__.'/Container2vqnmgf/get_ServiceLocator_L_EDYUCService.php';
require __DIR__.'/Container2vqnmgf/get_Debug_ValueResolver_Doctrine_Orm_EntityValueResolverService.php';
require __DIR__.'/Container2vqnmgf/get_Debug_ValueResolver_ArgumentResolver_VariadicService.php';
require __DIR__.'/Container2vqnmgf/get_Debug_ValueResolver_ArgumentResolver_SessionService.php';
require __DIR__.'/Container2vqnmgf/get_Debug_ValueResolver_ArgumentResolver_ServiceService.php';
require __DIR__.'/Container2vqnmgf/get_Debug_ValueResolver_ArgumentResolver_RequestPayloadService.php';
require __DIR__.'/Container2vqnmgf/get_Debug_ValueResolver_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/Container2vqnmgf/get_Debug_ValueResolver_ArgumentResolver_RequestService.php';
require __DIR__.'/Container2vqnmgf/get_Debug_ValueResolver_ArgumentResolver_QueryParameterValueResolverService.php';
require __DIR__.'/Container2vqnmgf/get_Debug_ValueResolver_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/Container2vqnmgf/get_Debug_ValueResolver_ArgumentResolver_DefaultService.php';
require __DIR__.'/Container2vqnmgf/get_Debug_ValueResolver_ArgumentResolver_DatetimeService.php';
require __DIR__.'/Container2vqnmgf/get_Debug_ValueResolver_ArgumentResolver_BackedEnumResolverService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Twig\Extra\TwigExtraBundle\TwigExtraBundle';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\WebProfilerBundle';
$classes[] = 'Symfony\Bundle\MonologBundle\MonologBundle';
$classes[] = 'Symfony\Bundle\DebugBundle\DebugBundle';
$classes[] = 'Symfony\WebpackEncoreBundle\WebpackEncoreBundle';
$classes[] = 'Symfony\UX\StimulusBundle\StimulusBundle';
$classes[] = 'Symfony\UX\Turbo\TurboBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Symfony\Component\HttpKernel\Profiler\Profiler';
$classes[] = 'Symfony\Component\HttpKernel\Profiler\FileProfilerStorage';
$classes[] = 'Monolog\Logger';
$classes[] = 'Symfony\Component\Console\DataCollector\CommandDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\TimeDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\EventDataCollector';
$classes[] = 'Symfony\Bridge\Twig\DataCollector\TwigDataCollector';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\BackedEnumValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DateTimeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\QueryParameterValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Bridge\Doctrine\ArgumentResolver\EntityValueResolver';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'Symfony\Component\HttpKernel\Debug\VirtualRequestStack';
$classes[] = 'App\Controller\SongController';
$classes[] = 'App\Controller\VinylController';
$classes[] = 'App\Repository\VinylMixRepository';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Controller\ProfilerController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\WebpackEncoreBundle\EventListener\ResetAssetsEventListener';
$classes[] = 'Symfony\Component\Asset\Packages';
$classes[] = 'Symfony\Component\Asset\PathPackage';
$classes[] = 'Symfony\Component\Asset\VersionStrategy\JsonManifestVersionStrategy';
$classes[] = 'Symfony\Component\Asset\Context\RequestStackContext';
$classes[] = 'Symfony\Component\Cache\Adapter\TraceableAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\CacheAttributeListener';
$classes[] = 'Symfony\Bridge\Twig\EventListener\TemplateAttributeListener';
$classes[] = 'Symfony\Component\Cache\DataCollector\CacheDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\DumpDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\RequestDataCollector';
$classes[] = 'Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\DebugLoggerConfigurator';
$classes[] = 'Symfony\Component\HttpKernel\Debug\ErrorHandlerConfigurator';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\FileLinkFormatter';
$classes[] = 'Symfony\Bridge\Monolog\Processor\DebugProcessor';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\DBAL\Schema\LegacySchemaManagerFactory';
$classes[] = 'Doctrine\DBAL\Logging\Middleware';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\DebugMiddleware';
$classes[] = 'Doctrine\DBAL\Tools\DsnParser';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\BacktraceDebugDataHolder';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AttributeDriver';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\LockStoreSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\PdoSessionHandlerSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Monolog\Handler\NullHandler';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Bridge\Monolog\Handler\ConsoleHandler';
$classes[] = 'Monolog\Handler\StreamHandler';
$classes[] = 'Monolog\Processor\PsrLogMessageProcessor';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ProfilerListener';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AttributeRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AttributeDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AttributeFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\Psr4DirectoryLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\Handler\StrictSessionHandler';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\UX\Turbo\Doctrine\BroadcastListener';
$classes[] = 'Symfony\UX\Turbo\Broadcaster\TwigBroadcaster';
$classes[] = 'Symfony\UX\Turbo\Broadcaster\ImuxBroadcaster';
$classes[] = 'Symfony\UX\Turbo\Broadcaster\IdAccessor';
$classes[] = 'Twig\Cache\FilesystemCache';
$classes[] = 'Twig\Extension\CoreExtension';
$classes[] = 'Twig\Extension\EscaperExtension';
$classes[] = 'Twig\Extension\OptimizerExtension';
$classes[] = 'Twig\Extension\StagingExtension';
$classes[] = 'Twig\ExtensionSet';
$classes[] = 'Twig\Template';
$classes[] = 'Twig\TemplateWrapper';
$classes[] = 'Twig\Environment';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\ProfilerExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\AssetExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\Bridge\Twig\Extension\DumpExtension';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension';
$classes[] = 'Symfony\Component\VarDumper\Dumper\HtmlDumper';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension';
$classes[] = 'Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension';
$classes[] = 'Symfony\UX\StimulusBundle\Twig\UxControllersTwigExtension';
$classes[] = 'Symfony\UX\Turbo\Twig\TwigExtension';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension';
$classes[] = 'Symfony\UX\StimulusBundle\Helper\StimulusHelper';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Twig\Extra\TwigExtraBundle\MissingExtensionSuggestor';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Twig\Profiler\Profile';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator';
$classes[] = 'Symfony\Component\HttpFoundation\UriSigner';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\VarDumper\Cloner\VarCloner';
$classes[] = 'Symfony\Component\VarDumper\Server\Connection';
$classes[] = 'Symfony\Component\VarDumper\Dumper\ContextProvider\SourceContextProvider';
$classes[] = 'Symfony\Component\VarDumper\Dumper\ContextProvider\RequestContextProvider';
$classes[] = 'Symfony\Component\VarDumper\Dumper\ContextProvider\CliContextProvider';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Controller\ExceptionPanelController';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Controller\RouterController';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener';
$classes[] = 'Symfony\WebpackEncoreBundle\Asset\EntrypointLookup';
$classes[] = 'Symfony\WebpackEncoreBundle\Asset\EntrypointLookupCollection';
$classes[] = 'Symfony\WebpackEncoreBundle\EventListener\ExceptionListener';
$classes[] = 'Symfony\WebpackEncoreBundle\Asset\TagRenderer';

$preloaded = Preloader::preload($classes);
