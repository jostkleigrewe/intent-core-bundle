<?php
declare(strict_types = 1);

namespace Jostkleigrewe\IntentCoreBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class AmeliaIntentCoreExtension extends Extension
{
    /**
     * Responds to the migrations configuration parameter.
     *
     * @param array            $configs
     * @param ContainerBuilder $container
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();

        $config = $this->processConfiguration($configuration, $configs);

        foreach ($config as $key => $value) {
            $container->setParameter($this->getAlias().'.'.$key, $value);
        }

        $locator = new FileLocator(__DIR__ . '/../../config/');
        $loader  = new XmlFileLoader($container, $locator);

        $loader->load('services.xml');
    }

//    /**
//     * Returns the base path for the XSD files.
//     *
//     * @return string The XSD base path
//     */
//    public function getXsdValidationBasePath()
//    {
//        return __DIR__.'/../Resources/config/schema';
//    }
//
//    public function getNamespace()
//    {
//        return 'http://symfony.com/schema/dic/doctrine/migrations';
//    }
}
