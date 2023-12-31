<?php

namespace Container1BxZ12E;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NAyOYtzService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.nAyOYtz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.nAyOYtz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'normalizer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
            'tripsListService' => ['privates', 'App\\Modules\\TripsList\\TripsListService', 'getTripsListServiceService', true],
        ], [
            'normalizer' => '?',
            'tripsListService' => 'App\\Modules\\TripsList\\TripsListService',
        ]);
    }
}
