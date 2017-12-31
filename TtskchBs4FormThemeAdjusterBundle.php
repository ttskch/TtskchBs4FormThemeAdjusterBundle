<?php

namespace Ttskch\Bs4FormThemeAdjusterBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Ttskch\Bs4FormThemeAdjusterBundle\DependencyInjection\Compiler\ExtensionPass;

class TtskchBs4FormThemeAdjusterBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new ExtensionPass());
    }
}
