<?php

namespace ContainerXxjx8UD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCommentsServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Modules\Comments\CommentsService' shared autowired service.
     *
     * @return \App\Modules\Comments\CommentsService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Modules'.\DIRECTORY_SEPARATOR.'Comments'.\DIRECTORY_SEPARATOR.'CommentsService.php';

        return $container->privates['App\\Modules\\Comments\\CommentsService'] = new \App\Modules\Comments\CommentsService(($container->privates['App\\Repository\\CommentRepository'] ?? $container->load('getCommentRepositoryService')), ($container->privates['App\\Helpers\\FileManager\\ImagesManager'] ?? $container->load('getImagesManagerService')), ($container->privates['url_helper'] ?? $container->load('getUrlHelperService')));
    }
}