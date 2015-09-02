<?php

/**
 * Created by PhpStorm.
 * User: Антон
 * Date: 23.08.2015
 * Time: 19:37
 */

namespace Users\Form;

use Zend\Form\Form;
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;

class LoginForm extends Form
{
    public function __construct(){
        parent::__construct('login');
        $this->setAttribute('method', 'post');
        $this->setInputFilter(new FormInputFilter());

        $this->add(array(
            'name' => 'login',
            'type' => 'Text',
            'options' => array(
                'label' => 'Login',
            ),
            'attributes' => array(
                'class' => 'form_row',
            )
        ));

        $this->add(array(
            'name' => 'password',
            'type' => 'password',
            'options' => array(
                'label' => 'Password',
            ),
            'attributes' => array(
                'class' => 'form_row',
            )
        ));

        $this->add(array(
            'name' => 'submit',
            'type' => 'submit',
            'attributes' => array(
                'class' => 'form_submit',
                'value' => 'login',
            )
        ));

    }
}