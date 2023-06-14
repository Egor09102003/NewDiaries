<?php

namespace Container1BxZ12E;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSkillsListServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Modules\SkillsList\SkillsListService' shared autowired service.
     *
     * @return \App\Modules\SkillsList\SkillsListService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Modules'.\DIRECTORY_SEPARATOR.'SkillsList'.\DIRECTORY_SEPARATOR.'SkillsListService.php';

        return $container->privates['App\\Modules\\SkillsList\\SkillsListService'] = new \App\Modules\SkillsList\SkillsListService(($container->privates['App\\Repository\\SkillRepository'] ?? $container->load('getSkillRepositoryService')));
    }
}
