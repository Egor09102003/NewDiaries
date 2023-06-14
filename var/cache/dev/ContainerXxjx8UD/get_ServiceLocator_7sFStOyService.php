<?php

namespace ContainerXxjx8UD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7sFStOyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.7sFStOy' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7sFStOy'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'autocompleteService' => ['privates', 'App\\Modules\\LocationAutocomplete\\LocationAutocompleteService', 'getLocationAutocompleteServiceService', true],
            'normalizer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
        ], [
            'autocompleteService' => 'App\\Modules\\LocationAutocomplete\\LocationAutocompleteService',
            'normalizer' => '?',
        ]);
    }
}
