<?php

namespace Container1BxZ12E;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PhRtbWNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.phRtbWN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.phRtbWN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', true],
            'memoriesRepository' => ['privates', 'App\\Repository\\MemoriesRepository', 'getMemoriesRepositoryService', true],
        ], [
            'doctrine' => '?',
            'memoriesRepository' => 'App\\Repository\\MemoriesRepository',
        ]);
    }
}
