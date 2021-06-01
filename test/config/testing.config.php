<?php

declare(strict_types=1);

namespace LaminasTest\ApiTools\Welcome;

return [
    'router'       => [
        'routes' => [
            'api-tools' => [
                'type'    => 'literal',
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
