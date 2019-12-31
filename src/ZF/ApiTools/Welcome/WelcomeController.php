<?php

/**
 * @see       https://github.com/laminas-api-tools/api-tools-welcome for the canonical source repository
 * @copyright https://github.com/laminas-api-tools/api-tools-welcome/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas-api-tools/api-tools-welcome/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\ApiTools\Welcome;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class WelcomeController extends AbstractActionController
{
    public function welcomeAction()
    {
        $viewModel = new ViewModel();
        $viewModel->setTemplate('api-tools-welcome/welcome/welcome');
        $viewModel->setTerminal(true);
        return $viewModel;
    }
}
