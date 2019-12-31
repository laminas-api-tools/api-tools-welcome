<?php

/**
 * @see       https://github.com/laminas-api-tools/api-tools-welcome for the canonical source repository
 * @copyright https://github.com/laminas-api-tools/api-tools-welcome/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas-api-tools/api-tools-welcome/blob/master/LICENSE.md New BSD License
 */

return array(
    'asset_manager' => array(
        'resolver_configs' => array(
            'paths' => array(
                __DIR__ . '/../asset',
            ),
        ),
    ),
    'router' => array(
        'routes' => array(
            'api-tools' => array(
                'may_terminate' => true,
                'options' => array(
                    'defaults' => array(
                        'controller' => 'Laminas\ApiTools\Welcome',
                        'action'     => 'redirect',
                    ),
                ),
                'child_routes' => array(
                    'welcome' => array(
                        'type' => 'Laminas\Mvc\Router\Http\Literal',
                        'options' => array(
                            'route'    => '/welcome',
                            'defaults' => array(
                                'controller' => 'Laminas\ApiTools\Welcome',
                                'action'     => 'welcome',
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Laminas\ApiTools\Welcome' => 'Laminas\ApiTools\Welcome\WelcomeController'
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'api-tools-welcome' => __DIR__ . '/../view',
        ),
    ),
);
