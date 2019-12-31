<?php

/**
 * @see       https://github.com/laminas-api-tools/api-tools-welcome for the canonical source repository
 * @copyright https://github.com/laminas-api-tools/api-tools-welcome/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas-api-tools/api-tools-welcome/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\ApiTools\Welcome;

class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}
