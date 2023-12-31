<?php

namespace ContainerQuFsAAJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Gi19GkcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gi19Gkc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gi19Gkc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'habitant' => ['privates', '.errored..service_locator.gi19Gkc.App\\Entity\\Habitant', NULL, 'Cannot autowire service ".service_locator.gi19Gkc": it needs an instance of "App\\Entity\\Habitant" but this type has been excluded in "config/services.yaml".'],
        ], [
            'habitant' => 'App\\Entity\\Habitant',
        ]);
    }
}
