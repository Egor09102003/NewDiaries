<?php

namespace Container1BxZ12E;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSearchServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Modules\Search\SearchService' shared autowired service.
     *
     * @return \App\Modules\Search\SearchService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Modules'.\DIRECTORY_SEPARATOR.'Search'.\DIRECTORY_SEPARATOR.'SearchService.php';

        return $container->privates['App\\Modules\\Search\\SearchService'] = new \App\Modules\Search\SearchService(($container->privates['App\\Repository\\TripRepository'] ?? $container->load('getTripRepositoryService')), ($container->privates['App\\Repository\\MilestoneRepository'] ?? $container->load('getMilestoneRepositoryService')), ($container->privates['App\\Helpers\\FileManager\\ImagesManager'] ?? $container->load('getImagesManagerService')), ($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')), ($container->privates['App\\Repository\\CommentRepository'] ?? $container->load('getCommentRepositoryService')), ($container->privates['url_helper'] ?? $container->load('getUrlHelperService')));
    }
}
