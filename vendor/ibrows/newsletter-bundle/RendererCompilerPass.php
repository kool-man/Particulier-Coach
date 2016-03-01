<?php

namespace Ibrows\Bundle\NewsletterBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\Reference;

class RendererCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        // add all tagged renderers
        if (!$container->hasDefinition('ibrows_newsletter.renderer_manager')) {
            return;
        }

        $definition = $container->getDefinition(
            'ibrows_newsletter.renderer_manager'
        );

        $taggedServices = $container->findTaggedServiceIds(
            'ibrows_newsletter.renderer'
        );

        foreach ($taggedServices as $id => $attributes) {
            $definition->addMethodCall(
                'addRenderer',
                array($id, new Reference($id))
            );
        }

        // set correct gendertitle strategy
        if (!$container->hasDefinition('ibrows_newsletter.rendererbridge')) {
            return;
        }

        $definition = $container->getDefinition(
            'ibrows_newsletter.rendererbridge'
        );

        $genderTitleStrategyServiceId = $container->getParameter('ibrows_newsletter.serviceid.gendertitlestrategy');
        $definition->addArgument(new Reference($genderTitleStrategyServiceId));
    }
}
