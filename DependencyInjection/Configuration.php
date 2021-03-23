<?php


namespace Hexaglobe\SkeletonBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('skeleton_arguments');
        $treeBuilder->getRootNode()
            ->children()
            ->integerNode('min_sunshine')->defaultValue(3)->info('How much do you like sunshine?')->end()
            ->scalarNode('skeleton_provider')->defaultNull()->end()
            ->end();

        return $treeBuilder;
    }
}
