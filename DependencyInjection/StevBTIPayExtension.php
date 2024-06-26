<?php

namespace Stev\BTIPayBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration.
 *
 * @link http://symfony.com/doc/current/cookbook/bundles/extension.html
 */
class StevBTIPayExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');

        if(!isset($config['username']) || !isset($config['password'])){
            throw new \RuntimeException('Username and password are mandatory configs for Stev\BTIPayBundle');
        }

        $container->setParameter('stev_bti_pay.username', $config['username']);
        $container->setParameter('stev_bti_pay.password', $config['password']);
        $container->setParameter('stev_bti_pay.isTest', $config['isTest']);
    }
}
