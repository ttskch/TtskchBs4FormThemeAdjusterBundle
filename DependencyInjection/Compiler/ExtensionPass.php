<?php

namespace Ttskch\Bs4FormThemeAdjusterBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class ExtensionPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        $coreThemePath = realpath(__DIR__ . '/../../Resources/views/Form');
        $container->getDefinition('twig.loader.native_filesystem')->addMethodCall('addPath', [$coreThemePath]);
    }
}
