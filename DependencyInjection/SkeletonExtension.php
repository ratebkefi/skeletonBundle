<?php


namespace Hexaglobe\SkeletonBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class SkeletonExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {

        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');
        $configuration = $this->getConfiguration($configs, $container);
        $config = $this->processConfiguration($configuration, $configs);

        $definition = $container->getDefinition('skeleton_bundle.skeleton');
        if(null !== $config['skeleton_provider'])
        {
            $container->setAlias('skeleton.skeleton_provider',$config['skeleton_provider']);
        }
        $definition->setArgument(1, $config['min_sunshine']);

    }

    public function getAlias()
    {
        return 'skeleton_arguments';
    }

}
