<?php

namespace ContainerUZ37RwV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEasyDeploy_Command_DeployService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'easy_deploy.command.deploy' shared service.
     *
     * @return \EasyCorp\Bundle\EasyDeployBundle\Command\DeployCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easy-deploy-bundle/src/Command/DeployCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/FileLocator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Config/FileLocator.php';

        $container->privates['easy_deploy.command.deploy'] = $instance = new \EasyCorp\Bundle\EasyDeployBundle\Command\DeployCommand(($container->privates['file_locator'] ?? ($container->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($container->services['kernel'] ?? $container->get('kernel', 1))))), (($container->hasParameter("kernel.project_dir")) ? ($container->getParameter("kernel.project_dir")) : (($container->getParameter("kernel.root_dir") . "/.."))), (\dirname(__DIR__, 3).'/log'));

        $instance->setName('deploy');

        return $instance;
    }
}
