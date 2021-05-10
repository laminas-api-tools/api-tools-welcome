<?php

namespace Laminas\ApiTools\Welcome;

class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}
