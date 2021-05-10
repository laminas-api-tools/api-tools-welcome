<?php

namespace LaminasTest\ApiTools\Welcome;

use Laminas\ApiTools\Welcome\WelcomeController;
use Laminas\Mvc\Application;
use Laminas\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;

class WelcomeControllerTest extends AbstractHttpControllerTestCase
{
    protected function setUp()
    {
        $config = [
            'modules' => [
                'Laminas\ApiTools\Welcome',
            ],
            'module_listener_options' => [
                'config_glob_paths' => [
                    __DIR__ . '/config/testing.config.php',
                ],
            ],
        ];

        $r = (new \ReflectionClass(Application::class))->getConstructor();
        $appVersion = $r->getNumberOfRequiredParameters() === 2 ? 2 : 3;

        if ($appVersion === 3) {
            array_unshift($config['modules'], 'Laminas\Router');
        }

        $this->setApplicationConfig($config);

        parent::setUp();
    }

    public function testRedirect()
    {
        $this->dispatch('/laminastest-api-tools');

        $this->assertRedirect();
        $this->assertRedirectTo('/laminastest-api-tools/welcome');
        $this->assertResponseStatusCode(302);
        $this->assertControllerName(WelcomeController::class);
        $this->assertControllerClass('WelcomeController');
        $this->assertActionName('redirect');
        $this->assertMatchedRouteName('api-tools');
    }

    public function testWelcome()
    {
        $this->dispatch('/laminastest-api-tools/welcome');

        $this->assertNotRedirect();
        $this->assertResponseStatusCode(200);
        $this->assertControllerName(WelcomeController::class);
        $this->assertControllerClass('WelcomeController');
        $this->assertActionName('welcome');
        $this->assertMatchedRouteName('api-tools/welcome');

        $this->assertQuery('.hero');
    }
}
