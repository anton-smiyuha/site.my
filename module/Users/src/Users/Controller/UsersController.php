<?php
/**
 * Created by PhpStorm.
 * User: Антон
 * Date: 23.08.2015
 * Time: 14:34
 */

namespace Users\Controller;


use Users\Form\LoginForm;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class UsersController extends AbstractActionController
{
    public function loginAction(){
        $form = new LoginForm();

        return array('form' => $form);
    }

}