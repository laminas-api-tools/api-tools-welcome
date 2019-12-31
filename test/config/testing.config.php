<?php

/**
 * @see       https://github.com/laminas-api-tools/api-tools-welcome for the canonical source repository
 * @copyright https://github.com/laminas-api-tools/api-tools-welcome/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas-api-tools/api-tools-welcome/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\ApiTools\Welcome;

return [
    'router' => [
        'routes' => [
            'api-tools' => [
                'type' => 'literal',
                'options' => [
                    'route' => '/laminastest-api-tools',
                ],
            ],
        ],
    ],
    'view_manager' => [
        'template_map' => [
            'layout/layout' => __DIR__ . '/../view/layout.phtml',
        ],
    ],
];
