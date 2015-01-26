<?php

namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class CRUDController extends AbstractActionController
{

    public function indexAction()
    {
        $view = new ViewModel();
        
        return $view;
    }


}

