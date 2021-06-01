<?php

namespace Laminas\ApiTools\Welcome;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class WelcomeController extends AbstractActionController
{
    public function welcomeAction()
    {
        $viewModel = new ViewModel();
        $viewModel->setTemplate('api-tools-welcome/welcome');

        return $viewModel;
    }

    public function redirectAction()
    {
        return $this->redirect()->toRoute('api-tools/welcome');
    }
}
