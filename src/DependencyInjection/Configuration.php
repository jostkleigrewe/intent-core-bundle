<?php
declare(strict_types = 1);

namespace Jostkleigrewe\IntentCoreBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{

    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('jostkleigrewe_intent_core');

        if (method_exists($treeBuilder, 'getRootNode')) {
            $rootNode = $treeBuilder->getRootNode();
        } else {
            // BC layer for symfony/config 4.1 and older
            $rootNode = $treeBuilder->root('amelia_intent_core', 'array');
        }

//        $organizeMigrationModes = $this->getOrganizeMigrationsModes();
//
//        $rootNode
//            ->children()
//                ->scalarNode('dir_name')->defaultValue('%kernel.root_dir%/DoctrineMigrations')->cannotBeEmpty()->end()
//                ->scalarNode('namespace')->defaultValue('Application\Migrations')->cannotBeEmpty()->end()
//                ->scalarNode('table_name')->defaultValue('migration_versions')->cannotBeEmpty()->end()
//                ->scalarNode('name')->defaultValue('Application Migrations')->end()
//                ->scalarNode('custom_template')->defaultValue(null)->end()
//                ->scalarNode('organize_migrations')->defaultValue(false)
//                    ->info('Organize migrations mode. Possible values are: "BY_YEAR", "BY_YEAR_AND_MONTH", false')
//                    ->validate()
//                        ->ifTrue(function ($v) use ($organizeMigrationModes) {
//                            if (false === $v) {
//                                return false;
//                            }
//
//                            if (is_string($v) && in_array(strtoupper($v), $organizeMigrationModes)) {
//                                return false;
//                            }
//
//                            return true;
//                        })
//                        ->thenInvalid('Invalid organize migrations mode value %s')
//                    ->end()
//                    ->validate()
//                        ->ifString()
//                            ->then(function ($v) {
//                                return constant('Doctrine\DBAL\Migrations\Configuration\Configuration::VERSIONS_ORGANIZATION_'.strtoupper($v));
//                            })
//                        ->end()
//                    ->end()
//            ->end()
//        ;

        return $treeBuilder;
    }

//
//    /**
//     * Find organize migrations modes for their names
//     *
//     * @return array
//     */
//    private function getOrganizeMigrationsModes()
//    {
//        $constPrefix = 'VERSIONS_ORGANIZATION_';
//        $prefixLen = strlen($constPrefix);
//        $refClass = new \ReflectionClass('Doctrine\DBAL\Migrations\Configuration\Configuration');
//        $constsArray = $refClass->getConstants();
//        $namesArray = array();
//
//        foreach ($constsArray as $key => $value) {
//            if (strpos($key, $constPrefix) === 0) {
//                $namesArray[] = substr($key, $prefixLen);
//            }
//        }
//
//        return $namesArray;
//    }
}
