<?php

namespace ContainerXxjx8UD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUsersListControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Api\V1\UsersListController' shared autowired service.
     *
     * @return \App\Controller\Api\V1\UsersListController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'JsonResponseTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Api'.\DIRECTORY_SEPARATOR.'V1'.\DIRECTORY_SEPARATOR.'UsersListController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Modules'.\DIRECTORY_SEPARATOR.'UsersList'.\DIRECTORY_SEPARATOR.'UsersListService.php';

        $container->services['App\\Controller\\Api\\V1\\UsersListController'] = $instance = new \App\Controller\Api\V1\UsersListController(new \App\Modules\UsersList\UsersListService(($container->privates['App\\Modules\\UsersList\\UsersListRepository'] ?? $container->load('getUsersListRepositoryService')), ($container->privates['url_helper'] ?? $container->load('getUrlHelperService'))));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\Api\\V1\\UsersListController', $container));

        return $instance;
    }
}
