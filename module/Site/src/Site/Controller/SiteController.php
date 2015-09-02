<?php
/**
 * Created by PhpStorm.
 * User: Антон
 * Date: 21.08.2015
 * Time: 20:09
 */

namespace Site\Controller;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class SiteController extends AbstractActionController
{
    public function homeAction()
    {
        return new ViewModel();
    }

}