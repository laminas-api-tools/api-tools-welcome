<?php

/**
 * @see       https://github.com/laminas-api-tools/api-tools-welcome for the canonical source repository
 * @copyright https://github.com/laminas-api-tools/api-tools-welcome/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas-api-tools/api-tools-welcome/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\ApiTools\Welcome;

use Laminas\ModuleManager\Feature\AutoloaderProviderInterface;
use Laminas\ModuleManager\Feature\ConfigProviderInterface;

class Module implements AutoloaderProviderInterface, ConfigProviderInterface
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Laminas\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/',
                ),
            ),
        );
    }
}
