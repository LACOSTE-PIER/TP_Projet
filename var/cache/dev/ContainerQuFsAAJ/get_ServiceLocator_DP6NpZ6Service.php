<?php

namespace ContainerQuFsAAJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DP6NpZ6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dP6NpZ6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dP6NpZ6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'habitant' => ['privates', '.errored..service_locator.dP6NpZ6.App\\Entity\\Habitant', NULL, 'Cannot autowire service ".service_locator.dP6NpZ6": it needs an instance of "App\\Entity\\Habitant" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'habitant' => 'App\\Entity\\Habitant',
        ]);
    }
}