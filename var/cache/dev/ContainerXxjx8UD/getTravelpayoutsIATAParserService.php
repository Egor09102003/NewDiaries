<?php

namespace ContainerXxjx8UD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTravelpayoutsIATAParserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Helpers\TravelpayoutsIATAParser' shared autowired service.
     *
     * @return \App\Helpers\TravelpayoutsIATAParser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Helpers'.\DIRECTORY_SEPARATOR.'TravelpayoutsIATAParser.php';

        return $container->privates['App\\Helpers\\TravelpayoutsIATAParser'] = new \App\Helpers\TravelpayoutsIATAParser(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')));
    }
}
