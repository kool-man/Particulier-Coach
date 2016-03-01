<?php

namespace Ibrows\Bundle\NewsletterBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\Reference;

class MailerServiceCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        $definition = $container->getDefinition('ibrows_newsletter.mailer');

        $encryptionServiceId = $container->getParameter('ibrows_newsletter.serviceid.encryptionadapter');
        $definition->addArgument(new Reference($encryptionServiceId));
    }
}
