<?php

namespace ContainerQuFsAAJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_I_YY4k4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.i.yY4k4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.i.yY4k4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'habitationRepository' => ['privates', 'App\\Repository\\HabitationRepository', 'getHabitationRepositoryService', true],
        ], [
            'habitationRepository' => 'App\\Repository\\HabitationRepository',
        ]);
    }
}
