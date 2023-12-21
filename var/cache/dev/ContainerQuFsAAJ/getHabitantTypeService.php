<?php

namespace ContainerQuFsAAJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHabitantTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\HabitantType' shared autowired service.
     *
     * @return \App\Form\HabitantType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/HabitantType.php';

        return $container->privates['App\\Form\\HabitantType'] = new \App\Form\HabitantType();
    }
}
