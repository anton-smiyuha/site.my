<?php/** * Created by PhpStorm. * User: ����� * Date: 23.08.2015 * Time: 20:22 */namespace Users\Form;use Zend\InputFilter\InputFilter;use Zend\Form\Form;class FormInputFilter extends InputFilter{    public function __construct(){        $this->add(array(            'name' => 'login',            'required' => true,            'validators' => array(                array(                    'name' => 'StringLength',                    'options' => array(                        'min' => 3,                        'max' => 32,                    ),                ),            ),            'filters' => array(                array('name' => 'StripTags'),                array('name' => 'StringTrim'),            ),        ));        $this->add(array(            'name' => 'password',            'required' => true,            'validators' => array(                array(                    'name' => 'StringLength',                    'options' => array(                        'min' => 8,                        'max' => 32,                    ),                ),            ),            'filters' => array(                array('name' => 'StripTags'),                array('name' => 'StringTrim'),            ),        ));    }}