<?php

namespace Container2gsqynC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getIndexTwigService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\IndexTwig' shared autowired service.
     *
     * @return \App\Controller\IndexTwig
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/IndexTwig.php';

        $container->services['App\\Controller\\IndexTwig'] = $instance = new \App\Controller\IndexTwig();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\IndexTwig', $container));

        return $instance;
    }
}
