<?php

namespace ContainerQuFsAAJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8cnR3S0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8cnR3S0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8cnR3S0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\ControllerSearchController::index' => ['privates', '.service_locator.WKFOLen', 'get_ServiceLocator_WKFOLenService', true],
            'App\\Controller\\HabitantController::delete' => ['privates', '.service_locator.dP6NpZ6', 'get_ServiceLocator_DP6NpZ6Service', true],
            'App\\Controller\\HabitantController::edit' => ['privates', '.service_locator.dP6NpZ6', 'get_ServiceLocator_DP6NpZ6Service', true],
            'App\\Controller\\HabitantController::index' => ['privates', '.service_locator.WKFOLen', 'get_ServiceLocator_WKFOLenService', true],
            'App\\Controller\\HabitantController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\HabitantController::show' => ['privates', '.service_locator.gi19Gkc', 'get_ServiceLocator_Gi19GkcService', true],
            'App\\Controller\\HabitationController::delete' => ['privates', '.service_locator.hsnEzS6', 'get_ServiceLocator_HsnEzS6Service', true],
            'App\\Controller\\HabitationController::index' => ['privates', '.service_locator.i.yY4k4', 'get_ServiceLocator_I_YY4k4Service', true],
            'App\\Controller\\HabitationController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\HabitationController::selectVille' => ['privates', '.service_locator.i.yY4k4', 'get_ServiceLocator_I_YY4k4Service', true],
            'App\\Controller\\HabitationController::show' => ['privates', '.service_locator.F6Ig9wi', 'get_ServiceLocator_F6Ig9wiService', true],
            'App\\Controller\\HabitationController::statistiques' => ['privates', '.service_locator.WKFOLen', 'get_ServiceLocator_WKFOLenService', true],
            'App\\Controller\\HabitationController::viewHabitants' => ['privates', '.service_locator.F6Ig9wi', 'get_ServiceLocator_F6Ig9wiService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\ControllerSearchController:index' => ['privates', '.service_locator.WKFOLen', 'get_ServiceLocator_WKFOLenService', true],
            'App\\Controller\\HabitantController:delete' => ['privates', '.service_locator.dP6NpZ6', 'get_ServiceLocator_DP6NpZ6Service', true],
            'App\\Controller\\HabitantController:edit' => ['privates', '.service_locator.dP6NpZ6', 'get_ServiceLocator_DP6NpZ6Service', true],
            'App\\Controller\\HabitantController:index' => ['privates', '.service_locator.WKFOLen', 'get_ServiceLocator_WKFOLenService', true],
            'App\\Controller\\HabitantController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\HabitantController:show' => ['privates', '.service_locator.gi19Gkc', 'get_ServiceLocator_Gi19GkcService', true],
            'App\\Controller\\HabitationController:delete' => ['privates', '.service_locator.hsnEzS6', 'get_ServiceLocator_HsnEzS6Service', true],
            'App\\Controller\\HabitationController:index' => ['privates', '.service_locator.i.yY4k4', 'get_ServiceLocator_I_YY4k4Service', true],
            'App\\Controller\\HabitationController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\HabitationController:selectVille' => ['privates', '.service_locator.i.yY4k4', 'get_ServiceLocator_I_YY4k4Service', true],
            'App\\Controller\\HabitationController:show' => ['privates', '.service_locator.F6Ig9wi', 'get_ServiceLocator_F6Ig9wiService', true],
            'App\\Controller\\HabitationController:statistiques' => ['privates', '.service_locator.WKFOLen', 'get_ServiceLocator_WKFOLenService', true],
            'App\\Controller\\HabitationController:viewHabitants' => ['privates', '.service_locator.F6Ig9wi', 'get_ServiceLocator_F6Ig9wiService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\ControllerSearchController::index' => '?',
            'App\\Controller\\HabitantController::delete' => '?',
            'App\\Controller\\HabitantController::edit' => '?',
            'App\\Controller\\HabitantController::index' => '?',
            'App\\Controller\\HabitantController::new' => '?',
            'App\\Controller\\HabitantController::show' => '?',
            'App\\Controller\\HabitationController::delete' => '?',
            'App\\Controller\\HabitationController::index' => '?',
            'App\\Controller\\HabitationController::new' => '?',
            'App\\Controller\\HabitationController::selectVille' => '?',
            'App\\Controller\\HabitationController::show' => '?',
            'App\\Controller\\HabitationController::statistiques' => '?',
            'App\\Controller\\HabitationController::viewHabitants' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\ControllerSearchController:index' => '?',
            'App\\Controller\\HabitantController:delete' => '?',
            'App\\Controller\\HabitantController:edit' => '?',
            'App\\Controller\\HabitantController:index' => '?',
            'App\\Controller\\HabitantController:new' => '?',
            'App\\Controller\\HabitantController:show' => '?',
            'App\\Controller\\HabitationController:delete' => '?',
            'App\\Controller\\HabitationController:index' => '?',
            'App\\Controller\\HabitationController:new' => '?',
            'App\\Controller\\HabitationController:selectVille' => '?',
            'App\\Controller\\HabitationController:show' => '?',
            'App\\Controller\\HabitationController:statistiques' => '?',
            'App\\Controller\\HabitationController:viewHabitants' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
