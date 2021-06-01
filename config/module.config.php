<?php

declare(strict_types=1);

namespace Laminas\ApiTools\Welcome;

use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'asset_manager' => [
        'resolver_configs' => [
            'paths' => [
                __DIR__ . '/../asset',
            ],
        ],
    ],
    'router'        => [
        'routes' => [
            'api-tools' => [
                'may_terminate' => true,
                'options'       => [
                    'defaults' => [
                        'controller' => WelcomeController::class,
                        'action'     => 'redirect',
                    ],
                ],
                'child_routes'  => [
                    'welcome' => [
                        'type'    => 'literal',
                        'options' => [
                            'route'    => '/welcome',
                            'defaults' => [
                                'controller' => WelcomeController::class,
                                'action'     => 'welcome',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'controllers'   => [
        // Legacy Zend Framework aliases
        'aliases'   => [
            \ZF\Apigility\Welcome\WelcomeController::class => WelcomeController::class,
        ],
        'factories' => [
            WelcomeController::class => InvokableFactory::class,
        ],
    ],
    'view_manager'  => [
        'template_path_stack' => [
            'api-tools-welcome' => __DIR__ . '/../view',
        ],
    ],
];
