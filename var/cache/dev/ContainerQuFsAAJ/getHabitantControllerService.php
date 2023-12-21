<?php

namespace ContainerQuFsAAJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHabitantControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\HabitantController' shared autowired service.
     *
     * @return \App\Controller\HabitantController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/HabitantController.php';

        $container->services['App\\Controller\\HabitantController'] = $instance = new \App\Controller\HabitantController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\HabitantController', $container));

        return $instance;
    }
}
