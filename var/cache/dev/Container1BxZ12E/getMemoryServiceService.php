<?php

namespace Container1BxZ12E;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMemoryServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Modules\Memories\MemoryService' shared autowired service.
     *
     * @return \App\Modules\Memories\MemoryService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Modules'.\DIRECTORY_SEPARATOR.'Memories'.\DIRECTORY_SEPARATOR.'MemoryService.php';

        return $container->privates['App\\Modules\\Memories\\MemoryService'] = new \App\Modules\Memories\MemoryService(($container->privates['App\\Repository\\MemoriesRepository'] ?? $container->load('getMemoriesRepositoryService')), ($container->privates['App\\Repository\\MasterTypeRepository'] ?? $container->load('getMasterTypeRepositoryService')));
    }
}
