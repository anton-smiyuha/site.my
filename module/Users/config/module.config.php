<?php
namespace Users;
return array(
    'doctrine' => array(
        'driver' => array(
            'users_entities' => array(
                'class' =>'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../src/Users/Entity')
            ),

            'orm_default' => array(
                'drivers' => array(
                    'Users\Entity' => 'users_entities'
                )
            )
        )
    ),
    'controllers' => array(
        'invokables' => array(
            'Users\Controller\Users' => 'Users\Controller\UsersController',
        ),
    ),


    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),


);