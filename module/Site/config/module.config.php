<?php

return array(
    'controllers' => array(
        'invokables' => array(
            'Site\Controller\Site' => 'Site\Controller\SiteController',
        ),
    ),



    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),

);