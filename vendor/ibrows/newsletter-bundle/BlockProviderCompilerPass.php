<?php

namespace Ibrows\Bundle\NewsletterBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\Reference;

class BlockProviderCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        if (!$container->hasDefinition('ibrows_newsletter.block_provider_manager')) {
            return;
        }

        $definition = $container->getDefinition(
            'ibrows_newsletter.block_provider_manager'
        );

        $taggedServices = $container->findTaggedServiceIds(
            'ibrows_newsletter.block.provider'
        );

        foreach ($taggedServices as $id => $attributes) {
            $definition->addMethodCall(
                'addBlockProvider',
                array($id, new Reference($id))
            );
        }
    }
}
