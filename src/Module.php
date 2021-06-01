<?php

declare(strict_types=1);

namespace Laminas\ApiTools\Welcome;

class Module
{
    /**
     * @return array<string, mixed>
     */
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}
