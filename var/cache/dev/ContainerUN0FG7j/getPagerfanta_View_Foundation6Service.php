<?php

namespace ContainerUN0FG7j;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPagerfanta_View_Foundation6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'pagerfanta.view.foundation6' shared service.
     *
     * @return \Pagerfanta\View\Foundation6View
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pagerfanta'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'View'.\DIRECTORY_SEPARATOR.'ViewInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pagerfanta'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'View'.\DIRECTORY_SEPARATOR.'View.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pagerfanta'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'View'.\DIRECTORY_SEPARATOR.'TemplateView.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'pagerfanta'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'View'.\DIRECTORY_SEPARATOR.'Foundation6View.php';

        return $container->privates['pagerfanta.view.foundation6'] = new \Pagerfanta\View\Foundation6View();
    }
}
